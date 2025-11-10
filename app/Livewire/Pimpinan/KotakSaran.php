<?php

namespace App\Livewire\Pimpinan;

use App\Models\KotakSaran as KotakSaranModel;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Carbon\Carbon;

#[Layout('livewire.layouts.app')]
class KotakSaran extends Component
{
    use WithPagination;

    public $searchTerm = '';
    public $filterType = 'all'; // 'all', 'p4gn', 'dukungan', 'rekan_kerja_1', 'rekan_kerja_2'
    public $statusFilter = 'all'; // 'all', 'pending', 'reviewed'
    public $sortBy = 'created_at';
    public $sortDirection = 'desc';

    public function updatedSearchTerm()
    {
        $this->resetPage();
    }

    public function updatedFilterType()
    {
        $this->resetPage();
    }

    public function updatedStatusFilter()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortBy === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $field;
            $this->sortDirection = 'asc';
        }
        $this->resetPage();
    }

    public function markAsReviewed($id)
    {
        try {
            $kotak = KotakSaranModel::findOrFail($id);
            $kotak->markAsReviewed();

            // Emit success message using Livewire flash
            $this->dispatch('saran-updated');
            session()->flash('success', 'Saran berhasil ditandai sebagai sudah direview.');
            
        } catch (\Exception $e) {
            session()->flash('error', 'Gagal mengupdate status saran.');
        }
    }

    public function markAsPending($id)
    {
        try {
            $kotak = KotakSaranModel::findOrFail($id);
            $kotak->markAsPending();

            // Emit success message using Livewire flash
            $this->dispatch('saran-updated');
            session()->flash('success', 'Status saran berhasil diubah menjadi pending.');
            
        } catch (\Exception $e) {
            session()->flash('error', 'Gagal mengubah status saran.');
        }
    }

    public function getSaranData()
    {
        $query = KotakSaranModel::query();

        // Filter berdasarkan tipe form jika dipilih
        if ($this->filterType !== 'all') {
            $query->byFormType($this->filterType);
        }

        // Filter berdasarkan status
        if ($this->statusFilter !== 'all') {
            $query->byStatus($this->statusFilter);
        }

        // Search jika ada
        if ($this->searchTerm) {
            $query->search($this->searchTerm);
        }

        // Sort data
        if ($this->sortBy === 'created_at') {
            $query->orderBy('created_at', $this->sortDirection);
        } elseif ($this->sortBy === 'user_name') {
            $query->orderBy('user_name', $this->sortDirection);
        }

        return $query->paginate(10);
    }

    public function getStatistics()
    {
        return KotakSaranModel::getStatistics();
    }

    public function render()
    {
        $saranData = $this->getSaranData();
        $statistics = $this->getStatistics();
        
        return view('livewire.pimpinan.kotak-saran', [
            'saranData' => $saranData,
            'statistics' => $statistics,
        ]);
    }

    // Event listener untuk refresh data ketika ada update
    protected $listeners = ['saran-updated' => '$refresh'];
}