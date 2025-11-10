<!-- Section A: Efektivitas dalam Mencapai Tujuan -->
<h3 class="text-xl font-bold text-blue-800 mb-6 border-b border-blue-200 pb-3">A. Efektivitas dalam Mencapai Tujuan</h3>

<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">1. Penilaian Kualitas Kerja (Kualitas hasil kerja, kerapihan, ketelitian, dan hasil kerja yang disajikan)</h4>
    
    <div class="grid grid-cols-1 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="kualitas_kerja" wire:model="formData.evaluasi.kualitas_kerja" value="kurang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Kurang</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="kualitas_kerja" wire:model="formData.evaluasi.kualitas_kerja" value="cukup" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Cukup</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="kualitas_kerja" wire:model="formData.evaluasi.kualitas_kerja" value="baik" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Baik</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="kualitas_kerja" wire:model="formData.evaluasi.kualitas_kerja" value="sangat_baik" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sangat Baik</span>
                </label>
            </div>
        </div>
    </div>
</div>

<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">2. Penilaian Kuantitas Kerja (Jumlah pekerjaan yang diselesaikan dalam periode tertentu)</h4>
    
    <div class="grid grid-cols-1 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="kuantitas_kerja" wire:model="formData.evaluasi.kuantitas_kerja" value="kurang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Kurang</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="kuantitas_kerja" wire:model="formData.evaluasi.kuantitas_kerja" value="cukup" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Cukup</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="kuantitas_kerja" wire:model="formData.evaluasi.kuantitas_kerja" value="baik" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Baik</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="kuantitas_kerja" wire:model="formData.evaluasi.kuantitas_kerja" value="sangat_baik" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sangat Baik</span>
                </label>
            </div>
        </div>
    </div>
</div>
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">3. Penilaian Ketepatan Waktu (Kemampuan menyelesaikan pekerjaan sesuai target waktu yang telah ditentukan)</h4>
    
    <div class="grid grid-cols-1 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="ketepatan_waktu" wire:model="formData.evaluasi.ketepatan_waktu" value="kurang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Kurang</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="ketepatan_waktu" wire:model="formData.evaluasi.ketepatan_waktu" value="cukup" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Cukup</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="ketepatan_waktu" wire:model="formData.evaluasi.ketepatan_waktu" value="baik" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Baik</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="ketepatan_waktu" wire:model="formData.evaluasi.ketepatan_waktu" value="sangat_baik" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sangat Baik</span>
                </label>
            </div>
        </div>
    </div>
</div>

<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">4. Penilaian Kemandirian (Kemampuan bekerja tanpa pengawasan dan mengambil inisiatif)</h4>
    
    <div class="grid grid-cols-1 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="kemandirian" wire:model="formData.evaluasi.kemandirian" value="kurang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Kurang</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="kemandirian" wire:model="formData.evaluasi.kemandirian" value="cukup" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Cukup</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="kemandirian" wire:model="formData.evaluasi.kemandirian" value="baik" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Baik</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="kemandirian" wire:model="formData.evaluasi.kemandirian" value="sangat_baik" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sangat Baik</span>
                </label>
            </div>
        </div>
    </div>
</div>

<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">5. Penilaian Komitmen Kerja (Kesetiaan dan dedikasi personil terhadap pekerjaan dan organisasi)</h4>
    
    <div class="grid grid-cols-1 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="komitmen_kerja" wire:model="formData.evaluasi.komitmen_kerja" value="kurang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Kurang</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="komitmen_kerja" wire:model="formData.evaluasi.komitmen_kerja" value="cukup" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Cukup</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="komitmen_kerja" wire:model="formData.evaluasi.komitmen_kerja" value="baik" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Baik</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="komitmen_kerja" wire:model="formData.evaluasi.komitmen_kerja" value="sangat_baik" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sangat Baik</span>
                </label>
            </div>
        </div>
    </div>
</div>

