<?php

namespace App\Livewire\Pegawai;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\P4gnForm;
use App\Livewire\Traits\HasKotakSaran;
use Carbon\Carbon;

#[Layout('livewire.layouts.app')]
class FormP4GN extends Component
{
    use HasKotakSaran;
    public $userName;
    public $jabatan;
    public $userRole;
    public $isLoggedIn = false;
    
    // Collapsible sections state
    public $openSections = [
        'bidang_pencegahan' => false,
        'bidang_pemberdayaan' => false,
        'bidang_rehabilitasi' => false,
        'bidang_pemberantasan' => false
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
        // Initialize kegiatan with default values
        $this->formData['kegiatan'] = [
            // Bidang Pencegahan
            'daya_tangkal_remaja' => [
                'intensitas_administrasi' => null,
                'intensitas_operasional' => null,
            ],
            'daya_tangkal_keluarga' => [
                'intensitas_administrasi' => null,
                'intensitas_operasional' => null,
            ],
            'kampanye_p4gn_elektronik' => [
                'intensitas' => null,
            ],
            'kampanye_p4gn_luar_ruang' => [
                'intensitas' => null,
            ],
            'koordinasi_stakeholder' => [
                'intensitas' => null,
            ],
            'rangkaian_hani' => [
                'intensitas' => null,
            ],
            'penyuluhan_tatap_muka' => [
                'intensitas' => null,
            ],
            'pembentukan_desa_bersinar' => [
                'intensitas' => null,
            ],
            'inspektur_upacara' => [
                'intensitas' => null,
            ],
            'car_free_day' => [
                'intensitas' => null,
            ],
            'kie_keliling' => [
                'intensitas' => null,
            ],
            
            // Bidang Pemberdayaan
            'bimbingan_teknis_penggiat' => [
                'intensitas_administrasi' => null,
                'intensitas_operasional' => null,
            ],
            'rapat_koordinasi_pengembangan' => [
                'intensitas_administrasi' => null,
                'intensitas_operasional' => null,
            ],
            'asistensi_kota_kabupaten' => [
                'intensitas_administrasi' => null,
                'intensitas_operasional' => null,
            ],
            'konsolidasi_kebijakan' => [
                'intensitas_administrasi' => null,
                'intensitas_operasional' => null,
            ],
            'monitoring_evaluasi_program' => [
                'intensitas_administrasi' => null,
                'intensitas_operasional' => null,
            ],
            'pengumpulan_data_indeks' => [
                'intensitas_administrasi' => null,
                'intensitas_operasional' => null,
            ],
            'pemetaan_potensi_sdm_sda' => [
                'intensitas_administrasi' => null,
                'intensitas_operasional' => null,
            ],
            'rapat_kerja_sinergi' => [
                'intensitas_administrasi' => null,
                'intensitas_operasional' => null,
            ],
            'bimbingan_teknis_lifeskill' => [
                'intensitas_administrasi' => null,
                'intensitas_operasional' => null,
            ],
            'monitoring_evaluasi_program_alternatif' => [
                'intensitas_administrasi' => null,
                'intensitas_operasional' => null,
            ],
            'pemberdayaan_tes_urine' => [
                'intensitas' => null,
            ],
            'audiensi_stakeholder' => [
                'intensitas' => null,
            ],
            'bimbingan_teknis_swadaya' => [
                'intensitas' => null,
            ],
            'sosialisasi_p4gn' => [
                'intensitas' => null,
            ],
            
            // Bidang Rehabilitasi
            'pemeriksaan_kesehatan' => [
                'intensitas_administrasi' => null,
                'intensitas_operasional' => null,
            ],
            'bimbingan_teknis_agen_pemulihan' => [
                'intensitas_administrasi' => null,
                'intensitas_operasional' => null,
            ],
            'asistensi_lrkm_sil' => [
                'intensitas_administrasi' => null,
                'intensitas_operasional' => null,
            ],
            'layanan_rehabilitasi_rawat_jalan' => [
                'intensitas' => null,
            ],
            'layanan_skhpn' => [
                'intensitas' => null,
            ],
            'pengelolaan_klinik' => [
                'intensitas' => null,
            ],
            'rehabilitasi_lapas' => [
                'intensitas' => null,
            ],
            'koordinasi_stakeholder_rehabilitasi' => [
                'intensitas' => null,
            ],
            'pengelolaan_ibm' => [
                'intensitas' => null,
            ],
            
            // Bidang Pemberantasan
            'asesmen' => [
                'intensitas_administrasi' => null,
                'intensitas_operasional' => null,
            ],
            'pemetaan_jaringan' => [
                'intensitas_administrasi' => null,
                'intensitas_operasional' => null,
            ],
            'tindak_lanjut_pengaduan' => [
                'intensitas_administrasi' => null,
                'intensitas_operasional' => null,
            ],
            'pengawasan_tahanan' => [
                'intensitas' => null,
            ],
            'patroli' => [
                'intensitas' => null,
            ],
            'pengawasan_barang_bukti' => [
                'intensitas' => null,
            ],
            'analisa_kasus' => [
                'intensitas' => null,
            ]
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
        $existingForm = P4gnForm::where('pegawai_nip', $pegawaiNip)
                                ->where('periode_penilaian', Carbon::now()->format('Y-m'))
                                ->first();
        
        if ($existingForm) {
            // Check if there's form data in session first (partially completed forms take precedence)
            if (session()->has('formData')) {
                $this->formData = session('formData');
            }
            
            // Display a message that we're loading a form
            session()->flash('form_loaded', 'Formulir P4GN untuk periode ini telah dimuat. Status: ' . ucfirst($existingForm->status));
        }
    }
    
    /**
     * Update string values based on numeric values for UI display
     */
    private function updateStringValuesFromNumeric()
    {
        // Map numeric values to string values for display
        $intensityMap = [
            0 => 'tidak_pernah',
            1 => 'sesekali',
            2 => 'jarang',
            3 => 'sering',
            4 => 'rutin'
        ];
        
        // Iterate through the form data and update string values
        foreach ($this->formData['kegiatan'] as $key => $activity) {
            if (isset($activity['intensitas_numeric'])) {
                $numericValue = $activity['intensitas_numeric'];
                $this->formData['kegiatan'][$key]['intensitas'] = $intensityMap[$numericValue] ?? 'tidak_pernah';
            }
            
            if (isset($activity['intensitas_administrasi_numeric'])) {
                $numericValue = $activity['intensitas_administrasi_numeric'];
                $this->formData['kegiatan'][$key]['intensitas_administrasi'] = $intensityMap[$numericValue] ?? 'tidak_pernah';
            }
            
            if (isset($activity['intensitas_operasional_numeric'])) {
                $numericValue = $activity['intensitas_operasional_numeric'];
                $this->formData['kegiatan'][$key]['intensitas_operasional'] = $intensityMap[$numericValue] ?? 'tidak_pernah';
            }
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
            if (isset($item['intensitas_administrasi']) && $item['intensitas_administrasi'] !== null) {
                $this->formData['kegiatan'][$key]['intensitas_administrasi_numeric'] = $this->getNumericValue($item['intensitas_administrasi']);
            }
            
            if (isset($item['intensitas_operasional']) && $item['intensitas_operasional'] !== null) {
                $this->formData['kegiatan'][$key]['intensitas_operasional_numeric'] = $this->getNumericValue($item['intensitas_operasional']);
            }
            
            if (isset($item['intensitas']) && $item['intensitas'] !== null) {
                $this->formData['kegiatan'][$key]['intensitas_numeric'] = $this->getNumericValue($item['intensitas']);
            }
        }
    }
    
    public function saveForm()
    {
        // Convert string values to numeric values
        $this->convertToNumericValues();
        
        // Calculate totals for each bidang
        $totals = $this->calculateAllTotals();
        
        // Get user NIP
        $pegawaiNip = Auth::guard('pegawai')->user()->nip;
        
        // Prepare form values with only totals and meta data
        $formValues = [
            'pegawai_nip' => $pegawaiNip,
            'total_pencegahan' => $totals['total_pencegahan'],
            'total_pemberdayaan_masyarakat' => $totals['total_pemberdayaan_masyarakat'],
            'total_rehabilitasi' => $totals['total_rehabilitasi'],
            'total_pemberantasan' => $totals['total_pemberantasan'],
            'total_keseluruhan' => $totals['total_keseluruhan'],
            'tanggal_penilaian' => Carbon::now(),
            'periode_penilaian' => Carbon::now()->format('Y-m'),
            'status' => 'submitted'
        ];
        
        // Check if a form for this pegawai already exists for current period
        $existingForm = P4gnForm::where('pegawai_nip', $pegawaiNip)
                               ->where('periode_penilaian', Carbon::now()->format('Y-m'))
                               ->first();
        
        try {
            if ($existingForm) {
                // Update existing record
                $existingForm->update($formValues);
            } else {
                // Create new record
                P4gnForm::create($formValues);
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
     * Calculate total score for Bidang Pencegahan
     */
    private function calculateTotalPencegahan()
    {
        // Fields with both admin and operational intensities
        $dualFields = [
            'daya_tangkal_remaja',
            'daya_tangkal_keluarga'
        ];
        
        // Fields with single intensity
        $singleFields = [
            'kampanye_p4gn_elektronik',
            'kampanye_p4gn_luar_ruang',
            'koordinasi_stakeholder',
            'rangkaian_hani',
            'penyuluhan_tatap_muka',
            'pembentukan_desa_bersinar',
            'inspektur_upacara',
            'car_free_day',
            'kie_keliling'
        ];
        
        return $this->calculateSectionTotal($dualFields, $singleFields);
    }
    
    /**
     * Calculate total score for Bidang Pemberdayaan Masyarakat
     */
    private function calculateTotalPemberdayaanMasyarakat()
    {
        // Fields with both admin and operational intensities
        $dualFields = [
            'bimbingan_teknis_penggiat',
            'rapat_koordinasi_pengembangan',
            'asistensi_kota_kabupaten',
            'konsolidasi_kebijakan',
            'monitoring_evaluasi_program',
            'pengumpulan_data_indeks',
            'pemetaan_potensi_sdm_sda',
            'rapat_kerja_sinergi',
            'bimbingan_teknis_lifeskill',
            'monitoring_evaluasi_program_alternatif'
        ];
        
        // Fields with single intensity
        $singleFields = [
            'pemberdayaan_tes_urine',
            'audiensi_stakeholder',
            'bimbingan_teknis_swadaya',
            'sosialisasi_p4gn'
        ];
        
        return $this->calculateSectionTotal($dualFields, $singleFields);
    }
    
    /**
     * Calculate total score for Bidang Rehabilitasi
     */
    private function calculateTotalRehabilitasi()
    {
        // Fields with admin and operational intensities
        $dualFields = [
            'pemeriksaan_kesehatan',
            'bimbingan_teknis_agen_pemulihan',
            'asistensi_lrkm_sil'
        ];
        
        // Fields with single intensity
        $singleFields = [
            'layanan_rehabilitasi_rawat_jalan',
            'layanan_skhpn',
            'pengelolaan_klinik',
            'rehabilitasi_lapas',
            'koordinasi_stakeholder_rehabilitasi',
            'pengelolaan_ibm'
        ];
        
        return $this->calculateSectionTotal($dualFields, $singleFields);
    }
    
    /**
     * Calculate total score for Bidang Pemberantasan
     */
    private function calculateTotalPemberantasan()
    {
        // Fields with both admin and operational intensities
        $dualFields = [
            'asesmen',
            'pemetaan_jaringan',
            'tindak_lanjut_pengaduan'
        ];
        
        // Fields with single intensity
        $singleFields = [
            'pengawasan_tahanan',
            'patroli',
            'pengawasan_barang_bukti',
            'analisa_kasus'
        ];
        
        return $this->calculateSectionTotal($dualFields, $singleFields);
    }
    
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
     * Calculate all totals for form sections
     * @return array Totals for each section and overall total
     */
    private function calculateAllTotals()
    {
        $totalPencegahan = $this->calculateTotalPencegahan();
        $totalPemberdayaanMasyarakat = $this->calculateTotalPemberdayaanMasyarakat();
        $totalRehabilitasi = $this->calculateTotalRehabilitasi();
        $totalPemberantasan = $this->calculateTotalPemberantasan();
        $totalKeseluruhan = $totalPencegahan + $totalPemberdayaanMasyarakat + 
                          $totalRehabilitasi + $totalPemberantasan;
        
        return [
            'total_pencegahan' => $totalPencegahan,
            'total_pemberdayaan_masyarakat' => $totalPemberdayaanMasyarakat,
            'total_rehabilitasi' => $totalRehabilitasi,
            'total_pemberantasan' => $totalPemberantasan,
            'total_keseluruhan' => $totalKeseluruhan,
        ];
    }
    
    /**
     * Delete the current form for this user and period
     */
    public function deleteForm()
    {
        $pegawaiNip = Auth::guard('pegawai')->user()->nip;
        $form = P4gnForm::where('pegawai_nip', $pegawaiNip)
                        ->where('periode_penilaian', Carbon::now()->format('Y-m'))
                        ->first();
        
        if ($form) {
            $form->delete();
            
            // Reset form data
            $this->initFormData();
            
            // Flash message
            session()->flash('message', 'Form berhasil dihapus!');
            
            // Redirect to dashboard
            return redirect()->route($this->userRole . '.dashboard');
        }
        
        session()->flash('error', 'Form tidak ditemukan!');
    }

    public function render()
    {
        // Get existing form for the current period
        $existingForm = null;
        if ($this->isLoggedIn) {
            $pegawaiNip = Auth::guard('pegawai')->user()->nip;
            $existingForm = P4gnForm::where('pegawai_nip', $pegawaiNip)
                                   ->where('periode_penilaian', Carbon::now()->format('Y-m'))
                                   ->first();
        }
        
        return view('livewire.pegawai.p4gform.main.index', [
            'formStatus' => $existingForm ? $existingForm->status : null,
            'lastUpdated' => $existingForm ? $existingForm->updated_at : null,
            'currentPeriod' => Carbon::now()->format('Y-m'),
            'existingForm' => $existingForm
        ]);
    }
}
