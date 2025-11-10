<?php

namespace App\Livewire\Pimpinan;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;
use App\Models\Pegawai;
use App\Models\P4gnForm;
use App\Models\DukunganForm;
use Carbon\Carbon;

#[Layout('livewire.layouts.app')]
class PegawaiList extends Component
{
    use WithPagination;

    public $userName;
    public $userRole;
    public $isLoggedIn = false;
    public $search = '';
    public $sortBy = 'name';
    public $sortDirection = 'asc';

    public function mount()
    {
        $this->checkAuth();
    }

    private function checkAuth()
    {
        // Check if user is logged in with pimpinan guard
        if (Auth::guard('pimpinan')->check()) {
            $this->isLoggedIn = true;
            $this->userName = Auth::guard('pimpinan')->user()->name;
            $this->userRole = 'pimpinan';
        } else {
            // Redirect if not authenticated as pimpinan
            return redirect()->route('login');
        }
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortBy === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }
        
        $this->sortBy = $field;
        $this->resetPage();
    }

    public function viewDetail($pegawaiNip)
    {
        return redirect()->route('pimpinan.pegawai.detail', ['nip' => $pegawaiNip]);
    }

    private function getPegawaiWithScores()
    {
        $currentPeriod = Carbon::now()->format('Y-m');
        
        $query = Pegawai::query()
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('name', 'like', '%' . $this->search . '%')
                      ->orWhere('nip', 'like', '%' . $this->search . '%')
                      ->orWhere('jabatan', 'like', '%' . $this->search . '%');
                });
            })
            ->orderBy($this->sortBy, $this->sortDirection);

        $pegawai = $query->paginate(10);

        // Add scores for each pegawai
        $pegawai->getCollection()->transform(function ($p) use ($currentPeriod) {
            $p4gnForm = P4gnForm::where('pegawai_nip', $p->nip)
                ->where('periode_penilaian', $currentPeriod)
                ->first();
            
            $dukunganForm = DukunganForm::where('pegawai_nip', $p->nip)
                ->where('periode_penilaian', $currentPeriod)
                ->first();

            $p->p4gn_score = $p4gnForm ? $p4gnForm->total_keseluruhan : 0;
            $p->dukungan_score = $dukunganForm ? $dukunganForm->total_keseluruhan : 0;
            $p->total_score = $p->p4gn_score + $p->dukungan_score;
            $p->p4gn_status = $p4gnForm ? 'Submitted' : 'Not Submitted';
            $p->dukungan_status = $dukunganForm ? 'Submitted' : 'Not Submitted';
            
            return $p;
        });

        return $pegawai;
    }

    public function render()
    {
        $pegawaiList = $this->getPegawaiWithScores();
        
        return view('livewire.pimpinan.pegawai-list', [
            'pegawaiList' => $pegawaiList,
            'currentPeriod' => Carbon::now()->format('Y-m')
        ]);
    }
}
