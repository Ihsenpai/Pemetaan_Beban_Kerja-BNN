<?php

namespace App\Livewire\Pimpinan;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Pegawai;
use App\Models\P4gnForm;
use App\Models\DukunganForm;
use App\Models\Katim;
use App\Models\KatimEvaluation;
use App\Models\RekanKerja1Evaluation;
use App\Models\RekanKerja2Evaluation;
use Carbon\Carbon;

#[Layout('livewire.layouts.app')]
class PegawaiDetail extends Component
{
    public $userName;
    public $userRole;
    public $isLoggedIn = false;
    public $pegawai;
    public $nip;

    public function mount($nip)
    {
        $this->checkAuth();
        $this->nip = $nip;
        $this->loadPegawaiData();
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

    private function loadPegawaiData()
    {
        $this->pegawai = Pegawai::where('nip', $this->nip)->firstOrFail();
    }

    private function getP4gnData()
    {
        $currentPeriod = Carbon::now()->format('Y-m');
        
        $p4gnForm = P4gnForm::where('pegawai_nip', $this->nip)
            ->where('periode_penilaian', $currentPeriod)
            ->first();

        if (!$p4gnForm) {
            return [
                'submitted' => false,
                'data' => []
            ];
        }

        return [
            'submitted' => true,
            'data' => [
                'Pencegahan' => $p4gnForm->total_pencegahan ?? 0,
                'Pemberdayaan' => $p4gnForm->total_pemberdayaan_masyarakat ?? 0,
                'Rehabilitasi' => $p4gnForm->total_rehabilitasi ?? 0,
                'Pemberantasan' => $p4gnForm->total_pemberantasan ?? 0,
            ],
            'total' => $p4gnForm->total_keseluruhan ?? 0,
            'catatan' => $p4gnForm->catatan,
            'tanggal' => $p4gnForm->created_at
        ];
    }

    private function getDukunganData()
    {
        $currentPeriod = Carbon::now()->format('Y-m');
        
        $dukunganForm = DukunganForm::where('pegawai_nip', $this->nip)
            ->where('periode_penilaian', $currentPeriod)
            ->first();

        if (!$dukunganForm) {
            return [
                'submitted' => false,
                'data' => []
            ];
        }

        return [
            'submitted' => true,
            'data' => [
                'Tata Usaha' => $dukunganForm->total_tata_usaha ?? 0,
                'Keuangan' => $dukunganForm->total_keuangan ?? 0,
                'Kerjasama' => $dukunganForm->total_kerjasama ?? 0,
                'Kehumasan' => $dukunganForm->total_kehumasan ?? 0,
                'Pembangunan ZI' => $dukunganForm->total_zi ?? 0, // This is text, not numeric
            ],
            'total' => $dukunganForm->total_keseluruhan ?? 0,
            'catatan' => $dukunganForm->catatan,
            'tanggal' => $dukunganForm->created_at
        ];
    }

    private function getKatimData()
    {
        $currentPeriod = Carbon::now()->format('Y-m');
        
        // Check if this pegawai is also a katim
        $katim = Katim::where('nip', $this->nip)->first();
        
        if (!$katim) {
            return null;
        }

        // Get the latest katim evaluation for this period
        $katimEvaluation = KatimEvaluation::where('katim_id', $katim->id)
            ->where('periode', $currentPeriod)
            ->latest()
            ->first();

        if (!$katimEvaluation) {
            return [
                'exists' => false,
                'katim' => $katim,
                'data' => [],
                'total' => 0,
                'tanggal' => null
            ];
        }

        return [
            'exists' => true,
            'katim' => $katim,
            'data' => [
                'Section A' => $katimEvaluation->total_section_a,
                'Section B' => $katimEvaluation->total_section_b,
                'Section C' => $katimEvaluation->total_section_c,
                'Section D' => $katimEvaluation->total_section_d,
            ],
            'total' => $katimEvaluation->total_keseluruhan,
            'tanggal' => $katimEvaluation->created_at
        ];
    }

    public function backToList()
    {
        return redirect()->route('pimpinan.pegawai.list');
    }

    private function getRekanKerjaData()
    {
        $currentPeriod = Carbon::now()->format('Y-m');
        
        // Get Rekan Kerja evaluations for this pegawai
        $evaluations = RekanKerja1Evaluation::where('pegawai_nip', $this->pegawai->nip)
            ->where('periode', $currentPeriod)
            ->with('katim')
            ->get();
        
        if ($evaluations->isEmpty()) {
            return [
                'hasData' => false,
                'averageScore' => 0,
                'totalEvaluations' => 0,
                'sectionAAverage' => 0,
                'sectionBAverage' => 0,
                'sectionCAverage' => 0,
                'evaluations' => collect()
            ];
        }
        
        return [
            'hasData' => true,
            'averageScore' => round($evaluations->avg('total_keseluruhan'), 2),
            'totalEvaluations' => $evaluations->count(),
            'sectionAAverage' => round($evaluations->avg('total_section_a'), 2),
            'sectionBAverage' => round($evaluations->avg('total_section_b'), 2),
            'sectionCAverage' => round($evaluations->avg('total_section_c'), 2),
            'evaluations' => $evaluations
        ];
    }

    private function getRekanKerja2Data()
    {
        $currentPeriod = Carbon::now()->format('Y-m');
        
        // Get Rekan Kerja 2 evaluations for this pegawai using snapshot data
        $evaluations = RekanKerja2Evaluation::where('pegawai_nama', $this->pegawai->name)
            ->where('periode', $currentPeriod)
            ->with('katim')
            ->get();
        
        if ($evaluations->isEmpty()) {
            return [
                'hasData' => false,
                'averageScore' => 0,
                'totalEvaluations' => 0,
                'averageKetertiban' => 0,
                'averageEfektivitas' => 0,
                'evaluations' => collect()
            ];
        }
        
        // Calculate averages and total scores
        $scores = $evaluations->map(function($eval) {
            return $eval->calculateScore();
        });
        
        return [
            'hasData' => true,
            'averageScore' => round($scores->avg(), 2),
            'totalEvaluations' => $evaluations->count(),
            'averageKetertiban' => round($evaluations->avg('ketertiban'), 2),
            'averageEfektivitas' => round($evaluations->avg('efektivitas'), 2),
            'evaluations' => $evaluations
        ];
    }

    public function render()
    {
        $p4gnData = $this->getP4gnData();
        $dukunganData = $this->getDukunganData();
        $katimData = $this->getKatimData();
        $rekanKerjaData = $this->getRekanKerjaData();
        $rekanKerja2Data = $this->getRekanKerja2Data();
        
        return view('livewire.pimpinan.pegawai-detail', [
            'pegawai' => $this->pegawai,
            'p4gnData' => $p4gnData,
            'dukunganData' => $dukunganData,
            'katimData' => $katimData,
            'rekanKerjaData' => $rekanKerjaData,
            'rekanKerja2Data' => $rekanKerja2Data,
            'currentPeriod' => Carbon::now()->format('Y-m')
        ]);
    }
}
