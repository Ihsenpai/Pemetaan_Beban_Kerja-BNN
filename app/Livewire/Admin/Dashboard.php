<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use App\Models\Pegawai;
use App\Models\Katim;
use App\Models\Pimpinan;
use App\Models\P4gnForm;
use App\Models\DukunganForm;
use App\Models\KatimEvaluation;
use App\Models\RekanKerja1Evaluation;
use App\Models\RekanKerja2Evaluation;
use App\Models\KotakSaran;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;

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
        // Check if user is logged in with admin guard
        if (Auth::guard('admin')->check()) {
            $this->isLoggedIn = true;
            $this->userName = Auth::guard('admin')->user()->name;
            $this->userRole = 'admin';
        } else {
            // Redirect if not authenticated as admin
            return redirect()->route('login');
        }
    }

    public function getStatistics()
    {
        return [
            'users' => [
                'admin' => Admin::count(),
                'pegawai' => Pegawai::count(),
                'katim' => Katim::count(),
                'pimpinan' => Pimpinan::count(),
            ],
            'forms' => [
                'p4gn' => P4gnForm::count(),
                'dukungan' => DukunganForm::count(),
                'katim_evaluation' => KatimEvaluation::count(),
                'rekan_kerja_1' => RekanKerja1Evaluation::count(),
                'rekan_kerja_2' => RekanKerja2Evaluation::count(),
            ],
            'feedback' => [
                'kotak_saran' => KotakSaran::count(),
                'pending' => KotakSaran::where('status', 'pending')->count(),
                'reviewed' => KotakSaran::where('status', 'reviewed')->count(),
            ]
        ];
    }
    
    public function render()
    {
        $statistics = $this->getStatistics();
        
        return view('livewire.admin.dashboard', [
            'statistics' => $statistics
        ]);
    }
}
