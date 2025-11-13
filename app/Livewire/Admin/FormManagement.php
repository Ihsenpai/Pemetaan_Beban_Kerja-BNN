<?php

namespace App\Livewire\Admin;

use App\Models\P4gnForm;
use App\Models\DukunganForm;
use App\Models\KatimEvaluation;
use App\Models\RekanKerja1Evaluation;
use App\Models\RekanKerja2Evaluation;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

#[Layout('livewire.layouts.app')]
class FormManagement extends Component
{
    use WithPagination;

    public $selectedFormType = 'all';
    public $search = '';
    public $perPage = 10;

    protected $queryString = [
        'search' => ['except' => ''],
        'selectedFormType' => ['except' => 'all'],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingSelectedFormType()
    {
        $this->resetPage();
    }

    public function deleteForm($type, $id)
    {
        try {
            switch ($type) {
                case 'p4gn':
                    P4gnForm::findOrFail($id)->delete();
                    break;
                case 'dukungan':
                    DukunganForm::findOrFail($id)->delete();
                    break;
                case 'katim_evaluation':
                    KatimEvaluation::findOrFail($id)->delete();
                    break;
                case 'rekan_kerja_1':
                    RekanKerja1Evaluation::findOrFail($id)->delete();
                    break;
                case 'rekan_kerja_2':
                    RekanKerja2Evaluation::findOrFail($id)->delete();
                    break;
            }
            session()->flash('success', 'Data form berhasil dihapus!');
        } catch (\Exception $e) {
            session()->flash('error', 'Gagal menghapus data form.');
        }
    }

    public function render()
    {
        $forms = collect();

        // Get all forms based on selected type
        if ($this->selectedFormType === 'all' || $this->selectedFormType === 'p4gn') {
            $p4gnForms = P4gnForm::with('pegawai')
                ->when($this->search, function ($query) {
                    $query->whereHas('pegawai', function ($q) {
                        $q->where('name', 'like', '%' . $this->search . '%')
                          ->orWhere('nip', 'like', '%' . $this->search . '%');
                    });
                })->get()->map(function ($form) {
                    return (object) [
                        'id' => $form->id,
                        'type' => 'p4gn',
                        'type_label' => 'Form P4GN',
                        'user_name' => $form->pegawai->name ?? 'N/A',
                        'user_nip' => $form->pegawai->nip ?? 'N/A',
                        'created_at' => $form->created_at,
                        'updated_at' => $form->updated_at,
                        'status' => 'Completed',
                    ];
                });
            $forms = $forms->merge($p4gnForms);
        }

        if ($this->selectedFormType === 'all' || $this->selectedFormType === 'dukungan') {
            $dukunganForms = DukunganForm::with('pegawai')
                ->when($this->search, function ($query) {
                    $query->whereHas('pegawai', function ($q) {
                        $q->where('name', 'like', '%' . $this->search . '%')
                          ->orWhere('nip', 'like', '%' . $this->search . '%');
                    });
                })->get()->map(function ($form) {
                    return (object) [
                        'id' => $form->id,
                        'type' => 'dukungan',
                        'type_label' => 'Form Dukungan',
                        'user_name' => $form->pegawai->name ?? 'N/A',
                        'user_nip' => $form->pegawai->nip ?? 'N/A',
                        'created_at' => $form->created_at,
                        'updated_at' => $form->updated_at,
                        'status' => 'Completed',
                    ];
                });
            $forms = $forms->merge($dukunganForms);
        }

        if ($this->selectedFormType === 'all' || $this->selectedFormType === 'katim_evaluation') {
            $katimEvals = KatimEvaluation::with('pegawai')
                ->when($this->search, function ($query) {
                    $query->whereHas('pegawai', function ($q) {
                        $q->where('name', 'like', '%' . $this->search . '%')
                          ->orWhere('nip', 'like', '%' . $this->search . '%');
                    });
                })->get()->map(function ($form) {
                    return (object) [
                        'id' => $form->id,
                        'type' => 'katim_evaluation',
                        'type_label' => 'Evaluasi Katim',
                        'user_name' => $form->pegawai->name ?? 'N/A',
                        'user_nip' => $form->pegawai->nip ?? 'N/A',
                        'created_at' => $form->created_at,
                        'updated_at' => $form->updated_at,
                        'status' => 'Completed',
                    ];
                });
            $forms = $forms->merge($katimEvals);
        }

        if ($this->selectedFormType === 'all' || $this->selectedFormType === 'rekan_kerja_1') {
            $rekanKerja1s = RekanKerja1Evaluation::with('evaluator')
                ->when($this->search, function ($query) {
                    $query->whereHas('evaluator', function ($q) {
                        $q->where('nama', 'like', '%' . $this->search . '%')
                          ->orWhere('katim_id', 'like', '%' . $this->search . '%');
                    });
                })->get()->map(function ($form) {
                    return (object) [
                        'id' => $form->id,
                        'type' => 'rekan_kerja_1',
                        'type_label' => 'Evaluasi Rekan Kerja 1',
                        'user_name' => $form->evaluator->nama ?? 'N/A',
                        'user_nip' => $form->evaluator->katim_id ?? 'N/A',
                        'created_at' => $form->created_at,
                        'updated_at' => $form->updated_at,
                        'status' => 'Completed',
                    ];
                });
            $forms = $forms->merge($rekanKerja1s);
        }

        if ($this->selectedFormType === 'all' || $this->selectedFormType === 'rekan_kerja_2') {
            $rekanKerja2s = RekanKerja2Evaluation::with('evaluator')
                ->when($this->search, function ($query) {
                    $query->whereHas('evaluator', function ($q) {
                        $q->where('nama', 'like', '%' . $this->search . '%')
                          ->orWhere('katim_id', 'like', '%' . $this->search . '%');
                    });
                })->get()->map(function ($form) {
                    return (object) [
                        'id' => $form->id,
                        'type' => 'rekan_kerja_2',
                        'type_label' => 'Evaluasi Rekan Kerja 2',
                        'user_name' => $form->evaluator->nama ?? 'N/A',
                        'user_nip' => $form->evaluator->katim_id ?? 'N/A',
                        'created_at' => $form->created_at,
                        'updated_at' => $form->updated_at,
                        'status' => 'Completed',
                    ];
                });
            $forms = $forms->merge($rekanKerja2s);
        }

        // Sort by created_at desc
        $forms = $forms->sortByDesc('created_at');

        // Manual pagination
        $currentPage = request()->get('page', 1);
        $offset = ($currentPage - 1) * $this->perPage;
        $itemsForCurrentPage = $forms->slice($offset, $this->perPage);
        
        $paginatedForms = new \Illuminate\Pagination\LengthAwarePaginator(
            $itemsForCurrentPage,
            $forms->count(),
            $this->perPage,
            $currentPage,
            [
                'path' => request()->url(),
                'pageName' => 'page',
            ]
        );

        return view('livewire.admin.form-management', [
            'forms' => $paginatedForms,
            'totalForms' => $forms->count(),
        ]);
    }
}