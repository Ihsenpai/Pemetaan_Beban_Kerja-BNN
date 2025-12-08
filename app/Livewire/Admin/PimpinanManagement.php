<?php

namespace App\Livewire\Admin;

use App\Models\Pimpinan;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

#[Layout('livewire.layouts.app')]
class PimpinanManagement extends Component
{
    use WithPagination;

    public $form = [
        'nip' => '',
        'name' => '',
        'email' => '',
        'jabatan' => '',
        'role' => '',
        'password' => '',
    ];

    public $isEditing = false;
    public $editingPimpinanNip = null;
    public $showModal = false;
    public $showDeleteModal = false;
    public $pimpinanToDelete = null;
    public $search = '';
    public $perPage = 10;

    protected $paginationTheme = 'tailwind';

    public function rules()
    {
        return [
            'form.nip' => [
                'required',
                'string',
                'max:20',
                $this->isEditing 
                    ? Rule::unique('pimpinans', 'nip')->ignore($this->editingPimpinanNip, 'nip')
                    : Rule::unique('pimpinans', 'nip')
            ],
            'form.name' => 'required|string|max:255',
            'form.email' => [
                'required',
                'email',
                'max:255',
                $this->isEditing 
                    ? Rule::unique('pimpinans', 'email')->ignore($this->editingPimpinanNip, 'nip')
                    : Rule::unique('pimpinans', 'email')
            ],
            'form.jabatan' => 'required|string|max:255',
            'form.role' => 'required|string|in:kepala,wakil_kepala,sekretaris,kepala_bidang',
            'form.password' => $this->isEditing ? 'nullable|string|min:8' : 'required|string|min:8',
        ];
    }

    public function create()
    {
        $this->reset(['form', 'isEditing', 'editingPimpinanNip']);
        $this->showModal = true;
    }

    public function edit($nip)
    {
        $pimpinan = Pimpinan::where('nip', $nip)->firstOrFail();
        
        $this->form = [
            'nip' => $pimpinan->nip,
            'name' => $pimpinan->name,
            'email' => $pimpinan->email,
            'jabatan' => $pimpinan->jabatan,
            'role' => $pimpinan->role,
            'password' => '',
        ];
        
        $this->isEditing = true;
        $this->editingPimpinanNip = $nip;
        $this->showModal = true;
    }

    public function save()
    {
        $this->validate();

        try {
            if ($this->isEditing) {
                $pimpinan = Pimpinan::where('nip', $this->editingPimpinanNip)->firstOrFail();
                
                $data = [
                    'nip' => $this->form['nip'],
                    'name' => $this->form['name'],
                    'email' => $this->form['email'],
                    'jabatan' => $this->form['jabatan'],
                    'role' => $this->form['role'],
                ];

                if (!empty($this->form['password'])) {
                    $data['password'] = Hash::make($this->form['password']);
                }

                $pimpinan->update($data);
                session()->flash('success', 'Data pimpinan berhasil diperbarui.');
            } else {
                Pimpinan::create([
                    'nip' => $this->form['nip'],
                    'name' => $this->form['name'],
                    'email' => $this->form['email'],
                    'jabatan' => $this->form['jabatan'],
                    'role' => $this->form['role'],
                    'password' => Hash::make($this->form['password']),
                ]);
                session()->flash('success', 'Data pimpinan berhasil ditambahkan.');
            }

            $this->closeModal();
            $this->resetPage();
        } catch (\Exception $e) {
            session()->flash('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function confirmDelete($nip)
    {
        $this->pimpinanToDelete = $nip;
        $this->showDeleteModal = true;
    }

    public function delete()
    {
        try {
            if ($this->pimpinanToDelete) {
                Pimpinan::where('nip', $this->pimpinanToDelete)->delete();
                session()->flash('success', 'Data pimpinan berhasil dihapus.');
                $this->resetPage();
            }
        } catch (\Exception $e) {
            session()->flash('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        $this->closeDeleteModal();
    }

    public function closeModal()
    {
        $this->showModal = false;
        $this->reset(['form', 'isEditing', 'editingPimpinanNip']);
        $this->resetValidation();
    }

    public function closeDeleteModal()
    {
        $this->showDeleteModal = false;
        $this->pimpinanToDelete = null;
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $pimpinans = Pimpinan::when($this->search, function($query) {
            $query->where(function($q) {
                $q->where('name', 'like', '%' . $this->search . '%')
                  ->orWhere('nip', 'like', '%' . $this->search . '%')
                  ->orWhere('email', 'like', '%' . $this->search . '%')
                  ->orWhere('jabatan', 'like', '%' . $this->search . '%');
            });
        })
        ->orderBy('created_at', 'desc')
        ->paginate($this->perPage);

        return view('livewire.admin.pimpinan-management', [
            'pimpinans' => $pimpinans
        ]);
    }
}