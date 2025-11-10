<!-- Bimbingan Teknis Penggiat P4GN -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">1. Bimbingan Teknis Penggiat P4GN</h4>
    
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
                    <input type="radio" name="bimbingan_teknis_penggiat_administrasi" wire:model="formData.kegiatan.bimbingan_teknis_penggiat.intensitas_administrasi" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="bimbingan_teknis_penggiat_administrasi" wire:model="formData.kegiatan.bimbingan_teknis_penggiat.intensitas_administrasi" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="bimbingan_teknis_penggiat_administrasi" wire:model="formData.kegiatan.bimbingan_teknis_penggiat.intensitas_administrasi" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="bimbingan_teknis_penggiat_administrasi" wire:model="formData.kegiatan.bimbingan_teknis_penggiat.intensitas_administrasi" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="bimbingan_teknis_penggiat_administrasi" wire:model="formData.kegiatan.bimbingan_teknis_penggiat.intensitas_administrasi" value="rutin" class="h-5 w-5 text-blue-600">
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
                    <input type="radio" name="bimbingan_teknis_penggiat_operasional" wire:model="formData.kegiatan.bimbingan_teknis_penggiat.intensitas_operasional" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="bimbingan_teknis_penggiat_operasional" wire:model="formData.kegiatan.bimbingan_teknis_penggiat.intensitas_operasional" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="bimbingan_teknis_penggiat_operasional" wire:model="formData.kegiatan.bimbingan_teknis_penggiat.intensitas_operasional" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="bimbingan_teknis_penggiat_operasional" wire:model="formData.kegiatan.bimbingan_teknis_penggiat.intensitas_operasional" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="bimbingan_teknis_penggiat_operasional" wire:model="formData.kegiatan.bimbingan_teknis_penggiat.intensitas_operasional" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Rapat Koordinasi Pengembangan dan Pembinaan -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">2. Rapat Koordinasi Pengembangan dan Pembinaan Kota/Kabupaten Tanggapan Ancaman Narkoba</h4>
    
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
                    <input type="radio" name="rapat_koordinasi_pengembangan_administrasi" wire:model="formData.kegiatan.rapat_koordinasi_pengembangan.intensitas_administrasi" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="rapat_koordinasi_pengembangan_administrasi" wire:model="formData.kegiatan.rapat_koordinasi_pengembangan.intensitas_administrasi" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="rapat_koordinasi_pengembangan_administrasi" wire:model="formData.kegiatan.rapat_koordinasi_pengembangan.intensitas_administrasi" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="rapat_koordinasi_pengembangan_administrasi" wire:model="formData.kegiatan.rapat_koordinasi_pengembangan.intensitas_administrasi" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="rapat_koordinasi_pengembangan_administrasi" wire:model="formData.kegiatan.rapat_koordinasi_pengembangan.intensitas_administrasi" value="rutin" class="h-5 w-5 text-blue-600">
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
                    <input type="radio" name="rapat_koordinasi_pengembangan_operasional" wire:model="formData.kegiatan.rapat_koordinasi_pengembangan.intensitas_operasional" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="rapat_koordinasi_pengembangan_operasional" wire:model="formData.kegiatan.rapat_koordinasi_pengembangan.intensitas_operasional" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="rapat_koordinasi_pengembangan_operasional" wire:model="formData.kegiatan.rapat_koordinasi_pengembangan.intensitas_operasional" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="rapat_koordinasi_pengembangan_operasional" wire:model="formData.kegiatan.rapat_koordinasi_pengembangan.intensitas_operasional" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="rapat_koordinasi_pengembangan_operasional" wire:model="formData.kegiatan.rapat_koordinasi_pengembangan.intensitas_operasional" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Asistensi Kota/Kabupaten -->
                        <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
                            <h4 class="text-blue-800 font-semibold mb-4 text-lg">3. Asistensi Kota/Kabupaten Tanggapan Ancaman Narkoba</h4>
                            
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
                                            <input type="radio" name="asistensi_kota_kabupaten_administrasi" wire:model="formData.kegiatan.asistensi_kota_kabupaten.intensitas_administrasi" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Tidak Pernah</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="asistensi_kota_kabupaten_administrasi" wire:model="formData.kegiatan.asistensi_kota_kabupaten.intensitas_administrasi" value="sesekali" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="asistensi_kota_kabupaten_administrasi" wire:model="formData.kegiatan.asistensi_kota_kabupaten.intensitas_administrasi" value="jarang" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="asistensi_kota_kabupaten_administrasi" wire:model="formData.kegiatan.asistensi_kota_kabupaten.intensitas_administrasi" value="sering" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="asistensi_kota_kabupaten_administrasi" wire:model="formData.kegiatan.asistensi_kota_kabupaten.intensitas_administrasi" value="rutin" class="h-5 w-5 text-blue-600">
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
                                            <input type="radio" name="asistensi_kota_kabupaten_operasional" wire:model="formData.kegiatan.asistensi_kota_kabupaten.intensitas_operasional" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Tidak Pernah</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="asistensi_kota_kabupaten_operasional" wire:model="formData.kegiatan.asistensi_kota_kabupaten.intensitas_operasional" value="sesekali" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="asistensi_kota_kabupaten_operasional" wire:model="formData.kegiatan.asistensi_kota_kabupaten.intensitas_operasional" value="jarang" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="asistensi_kota_kabupaten_operasional" wire:model="formData.kegiatan.asistensi_kota_kabupaten.intensitas_operasional" value="sering" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="asistensi_kota_kabupaten_operasional" wire:model="formData.kegiatan.asistensi_kota_kabupaten.intensitas_operasional" value="rutin" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Konsolidasi Kebijakan -->
                        <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
                            <h4 class="text-blue-800 font-semibold mb-4 text-lg">4. Konsolidasi Kebijakan Kota/Kabupaten Tanggapan Ancaman Narkoba</h4>
                            
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
                                            <input type="radio" name="konsolidasi_kebijakan_administrasi" wire:model="formData.kegiatan.konsolidasi_kebijakan.intensitas_administrasi" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Tidak Pernah</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="konsolidasi_kebijakan_administrasi" wire:model="formData.kegiatan.konsolidasi_kebijakan.intensitas_administrasi" value="sesekali" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="konsolidasi_kebijakan_administrasi" wire:model="formData.kegiatan.konsolidasi_kebijakan.intensitas_administrasi" value="jarang" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="konsolidasi_kebijakan_administrasi" wire:model="formData.kegiatan.konsolidasi_kebijakan.intensitas_administrasi" value="sering" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="konsolidasi_kebijakan_administrasi" wire:model="formData.kegiatan.konsolidasi_kebijakan.intensitas_administrasi" value="rutin" class="h-5 w-5 text-blue-600">
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
                                            <input type="radio" name="konsolidasi_kebijakan_operasional" wire:model="formData.kegiatan.konsolidasi_kebijakan.intensitas_operasional" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Tidak Pernah</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="konsolidasi_kebijakan_operasional" wire:model="formData.kegiatan.konsolidasi_kebijakan.intensitas_operasional" value="sesekali" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="konsolidasi_kebijakan_operasional" wire:model="formData.kegiatan.konsolidasi_kebijakan.intensitas_operasional" value="jarang" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="konsolidasi_kebijakan_operasional" wire:model="formData.kegiatan.konsolidasi_kebijakan.intensitas_operasional" value="sering" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="konsolidasi_kebijakan_operasional" wire:model="formData.kegiatan.konsolidasi_kebijakan.intensitas_operasional" value="rutin" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Monitoring dan Evaluasi Program -->
                        <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
                            <h4 class="text-blue-800 font-semibold mb-4 text-lg">5. Monitoring dan Evaluasi Pelaksanaan Program Pemberdayaan Masyarakat</h4>
                            
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
                                            <input type="radio" name="monitoring_evaluasi_program_administrasi" wire:model="formData.kegiatan.monitoring_evaluasi_program.intensitas_administrasi" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Tidak Pernah</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="monitoring_evaluasi_program_administrasi" wire:model="formData.kegiatan.monitoring_evaluasi_program.intensitas_administrasi" value="sesekali" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="monitoring_evaluasi_program_administrasi" wire:model="formData.kegiatan.monitoring_evaluasi_program.intensitas_administrasi" value="jarang" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="monitoring_evaluasi_program_administrasi" wire:model="formData.kegiatan.monitoring_evaluasi_program.intensitas_administrasi" value="sering" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="monitoring_evaluasi_program_administrasi" wire:model="formData.kegiatan.monitoring_evaluasi_program.intensitas_administrasi" value="rutin" class="h-5 w-5 text-blue-600">
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
                                            <input type="radio" name="monitoring_evaluasi_program_operasional" wire:model="formData.kegiatan.monitoring_evaluasi_program.intensitas_operasional" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Tidak Pernah</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="monitoring_evaluasi_program_operasional" wire:model="formData.kegiatan.monitoring_evaluasi_program.intensitas_operasional" value="sesekali" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="monitoring_evaluasi_program_operasional" wire:model="formData.kegiatan.monitoring_evaluasi_program.intensitas_operasional" value="jarang" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="monitoring_evaluasi_program_operasional" wire:model="formData.kegiatan.monitoring_evaluasi_program.intensitas_operasional" value="sering" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="monitoring_evaluasi_program_operasional" wire:model="formData.kegiatan.monitoring_evaluasi_program.intensitas_operasional" value="rutin" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Pengumpulan data indeks -->
                        <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
                            <h4 class="text-blue-800 font-semibold mb-4 text-lg">6. Pengumpulan data indeks Kota/Kabupaten Tanggap Ancaman Narkoba</h4>
                            
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
                                            <input type="radio" name="pengumpulan_data_indeks_administrasi" wire:model="formData.kegiatan.pengumpulan_data_indeks.intensitas_administrasi" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Tidak Pernah</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="pengumpulan_data_indeks_administrasi" wire:model="formData.kegiatan.pengumpulan_data_indeks.intensitas_administrasi" value="sesekali" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="pengumpulan_data_indeks_administrasi" wire:model="formData.kegiatan.pengumpulan_data_indeks.intensitas_administrasi" value="jarang" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="pengumpulan_data_indeks_administrasi" wire:model="formData.kegiatan.pengumpulan_data_indeks.intensitas_administrasi" value="sering" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="pengumpulan_data_indeks_administrasi" wire:model="formData.kegiatan.pengumpulan_data_indeks.intensitas_administrasi" value="rutin" class="h-5 w-5 text-blue-600">
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
                                            <input type="radio" name="pengumpulan_data_indeks_operasional" wire:model="formData.kegiatan.pengumpulan_data_indeks.intensitas_operasional" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Tidak Pernah</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="pengumpulan_data_indeks_operasional" wire:model="formData.kegiatan.pengumpulan_data_indeks.intensitas_operasional" value="sesekali" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="pengumpulan_data_indeks_operasional" wire:model="formData.kegiatan.pengumpulan_data_indeks.intensitas_operasional" value="jarang" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="pengumpulan_data_indeks_operasional" wire:model="formData.kegiatan.pengumpulan_data_indeks.intensitas_operasional" value="sering" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="pengumpulan_data_indeks_operasional" wire:model="formData.kegiatan.pengumpulan_data_indeks.intensitas_operasional" value="rutin" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Pemetaan Potensi SDM dan SDA -->
                        <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
                            <h4 class="text-blue-800 font-semibold mb-4 text-lg">7. Pemetaan Potensi SDM dan SDA pada Kawasan Rawan Narkoba</h4>
                            
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
                                            <input type="radio" name="pemetaan_potensi_sdm_sda_administrasi" wire:model="formData.kegiatan.pemetaan_potensi_sdm_sda.intensitas_administrasi" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Tidak Pernah</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="pemetaan_potensi_sdm_sda_administrasi" wire:model="formData.kegiatan.pemetaan_potensi_sdm_sda.intensitas_administrasi" value="sesekali" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="pemetaan_potensi_sdm_sda_administrasi" wire:model="formData.kegiatan.pemetaan_potensi_sdm_sda.intensitas_administrasi" value="jarang" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="pemetaan_potensi_sdm_sda_administrasi" wire:model="formData.kegiatan.pemetaan_potensi_sdm_sda.intensitas_administrasi" value="sering" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="pemetaan_potensi_sdm_sda_administrasi" wire:model="formData.kegiatan.pemetaan_potensi_sdm_sda.intensitas_administrasi" value="rutin" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="bg-blue-50 p-5 rounded-lg">
                                    <h5 class="font-medium text-blue-700 mb-4 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                        </svg>
                                        Intensitas Operasional:
                                    </h5>
                                    <div class="space-y-3">
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="pemetaan_potensi_sdm_sda_operasional" wire:model="formData.kegiatan.pemetaan_potensi_sdm_sda.intensitas_operasional" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Tidak Pernah</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="pemetaan_potensi_sdm_sda_operasional" wire:model="formData.kegiatan.pemetaan_potensi_sdm_sda.intensitas_operasional" value="sesekali" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="pemetaan_potensi_sdm_sda_operasional" wire:model="formData.kegiatan.pemetaan_potensi_sdm_sda.intensitas_operasional" value="jarang" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="pemetaan_potensi_sdm_sda_operasional" wire:model="formData.kegiatan.pemetaan_potensi_sdm_sda.intensitas_operasional" value="sering" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="pemetaan_potensi_sdm_sda_operasional" wire:model="formData.kegiatan.pemetaan_potensi_sdm_sda.intensitas_operasional" value="rutin" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Rapat kerja dalam rangka sinergi -->
                        <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
                            <h4 class="text-blue-800 font-semibold mb-4 text-lg">8. Rapat kerja dalam rangka sinergi Program Pemberdayaan Alternatif dengan Stakeholder</h4>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
                                <div class="bg-blue-50 p-5 rounded-lg">
                                    <h5 class="font-medium text-blue-700 mb-4 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        Intensitas Administrasi:
                                    </h5>
                                    <div class="space-y-3">
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="rapat_kerja_sinergi_administrasi" wire:model="formData.kegiatan.rapat_kerja_sinergi.intensitas_administrasi" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Tidak Pernah</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="rapat_kerja_sinergi_administrasi" wire:model="formData.kegiatan.rapat_kerja_sinergi.intensitas_administrasi" value="sesekali" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="rapat_kerja_sinergi_administrasi" wire:model="formData.kegiatan.rapat_kerja_sinergi.intensitas_administrasi" value="jarang" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="rapat_kerja_sinergi_administrasi" wire:model="formData.kegiatan.rapat_kerja_sinergi.intensitas_administrasi" value="sering" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="rapat_kerja_sinergi_administrasi" wire:model="formData.kegiatan.rapat_kerja_sinergi.intensitas_administrasi" value="rutin" class="h-5 w-5 text-blue-600">
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
                                            <input type="radio" name="rapat_kerja_sinergi_operasional" wire:model="formData.kegiatan.rapat_kerja_sinergi.intensitas_operasional" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Tidak Pernah</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="rapat_kerja_sinergi_operasional" wire:model="formData.kegiatan.rapat_kerja_sinergi.intensitas_operasional" value="sesekali" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="rapat_kerja_sinergi_operasional" wire:model="formData.kegiatan.rapat_kerja_sinergi.intensitas_operasional" value="jarang" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="rapat_kerja_sinergi_operasional" wire:model="formData.kegiatan.rapat_kerja_sinergi.intensitas_operasional" value="sering" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="rapat_kerja_sinergi_operasional" wire:model="formData.kegiatan.rapat_kerja_sinergi.intensitas_operasional" value="rutin" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Bimbingan teknis Lifeskill -->
                        <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
                            <h4 class="text-blue-800 font-semibold mb-4 text-lg">9. Bimbingan teknis Lifeskill bagi masyarakat Kawasan Rawan Narkoba di Kabupaten/Kota</h4>
                            
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
                                            <input type="radio" name="bimbingan_teknis_lifeskill_administrasi" wire:model="formData.kegiatan.bimbingan_teknis_lifeskill.intensitas_administrasi" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Tidak Pernah</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="bimbingan_teknis_lifeskill_administrasi" wire:model="formData.kegiatan.bimbingan_teknis_lifeskill.intensitas_administrasi" value="sesekali" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="bimbingan_teknis_lifeskill_administrasi" wire:model="formData.kegiatan.bimbingan_teknis_lifeskill.intensitas_administrasi" value="jarang" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="bimbingan_teknis_lifeskill_administrasi" wire:model="formData.kegiatan.bimbingan_teknis_lifeskill.intensitas_administrasi" value="sering" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="bimbingan_teknis_lifeskill_administrasi" wire:model="formData.kegiatan.bimbingan_teknis_lifeskill.intensitas_administrasi" value="rutin" class="h-5 w-5 text-blue-600">
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
                                            <input type="radio" name="bimbingan_teknis_lifeskill_operasional" wire:model="formData.kegiatan.bimbingan_teknis_lifeskill.intensitas_operasional" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Tidak Pernah</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="bimbingan_teknis_lifeskill_operasional" wire:model="formData.kegiatan.bimbingan_teknis_lifeskill.intensitas_operasional" value="sesekali" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="bimbingan_teknis_lifeskill_operasional" wire:model="formData.kegiatan.bimbingan_teknis_lifeskill.intensitas_operasional" value="jarang" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="bimbingan_teknis_lifeskill_operasional" wire:model="formData.kegiatan.bimbingan_teknis_lifeskill.intensitas_operasional" value="sering" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="bimbingan_teknis_lifeskill_operasional" wire:model="formData.kegiatan.bimbingan_teknis_lifeskill.intensitas_operasional" value="rutin" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Monitoring dan Evaluasi Program Pemberdayaan Alternatif -->
                        <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
                            <h4 class="text-blue-800 font-semibold mb-4 text-lg">10. Monitoring dan Evaluasi Program Pemberdayaan Alternatif pada Kawasan Rawan Narkoba</h4>
                            
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
                                            <input type="radio" name="monitoring_evaluasi_program_alternatif_administrasi" wire:model="formData.kegiatan.monitoring_evaluasi_program_alternatif.intensitas_administrasi" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Tidak Pernah</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="monitoring_evaluasi_program_alternatif_administrasi" wire:model="formData.kegiatan.monitoring_evaluasi_program_alternatif.intensitas_administrasi" value="sesekali" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="monitoring_evaluasi_program_alternatif_administrasi" wire:model="formData.kegiatan.monitoring_evaluasi_program_alternatif.intensitas_administrasi" value="jarang" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="monitoring_evaluasi_program_alternatif_administrasi" wire:model="formData.kegiatan.monitoring_evaluasi_program_alternatif.intensitas_administrasi" value="sering" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="monitoring_evaluasi_program_alternatif_administrasi" wire:model="formData.kegiatan.monitoring_evaluasi_program_alternatif.intensitas_administrasi" value="rutin" class="h-5 w-5 text-blue-600">
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
                                            <input type="radio" name="monitoring_evaluasi_program_alternatif_operasional" wire:model="formData.kegiatan.monitoring_evaluasi_program_alternatif.intensitas_operasional" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Tidak Pernah</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="monitoring_evaluasi_program_alternatif_operasional" wire:model="formData.kegiatan.monitoring_evaluasi_program_alternatif.intensitas_operasional" value="sesekali" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="monitoring_evaluasi_program_alternatif_operasional" wire:model="formData.kegiatan.monitoring_evaluasi_program_alternatif.intensitas_operasional" value="jarang" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="monitoring_evaluasi_program_alternatif_operasional" wire:model="formData.kegiatan.monitoring_evaluasi_program_alternatif.intensitas_operasional" value="sering" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="monitoring_evaluasi_program_alternatif_operasional" wire:model="formData.kegiatan.monitoring_evaluasi_program_alternatif.intensitas_operasional" value="rutin" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Pemberdayaan masyarakat Anti Narkoba melalui Tes Urine -->
                        <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
                            <h4 class="text-blue-800 font-semibold mb-4 text-lg">11. Pemberdayaan masyarakat Anti Narkoba melalui Tes Urine</h4>
                            
                            <div class="grid grid-cols-1 gap-8 mt-6">
                                <div class="bg-blue-50 p-5 rounded-lg">
                                    <div class="space-y-3">
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="pemberdayaan_tes_urine_intensitas" wire:model="formData.kegiatan.pemberdayaan_tes_urine.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Tidak Pernah</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="pemberdayaan_tes_urine_intensitas" wire:model="formData.kegiatan.pemberdayaan_tes_urine.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="pemberdayaan_tes_urine_intensitas" wire:model="formData.kegiatan.pemberdayaan_tes_urine.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="pemberdayaan_tes_urine_intensitas" wire:model="formData.kegiatan.pemberdayaan_tes_urine.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="pemberdayaan_tes_urine_intensitas" wire:model="formData.kegiatan.pemberdayaan_tes_urine.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Audiensi dengan Stakeholder -->
                        <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
                            <h4 class="text-blue-800 font-semibold mb-4 text-lg">12. Audiensi dengan Stakeholder dalam rangka pemetaan Program Pemberdayaan Masyarakat</h4>
                            
                            <div class="grid grid-cols-1 gap-8 mt-6">
                                <div class="bg-blue-50 p-5 rounded-lg">
                                    <div class="space-y-3">
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="audiensi_stakeholder_intensitas" wire:model="formData.kegiatan.audiensi_stakeholder.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Tidak Pernah</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="audiensi_stakeholder_intensitas" wire:model="formData.kegiatan.audiensi_stakeholder.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="audiensi_stakeholder_intensitas" wire:model="formData.kegiatan.audiensi_stakeholder.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="audiensi_stakeholder_intensitas" wire:model="formData.kegiatan.audiensi_stakeholder.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="audiensi_stakeholder_intensitas" wire:model="formData.kegiatan.audiensi_stakeholder.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Bimbingan Teknis Penggiat P4GN (Swadaya) -->
                        <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
                            <h4 class="text-blue-800 font-semibold mb-4 text-lg">13. Bimbingan Teknis Penggiat P4GN (Swadaya)</h4>
                            
                            <div class="grid grid-cols-1 gap-8 mt-6">
                                <div class="bg-blue-50 p-5 rounded-lg">
                                    <div class="space-y-3">
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="bimbingan_teknis_swadaya_intensitas" wire:model="formData.kegiatan.bimbingan_teknis_swadaya.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Tidak Pernah</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="bimbingan_teknis_swadaya_intensitas" wire:model="formData.kegiatan.bimbingan_teknis_swadaya.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="bimbingan_teknis_swadaya_intensitas" wire:model="formData.kegiatan.bimbingan_teknis_swadaya.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="bimbingan_teknis_swadaya_intensitas" wire:model="formData.kegiatan.bimbingan_teknis_swadaya.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="bimbingan_teknis_swadaya_intensitas" wire:model="formData.kegiatan.bimbingan_teknis_swadaya.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Sosialisasi P4GN -->
                        <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
                            <h4 class="text-blue-800 font-semibold mb-4 text-lg">14. Sosialisasi P4GN (Safari Jum' at, Safari Minggu, atau Sosialisasi di lingkungan Masyarakat, Pendidikan, Swasta, dan Pemerintah)</h4>
                            
                            <div class="grid grid-cols-1 gap-8 mt-6">
                                <div class="bg-blue-50 p-5 rounded-lg">
                                    <div class="space-y-3">
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="sosialisasi_p4gn_intensitas" wire:model="formData.kegiatan.sosialisasi_p4gn.intensitas" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Tidak Pernah</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="sosialisasi_p4gn_intensitas" wire:model="formData.kegiatan.sosialisasi_p4gn.intensitas" value="sesekali" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="sosialisasi_p4gn_intensitas" wire:model="formData.kegiatan.sosialisasi_p4gn.intensitas" value="jarang" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="sosialisasi_p4gn_intensitas" wire:model="formData.kegiatan.sosialisasi_p4gn.intensitas" value="sering" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                                        </label>
                                        <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                                            <input type="radio" name="sosialisasi_p4gn_intensitas" wire:model="formData.kegiatan.sosialisasi_p4gn.intensitas" value="rutin" class="h-5 w-5 text-blue-600">
                                            <span class="ml-2 font-medium">Rutin (Dilaksanakan setiap bulan)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
