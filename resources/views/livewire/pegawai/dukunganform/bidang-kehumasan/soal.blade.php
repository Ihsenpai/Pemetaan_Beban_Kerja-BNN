<!-- Produksi Konten -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">1. Produksi Konten</h4>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <h5 class="font-medium text-blue-700 mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Intensitas Peliputan:
            </h5>
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="produksi_konten_peliputan" wire:model="formData.kegiatan.produksi_konten.intensitas_peliputan" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="produksi_konten_peliputan" wire:model="formData.kegiatan.produksi_konten.intensitas_peliputan" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="produksi_konten_peliputan" wire:model="formData.kegiatan.produksi_konten.intensitas_peliputan" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="produksi_konten_peliputan" wire:model="formData.kegiatan.produksi_konten.intensitas_peliputan" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="produksi_konten_peliputan" wire:model="formData.kegiatan.produksi_konten.intensitas_peliputan" value="rutin" class="h-5 w-5 text-blue-600">
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
                Intensitas Editorial dan Produksi Konten:
            </h5>
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="produksi_konten_editorial" wire:model="formData.kegiatan.produksi_konten.intensitas_editorial" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="produksi_konten_editorial" wire:model="formData.kegiatan.produksi_konten.intensitas_editorial" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="produksi_konten_editorial" wire:model="formData.kegiatan.produksi_konten.intensitas_editorial" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="produksi_konten_editorial" wire:model="formData.kegiatan.produksi_konten.intensitas_editorial" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="produksi_konten_editorial" wire:model="formData.kegiatan.produksi_konten.intensitas_editorial" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutinitas (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Laporan Kehumasan -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">2. Laporan Kehumasan</h4>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <h5 class="font-medium text-blue-700 mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Intensitas Laporan Harian:
            </h5>
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="laporan_harian" wire:model="formData.kegiatan.laporan_kehumasan.intensitas_harian" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="laporan_harian" wire:model="formData.kegiatan.laporan_kehumasan.intensitas_harian" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="laporan_harian" wire:model="formData.kegiatan.laporan_kehumasan.intensitas_harian" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="laporan_harian" wire:model="formData.kegiatan.laporan_kehumasan.intensitas_harian" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="laporan_harian" wire:model="formData.kegiatan.laporan_kehumasan.intensitas_harian" value="rutin" class="h-5 w-5 text-blue-600">
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
                Intensitas Laporan Mingguan:
            </h5>
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="laporan_mingguan" wire:model="formData.kegiatan.laporan_kehumasan.intensitas_mingguan" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="laporan_mingguan" wire:model="formData.kegiatan.laporan_kehumasan.intensitas_mingguan" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="laporan_mingguan" wire:model="formData.kegiatan.laporan_kehumasan.intensitas_mingguan" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="laporan_mingguan" wire:model="formData.kegiatan.laporan_kehumasan.intensitas_mingguan" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="laporan_mingguan" wire:model="formData.kegiatan.laporan_kehumasan.intensitas_mingguan" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutinitas (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Pengelolaan Sosial Media dan Website Kelembagaan -->
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">3. Pengelolaan Sosial Media dan Website Kelembagaan</h4>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <h5 class="font-medium text-blue-700 mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Pengelolaan Sosial Media:
            </h5>
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="sosial_media" wire:model="formData.kegiatan.pengelolaan_media.intensitas_sosmed" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="sosial_media" wire:model="formData.kegiatan.pengelolaan_media.intensitas_sosmed" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="sosial_media" wire:model="formData.kegiatan.pengelolaan_media.intensitas_sosmed" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="sosial_media" wire:model="formData.kegiatan.pengelolaan_media.intensitas_sosmed" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="sosial_media" wire:model="formData.kegiatan.pengelolaan_media.intensitas_sosmed" value="rutin" class="h-5 w-5 text-blue-600">
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
                Pengelolaan Website Kelembagaan:
            </h5>
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="website_kelembagaan" wire:model="formData.kegiatan.pengelolaan_media.intensitas_website" value="tidak_pernah" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Tidak Pernah</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="website_kelembagaan" wire:model="formData.kegiatan.pengelolaan_media.intensitas_website" value="sesekali" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sesekali (1-2 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="website_kelembagaan" wire:model="formData.kegiatan.pengelolaan_media.intensitas_website" value="jarang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Jarang (3-5 Kali dalam setahun)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="website_kelembagaan" wire:model="formData.kegiatan.pengelolaan_media.intensitas_website" value="sering" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sering (Hampir setiap bulan)</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="website_kelembagaan" wire:model="formData.kegiatan.pengelolaan_media.intensitas_website" value="rutin" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Rutinitas (Dilaksanakan setiap bulan)</span>
                </label>
            </div>
        </div>
    </div>
</div>