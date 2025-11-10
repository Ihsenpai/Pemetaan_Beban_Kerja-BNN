<!-- Section C: Kualitas Pekerjaan dan Kepemimpinan -->
<div class="mb-8">
    <div class="bg-blue-800 text-white p-4 rounded-lg flex justify-between items-center">
        <h3 class="text-lg font-semibold">C. Kualitas Pekerjaan dan Kepemimpinan</h3>
        <button wire:click="toggleSection('sectionC')" type="button" class="focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform {{ $openSections['sectionC'] ? 'rotate-180' : '' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
    </div>

    <div class="border-b border-blue-300 mt-2 mb-6"></div>

    @if($openSections['sectionC'])
    <!-- Question 10 -->
    <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
        <h4 class="text-blue-800 font-semibold mb-4 text-lg text-left">10. Kemampuan Kepemimpinan (Kemampuan untuk mengambil inisiatif, memimpin, dan mengarahkan tim)</h4>
        
        <div class="grid grid-cols-1 gap-8 mt-6">
            <div class="bg-blue-50 p-5 rounded-lg">
                <div class="space-y-3">
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="kepemimpinan" wire:model="formData.evaluasi.kepemimpinan" value="kurang" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Kurang</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="kepemimpinan" wire:model="formData.evaluasi.kepemimpinan" value="cukup" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Cukup</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="kepemimpinan" wire:model="formData.evaluasi.kepemimpinan" value="baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Baik</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="kepemimpinan" wire:model="formData.evaluasi.kepemimpinan" value="sangat_baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Sangat Baik</span>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <!-- Question 11 -->
    <div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
        <h4 class="text-blue-800 font-semibold mb-4 text-lg text-left">11. Kemampuan Adaptasi (Kemampuan untuk beradaptasi dengan perubahan dan tantangan baru)</h4>
        
        <div class="grid grid-cols-1 gap-8 mt-6">
            <div class="bg-blue-50 p-5 rounded-lg">
                <div class="space-y-3">
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="adaptasi" wire:model="formData.evaluasi.adaptasi" value="kurang" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Kurang</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="adaptasi" wire:model="formData.evaluasi.adaptasi" value="cukup" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Cukup</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="adaptasi" wire:model="formData.evaluasi.adaptasi" value="baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Baik</span>
                    </label>
                    <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                        <input type="radio" name="adaptasi" wire:model="formData.evaluasi.adaptasi" value="sangat_baik" class="h-5 w-5 text-blue-600">
                        <span class="ml-2 font-medium">Sangat Baik</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
    @endif
</div>
