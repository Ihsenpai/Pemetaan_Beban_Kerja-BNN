<!-- Section C: Aspek Lain -->
<h3 class="text-xl font-bold text-blue-800 mb-6 border-b border-blue-200 pb-3">C. Aspek Lain</h3>

<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">1. Penilaian Integritas (Kejujuran dan keandalan dalam menjalankan tugas)</h4>
    
    <div class="grid grid-cols-1 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="integritas" wire:model="formData.evaluasi.integritas" value="kurang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Kurang</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="integritas" wire:model="formData.evaluasi.integritas" value="cukup" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Cukup</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="integritas" wire:model="formData.evaluasi.integritas" value="baik" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Baik</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="integritas" wire:model="formData.evaluasi.integritas" value="sangat_baik" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sangat Baik</span>
                </label>
            </div>
        </div>
    </div>
</div>
<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">2. Kreativitas (Kemampuan menghasilkan ide-ide baru)</h4>
    
    <div class="grid grid-cols-1 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="kreativitas" wire:model="formData.evaluasi.kreativitas" value="kurang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Kurang</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="kreativitas" wire:model="formData.evaluasi.kreativitas" value="cukup" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Cukup</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="kreativitas" wire:model="formData.evaluasi.kreativitas" value="baik" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Baik</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="kreativitas" wire:model="formData.evaluasi.kreativitas" value="sangat_baik" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sangat Baik</span>
                </label>
            </div>
        </div>
    </div>
</div>

<div class="mb-8 bg-white p-5 rounded-xl shadow-sm border border-blue-100">
    <h4 class="text-blue-800 font-semibold mb-4 text-lg">3. Disiplin (Kehadiran, tepat waktu, dan kemampuan mengikuti aturan)</h4>
    
    <div class="grid grid-cols-1 gap-8 mt-6">
        <div class="bg-blue-50 p-5 rounded-lg">
            <div class="space-y-3">
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="disiplin" wire:model="formData.evaluasi.disiplin" value="kurang" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Kurang</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="disiplin" wire:model="formData.evaluasi.disiplin" value="cukup" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Cukup</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="disiplin" wire:model="formData.evaluasi.disiplin" value="baik" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Baik</span>
                </label>
                <label class="flex items-center p-3 rounded-lg cursor-pointer transition-all duration-200 hover:bg-blue-100">
                    <input type="radio" name="disiplin" wire:model="formData.evaluasi.disiplin" value="sangat_baik" class="h-5 w-5 text-blue-600">
                    <span class="ml-2 font-medium">Sangat Baik</span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Kotak Saran Anonymous -->
@include('components.kotak-saran', [
    'formType' => 'rekan_kerja_1',
    'title' => 'Saran untuk Perbaikan Evaluasi Rekan Kerja',
    'placeholder' => 'Berikan saran Anda untuk perbaikan sistem evaluasi rekan kerja...'
])
