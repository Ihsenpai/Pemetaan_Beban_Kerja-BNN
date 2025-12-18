<?php

namespace App\Livewire\Admin;

use App\Models\Katim;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

#[Layout('livewire.layouts.app')]
class KatimManagement extends Component
{
    use WithPagination;

    public $search = '';
    public $showModal = false;
    public $showDeleteModal = false;
    public $isEdit = false;
    public $katimToDelete = null;
    public $showPasswordField = false;
    public $selectedPegawaiNip = ''; // For selecting pegawai to copy data from

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
        'form.jenis_pegawai' => 'required|in:PNS,PPNPN,PPPK,Kontrak',
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

    public function updatedSelectedPegawaiNip($nip)
    {
        if ($nip && $nip !== '') {
            $pegawai = Pegawai::where('nip', $nip)->first();
            
            if ($pegawai) {
                // Auto-fill form with pegawai data, except jabatan (will be filled manually)
                $this->form['nip'] = $pegawai->nip;
                $this->form['name'] = $pegawai->name;
                $this->form['email'] = $pegawai->email;
                $this->form['jenis_pegawai'] = $pegawai->jenis_pegawai;
                // Don't fill jabatan - it will be filled manually by admin for katim position
                
                // Clear any existing errors for these fields
                $this->resetErrorBag(['form.nip', 'form.name', 'form.email', 'form.jenis_pegawai']);
            }
        } else {
            // If deselected, clear the form
            $this->form['nip'] = '';
            $this->form['name'] = '';
            $this->form['email'] = '';
            $this->form['jenis_pegawai'] = 'PNS';
        }
    }

    public function edit($id)
    {
        $katim = Katim::findOrFail($id);
        
        $this->form = [
            'nip' => $katim->nip,
            'name' => $katim->name,
            'email' => $katim->email,
            'jabatan' => $katim->jabatan,
            'jenis_pegawai' => $katim->jenis_pegawai,
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
        $this->selectedPegawaiNip = '';
        $this->showPasswordField = false;
        $this->resetErrorBag();
    }

    public function confirmDelete($id)
    {
        $this->katimToDelete = $id;
        $this->showDeleteModal = true;
    }

    public function save()
    {
        $rules = $this->rules;
        
        if ($this->isEdit) {
            $katim = Katim::where('nip', $this->form['nip'])->first();
            if ($katim) {
                $rules['form.nip'] = 'required|string|max:255|unique:katims,nip,' . $katim->id;
                $rules['form.email'] = 'required|email|max:255|unique:katims,email,' . $katim->id;
            }
            if (empty($this->form['password'])) {
                unset($rules['form.password']);
            }
        } else {
            $rules['form.nip'] = 'required|string|max:255|unique:katims,nip|exists:pegawais,nip';
            $rules['form.email'] = 'required|email|max:255|unique:katims,email';
            $rules['form.password'] = 'required|min:6';
        }

        $this->validate($rules);

        $data = [
            'nip' => $this->form['nip'],
            'name' => $this->form['name'],
            'email' => $this->form['email'],
            'jabatan' => $this->form['jabatan'],
            'jenis_pegawai' => $this->form['jenis_pegawai'],
            'role' => 'katim',
        ];

        if (!empty($this->form['password'])) {
            $data['password'] = Hash::make($this->form['password']);
        }

        if ($this->isEdit) {
            $katim = Katim::where('nip', $this->form['nip'])->first();
            if ($katim) {
                $katim->update($data);
                session()->flash('success', 'Data ketua tim berhasil diperbarui!');
            }
        } else {
            Katim::create($data);
            session()->flash('success', 'Data ketua tim berhasil ditambahkan!');
        }

        $this->closeModal();
    }

    public function delete()
    {
        if ($this->katimToDelete) {
            try {
                Katim::findOrFail($this->katimToDelete)->delete();
                session()->flash('success', 'Data ketua tim berhasil dihapus!');
            } catch (\Exception $e) {
                session()->flash('error', 'Gagal menghapus data ketua tim. Mungkin masih ada data terkait.');
            }
        }
        
        $this->showDeleteModal = false;
        $this->katimToDelete = null;
    }

    public function render()
    {
        $katims = Katim::when($this->search, function ($query) {
            $query->where('name', 'like', '%' . $this->search . '%')
                  ->orWhere('nip', 'like', '%' . $this->search . '%')
                  ->orWhere('email', 'like', '%' . $this->search . '%');
        })
        ->orderBy('name')
        ->paginate(10);

        // Get all pegawai for dropdown selection
        $allPegawai = Pegawai::orderBy('name')->get();

        return view('livewire.admin.katim-management', [
            'katims' => $katims,
            'allPegawai' => $allPegawai
        ]);
    }
}