<?php

namespace App\Livewire\Admin;

use App\Models\KotakSaran;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

#[Layout('livewire.layouts.app')]
class KotakSaranManagement extends Component
{
    use WithPagination;

    public $search = '';
    public $filterFormType = 'all';
    public $filterStatus = 'all';
    public $showDeleteModal = false;
    public $saranToDelete = null;

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function updatedFilterFormType()
    {
        $this->resetPage();
    }

    public function updatedFilterStatus()
    {
        $this->resetPage();
    }

    public function confirmDelete($id)
    {
        $this->saranToDelete = $id;
        $this->showDeleteModal = true;
    }

    public function delete()
    {
        if ($this->saranToDelete) {
            try {
                KotakSaran::findOrFail($this->saranToDelete)->delete();
                session()->flash('success', 'Kotak saran berhasil dihapus!');
            } catch (\Exception $e) {
                session()->flash('error', 'Gagal menghapus kotak saran.');
            }
        }
        
        $this->showDeleteModal = false;
        $this->saranToDelete = null;
    }

    public function toggleStatus($id)
    {
        try {
            $saran = KotakSaran::findOrFail($id);
            $saran->status = $saran->status === 'pending' ? 'reviewed' : 'pending';
            $saran->save();
            
            session()->flash('success', 'Status kotak saran berhasil diubah!');
        } catch (\Exception $e) {
            session()->flash('error', 'Gagal mengubah status kotak saran.');
        }
    }

    public function render()
    {
        $kotakSaran = KotakSaran::query()
            ->when($this->search, function ($query) {
                $query->where('saran', 'like', '%' . $this->search . '%');
            })
            ->when($this->filterFormType !== 'all', function ($query) {
                $query->where('form_type', $this->filterFormType);
            })
            ->when($this->filterStatus !== 'all', function ($query) {
                $query->where('status', $this->filterStatus);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('livewire.admin.kotak-saran-management', [
            'kotakSaran' => $kotakSaran,
            'totalSaran' => KotakSaran::count(),
            'pendingCount' => KotakSaran::where('status', 'pending')->count(),
            'reviewedCount' => KotakSaran::where('status', 'reviewed')->count(),
        ]);
    }
}
