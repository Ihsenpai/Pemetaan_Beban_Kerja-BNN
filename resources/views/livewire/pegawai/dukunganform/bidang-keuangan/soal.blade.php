<!-- Meningkatnya proses manajemen kinerja secara efektif dan efisien -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">1. Meningkatnya proses manajemen kinerja secara efektif dan efisien, Kegiatan : Tercapainya Nilai Kinerja Anggaran (NKA)</h4>
    
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
                    <input type="radio" name="nka_administrasi" wire:model="formData.kegiatan.nka.intensitas_administrasi" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="nka_administrasi" wire:model="formData.kegiatan.nka.intensitas_administrasi" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="nka_administrasi" wire:model="formData.kegiatan.nka.intensitas_administrasi" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="nka_administrasi" wire:model="formData.kegiatan.nka.intensitas_administrasi" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="nka_administrasi" wire:model="formData.kegiatan.nka.intensitas_administrasi" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
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
                    <input type="radio" name="nka_operasional" wire:model="formData.kegiatan.nka.intensitas_operasional" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="nka_operasional" wire:model="formData.kegiatan.nka.intensitas_operasional" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="nka_operasional" wire:model="formData.kegiatan.nka.intensitas_operasional" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="nka_operasional" wire:model="formData.kegiatan.nka.intensitas_operasional" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="nka_operasional" wire:model="formData.kegiatan.nka.intensitas_operasional" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Meningkatnya tata kelola administrasi keuangan yang sesuai prosedur -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">2. Meningkatnya tata kelola administrasi keuangan yang sesuai prosedur, Kegiatan Tercapainya nilai Indeks Kinerja Pelaksanaan Anggaran (IKPA)</h4>
    
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
                    <input type="radio" name="ikpa_administrasi" wire:model="formData.kegiatan.ikpa.intensitas_administrasi" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="ikpa_administrasi" wire:model="formData.kegiatan.ikpa.intensitas_administrasi" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="ikpa_administrasi" wire:model="formData.kegiatan.ikpa.intensitas_administrasi" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="ikpa_administrasi" wire:model="formData.kegiatan.ikpa.intensitas_administrasi" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="ikpa_administrasi" wire:model="formData.kegiatan.ikpa.intensitas_administrasi" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
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
                    <input type="radio" name="ikpa_operasional" wire:model="formData.kegiatan.ikpa.intensitas_operasional" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="ikpa_operasional" wire:model="formData.kegiatan.ikpa.intensitas_operasional" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="ikpa_operasional" wire:model="formData.kegiatan.ikpa.intensitas_operasional" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="ikpa_operasional" wire:model="formData.kegiatan.ikpa.intensitas_operasional" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="ikpa_operasional" wire:model="formData.kegiatan.ikpa.intensitas_operasional" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Penyusunan Laporan Keuangan -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">3. Penyusunan Laporan Keuangan</h4>
    
    <div class="bg-blue-50 p-5 rounded-lg">
        <div class="space-y-3">
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="penyusunan_laporan_keuangan" wire:model="formData.kegiatan.penyusunan_laporan_keuangan.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Tidak Pernah</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="penyusunan_laporan_keuangan" wire:model="formData.kegiatan.penyusunan_laporan_keuangan.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="penyusunan_laporan_keuangan" wire:model="formData.kegiatan.penyusunan_laporan_keuangan.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="penyusunan_laporan_keuangan" wire:model="formData.kegiatan.penyusunan_laporan_keuangan.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="penyusunan_laporan_keuangan" wire:model="formData.kegiatan.penyusunan_laporan_keuangan.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
            </label>
        </div>
    </div>
</div>

<!-- Pengelolaan Administrasi Perbendaharaan -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">4. Pengelolaan Administrasi Perbendaharaan</h4>
    
    <div class="bg-blue-50 p-5 rounded-lg">
        <div class="space-y-3">
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_perbendaharaan" wire:model="formData.kegiatan.pengelolaan_perbendaharaan.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Tidak Pernah</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_perbendaharaan" wire:model="formData.kegiatan.pengelolaan_perbendaharaan.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_perbendaharaan" wire:model="formData.kegiatan.pengelolaan_perbendaharaan.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_perbendaharaan" wire:model="formData.kegiatan.pengelolaan_perbendaharaan.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_perbendaharaan" wire:model="formData.kegiatan.pengelolaan_perbendaharaan.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
            </label>
        </div>
    </div>
</div>

<!-- Pengelolaan Administrasi PNBP -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">5. Pengelolaan Administrasi PNBP</h4>
    
    <div class="bg-blue-50 p-5 rounded-lg">
        <div class="space-y-3">
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_pnbp" wire:model="formData.kegiatan.pengelolaan_pnbp.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Tidak Pernah</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_pnbp" wire:model="formData.kegiatan.pengelolaan_pnbp.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_pnbp" wire:model="formData.kegiatan.pengelolaan_pnbp.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_pnbp" wire:model="formData.kegiatan.pengelolaan_pnbp.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_pnbp" wire:model="formData.kegiatan.pengelolaan_pnbp.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
            </label>
        </div>
    </div>
</div>

<!-- Pengelolaan BMN -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">6. Pengelolaan BMN</h4>
    
    <div class="bg-blue-50 p-5 rounded-lg">
        <div class="space-y-3">
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_bmn" wire:model="formData.kegiatan.pengelolaan_bmn.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Tidak Pernah</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_bmn" wire:model="formData.kegiatan.pengelolaan_bmn.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_bmn" wire:model="formData.kegiatan.pengelolaan_bmn.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_bmn" wire:model="formData.kegiatan.pengelolaan_bmn.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_bmn" wire:model="formData.kegiatan.pengelolaan_bmn.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
            </label>
        </div>
    </div>
</div>

<!-- Pengelolaan Administrasi Barang Persediaan -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">7. Pengelolaan Administrasi Barang Persediaan</h4>
    
    <div class="bg-blue-50 p-5 rounded-lg">
        <div class="space-y-3">
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_barang_persediaan" wire:model="formData.kegiatan.pengelolaan_barang_persediaan.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Tidak Pernah</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_barang_persediaan" wire:model="formData.kegiatan.pengelolaan_barang_persediaan.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_barang_persediaan" wire:model="formData.kegiatan.pengelolaan_barang_persediaan.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_barang_persediaan" wire:model="formData.kegiatan.pengelolaan_barang_persediaan.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_barang_persediaan" wire:model="formData.kegiatan.pengelolaan_barang_persediaan.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
            </label>
        </div>
    </div>
</div>

<!-- Pengelolaan Administrasi Penggajian -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">8. Pengelolaan Administrasi Penggajian</h4>
    
    <div class="bg-blue-50 p-5 rounded-lg">
        <div class="space-y-3">
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_penggajian" wire:model="formData.kegiatan.pengelolaan_penggajian.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Tidak Pernah</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_penggajian" wire:model="formData.kegiatan.pengelolaan_penggajian.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_penggajian" wire:model="formData.kegiatan.pengelolaan_penggajian.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_penggajian" wire:model="formData.kegiatan.pengelolaan_penggajian.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="pengelolaan_penggajian" wire:model="formData.kegiatan.pengelolaan_penggajian.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
            </label>
        </div>
    </div>
</div>

<!-- Penyusunan Perencanaan Kinerja -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">9. Penyusunan Perencanaan Kinerja</h4>
    
    <div class="bg-blue-50 p-5 rounded-lg">
        <div class="space-y-3">
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="penyusunan_perencanaan_kinerja" wire:model="formData.kegiatan.penyusunan_perencanaan_kinerja.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Tidak Pernah</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="penyusunan_perencanaan_kinerja" wire:model="formData.kegiatan.penyusunan_perencanaan_kinerja.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="penyusunan_perencanaan_kinerja" wire:model="formData.kegiatan.penyusunan_perencanaan_kinerja.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="penyusunan_perencanaan_kinerja" wire:model="formData.kegiatan.penyusunan_perencanaan_kinerja.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="penyusunan_perencanaan_kinerja" wire:model="formData.kegiatan.penyusunan_perencanaan_kinerja.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
            </label>
        </div>
    </div>
</div>

<!-- Penyusunan RKAKL -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">10. Penyusunan RKAKL</h4>
    
    <div class="bg-blue-50 p-5 rounded-lg">
        <div class="space-y-3">
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="penyusunan_rkakl" wire:model="formData.kegiatan.penyusunan_rkakl.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Tidak Pernah</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="penyusunan_rkakl" wire:model="formData.kegiatan.penyusunan_rkakl.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="penyusunan_rkakl" wire:model="formData.kegiatan.penyusunan_rkakl.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="penyusunan_rkakl" wire:model="formData.kegiatan.penyusunan_rkakl.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="penyusunan_rkakl" wire:model="formData.kegiatan.penyusunan_rkakl.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
            </label>
        </div>
    </div>
</div>

<!-- Revisi Anggaran -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">11. Revisi Anggaran</h4>
    
    <div class="bg-blue-50 p-5 rounded-lg">
        <div class="space-y-3">
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="revisi_anggaran" wire:model="formData.kegiatan.revisi_anggaran.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Tidak Pernah</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="revisi_anggaran" wire:model="formData.kegiatan.revisi_anggaran.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="revisi_anggaran" wire:model="formData.kegiatan.revisi_anggaran.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="revisi_anggaran" wire:model="formData.kegiatan.revisi_anggaran.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="revisi_anggaran" wire:model="formData.kegiatan.revisi_anggaran.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
            </label>
        </div>
    </div>
</div>

<!-- Penyusunan Laporan Kinerja -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">12. Penyusunan Laporan Kinerja</h4>
    
    <div class="bg-blue-50 p-5 rounded-lg">
        <div class="space-y-3">
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="penyusunan_laporan_kinerja" wire:model="formData.kegiatan.penyusunan_laporan_kinerja.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Tidak Pernah</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="penyusunan_laporan_kinerja" wire:model="formData.kegiatan.penyusunan_laporan_kinerja.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="penyusunan_laporan_kinerja" wire:model="formData.kegiatan.penyusunan_laporan_kinerja.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="penyusunan_laporan_kinerja" wire:model="formData.kegiatan.penyusunan_laporan_kinerja.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
            </label>
            <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                <input type="radio" name="penyusunan_laporan_kinerja" wire:model="formData.kegiatan.penyusunan_laporan_kinerja.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
            </label>
        </div>
    </div>
</div>
