<?php

namespace App\Livewire\Pegawai;

use App\Models\Katim;
use App\Models\KatimEvaluation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Carbon\Carbon;

#[Layout('livewire.layouts.app')]
class KatimForm extends Component
{
    public $userName;
    public $jabatan;
    public $userRole;
    public $isLoggedIn = false;
    public $katimOptions = [];
    
    // Collapsible sections state
    public $openSections = [
        'sectionA' => false,
        'sectionB' => false,
        'sectionC' => false,
        'sectionD' => false
    ];
    
    // Form data
    public $formData = [
        'katim_id' => '',
        'evaluasi' => []
    ];
    
    public function mount()
    {
        $this->checkAuth();
        $this->loadKatimOptions();
        $this->initFormData();
        $this->loadExistingFormData();
    }

    private function checkAuth()
    {
        // Check if user is logged in with pegawai guard
        if (Auth::guard('pegawai')->check()) {
            $this->isLoggedIn = true;
            $this->userName = Auth::guard('pegawai')->user()->name;
            $this->jabatan = Auth::guard('pegawai')->user()->jabatan ?? 'Pegawai';
            $this->userRole = 'pegawai';
        } else {
            // Redirect if not authenticated as pegawai
            return redirect()->route('login');
        }
    }

    private function loadKatimOptions()
    {
        // Ambil semua ketua tim dari database - ambil semua yang ada saja
        $this->katimOptions = Katim::all();
    }
    
    private function initFormData()
    {
        // Initialize evaluation fields sesuai dengan view
        $this->formData['evaluasi'] = [
            // Section A: Efektivitas dalam Mencapai Tujuan (5 fields)
            'pencapaian_tujuan' => null,
            'produktivitas' => null,
            'ketepatan_waktu' => null,
            'delegasi' => null,
            'komitmen_kerja' => null,
            
            // Section B: Kerja Sama dan Komunikasi (4 fields)
            'kerja_tim' => null,
            'komunikasi' => null,
            'pemecahan_masalah' => null,
            'manajemen_konflik' => null,
            
            // Section C: Kualitas Pekerjaan dan Kepemimpinan (2 fields)
            'kepemimpinan' => null,
            'adaptasi' => null,
            
            // Section D: Kompetensi dan Pengembangan Diri (3 fields + catatan)
            'pengembangan_diri' => null,
            'kemampuan_analitis' => null,
            'kepatuhan' => null,
            'catatan' => '',
        ];
    }

    /**
     * Load existing form data if available for the current period
     */
    private function loadExistingFormData()
    {
        if (!$this->isLoggedIn) {
            return;
        }
        
        $pegawaiNip = Auth::guard('pegawai')->user()->nip;
        $currentPeriode = Carbon::now()->format('Y-m');
        
        $existingForm = KatimEvaluation::where('pegawai_nip', $pegawaiNip)
                                     ->where('periode', $currentPeriode)
                                     ->first();
        
        if ($existingForm) {
            // Set the katim_id
            $this->formData['katim_id'] = $existingForm->katim_id;
            
            // Set default values for form fields (we don't store individual ratings, only totals)
            // This is just to show that a form exists, user can re-edit
            session()->flash('form_loaded', 'Evaluasi Ketua Tim untuk periode ini telah dimuat dan dapat diedit ulang.');
        }
    }
    
    public function toggleSection($section)
    {
        $this->openSections[$section] = !$this->openSections[$section];
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
    
    // Calculate section totals (bukan rata-rata, tapi total)
    private function calculateSectionTotals()
    {
        $totals = [];
        
        // Section A: Efektivitas dalam Mencapai Tujuan (5 questions, max = 20)
        $sectionA = [
            'pencapaian_tujuan', 'produktivitas', 'ketepatan_waktu',
            'delegasi', 'komitmen_kerja'
        ];
        
        $totalA = 0;
        foreach ($sectionA as $field) {
            if (isset($this->formData['evaluasi'][$field]) && $this->formData['evaluasi'][$field] !== null) {
                $totalA += $this->getNumericValue($this->formData['evaluasi'][$field]);
            }
        }
        $totals['sectionA'] = $totalA;
        
        // Section B: Kerja Sama dan Komunikasi (4 questions, max = 16)
        $sectionB = [
            'kerja_tim', 'komunikasi', 'pemecahan_masalah', 'manajemen_konflik'
        ];
        
        $totalB = 0;
        foreach ($sectionB as $field) {
            if (isset($this->formData['evaluasi'][$field]) && $this->formData['evaluasi'][$field] !== null) {
                $totalB += $this->getNumericValue($this->formData['evaluasi'][$field]);
            }
        }
        $totals['sectionB'] = $totalB;
        
        // Section C: Kualitas Pekerjaan dan Kepemimpinan (2 questions, max = 8)
        $sectionC = [
            'kepemimpinan', 'adaptasi'
        ];
        
        $totalC = 0;
        foreach ($sectionC as $field) {
            if (isset($this->formData['evaluasi'][$field]) && $this->formData['evaluasi'][$field] !== null) {
                $totalC += $this->getNumericValue($this->formData['evaluasi'][$field]);
            }
        }
        $totals['sectionC'] = $totalC;
        
        // Section D: Kompetensi dan Pengembangan Diri (3 questions, max = 12)
        $sectionD = [
            'pengembangan_diri', 'kemampuan_analitis', 'kepatuhan'
        ];
        
        $totalD = 0;
        foreach ($sectionD as $field) {
            if (isset($this->formData['evaluasi'][$field]) && $this->formData['evaluasi'][$field] !== null) {
                $totalD += $this->getNumericValue($this->formData['evaluasi'][$field]);
            }
        }
        $totals['sectionD'] = $totalD;
        
        // Calculate overall total (total semua section, max = 56)
        $totals['overall'] = $totals['sectionA'] + $totals['sectionB'] + $totals['sectionC'] + $totals['sectionD'];
        
        return $totals;
    }
    
    public function saveForm()
    {
        // Validate form
        $this->validate([
            'formData.katim_id' => 'required|exists:katims,id',
            'formData.evaluasi.catatan' => 'nullable|string|max:1000',
        ], [
            'formData.katim_id.required' => 'Harap pilih ketua tim yang akan dievaluasi.',
            'formData.katim_id.exists' => 'Ketua tim yang dipilih tidak valid.',
        ]);

        // Pastikan semua soal sudah diisi
        $requiredFields = [
            'pencapaian_tujuan', 'produktivitas', 'ketepatan_waktu', 'delegasi', 'komitmen_kerja',
            'kerja_tim', 'komunikasi', 'pemecahan_masalah', 'manajemen_konflik',
            'kepemimpinan', 'adaptasi',
            'pengembangan_diri', 'kemampuan_analitis', 'kepatuhan'
        ];

        foreach ($requiredFields as $field) {
            if (!isset($this->formData['evaluasi'][$field]) || $this->formData['evaluasi'][$field] === null) {
                session()->flash('error', 'Harap isi semua pertanyaan evaluasi sebelum menyimpan.');
                return;
            }
        }
        
        // Calculate section totals
        $totals = $this->calculateSectionTotals();
        
        // Get current periode (YYYY-MM format)
        $currentPeriode = Carbon::now()->format('Y-m');
        
        // Check if evaluation already exists for this periode
        $existingEvaluation = KatimEvaluation::where('pegawai_nip', Auth::guard('pegawai')->user()->nip)
            ->where('katim_id', $this->formData['katim_id'])
            ->where('periode', $currentPeriode)
            ->first();

        if ($existingEvaluation) {
            // Update existing evaluation
            $existingEvaluation->update([
                'total_section_a' => $totals['sectionA'],
                'total_section_b' => $totals['sectionB'],
                'total_section_c' => $totals['sectionC'],
                'total_section_d' => $totals['sectionD'],
                'total_keseluruhan' => $totals['overall'],
            ]);
        } else {
            // Create new evaluation
            KatimEvaluation::create([
                'pegawai_nip' => Auth::guard('pegawai')->user()->nip,
                'katim_id' => $this->formData['katim_id'],
                'total_section_a' => $totals['sectionA'],
                'total_section_b' => $totals['sectionB'],
                'total_section_c' => $totals['sectionC'],
                'total_section_d' => $totals['sectionD'],
                'total_keseluruhan' => $totals['overall'],
                'periode' => $currentPeriode,
            ]);
        }
        
        // Flash message
        session()->flash('message', 'Evaluasi Ketua Tim berhasil disimpan!');
        
        // Redirect to dashboard
        return redirect()->route($this->userRole . '.dashboard');
    }

    /**
     * Delete the current evaluation for this user and period
     */
    public function deleteForm()
    {
        $pegawaiNip = Auth::guard('pegawai')->user()->nip;
        $currentPeriode = Carbon::now()->format('Y-m');
        
        $form = KatimEvaluation::where('pegawai_nip', $pegawaiNip)
                              ->where('periode', $currentPeriode)
                              ->first();
        
        if ($form) {
            $form->delete();
            
            // Reset form data
            $this->initFormData();
            $this->formData['katim_id'] = '';
            
            // Flash message
            session()->flash('message', 'Evaluasi Ketua Tim berhasil dihapus!');
            
            // Redirect to dashboard
            return redirect()->route($this->userRole . '.dashboard');
        }
        
        session()->flash('error', 'Evaluasi tidak ditemukan!');
    }

    public function render()
    {
        // Get existing form for the current period
        $existingForm = null;
        if ($this->isLoggedIn) {
            $pegawaiNip = Auth::guard('pegawai')->user()->nip;
            $currentPeriode = Carbon::now()->format('Y-m');
            
            $existingForm = KatimEvaluation::with('katim')
                                         ->where('pegawai_nip', $pegawaiNip)
                                         ->where('periode', $currentPeriode)
                                         ->first();
        }
        
        return view('livewire.pegawai.katimform.index', [
            'existingForm' => $existingForm,
            'currentPeriod' => Carbon::now()->format('Y-m'),
            'lastUpdated' => $existingForm ? $existingForm->updated_at : null,
        ]);
    }
}
