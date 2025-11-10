<?php

namespace App\Livewire\Pimpinan;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Pegawai;
use App\Models\P4gnForm;
use App\Models\DukunganForm;
use App\Models\KatimEvaluation;
use App\Models\RekanKerja1Evaluation;
use App\Models\RekanKerja2Evaluation;
use App\Models\Katim;
use Carbon\Carbon;

#[Layout('livewire.layouts.app')]
class Dashboard extends Component
{
    public $userName;
    public $userRole;
    public $isLoggedIn = false;
    
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

    private function getStatistics()
    {
        $currentPeriod = Carbon::now()->format('Y-m');
        
        return [
            'total_pegawai' => Pegawai::count(),
            'total_katim' => Katim::count(),
            'total_p4gn_submitted' => P4gnForm::where('periode_penilaian', $currentPeriod)->count(),
            'total_dukungan_submitted' => DukunganForm::where('periode_penilaian', $currentPeriod)->count(),
            'total_katim_evaluations' => KatimEvaluation::where('periode', $currentPeriod)->count(), // Total evaluations received by katims
            'total_rekan_kerja1_evaluations' => RekanKerja1Evaluation::where('periode', $currentPeriod)->count(), // Total rekan kerja 1 evaluations
            'total_rekan_kerja2_evaluations' => RekanKerja2Evaluation::where('periode', $currentPeriod)->count(), // Total rekan kerja 2 evaluations
            'recent_submissions' => $this->getRecentSubmissions(),
            'top_performers' => $this->getTopPerformers($currentPeriod)
        ];
    }

    private function getRecentSubmissions()
    {
        $p4gnSubmissions = P4gnForm::with('pegawai')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get()
            ->map(function ($form) {
                return [
                    'type' => 'P4GN',
                    'pegawai_name' => $form->pegawai->name ?? 'Unknown',
                    'created_at' => $form->created_at,
                    'total_score' => $form->total_keseluruhan
                ];
            });

        $dukunganSubmissions = DukunganForm::with('pegawai')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get()
            ->map(function ($form) {
                return [
                    'type' => 'Dukungan',
                    'pegawai_name' => $form->pegawai->name ?? 'Unknown',
                    'created_at' => $form->created_at,
                    'total_score' => $form->total_keseluruhan
                ];
            });

        $katimEvaluations = KatimEvaluation::with('katim', 'pegawai')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get()
            ->map(function ($evaluation) {
                return [
                    'type' => 'Evaluasi Katim',
                    'pegawai_name' => ($evaluation->pegawai->name ?? 'Unknown') . ' → ' . ($evaluation->katim->name ?? 'Unknown'),
                    'created_at' => $evaluation->created_at,
                    'total_score' => $evaluation->total_keseluruhan
                ];
            });

        $rekanKerjaEvaluations = RekanKerja1Evaluation::with('katim', 'pegawai')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get()
            ->map(function ($evaluation) {
                return [
                    'type' => 'Evaluasi Rekan Kerja 1',
                    'pegawai_name' => ($evaluation->katim->name ?? 'Unknown') . ' → ' . ($evaluation->pegawai->name ?? 'Unknown'),
                    'created_at' => $evaluation->created_at,
                    'total_score' => $evaluation->total_keseluruhan
                ];
            });

        $rekanKerja2Evaluations = RekanKerja2Evaluation::with('katim')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get()
            ->map(function ($evaluation) {
                return [
                    'type' => 'Evaluasi Rekan Kerja 2',
                    'pegawai_name' => ($evaluation->katim->name ?? 'Unknown') . ' → ' . $evaluation->pegawai_nama,
                    'created_at' => $evaluation->created_at,
                    'total_score' => $evaluation->calculateScore()
                ];
            });

        return $p4gnSubmissions->concat($dukunganSubmissions)->concat($katimEvaluations)->concat($rekanKerjaEvaluations)->concat($rekanKerja2Evaluations)
            ->sortByDesc('created_at')
            ->take(5)
            ->values();
    }

    private function getTopPerformers($period)
    {
        $performers = [];
        
        // Get top P4GN performers
        $topP4gn = P4gnForm::with('pegawai')
            ->where('periode_penilaian', $period)
            ->orderBy('total_keseluruhan', 'desc')
            ->take(5)
            ->get();

        // Get top Dukungan performers  
        $topDukungan = DukunganForm::with('pegawai')
            ->where('periode_penilaian', $period)
            ->orderBy('total_keseluruhan', 'desc')
            ->take(5)
            ->get();

        // Get top Katim performers - calculate average score from all evaluations
        $katimAverages = KatimEvaluation::with('katim')
            ->where('periode', $period)
            ->get()
            ->groupBy('katim_id')
            ->map(function ($evaluations) {
                $avgScore = $evaluations->avg('total_keseluruhan');
                $katim = $evaluations->first()->katim;
                return [
                    'katim' => $katim,
                    'average_score' => round($avgScore, 2),
                    'evaluation_count' => $evaluations->count()
                ];
            })
            ->sortByDesc('average_score')
            ->take(5)
            ->values();

        return [
            'p4gn' => $topP4gn,
            'dukungan' => $topDukungan,
            'katim' => $katimAverages
        ];
    }
    
    public function render()
    {
        $statistics = $this->getStatistics();
        
        return view('livewire.pimpinan.dashboard', [
            'statistics' => $statistics,
            'currentPeriod' => Carbon::now()->format('Y-m')
        ]);
    }
}
