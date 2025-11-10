<?php

namespace App\Livewire\Katim;

use Illuminate\Support\Facades\Auth;
use App\Models\Pegawai;
use App\Models\RekanKerja2Evaluation;
use App\Livewire\Traits\HasKotakSaran;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('livewire.layouts.app')]
class FormRekanKerja2 extends Component
{
    use HasKotakSaran;
    public $userName;
    public $jabatan;
    public $userRole;
    public $isLoggedIn = false;
    public $pegawaiList = [];
    public $evaluations = [];
    
    public function mount()
    {
        $this->checkAuth();
        $this->loadPegawaiList();
        $this->loadExistingEvaluations();
    }

    private function checkAuth()
    {
        if (Auth::guard('katim')->check()) {
            $this->isLoggedIn = true;
            $this->userName = Auth::guard('katim')->user()->name;
            $this->jabatan = Auth::guard('katim')->user()->jabatan ?? 'Ketua Tim';
            $this->userRole = 'katim';
        } else {
            return redirect()->route('login');
        }
    }
    
    private function loadPegawaiList()
    {
        // Get all pegawai except the current katim
        $currentKatimNip = Auth::guard('katim')->user()->nip;
        
        $pegawai = Pegawai::where('nip', '!=', $currentKatimNip)
            ->orderBy('name')
            ->get();
            
        $this->pegawaiList = $pegawai->map(function($p) {
            return [
                'nip' => $p->nip,
                'nama' => $p->name,
                'jabatan' => $p->jabatan ?? 'Pegawai'
            ];
        })->toArray();
    }
    
    private function loadExistingEvaluations()
    {
        $currentPeriod = now()->format('Y-m');
        $katimNip = Auth::guard('katim')->user()->nip;
        
        $existing = RekanKerja2Evaluation::where('katim_nip', $katimNip)
            ->where('periode', $currentPeriod)
            ->get()
            ->keyBy('pegawai_nip');
            
        // Initialize evaluations array
        foreach ($this->pegawaiList as $pegawai) {
            $evaluation = $existing->get($pegawai['nip']);
            
            $this->evaluations[$pegawai['nip']] = [
                'ketertiban' => $evaluation->ketertiban ?? null,
                'efektivitas' => $evaluation->efektivitas ?? null,
            ];
        }
    }

    public function saveForm()
    {
        $this->validate([
            'evaluations.*.ketertiban' => 'nullable|integer|min:1|max:5',
            'evaluations.*.efektivitas' => 'nullable|integer|min:1|max:4',
        ]);

        $currentPeriod = now()->format('Y-m');
        $katimNip = Auth::guard('katim')->user()->nip;
        $savedCount = 0;

        foreach ($this->evaluations as $pegawaiNip => $evaluation) {
            // Skip if both values are empty
            if (empty($evaluation['ketertiban']) && empty($evaluation['efektivitas'])) {
                continue;
            }
            
            // Get pegawai data for snapshot
            $pegawai = collect($this->pegawaiList)->firstWhere('nip', $pegawaiNip);
            
            if ($pegawai) {
                $rekanKerja2 = RekanKerja2Evaluation::updateOrCreate(
                    [
                        'katim_nip' => $katimNip,
                        'pegawai_nip' => $pegawaiNip,
                        'periode' => $currentPeriod
                    ],
                    [
                        'pegawai_nama' => $pegawai['nama'],
                        'pegawai_jabatan' => $pegawai['jabatan'],
                        'ketertiban' => $evaluation['ketertiban'],
                        'efektivitas' => $evaluation['efektivitas'],
                        'total_score' => $this->calculateScore($evaluation['ketertiban'], $evaluation['efektivitas'])
                    ]
                );
                $savedCount++;
            }
        }

        session()->flash('message', "Evaluasi Rekan Kerja 2 berhasil disimpan untuk {$savedCount} pegawai!");
        
        return redirect()->route($this->userRole . '.dashboard');
    }
    
    private function calculateScore($ketertiban, $efektivitas)
    {
        $ketertiban_scores = [
            'tidak_pernah' => 1,
            'sesekali' => 2,
            'jarang' => 3,
            'sering' => 4,
            'rutinitas' => 5
        ];

        $efektivitas_scores = [
            'tidak_efektif' => 1,
            'kurang_efektif' => 2,
            'cukup_efektif' => 3,
            'efektif' => 4
        ];

        $ketertiban_score = $ketertiban_scores[$ketertiban] ?? 0;
        $efektivitas_score = $efektivitas_scores[$efektivitas] ?? 0;

        return ($ketertiban_score * 20) + ($efektivitas_score * 25);
    }

    public function render()
    {
        return view('livewire.katim.rekankerjaform2.index');
    }
}