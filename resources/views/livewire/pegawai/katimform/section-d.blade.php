<!-- Section D: Kompetensi dan Pengembangan Diri -->
<div class="mb-8">
    <div class="bg-blue-800 text-white p-4 rounded-lg flex justify-between items-center">
        <h3 class="text-lg font-semibold">D. Kompetensi dan Pengembangan Diri</h3>
        <button wire:click="toggleSection('sectionD')" type="button" class="focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform {{ $openSections['sectionD'] ? 'rotate-180' : '' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
    </div>

    <div class="border-b border-blue-300 mt-2 mb-6"></div>

    @if($openSections['sectionD'])
    <!-- Question 12 -->
    <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
        <h4 class="text-blue-800 font-semibold mb-4 text-lg text-left">12. Inisiatif Pengembangan Diri (Seberapa aktif dalam mengembangkan kompetensi dan pengetahuan)</h4>
        
        <div class="grid grid-cols-1 gap-8 mt-6">
            <div class="bg-blue-50 p-5 rounded-lg">
                <div class="space-y-3">
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="pengembangan_diri" wire:model="formData.evaluasi.pengembangan_diri" value="kurang" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Kurang</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="pengembangan_diri" wire:model="formData.evaluasi.pengembangan_diri" value="cukup" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Cukup</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="pengembangan_diri" wire:model="formData.evaluasi.pengembangan_diri" value="baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Baik</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="pengembangan_diri" wire:model="formData.evaluasi.pengembangan_diri" value="sangat_baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Sangat Baik</span>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <!-- Question 13 -->
    <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
        <h4 class="text-blue-800 font-semibold mb-4 text-lg text-left">13. Kemampuan Analitis (Kemampuan menganalisis masalah dan mengambil keputusan)</h4>
        
        <div class="grid grid-cols-1 gap-8 mt-6">
            <div class="bg-blue-50 p-5 rounded-lg">
                <div class="space-y-3">
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="kemampuan_analitis" wire:model="formData.evaluasi.kemampuan_analitis" value="kurang" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Kurang</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="kemampuan_analitis" wire:model="formData.evaluasi.kemampuan_analitis" value="cukup" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Cukup</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="kemampuan_analitis" wire:model="formData.evaluasi.kemampuan_analitis" value="baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Baik</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="kemampuan_analitis" wire:model="formData.evaluasi.kemampuan_analitis" value="sangat_baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Sangat Baik</span>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <!-- Question 14 -->
    <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
        <h4 class="text-blue-800 font-semibold mb-4 text-lg text-left">14. Kepatuhan Terhadap Peraturan (Kemampuan mematuhi aturan dan prosedur yang berlaku)</h4>
        
        <div class="grid grid-cols-1 gap-8 mt-6">
            <div class="bg-blue-50 p-5 rounded-lg">
                <div class="space-y-3">
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="kepatuhan" wire:model="formData.evaluasi.kepatuhan" value="kurang" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Kurang</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="kepatuhan" wire:model="formData.evaluasi.kepatuhan" value="cukup" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Cukup</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="kepatuhan" wire:model="formData.evaluasi.kepatuhan" value="baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Baik</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="kepatuhan" wire:model="formData.evaluasi.kepatuhan" value="sangat_baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Sangat Baik</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
