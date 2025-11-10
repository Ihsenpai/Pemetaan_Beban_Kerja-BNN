<!-- Main index file for Katim Evaluation Form -->
<div class="bg-gradient-to-br from-blue-800 via-blue-900 to-indigo-900 min-h-screen">
    <div class="bg-gradient-to-b from-blue-600 to-blue-800 py-12 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center">
                <a href="{{ route($userRole . '.dashboard') }}" class="text-white hover:text-blue-200 mr-4 transition duration-300 ease-in-out transform hover:scale-110">
                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-white text-blue-600">
                        <span class="font-bold">←</span>
                    </div>
                </a>
                <h2 class="text-2xl font-bold text-white">Form Penilaian Ketua Tim</h2>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        @if (session()->has('message'))
            <div class="mt-6 mb-6 p-5 bg-gradient-to-r from-green-50 to-green-100 text-green-700 rounded-lg shadow-md border-l-4 border-green-500 flex items-center animate__animated animate__fadeIn">
                <div class="flex items-center justify-center w-6 h-6 rounded-full bg-green-500 text-white mr-3">
                    <span class="font-bold">✓</span>
                </div>
                {{ session('message') }}
            </div>
        @endif
    
        <div class="bg-white shadow-2xl rounded-xl overflow-hidden transition-all duration-300 hover:shadow-blue-200/20">
            <!-- Form Header -->
            <div class="bg-gradient-to-r from-blue-700 to-blue-600 text-white p-8 text-center">
                <h1 class="text-3xl font-bold mb-3">Pemetaan Beban Kerja Pegawai</h1>
                <h2 class="text-xl">BNN Kabupaten Cilacap</h2>
                <h3 class="text-lg mt-3 font-light">Penilaian Ketua Tim</h3>
            </div>
            
            <div class="p-6">
            <!-- Header -->
            <div class="mb-8 text-center">
                <div class="border-t-2 border-blue-100 pt-8 mt-4">
                    <h3 class="text-2xl font-bold text-blue-800 mb-4 text-center">FORMULIR PENILAIAN</h3>
                    <p class="mb-8 text-gray-600 text-center max-w-3xl mx-auto">Silahkan isi formulir berikut sesuai dengan penilaian Anda terhadap kinerja Ketua Tim</p>
                </div>

            <!-- User Info -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="bg-blue-50 p-6 rounded-xl shadow-sm transition duration-300 hover:shadow-md">
                    <label class="block text-blue-800 font-semibold mb-3 text-lg">Nama Pegawai</label>
                    <div class="bg-white p-4 rounded-lg border border-blue-100 shadow-inner">{{ $userName }}</div>
                </div>
                <div class="bg-blue-50 p-6 rounded-xl shadow-sm transition duration-300 hover:shadow-md">
                    <label class="block text-blue-800 font-semibold mb-3 text-lg">Jabatan</label>
                    <div class="bg-white p-4 rounded-lg border border-blue-100 shadow-inner">{{ $jabatan }}</div>
                </div>
            </div>

            <!-- Team Leader Selection -->
            <div class="mb-8 bg-blue-50 p-6 rounded-xl shadow-sm transition duration-300 hover:shadow-md">
                <label for="katim_id" class="block text-blue-800 font-semibold mb-3 text-lg">Terlibat dengan ketua tim kerja:</label>
                <select id="katim_id" wire:model="formData.katim_id" class="w-full p-3 rounded-lg border border-blue-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">-- Pilih Ketua Tim --</option>
                    @foreach($katimOptions as $katim)
                        <option value="{{ $katim->id }}">{{ $katim->name }} - {{ $katim->jabatan }}</option>
                    @endforeach
                </select>
                @error('formData.katim_id') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
            </div>

            <!-- Form Sections -->
            @include('livewire.pegawai.katimform.section-a')
            @include('livewire.pegawai.katimform.section-b')
            @include('livewire.pegawai.katimform.section-c')
            @include('livewire.pegawai.katimform.section-d')

            <!-- Form Status Info -->
            <div class="mb-6">
                @if($existingForm)
                    <div class="bg-gradient-to-r from-blue-50 to-blue-100 border border-blue-200 rounded-lg p-4 shadow-sm">
                        <div class="text-blue-800 text-sm">
                            <strong>Status Evaluasi:</strong> Tersimpan | 
                            <strong>Periode:</strong> {{ $currentPeriod }} | 
                            <strong>Ketua Tim:</strong> {{ $existingForm->katim->name ?? 'Unknown' }} | 
                            <strong>Terakhir diperbarui:</strong> {{ $lastUpdated ? $lastUpdated->timezone('Asia/Jakarta')->format('d M Y H:i') . ' WIB' : '-' }}
                        </div>
                        <div class="text-blue-700 text-xs mt-1">
                            Total Skor: {{ $existingForm->total_keseluruhan }}/56
                        </div>
                    </div>
                @endif
            </div>

            <!-- Buttons -->
            <div class="flex flex-col md:flex-row justify-center items-center gap-4 mt-10 mb-8">
                <button type="button" wire:click="saveForm" class="px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-medium text-lg rounded-lg hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 focus:ring-opacity-50 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center w-5 h-5 rounded-full bg-white text-blue-600 mr-2">
                            <span class="font-bold">✓</span>
                        </div>
                        {{ $existingForm ? 'Update Evaluasi' : 'Simpan Evaluasi' }}
                    </div>
                </button>
                
                @if($existingForm)
                <button 
                    type="button"
                    wire:click="deleteForm" 
                    onclick="return confirm('Apakah Anda yakin ingin menghapus evaluasi ini? Tindakan ini tidak dapat dibatalkan.')" 
                    class="px-8 py-4 bg-gradient-to-r from-red-600 to-red-700 text-white font-medium text-lg rounded-lg hover:from-red-700 hover:to-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 focus:ring-opacity-50 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center w-5 h-5 rounded-full bg-white text-red-600 mr-2">
                            <span class="font-bold">✕</span>
                        </div>
                        Hapus Evaluasi
                    </div>
                </button>
                @endif
            </div>

            <!-- Success Message -->
            @if (session()->has('message'))
            <div class="mt-6 mb-6 p-5 bg-gradient-to-r from-green-50 to-green-100 text-green-700 rounded-lg shadow-md border-l-4 border-green-500 flex items-center animate__animated animate__fadeIn">
                <div class="flex items-center justify-center w-6 h-6 rounded-full bg-green-500 text-white mr-3">
                    <span class="font-bold">✓</span>
                </div>
                {{ session('message') }}
            </div>
            @endif

            <!-- Error Message -->
            @if (session()->has('error'))
            <div class="mt-6 mb-6 p-5 bg-gradient-to-r from-red-50 to-red-100 text-red-700 rounded-lg shadow-md border-l-4 border-red-500 flex items-center animate__animated animate__fadeIn">
                <div class="flex items-center justify-center w-6 h-6 rounded-full bg-red-500 text-white mr-3">
                    <span class="font-bold">!</span>
                </div>
                {{ session('error') }}
            </div>
            @endif

            <!-- Form Loaded Message -->
            @if (session()->has('form_loaded'))
            <div class="mt-6 mb-6 p-5 bg-gradient-to-r from-blue-50 to-blue-100 text-blue-700 rounded-lg shadow-md border-l-4 border-blue-500 flex items-center animate__animated animate__fadeIn">
                <div class="flex items-center justify-center w-6 h-6 rounded-full bg-blue-500 text-white mr-3">
                    <span class="font-bold">ℹ</span>
                </div>
                {{ session('form_loaded') }}
            </div>
            @endif
        </div>
    </div>
</div>
