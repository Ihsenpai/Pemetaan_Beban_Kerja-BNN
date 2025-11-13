<?php

namespace App\Livewire\Admin;

use App\Models\Pegawai;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

#[Layout('livewire.layouts.app')]
class PegawaiManagement extends Component
{
    use WithPagination;

    public $search = '';
    public $showModal = false;
    public $showDeleteModal = false;
    public $isEdit = false;
    public $pegawaiToDelete = null;
    public $showPasswordField = false;

    // Form properties using form object
    public $form = [
        'nip' => '',
        'name' => '',
        'email' => '',
        'jabatan' => '',
        'jenis_pegawai' => 'PNS',
        'password' => '',
        'is_active' => true,
    ];

    protected $rules = [
        'form.nip' => 'required|string|max:255',
        'form.name' => 'required|string|max:255',
        'form.email' => 'required|email|max:255',
        'form.jabatan' => 'required|string|max:255',
        'form.jenis_pegawai' => 'required|in:PNS,PPPK,Kontrak',
        'form.password' => 'nullable|min:6',
    ];

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function create()
    {
        $this->resetForm();
        $this->isEdit = false;
        $this->showModal = true;
    }

    public function edit($id)
    {
        $pegawai = Pegawai::where('nip', $id)->firstOrFail();
        
        $this->form = [
            'nip' => $pegawai->nip,
            'name' => $pegawai->name,
            'email' => $pegawai->email,
            'jabatan' => $pegawai->jabatan,
            'jenis_pegawai' => $pegawai->jenis_pegawai,
            'password' => '',
            'is_active' => true,
        ];
        
        $this->isEdit = true;
        $this->showModal = true;
        $this->showPasswordField = false;
    }

    public function closeModal()
    {
        $this->showModal = false;
        $this->resetForm();
    }

    public function resetForm()
    {
        $this->form = [
            'nip' => '',
            'name' => '',
            'email' => '',
            'jabatan' => '',
            'jenis_pegawai' => 'PNS',
            'password' => '',
            'is_active' => true,
        ];
        $this->showPasswordField = false;
        $this->resetErrorBag();
    }

    public function confirmDelete($id)
    {
        $this->pegawaiToDelete = $id;
        $this->showDeleteModal = true;
    }

    public function save()
    {
        $rules = $this->rules;
        
        if ($this->isEdit) {
            $rules['form.nip'] = 'required|string|max:255|unique:pegawais,nip,' . $this->form['nip'] . ',nip';
            $rules['form.email'] = 'required|email|max:255|unique:pegawais,email,' . $this->form['nip'] . ',nip';
            if (empty($this->form['password'])) {
                unset($rules['form.password']);
            }
        } else {
            $rules['form.nip'] = 'required|string|max:255|unique:pegawais,nip';
            $rules['form.email'] = 'required|email|max:255|unique:pegawais,email';
            $rules['form.password'] = 'required|min:6';
        }

        $this->validate($rules);

        $data = [
            'nip' => $this->form['nip'],
            'name' => $this->form['name'],
            'email' => $this->form['email'],
            'jabatan' => $this->form['jabatan'],
            'jenis_pegawai' => $this->form['jenis_pegawai'],
            'role' => 'pegawai',
        ];

        if (!empty($this->form['password'])) {
            $data['password'] = Hash::make($this->form['password']);
        }

        if ($this->isEdit) {
            $pegawai = Pegawai::where('nip', $this->form['nip'])->first();
            if ($pegawai) {
                $pegawai->update($data);
                session()->flash('success', 'Data pegawai berhasil diperbarui!');
            }
        } else {
            Pegawai::create($data);
            session()->flash('success', 'Data pegawai berhasil ditambahkan!');
        }

        $this->closeModal();
    }

    public function delete()
    {
        if ($this->pegawaiToDelete) {
            try {
                Pegawai::where('nip', $this->pegawaiToDelete)->delete();
                session()->flash('success', 'Data pegawai berhasil dihapus!');
            } catch (\Exception $e) {
                session()->flash('error', 'Gagal menghapus data pegawai. Mungkin masih ada data terkait.');
            }
        }
        
        $this->showDeleteModal = false;
        $this->pegawaiToDelete = null;
    }

    public function render()
    {
        $pegawais = Pegawai::when($this->search, function ($query) {
            $query->where('name', 'like', '%' . $this->search . '%')
                  ->orWhere('nip', 'like', '%' . $this->search . '%')
                  ->orWhere('email', 'like', '%' . $this->search . '%');
        })
        ->orderBy('name')
        ->paginate(10);

        return view('livewire.admin.pegawai-management', [
            'pegawais' => $pegawais
        ]);
    }
}