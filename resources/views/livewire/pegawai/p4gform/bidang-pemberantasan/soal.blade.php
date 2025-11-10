<!-- This file contains all the questions for Bidang Pemberantasan -->

<!-- Layanan Asesmen Terpadu -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">1. Layanan Asesmen Terpadu</h4>
    
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
                    <input type="radio" name="asesmen_administrasi" wire:model="formData.kegiatan.asesmen.intensitas_administrasi" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="asesmen_administrasi" wire:model="formData.kegiatan.asesmen.intensitas_administrasi" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="asesmen_administrasi" wire:model="formData.kegiatan.asesmen.intensitas_administrasi" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="asesmen_administrasi" wire:model="formData.kegiatan.asesmen.intensitas_administrasi" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="asesmen_administrasi" wire:model="formData.kegiatan.asesmen.intensitas_administrasi" value="rutin" class="h-5 w-5 text-blue-600">
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
                    <input type="radio" name="asesmen_operasional" wire:model="formData.kegiatan.asesmen.intensitas_operasional" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="asesmen_operasional" wire:model="formData.kegiatan.asesmen.intensitas_operasional" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="asesmen_operasional" wire:model="formData.kegiatan.asesmen.intensitas_operasional" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="asesmen_operasional" wire:model="formData.kegiatan.asesmen.intensitas_operasional" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="asesmen_operasional" wire:model="formData.kegiatan.asesmen.intensitas_operasional" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutinitas (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Pemetaan Jaringan Narkotika -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">2. Pemetaan Jaringan Narkotika</h4>
    
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
                    <input type="radio" name="pemetaan_jaringan_administrasi" wire:model="formData.kegiatan.pemetaan_jaringan.intensitas_administrasi" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pemetaan_jaringan_administrasi" wire:model="formData.kegiatan.pemetaan_jaringan.intensitas_administrasi" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pemetaan_jaringan_administrasi" wire:model="formData.kegiatan.pemetaan_jaringan.intensitas_administrasi" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pemetaan_jaringan_administrasi" wire:model="formData.kegiatan.pemetaan_jaringan.intensitas_administrasi" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pemetaan_jaringan_administrasi" wire:model="formData.kegiatan.pemetaan_jaringan.intensitas_administrasi" value="rutin" class="h-5 w-5 text-blue-600">
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
                    <input type="radio" name="pemetaan_jaringan_operasional" wire:model="formData.kegiatan.pemetaan_jaringan.intensitas_operasional" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pemetaan_jaringan_operasional" wire:model="formData.kegiatan.pemetaan_jaringan.intensitas_operasional" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pemetaan_jaringan_operasional" wire:model="formData.kegiatan.pemetaan_jaringan.intensitas_operasional" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pemetaan_jaringan_operasional" wire:model="formData.kegiatan.pemetaan_jaringan.intensitas_operasional" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="pemetaan_jaringan_operasional" wire:model="formData.kegiatan.pemetaan_jaringan.intensitas_operasional" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutinitas (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Tindak Lanjut Pengaduan Masyarakat (TP Narkotika) -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">3. Tindak Lanjut Pengaduan Masyarakat (TP Narkotika)</h4>
    
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
                    <input type="radio" name="tindak_lanjut_pengaduan_administrasi" wire:model="formData.kegiatan.tindak_lanjut_pengaduan.intensitas_administrasi" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="tindak_lanjut_pengaduan_administrasi" wire:model="formData.kegiatan.tindak_lanjut_pengaduan.intensitas_administrasi" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="tindak_lanjut_pengaduan_administrasi" wire:model="formData.kegiatan.tindak_lanjut_pengaduan.intensitas_administrasi" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="tindak_lanjut_pengaduan_administrasi" wire:model="formData.kegiatan.tindak_lanjut_pengaduan.intensitas_administrasi" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="tindak_lanjut_pengaduan_administrasi" wire:model="formData.kegiatan.tindak_lanjut_pengaduan.intensitas_administrasi" value="rutin" class="h-5 w-5 text-blue-600">
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
                    <input type="radio" name="tindak_lanjut_pengaduan_operasional" wire:model="formData.kegiatan.tindak_lanjut_pengaduan.intensitas_operasional" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="tindak_lanjut_pengaduan_operasional" wire:model="formData.kegiatan.tindak_lanjut_pengaduan.intensitas_operasional" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="tindak_lanjut_pengaduan_operasional" wire:model="formData.kegiatan.tindak_lanjut_pengaduan.intensitas_operasional" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="tindak_lanjut_pengaduan_operasional" wire:model="formData.kegiatan.tindak_lanjut_pengaduan.intensitas_operasional" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="tindak_lanjut_pengaduan_operasional" wire:model="formData.kegiatan.tindak_lanjut_pengaduan.intensitas_operasional" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutinitas (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Tim Pora (Pengawasan Orang Asing) Imigrasi -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">4. Tim Pora (Pengawasan Orang Asing) Imigrasi</h4>
    
    <div class="grid grid-cols-1 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="tim_pora" wire:model="formData.kegiatan.pengawasan_tahanan.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="tim_pora" wire:model="formData.kegiatan.pengawasan_tahanan.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="tim_pora" wire:model="formData.kegiatan.pengawasan_tahanan.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="tim_pora" wire:model="formData.kegiatan.pengawasan_tahanan.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="tim_pora" wire:model="formData.kegiatan.pengawasan_tahanan.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Tim Mandu (Pengamanan Terpadu) PPSC -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">5. Tim Mandu (Pengamanan Terpadu) PPSC</h4>
    
    <div class="grid grid-cols-1 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="tim_mandu" wire:model="formData.kegiatan.patroli.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="tim_mandu" wire:model="formData.kegiatan.patroli.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="tim_mandu" wire:model="formData.kegiatan.patroli.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="tim_mandu" wire:model="formData.kegiatan.patroli.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="tim_mandu" wire:model="formData.kegiatan.patroli.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Razia THM, dan Hunian Privasi -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">6. Razia THM, dan Hunian Privasi</h4>
    
    <div class="grid grid-cols-1 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="razia_thm" wire:model="formData.kegiatan.pengawasan_barang_bukti.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="razia_thm" wire:model="formData.kegiatan.pengawasan_barang_bukti.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="razia_thm" wire:model="formData.kegiatan.pengawasan_barang_bukti.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="razia_thm" wire:model="formData.kegiatan.pengawasan_barang_bukti.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="razia_thm" wire:model="formData.kegiatan.pengawasan_barang_bukti.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Koordinasi Stakeholder Bidang Pemberantasan -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">7. Koordinasi Stakeholder Bidang Pemberantasan</h4>
    
    <div class="grid grid-cols-1 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="koordinasi_stakeholder" wire:model="formData.kegiatan.analisa_kasus.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="koordinasi_stakeholder" wire:model="formData.kegiatan.analisa_kasus.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="koordinasi_stakeholder" wire:model="formData.kegiatan.analisa_kasus.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="koordinasi_stakeholder" wire:model="formData.kegiatan.analisa_kasus.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="koordinasi_stakeholder" wire:model="formData.kegiatan.analisa_kasus.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>