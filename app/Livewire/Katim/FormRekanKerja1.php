<?php

namespace App\Livewire\Katim;

use Illuminate\Support\Facades\Auth;
use App\Models\Pegawai;
use App\Models\RekanKerja1Evaluation;
use App\Livewire\Traits\HasKotakSaran;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('livewire.layouts.app')]
class FormRekanKerja1 extends Component
{
    use HasKotakSaran;
    public $userName;
    public $jabatan;
    public $userRole;
    public $isLoggedIn = false;
    public $selectedPegawai = '';
    public $availablePegawai = [];
    public $evaluationStatus = []; // Track evaluation status for each pegawai
    
    // Add listener for property updates
    protected $listeners = [
        'refresh' => '$refresh',
        'setPegawai' => 'setPegawai'
    ];
    
    // Form data
    public $formData = [
        'evaluasi' => []
    ];
    
    public function mount()
    {
        $this->checkAuth();
        $this->initFormData();
        $this->loadEvaluationStatus();
        $this->loadAvailablePegawai();
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
    
    private function loadAvailablePegawai()
    {
        $allUsers = Pegawai::where('name', '!=', $this->userName)->get(['nip', 'name']);
        
        $this->availablePegawai = $allUsers->map(function($user) {
            $hasEvaluation = isset($this->evaluationStatus[$user->nip]);
            return [
                'id' => $user->nip,
                'nip' => $user->nip,
                'name' => $user->name,
                'evaluated' => $hasEvaluation,
                'status' => $hasEvaluation ? $this->evaluationStatus[$user->nip] : null
            ];
        })->toArray();
        
        // For debugging purposes
        if (count($this->availablePegawai) > 0 && empty($this->selectedPegawai)) {
            // Auto-select the first pegawai for testing
            // $this->selectedPegawai = $this->availablePegawai[0]['id'];
        }
    }
    
    private function initFormData()
    {
        $this->formData['evaluasi'] = [
            // Section A: Efektivitas dalam Mencapai Tujuan
            'kualitas_kerja' => null,
            'kuantitas_kerja' => null,
            'ketepatan_waktu' => null,
            'kemandirian' => null,
            'komitmen_kerja' => null,
            
            // Section B: Kerjasama dan Komunikasi
            'kemampuan_kerjasama' => null,
            'kemampuan_komunikasi' => null,
            'kepemimpinan' => null,
            
            // Section C: Aspek Lain
            'integritas' => null,
            'kreativitas' => null,
            'disiplin' => null,
            
            'catatan' => '',
        ];
    }
    
    public function updatedSelectedPegawai($value)
    {
        // Load existing evaluation if exists
        if ($value) {
            $this->loadExistingEvaluation($value);
        }
        // This method will automatically be called when selectedPegawai is updated
        // Force a refresh to ensure the UI updates
        $this->dispatch('refresh');
    }
    
    public function setPegawai($id)
    {
        $this->selectedPegawai = $id;
        $this->dispatch('refresh');
    }
    
    public function setSelectedPegawaiFromUI()
    {
        // The selectedPegawai is already set by the wire:model binding
        // This method is just to trigger a refresh when the button is clicked
        session()->flash('pegawai_selected', 'Pegawai berhasil dipilih!');
        $this->dispatch('refresh');
    }
    
    // Convert string values to numeric values for ratings
    private function getNumericValue($value)
    {
        $valueMap = [
            'kurang' => 1,
            'cukup' => 2,
            'baik' => 3,
            'sangat_baik' => 4
        ];
        
        return $valueMap[$value] ?? null;
    }
    
    // Calculate section scores
    private function calculateSectionScores()
    {
        $scores = [];
        
        // Section A: Efektivitas dalam Mencapai Tujuan (5 questions)
        $sectionA = [
            'kualitas_kerja', 'kuantitas_kerja', 'ketepatan_waktu',
            'kemandirian', 'komitmen_kerja'
        ];
        
        $totalA = 0;
        $countA = 0;
        
        foreach ($sectionA as $field) {
            if (isset($this->formData['evaluasi'][$field]) && $this->formData['evaluasi'][$field] !== null) {
                $totalA += $this->getNumericValue($this->formData['evaluasi'][$field]);
                $countA++;
            }
        }
        
        $scores['sectionA'] = $countA > 0 ? $totalA / $countA : 0;
        
        // Section B: Kerjasama dan Komunikasi (3 questions)
        $sectionB = [
            'kemampuan_kerjasama', 'kemampuan_komunikasi', 'kepemimpinan'
        ];
        
        $totalB = 0;
        $countB = 0;
        
        foreach ($sectionB as $field) {
            if (isset($this->formData['evaluasi'][$field]) && $this->formData['evaluasi'][$field] !== null) {
                $totalB += $this->getNumericValue($this->formData['evaluasi'][$field]);
                $countB++;
            }
        }
        
        $scores['sectionB'] = $countB > 0 ? $totalB / $countB : 0;
        
        // Section C: Aspek Lain (3 questions)
        $sectionC = [
            'integritas', 'kreativitas', 'disiplin'
        ];
        
        $totalC = 0;
        $countC = 0;
        
        foreach ($sectionC as $field) {
            if (isset($this->formData['evaluasi'][$field]) && $this->formData['evaluasi'][$field] !== null) {
                $totalC += $this->getNumericValue($this->formData['evaluasi'][$field]);
                $countC++;
            }
        }
        
        $scores['sectionC'] = $countC > 0 ? $totalC / $countC : 0;
        
        // Calculate overall score (average of all section scores)
        $scores['overall'] = (
            $scores['sectionA'] + 
            $scores['sectionB'] + 
            $scores['sectionC']
        ) / 3;
        
        return $scores;
    }

    public function saveForm()
    {
        $this->validate([
            'selectedPegawai' => 'required',
            'formData.evaluasi.catatan' => 'nullable|string|max:1000',
        ], [
            'selectedPegawai.required' => 'Harap pilih pegawai yang akan dievaluasi.'
        ]);

        $scores = $this->calculateSectionScores();
        
        // Save to database
        RekanKerja1Evaluation::updateOrCreate(
            [
                'katim_nip' => Auth::guard('katim')->user()->nip,
                'pegawai_nip' => $this->selectedPegawai,
                'periode' => now()->format('Y-m')
            ],
            [
                'total_section_a' => round($scores['sectionA'] * 25), // Max 100 for 4 questions * 25
                'total_section_b' => round($scores['sectionB'] * 25), // Max 75 for 3 questions * 25  
                'total_section_c' => round($scores['sectionC'] * 25), // Max 75 for 3 questions * 25
                'total_keseluruhan' => round($scores['overall'] * 25), // Overall average * 25
            ]
        );

        session()->flash('message', 'Evaluasi Rekan Kerja 1 berhasil disimpan!');
        
        // Reload evaluation status after save
        $this->loadEvaluationStatus();
        
        return redirect()->route($this->userRole . '.dashboard');
    }

    private function loadEvaluationStatus()
    {
        $currentKatimNip = Auth::guard('katim')->user()->nip;
        
        // Get all evaluations by current katim
        $evaluations = RekanKerja1Evaluation::where('katim_nip', $currentKatimNip)->get();
        
        $this->evaluationStatus = [];
        foreach ($evaluations as $evaluation) {
            $this->evaluationStatus[$evaluation->pegawai_nip] = [
                'status' => 'completed',
                'date' => $evaluation->updated_at->format('d M Y'),
                'total_score' => $evaluation->total_keseluruhan
            ];
        }
    }

    private function loadExistingEvaluation($pegawaiId)
    {
        $currentKatimNip = Auth::guard('katim')->user()->nip;
        
        // Find pegawai by ID to get NIP
        $pegawai = collect($this->availablePegawai)->firstWhere('id', $pegawaiId);
        if (!$pegawai) return;
        
        // Check if evaluation exists
        $evaluation = RekanKerja1Evaluation::where('katim_nip', $currentKatimNip)
                                          ->where('pegawai_nip', $pegawai['nip'])
                                          ->first();
        
        if ($evaluation) {
            // Load existing data into form
            $this->formData['evaluasi'] = [
                'kualitas_kerja' => $evaluation->kualitas_kerja,
                'kuantitas_kerja' => $evaluation->kuantitas_kerja,
                'ketepatan_waktu' => $evaluation->ketepatan_waktu,
                'kemandirian' => $evaluation->kemandirian,
                'komitmen_kerja' => $evaluation->komitmen_kerja,
                'kemampuan_kerjasama' => $evaluation->kemampuan_kerjasama,
                'kemampuan_komunikasi' => $evaluation->kemampuan_komunikasi,
                'kepemimpinan' => $evaluation->kepemimpinan,
                'integritas' => $evaluation->integritas,
                'kreativitas' => $evaluation->kreativitas,
                'disiplin' => $evaluation->disiplin,
                'catatan' => $evaluation->catatan ?? '',
            ];
            
            session()->flash('info', 'Data evaluasi yang sudah ada berhasil dimuat. Anda dapat mengeditnya.');
        } else {
            // Reset form for new evaluation
            $this->initFormData();
        }
    }

    public function render()
    {
        return view('livewire.katim.rekankerjaform1.index', [
            'pegawaiList' => $this->availablePegawai
        ]);
    }
}