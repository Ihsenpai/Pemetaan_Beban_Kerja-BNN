<!-- Layanan Konseling Klinik -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">1. Meningkatnya Kualitas Hidup Klien, Kegiatan : Layanan Konseling Klinik</h4>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <h5 class="font-medium text-blue-700 mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Intensitas Administrasi:
            </h5>
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pemeriksaan_kesehatan_administrasi" wire:model="formData.kegiatan.pemeriksaan_kesehatan.intensitas_administrasi" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pemeriksaan_kesehatan_administrasi" wire:model="formData.kegiatan.pemeriksaan_kesehatan.intensitas_administrasi" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pemeriksaan_kesehatan_administrasi" wire:model="formData.kegiatan.pemeriksaan_kesehatan.intensitas_administrasi" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pemeriksaan_kesehatan_administrasi" wire:model="formData.kegiatan.pemeriksaan_kesehatan.intensitas_administrasi" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pemeriksaan_kesehatan_administrasi" wire:model="formData.kegiatan.pemeriksaan_kesehatan.intensitas_administrasi" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutinitas (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
        
        <div class="bg-blue-50 p-5 rounded-lg">
            <h5 class="font-medium text-blue-700 mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Intensitas Operasional:
            </h5>
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pemeriksaan_kesehatan_operasional" wire:model="formData.kegiatan.pemeriksaan_kesehatan.intensitas_operasional" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pemeriksaan_kesehatan_operasional" wire:model="formData.kegiatan.pemeriksaan_kesehatan.intensitas_operasional" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pemeriksaan_kesehatan_operasional" wire:model="formData.kegiatan.pemeriksaan_kesehatan.intensitas_operasional" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pemeriksaan_kesehatan_operasional" wire:model="formData.kegiatan.pemeriksaan_kesehatan.intensitas_operasional" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pemeriksaan_kesehatan_operasional" wire:model="formData.kegiatan.pemeriksaan_kesehatan.intensitas_operasional" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutinitas (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Bimbingan Teknis Agen Pemulihan -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">2. Meningkatnya kapasitas tenaga teknis Rehabilitasi Intervensi Berbasis Masyarakat Kegiatan : Bimbingan Teknis Agen Pemulihan</h4>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <h5 class="font-medium text-blue-700 mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Intensitas Administrasi:
            </h5>
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="bimbingan_teknis_agen_pemulihan_administrasi" wire:model="formData.kegiatan.bimbingan_teknis_agen_pemulihan.intensitas_administrasi" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="bimbingan_teknis_agen_pemulihan_administrasi" wire:model="formData.kegiatan.bimbingan_teknis_agen_pemulihan.intensitas_administrasi" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="bimbingan_teknis_agen_pemulihan_administrasi" wire:model="formData.kegiatan.bimbingan_teknis_agen_pemulihan.intensitas_administrasi" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="bimbingan_teknis_agen_pemulihan_administrasi" wire:model="formData.kegiatan.bimbingan_teknis_agen_pemulihan.intensitas_administrasi" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="bimbingan_teknis_agen_pemulihan_administrasi" wire:model="formData.kegiatan.bimbingan_teknis_agen_pemulihan.intensitas_administrasi" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutinitas (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
        
        <div class="bg-blue-50 p-5 rounded-lg">
            <h5 class="font-medium text-blue-700 mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Intensitas Operasional:
            </h5>
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="bimbingan_teknis_agen_pemulihan_operasional" wire:model="formData.kegiatan.bimbingan_teknis_agen_pemulihan.intensitas_operasional" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="bimbingan_teknis_agen_pemulihan_operasional" wire:model="formData.kegiatan.bimbingan_teknis_agen_pemulihan.intensitas_operasional" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="bimbingan_teknis_agen_pemulihan_operasional" wire:model="formData.kegiatan.bimbingan_teknis_agen_pemulihan.intensitas_operasional" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="bimbingan_teknis_agen_pemulihan_operasional" wire:model="formData.kegiatan.bimbingan_teknis_agen_pemulihan.intensitas_operasional" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="bimbingan_teknis_agen_pemulihan_operasional" wire:model="formData.kegiatan.bimbingan_teknis_agen_pemulihan.intensitas_operasional" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutinitas (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Asistensi LRKM dan SIL -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">3. Penyelenggaraan Lembaga Rehabilitasi Komponen Masyarakat dan Lembaga Rehabilitasi Instansi Pemerintah yang Operasional, Kegiatan : Asistensi LRKM, Skrining dan Intervensi Lapangan (SIL)</h4>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <h5 class="font-medium text-blue-700 mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Intensitas Administrasi:
            </h5>
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="asistensi_lrkm_sil_administrasi" wire:model="formData.kegiatan.asistensi_lrkm_sil.intensitas_administrasi" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="asistensi_lrkm_sil_administrasi" wire:model="formData.kegiatan.asistensi_lrkm_sil.intensitas_administrasi" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="asistensi_lrkm_sil_administrasi" wire:model="formData.kegiatan.asistensi_lrkm_sil.intensitas_administrasi" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="asistensi_lrkm_sil_administrasi" wire:model="formData.kegiatan.asistensi_lrkm_sil.intensitas_administrasi" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="asistensi_lrkm_sil_administrasi" wire:model="formData.kegiatan.asistensi_lrkm_sil.intensitas_administrasi" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutinitas (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
        
        <div class="bg-blue-50 p-5 rounded-lg">
            <h5 class="font-medium text-blue-700 mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Intensitas Operasional:
            </h5>
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="asistensi_lrkm_sil_operasional" wire:model="formData.kegiatan.asistensi_lrkm_sil.intensitas_operasional" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="asistensi_lrkm_sil_operasional" wire:model="formData.kegiatan.asistensi_lrkm_sil.intensitas_operasional" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="asistensi_lrkm_sil_operasional" wire:model="formData.kegiatan.asistensi_lrkm_sil.intensitas_operasional" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="asistensi_lrkm_sil_operasional" wire:model="formData.kegiatan.asistensi_lrkm_sil.intensitas_operasional" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="asistensi_lrkm_sil_operasional" wire:model="formData.kegiatan.asistensi_lrkm_sil.intensitas_operasional" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutinitas (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Layanan Rehabilitasi Rawat Jalan dan Pascarehabilitasi -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">4. Meningkatnya Indeks Kepuasan Masyarakat Penerima layanan Rehabilitasi Narkotika Kegiatan : Layanan Rehabilitasi Rawat Jalan dan Pascarehabilitasi</h4>
    
    <div class="grid grid-cols-1 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="layanan_rehabilitasi_rawat_jalan" wire:model="formData.kegiatan.layanan_rehabilitasi_rawat_jalan.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="layanan_rehabilitasi_rawat_jalan" wire:model="formData.kegiatan.layanan_rehabilitasi_rawat_jalan.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="layanan_rehabilitasi_rawat_jalan" wire:model="formData.kegiatan.layanan_rehabilitasi_rawat_jalan.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="layanan_rehabilitasi_rawat_jalan" wire:model="formData.kegiatan.layanan_rehabilitasi_rawat_jalan.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="layanan_rehabilitasi_rawat_jalan" wire:model="formData.kegiatan.layanan_rehabilitasi_rawat_jalan.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Layanan SKHPN -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">5. Layanan SKHPN</h4>
    
    <div class="grid grid-cols-1 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="layanan_skhpn" wire:model="formData.kegiatan.layanan_skhpn.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="layanan_skhpn" wire:model="formData.kegiatan.layanan_skhpn.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="layanan_skhpn" wire:model="formData.kegiatan.layanan_skhpn.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="layanan_skhpn" wire:model="formData.kegiatan.layanan_skhpn.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="layanan_skhpn" wire:model="formData.kegiatan.layanan_skhpn.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Pengelolaan Klinik -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">6. Pengelolaan Klinik</h4>
    
    <div class="grid grid-cols-1 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pengelolaan_klinik" wire:model="formData.kegiatan.pengelolaan_klinik.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pengelolaan_klinik" wire:model="formData.kegiatan.pengelolaan_klinik.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pengelolaan_klinik" wire:model="formData.kegiatan.pengelolaan_klinik.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pengelolaan_klinik" wire:model="formData.kegiatan.pengelolaan_klinik.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pengelolaan_klinik" wire:model="formData.kegiatan.pengelolaan_klinik.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Layanan Rehabilitasi di Lapas Narkotika -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">7. Layanan Rehabilitasi di Lapas Narkotika Nusakambangan</h4>
    
    <div class="grid grid-cols-1 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="rehabilitasi_lapas" wire:model="formData.kegiatan.rehabilitasi_lapas.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="rehabilitasi_lapas" wire:model="formData.kegiatan.rehabilitasi_lapas.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="rehabilitasi_lapas" wire:model="formData.kegiatan.rehabilitasi_lapas.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="rehabilitasi_lapas" wire:model="formData.kegiatan.rehabilitasi_lapas.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="rehabilitasi_lapas" wire:model="formData.kegiatan.rehabilitasi_lapas.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Koordinasi Stakeholder -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">8. Koordinasi Stakeholder Bidang Rehabilitasi</h4>
    
    <div class="grid grid-cols-1 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="koordinasi_stakeholder_rehabilitasi" wire:model="formData.kegiatan.koordinasi_stakeholder_rehabilitasi.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="koordinasi_stakeholder_rehabilitasi" wire:model="formData.kegiatan.koordinasi_stakeholder_rehabilitasi.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="koordinasi_stakeholder_rehabilitasi" wire:model="formData.kegiatan.koordinasi_stakeholder_rehabilitasi.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="koordinasi_stakeholder_rehabilitasi" wire:model="formData.kegiatan.koordinasi_stakeholder_rehabilitasi.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="koordinasi_stakeholder_rehabilitasi" wire:model="formData.kegiatan.koordinasi_stakeholder_rehabilitasi.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Pengelolaan Berkelanjutan Unit IBM -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">9. Pengelolaan Berkelanjutan Unit IBM Terbentuk</h4>
    
    <div class="grid grid-cols-1 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pengelolaan_ibm" wire:model="formData.kegiatan.pengelolaan_ibm.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pengelolaan_ibm" wire:model="formData.kegiatan.pengelolaan_ibm.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pengelolaan_ibm" wire:model="formData.kegiatan.pengelolaan_ibm.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pengelolaan_ibm" wire:model="formData.kegiatan.pengelolaan_ibm.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pengelolaan_ibm" wire:model="formData.kegiatan.pengelolaan_ibm.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>
