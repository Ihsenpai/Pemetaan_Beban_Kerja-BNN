<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use App\Models\Pegawai;
use App\Models\Katim;
use App\Models\Pimpinan;
use Livewire\Component;
use Livewire\WithPagination;

class UserMonitoring extends Component
{
    use WithPagination;

    public $search = '';
    public $selectedRole = 'all';
    public $perPage = 10;

    protected $queryString = [
        'search' => ['except' => ''],
        'selectedRole' => ['except' => 'all'],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingSelectedRole()
    {
        $this->resetPage();
    }

    public function render()
    {
        $users = collect();

        // Get all users based on selected role
        if ($this->selectedRole === 'all' || $this->selectedRole === 'admin') {
            $admins = Admin::when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                      ->orWhere('email', 'like', '%' . $this->search . '%');
            })->get()->map(function ($admin) {
                return (object) [
                    'id' => $admin->id,
                    'name' => $admin->name,
                    'email' => $admin->email,
                    'role' => 'Admin',
                    'role_class' => 'admin',
                    'nip' => '-',
                    'jabatan' => $admin->role ?? 'Administrator',
                    'is_active' => true,
                    'created_at' => $admin->created_at,
                    'last_login' => $admin->updated_at,
                ];
            });
            $users = $users->merge($admins);
        }

        if ($this->selectedRole === 'all' || $this->selectedRole === 'pegawai') {
            $pegawais = Pegawai::when($this->search, function ($query) {
                $query->where('nama', 'like', '%' . $this->search . '%')
                      ->orWhere('email', 'like', '%' . $this->search . '%')
                      ->orWhere('nip', 'like', '%' . $this->search . '%');
            })->get()->map(function ($pegawai) {
                return (object) [
                    'id' => $pegawai->id,
                    'name' => $pegawai->nama,
                    'email' => $pegawai->email,
                    'role' => 'Pegawai',
                    'role_class' => 'pegawai',
                    'nip' => $pegawai->nip,
                    'jabatan' => $pegawai->jabatan,
                    'is_active' => $pegawai->is_active,
                    'created_at' => $pegawai->created_at,
                    'last_login' => $pegawai->updated_at,
                ];
            });
            $users = $users->merge($pegawais);
        }

        if ($this->selectedRole === 'all' || $this->selectedRole === 'katim') {
            $katims = Katim::when($this->search, function ($query) {
                $query->where('nama', 'like', '%' . $this->search . '%')
                      ->orWhere('email', 'like', '%' . $this->search . '%')
                      ->orWhere('nip', 'like', '%' . $this->search . '%')
                      ->orWhere('katim_id', 'like', '%' . $this->search . '%');
            })->get()->map(function ($katim) {
                return (object) [
                    'id' => $katim->id,
                    'name' => $katim->nama,
                    'email' => $katim->email,
                    'role' => 'Ketua Tim',
                    'role_class' => 'katim',
                    'nip' => $katim->nip,
                    'jabatan' => $katim->jabatan,
                    'is_active' => $katim->is_active,
                    'created_at' => $katim->created_at,
                    'last_login' => $katim->updated_at,
                    'katim_id' => $katim->katim_id,
                ];
            });
            $users = $users->merge($katims);
        }

        if ($this->selectedRole === 'all' || $this->selectedRole === 'pimpinan') {
            $pimpinans = Pimpinan::when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                      ->orWhere('email', 'like', '%' . $this->search . '%')
                      ->orWhere('nip', 'like', '%' . $this->search . '%');
            })->get()->map(function ($pimpinan) {
                return (object) [
                    'id' => $pimpinan->id,
                    'name' => $pimpinan->name,
                    'email' => $pimpinan->email,
                    'role' => 'Pimpinan',
                    'role_class' => 'pimpinan',
                    'nip' => $pimpinan->nip,
                    'jabatan' => $pimpinan->jabatan,
                    'is_active' => true,
                    'created_at' => $pimpinan->created_at,
                    'last_login' => $pimpinan->updated_at,
                ];
            });
            $users = $users->merge($pimpinans);
        }

        // Sort by created_at desc
        $users = $users->sortByDesc('created_at');

        // Manual pagination
        $currentPage = request()->get('page', 1);
        $offset = ($currentPage - 1) * $this->perPage;
        $itemsForCurrentPage = $users->slice($offset, $this->perPage);
        
        $paginatedUsers = new \Illuminate\Pagination\LengthAwarePaginator(
            $itemsForCurrentPage,
            $users->count(),
            $this->perPage,
            $currentPage,
            [
                'path' => request()->url(),
                'pageName' => 'page',
            ]
        );

        return view('livewire.admin.user-monitoring', [
            'users' => $paginatedUsers,
            'totalUsers' => $users->count(),
        ]);
    }
}