<!-- Section A: Efektivitas dalam Mencapai Tujuan -->
<div class="mb-8">
    <div class="bg-blue-800 text-white p-4 rounded-lg flex justify-between items-center">
        <h3 class="text-lg font-semibold">A. Efektivitas dalam Mencapai Tujuan</h3>
        <button wire:click="toggleSection('sectionA')" type="button" class="focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform {{ $openSections['sectionA'] ? 'rotate-180' : '' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
    </div>

    <div class="border-b border-blue-300 mt-2 mb-6"></div>

    @if($openSections['sectionA'])
    <!-- Question 1 -->
    <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
        <h4 class="text-blue-800 font-semibold mb-4 text-lg text-left">1. Penilaian Pencapaian Tujuan (Kemampuan membawa tim mencapai target dan tujuan yang telah ditetapkan)</h4>
        
        <div class="grid grid-cols-1 gap-8 mt-6">
            <div class="bg-blue-50 p-5 rounded-lg">
                <div class="space-y-3">
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="pencapaian_tujuan" wire:model="formData.evaluasi.pencapaian_tujuan" value="kurang" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Kurang</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="pencapaian_tujuan" wire:model="formData.evaluasi.pencapaian_tujuan" value="cukup" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Cukup</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="pencapaian_tujuan" wire:model="formData.evaluasi.pencapaian_tujuan" value="baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Baik</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="pencapaian_tujuan" wire:model="formData.evaluasi.pencapaian_tujuan" value="sangat_baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Sangat Baik</span>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <!-- Question 2 -->
    <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
        <h4 class="text-blue-800 font-semibold mb-4 text-lg text-left">2. Penilaian Produktivitas (Tingkat efisiensi dan efektivitas Ketua Tim dalam menyelesaikan pekerjaan)</h4>
        
        <div class="grid grid-cols-1 gap-8 mt-6">
            <div class="bg-blue-50 p-5 rounded-lg">
                <div class="space-y-3">
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="produktivitas" wire:model="formData.evaluasi.produktivitas" value="kurang" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Kurang</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="produktivitas" wire:model="formData.evaluasi.produktivitas" value="cukup" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Cukup</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="produktivitas" wire:model="formData.evaluasi.produktivitas" value="baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Baik</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="produktivitas" wire:model="formData.evaluasi.produktivitas" value="sangat_baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Sangat Baik</span>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <!-- Question 3 -->
    <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
        <h4 class="text-blue-800 font-semibold mb-4 text-lg text-left">3. Penilaian Ketepatan Waktu (Kemampuan membawa tim menyelesaikan pekerjaan sesuai target waktu yang telah ditentukan)</h4>
        
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

    <!-- Question 4 -->
    <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
        <h4 class="text-blue-800 font-semibold mb-4 text-lg text-left">4. Kemampuan mendelegasikan pekerjaan atau delegation skills (kemampuan untuk secara efektif membagi suatu pekerjaan kepada tim kerja)</h4>
        
        <div class="grid grid-cols-1 gap-8 mt-6">
            <div class="bg-blue-50 p-5 rounded-lg">
                <div class="space-y-3">
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="delegasi" wire:model="formData.evaluasi.delegasi" value="kurang" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Kurang</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="delegasi" wire:model="formData.evaluasi.delegasi" value="cukup" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Cukup</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="delegasi" wire:model="formData.evaluasi.delegasi" value="baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Baik</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="delegasi" wire:model="formData.evaluasi.delegasi" value="sangat_baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Sangat Baik</span>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <!-- Question 5 -->
    <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
        <h4 class="text-blue-800 font-semibold mb-4 text-lg text-left">5. Penilaian Komitmen Kerja (Kesetiaan dan dedikasi Ketua Tim terhadap pekerjaan dan organisasi)</h4>
        
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
    @endif
</div>
