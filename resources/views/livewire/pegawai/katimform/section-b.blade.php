<!-- Section B: Kerja Sama dan Komunikasi -->
<div class="mb-8">
    <div class="bg-blue-800 text-white p-4 rounded-lg flex justify-between items-center">
        <h3 class="text-lg font-semibold">B. Kerja Sama dan Komunikasi</h3>
        <button wire:click="toggleSection('sectionB')" type="button" class="focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform {{ $openSections['sectionB'] ? 'rotate-180' : '' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
    </div>

    <div class="border-b border-blue-300 mt-2 mb-6"></div>

    @if($openSections['sectionB'])
    <!-- Question 6 -->
    <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
        <h4 class="text-blue-800 font-semibold mb-4 text-lg text-left">6. Kemampuan bekerja dalam tim (Kemampuan untuk bekerja sama secara efektif dan harmonis)</h4>
        
        <div class="grid grid-cols-1 gap-8 mt-6">
            <div class="bg-blue-50 p-5 rounded-lg">
                <div class="space-y-3">
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="kerja_tim" wire:model="formData.evaluasi.kerja_tim" value="kurang" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Kurang</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="kerja_tim" wire:model="formData.evaluasi.kerja_tim" value="cukup" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Cukup</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="kerja_tim" wire:model="formData.evaluasi.kerja_tim" value="baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Baik</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="kerja_tim" wire:model="formData.evaluasi.kerja_tim" value="sangat_baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Sangat Baik</span>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <!-- Question 7 -->
    <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
        <h4 class="text-blue-800 font-semibold mb-4 text-lg text-left">7. Kemampuan Komunikasi (Kemampuan komunikasi yang efektif dan transparan kepada anggota tim)</h4>
        
        <div class="grid grid-cols-1 gap-8 mt-6">
            <div class="bg-blue-50 p-5 rounded-lg">
                <div class="space-y-3">
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="komunikasi" wire:model="formData.evaluasi.komunikasi" value="kurang" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Kurang</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="komunikasi" wire:model="formData.evaluasi.komunikasi" value="cukup" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Cukup</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="komunikasi" wire:model="formData.evaluasi.komunikasi" value="baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Baik</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="komunikasi" wire:model="formData.evaluasi.komunikasi" value="sangat_baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Sangat Baik</span>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <!-- Question 8 -->
    <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
        <h4 class="text-blue-800 font-semibold mb-4 text-lg text-left">8. Pemecahan Masalah (Kemampuan untuk mengidentifikasi dan menyelesaikan masalah)</h4>
        
        <div class="grid grid-cols-1 gap-8 mt-6">
            <div class="bg-blue-50 p-5 rounded-lg">
                <div class="space-y-3">
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="pemecahan_masalah" wire:model="formData.evaluasi.pemecahan_masalah" value="kurang" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Kurang</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="pemecahan_masalah" wire:model="formData.evaluasi.pemecahan_masalah" value="cukup" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Cukup</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="pemecahan_masalah" wire:model="formData.evaluasi.pemecahan_masalah" value="baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Baik</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="pemecahan_masalah" wire:model="formData.evaluasi.pemecahan_masalah" value="sangat_baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Sangat Baik</span>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <!-- Question 9 -->
    <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
        <h4 class="text-blue-800 font-semibold mb-4 text-lg text-left">9. Manajemen Konflik (Kemampuan untuk mengelola dan mengatasi konflik secara konstruktif)</h4>
        
        <div class="grid grid-cols-1 gap-8 mt-6">
            <div class="bg-blue-50 p-5 rounded-lg">
                <div class="space-y-3">
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="manajemen_konflik" wire:model="formData.evaluasi.manajemen_konflik" value="kurang" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Kurang</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="manajemen_konflik" wire:model="formData.evaluasi.manajemen_konflik" value="cukup" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Cukup</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="manajemen_konflik" wire:model="formData.evaluasi.manajemen_konflik" value="baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Baik</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="manajemen_konflik" wire:model="formData.evaluasi.manajemen_konflik" value="sangat_baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Sangat Baik</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
