<?php

namespace App\Livewire\Pegawai;

use App\Models\DukunganForm;
use App\Livewire\Traits\HasKotakSaran;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('livewire.layouts.app')]
class FormDukungan extends Component
{
    use HasKotakSaran;
    public $userName;
    public $jabatan;
    public $userRole;
    public $isLoggedIn = false;
    
    // Collapsible sections state
    public $openSections = [
        'bidang_tata_usaha' => false,
        'bidang_keuangan' => false,
        'bidang_kerjasama' => false,
        'bidang_kehumasan' => false,
        'pembangunan_zi' => false
    ];
    
    // Form data
    public $formData = [
        'kegiatan' => []
    ];
    
    public function mount()
    {
        $this->checkAuth();
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
    
    private function initFormData()
    {
        // Initialize kegiatan with EXACT field names dari view
        $this->formData['kegiatan'] = [
            // BIDANG TATA USAHA (5 soal = 20 poin max)
            'sarana_prasarana' => [
                'intensitas_administrasi' => null,
                'intensitas_operasional' => null,
            ],
            'pengelolaan_persuratan' => [
                'intensitas' => null,
            ],
            'pengelolaan_kepegawaian' => [
                'intensitas' => null,
            ],
            'pengelolaan_arsip' => [
                'intensitas' => null,
            ],
            'pengelolaan_inventaris' => [
                'intensitas' => null,
            ],
            
            // BIDANG KEUANGAN (12 soal dari view)
            'nka' => [
                'intensitas_administrasi' => null,
                'intensitas_operasional' => null,
            ],
            'ikpa' => [
                'intensitas_administrasi' => null,
                'intensitas_operasional' => null,
            ],
            'penyusunan_laporan_keuangan' => [
                'intensitas' => null,
            ],
            'pengelolaan_perbendaharaan' => [
                'intensitas' => null,
            ],
            'pengelolaan_pnbp' => [
                'intensitas' => null,
            ],
            'pengelolaan_bmn' => [
                'intensitas' => null,
            ],
            'pengelolaan_barang_persediaan' => [
                'intensitas' => null,
            ],
            'pengelolaan_penggajian' => [
                'intensitas' => null,
            ],
            'penyusunan_perencanaan_kinerja' => [
                'intensitas' => null,
            ],
            'penyusunan_rkakl' => [
                'intensitas' => null,
            ],
            'revisi_anggaran' => [
                'intensitas' => null,
            ],
            'penyusunan_laporan_kinerja' => [
                'intensitas' => null,
            ],
            
            // BIDANG KERJASAMA (1 soal = 8 poin max)
            'pks' => [
                'intensitas_administrasi' => null,
                'intensitas_operasional' => null,
            ],
            
            // BIDANG KEHUMASAN (3 soal)
            'produksi_konten' => [
                'intensitas_peliputan' => null,
                'intensitas_editorial' => null,
            ],
            'laporan_kehumasan' => [
                'intensitas_harian' => null,
                'intensitas_mingguan' => null,
            ],
            'pengelolaan_media' => [
                'intensitas_sosmed' => null,
                'intensitas_website' => null,
            ],
        ];
        
        // Initialize ZI data (terpisah dari kegiatan karena bukan numeric)
        $this->formData['zi'] = [
            'tugas' => null
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
        $existingForm = DukunganForm::where('pegawai_nip', $pegawaiNip)
                                    ->where('periode_penilaian', Carbon::now()->format('Y-m'))
                                    ->first();
        
        if ($existingForm) {
            // Load ZI data from database
            $this->formData['zi']['tugas'] = $existingForm->zi_tugas ?? null;
            
            // Check if there's form data in session first (partially completed forms take precedence)
            if (session()->has('formData')) {
                $this->formData = session('formData');
            }
            
            // Display a message that we're loading a form
            session()->flash('form_loaded', 'Formulir Dukungan Manajemen untuk periode ini telah dimuat. Status: ' . ucfirst($existingForm->status));
        }
    }
    
    public function toggleSection($section)
    {
        $this->openSections[$section] = !$this->openSections[$section];
    }
    
    // Convert string values to numeric values for intensity
    private function getNumericValue($value)
    {
        $valueMap = [
            'tidak_pernah' => 0,
            'sesekali' => 1,
            'jarang' => 2,
            'sering' => 3,
            'rutin' => 4
        ];
        
        return $valueMap[$value] ?? null;
    }
    
    // Convert all intensity values to numeric before saving
    private function convertToNumericValues()
    {
        foreach ($this->formData['kegiatan'] as $key => $item) {
            // Standard dual fields
            if (isset($item['intensitas_administrasi']) && $item['intensitas_administrasi'] !== null) {
                $this->formData['kegiatan'][$key]['intensitas_administrasi_numeric'] = $this->getNumericValue($item['intensitas_administrasi']);
            }
            
            if (isset($item['intensitas_operasional']) && $item['intensitas_operasional'] !== null) {
                $this->formData['kegiatan'][$key]['intensitas_operasional_numeric'] = $this->getNumericValue($item['intensitas_operasional']);
            }
            
            // Standard single field
            if (isset($item['intensitas']) && $item['intensitas'] !== null) {
                $this->formData['kegiatan'][$key]['intensitas_numeric'] = $this->getNumericValue($item['intensitas']);
            }
            
            // Special fields for kehumasan
            if (isset($item['intensitas_peliputan']) && $item['intensitas_peliputan'] !== null) {
                $this->formData['kegiatan'][$key]['intensitas_peliputan_numeric'] = $this->getNumericValue($item['intensitas_peliputan']);
            }
            
            if (isset($item['intensitas_editorial']) && $item['intensitas_editorial'] !== null) {
                $this->formData['kegiatan'][$key]['intensitas_editorial_numeric'] = $this->getNumericValue($item['intensitas_editorial']);
            }
            
            if (isset($item['intensitas_harian']) && $item['intensitas_harian'] !== null) {
                $this->formData['kegiatan'][$key]['intensitas_harian_numeric'] = $this->getNumericValue($item['intensitas_harian']);
            }
            
            if (isset($item['intensitas_mingguan']) && $item['intensitas_mingguan'] !== null) {
                $this->formData['kegiatan'][$key]['intensitas_mingguan_numeric'] = $this->getNumericValue($item['intensitas_mingguan']);
            }
            
            if (isset($item['intensitas_sosmed']) && $item['intensitas_sosmed'] !== null) {
                $this->formData['kegiatan'][$key]['intensitas_sosmed_numeric'] = $this->getNumericValue($item['intensitas_sosmed']);
            }
            
            if (isset($item['intensitas_website']) && $item['intensitas_website'] !== null) {
                $this->formData['kegiatan'][$key]['intensitas_website_numeric'] = $this->getNumericValue($item['intensitas_website']);
            }
        }
    }
    
    /**
     * Helper method to calculate total score for a section
     * @param array $dualFields Fields with both admin and operational intensities
     * @param array $singleFields Fields with single intensity
     * @return int Total score for the section
     */
    private function calculateSectionTotal($dualFields, $singleFields)
    {
        $total = 0;
        $kegiatan = $this->formData['kegiatan'];
        
        // Calculate dual fields (admin and operational)
        foreach ($dualFields as $field) {
            if (isset($kegiatan[$field]['intensitas_administrasi_numeric'])) {
                $total += $kegiatan[$field]['intensitas_administrasi_numeric'];
            }
            
            if (isset($kegiatan[$field]['intensitas_operasional_numeric'])) {
                $total += $kegiatan[$field]['intensitas_operasional_numeric'];
            }
        }
        
        // Calculate single intensity fields
        foreach ($singleFields as $field) {
            if (isset($kegiatan[$field]['intensitas_numeric'])) {
                $total += $kegiatan[$field]['intensitas_numeric'];
            }
        }
        
        return $total;
    }
    
    /**
     * Calculate total score for Bidang Tata Usaha
     */
    private function calculateTotalTataUsaha()
    {
        // Dual fields (administrasi + operasional)
        $dualFields = [
            'sarana_prasarana'
        ];
        
        // Single fields (intensitas only)
        $singleFields = [
            'pengelolaan_persuratan',
            'pengelolaan_kepegawaian', 
            'pengelolaan_arsip',
            'pengelolaan_inventaris'
        ];
        
        return $this->calculateSectionTotal($dualFields, $singleFields);
    }
    
    /**
     * Calculate total score for Bidang Keuangan dan Perencanaan
     */
    private function calculateTotalKeuangan()
    {
        // Dual fields (administrasi + operasional) - hanya 2 field sesuai view
        $dualFields = [
            'nka',
            'ikpa'
        ];
        
        // Single fields (hanya intensitas) - 10 field sesuai view
        $singleFields = [
            'penyusunan_laporan_keuangan',
            'pengelolaan_perbendaharaan',
            'pengelolaan_pnbp',
            'pengelolaan_bmn',
            'pengelolaan_barang_persediaan',
            'pengelolaan_penggajian',
            'penyusunan_perencanaan_kinerja',
            'penyusunan_rkakl',
            'revisi_anggaran',
            'penyusunan_laporan_kinerja'
        ];
        
        return $this->calculateSectionTotal($dualFields, $singleFields);
    }
    
    /**
     * Calculate total score for Bidang Kerjasama
     */
    private function calculateTotalKerjasama()
    {
        // Dual fields (administrasi + operasional)
        $dualFields = [
            'pks'
        ];
        
        $singleFields = [];
        
        return $this->calculateSectionTotal($dualFields, $singleFields);
    }
    
    /**
     * Calculate total score for Bidang Kehumasan
     */
    private function calculateTotalKehumasan()
    {
        // Custom calculation untuk kehumasan karena menggunakan field unik
        $total = 0;
        
        // Produksi Konten (peliputan + editorial)
        if (isset($this->formData['kegiatan']['produksi_konten']['intensitas_peliputan_numeric'])) {
            $total += $this->formData['kegiatan']['produksi_konten']['intensitas_peliputan_numeric'];
        }
        if (isset($this->formData['kegiatan']['produksi_konten']['intensitas_editorial_numeric'])) {
            $total += $this->formData['kegiatan']['produksi_konten']['intensitas_editorial_numeric'];
        }
        
        // Laporan Kehumasan (harian + mingguan)
        if (isset($this->formData['kegiatan']['laporan_kehumasan']['intensitas_harian_numeric'])) {
            $total += $this->formData['kegiatan']['laporan_kehumasan']['intensitas_harian_numeric'];
        }
        if (isset($this->formData['kegiatan']['laporan_kehumasan']['intensitas_mingguan_numeric'])) {
            $total += $this->formData['kegiatan']['laporan_kehumasan']['intensitas_mingguan_numeric'];
        }
        
        // Pengelolaan Media (sosmed + website)
        if (isset($this->formData['kegiatan']['pengelolaan_media']['intensitas_sosmed_numeric'])) {
            $total += $this->formData['kegiatan']['pengelolaan_media']['intensitas_sosmed_numeric'];
        }
        if (isset($this->formData['kegiatan']['pengelolaan_media']['intensitas_website_numeric'])) {
            $total += $this->formData['kegiatan']['pengelolaan_media']['intensitas_website_numeric'];
        }
        
        return $total;
    }
    
    /**
     * Calculate total score for Pembangunan Zona Integritas
     */
    /**
     * Get form summary data
     * @return array Totals for each section and overall total
     */
    public function getFormSummary()
    {
        // Convert values to numeric
        $this->convertToNumericValues();
        
        // Calculate totals
        return $this->calculateAllTotals();
    }
    
    /**
     * Calculate all totals for form sections (ZI tidak masuk dalam total karena bukan numeric)
     * @return array Totals for each section and overall total
     */
    private function calculateAllTotals()
    {
        $totalTataUsaha = $this->calculateTotalTataUsaha();
        $totalKeuangan = $this->calculateTotalKeuangan();
        $totalKerjasama = $this->calculateTotalKerjasama();
        $totalKehumasan = $this->calculateTotalKehumasan();
        
        // Total keseluruhan hanya dari 4 bidang (tanpa ZI)
        $totalKeseluruhan = $totalTataUsaha + $totalKeuangan + $totalKerjasama + $totalKehumasan;
        
        return [
            'total_tata_usaha' => $totalTataUsaha,
            'total_keuangan' => $totalKeuangan,
            'total_kerjasama' => $totalKerjasama,
            'total_kehumasan' => $totalKehumasan,
            'total_keseluruhan' => $totalKeseluruhan,
        ];
    }
    
    public function saveForm()
    {
        // Validasi form
        // Convert string values to numeric values
        $this->convertToNumericValues();
        
        // Calculate totals for each bidang
        $totals = $this->calculateAllTotals();
        
        // Get user NIP
        $pegawaiNip = Auth::guard('pegawai')->user()->nip;
        
        // Prepare form values with totals, ZI data, and meta data
        $formValues = [
            'pegawai_nip' => $pegawaiNip,
            'total_tata_usaha' => $totals['total_tata_usaha'],
            'total_keuangan' => $totals['total_keuangan'],
            'total_kerjasama' => $totals['total_kerjasama'],
            'total_kehumasan' => $totals['total_kehumasan'],
            'zi_tugas' => $this->formData['zi']['tugas'] ?? null,
            'total_keseluruhan' => $totals['total_keseluruhan'],
            'tanggal_penilaian' => Carbon::now(),
            'periode_penilaian' => Carbon::now()->format('Y-m'),
            'status' => 'submitted'
        ];
        
        // Check if a form for this pegawai already exists for current period
        $existingForm = DukunganForm::where('pegawai_nip', $pegawaiNip)
                                   ->where('periode_penilaian', Carbon::now()->format('Y-m'))
                                   ->first();
        
        try {
            if ($existingForm) {
                // Update existing record
                $existingForm->update($formValues);
            } else {
                // Create new record
                DukunganForm::create($formValues);
            }
            
            // Clear the session data after successful save
            session()->forget('formData');
            
            // Flash message
            session()->flash('message', 'Form berhasil disimpan!');
            
            // Redirect ke dashboard
            return redirect()->route($this->userRole . '.dashboard');
        } catch (\Exception $e) {
            // Flash error message
            session()->flash('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    
    /**
     * Delete the current form for this user and period
     */
    public function deleteForm()
    {
        $pegawaiNip = Auth::guard('pegawai')->user()->nip;
        $existingForm = DukunganForm::where('pegawai_nip', $pegawaiNip)
                                   ->where('periode_penilaian', Carbon::now()->format('Y-m'))
                                   ->first();
        
        if ($existingForm) {
            try {
                $existingForm->delete();
                session()->flash('message', 'Form berhasil dihapus!');
            } catch (\Exception $e) {
                session()->flash('error', 'Terjadi kesalahan: ' . $e->getMessage());
            }
        }
        
        return redirect()->route($this->userRole . '.dashboard');
    }

    public function render()
    {
        // Get existing form for current period to show status/summary
        $existingForm = null;
        if ($this->isLoggedIn) {
            $pegawaiNip = Auth::guard('pegawai')->user()->nip;
            $existingForm = DukunganForm::where('pegawai_nip', $pegawaiNip)
                                       ->where('periode_penilaian', Carbon::now()->format('Y-m'))
                                       ->first();
        }
        
        return view('livewire.pegawai.dukunganform.main.index', [
            'formStatus' => $existingForm ? $existingForm->status : null,
            'lastUpdated' => $existingForm ? $existingForm->updated_at : null,
            'currentPeriod' => Carbon::now()->format('Y-m'),
            'existingForm' => $existingForm
        ]);
    }
}
