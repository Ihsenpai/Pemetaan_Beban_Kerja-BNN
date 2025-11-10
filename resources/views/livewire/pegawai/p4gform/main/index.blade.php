<div class="bg-gradient-to-br from-blue-800 via-blue-900 to-indigo-900 min-h-screen">
    <div class="bg-gradient-to-b from-blue-600 to-blue-800 py-12 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center">
                <a href="{{ route($userRole . '.dashboard') }}" class="text-white hover:text-blue-200 mr-4 transition duration-300 ease-in-out transform hover:scale-110">
                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-white text-blue-600">
                        <span class="font-bold">←</span>
                    </div>
                </a>
                <h2 class="text-2xl font-bold text-white">Form Program P4GN</h2>
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
        
        @if (session()->has('form_loaded'))
            <div class="mt-6 mb-6 p-5 bg-gradient-to-r from-blue-50 to-blue-100 text-blue-700 rounded-lg shadow-md border-l-4 border-blue-500 flex items-center animate__animated animate__fadeIn">
                <div class="flex items-center justify-center w-6 h-6 rounded-full bg-blue-500 text-white mr-3">
                    <span class="font-bold">i</span>
                </div>
                {{ session('form_loaded') }}
            </div>
        @endif
        
        <!-- Form Container -->
        <div class="bg-white shadow-2xl rounded-xl overflow-hidden transition-all duration-300 hover:shadow-blue-200/20">
            <!-- Form Header -->
            <div class="bg-gradient-to-r from-blue-700 to-blue-600 text-white p-8 text-center">
                <h1 class="text-3xl font-bold mb-3">Pemetaan Beban Kerja Pegawai</h1>
                <h2 class="text-xl">BNN Kabupaten Cilacap</h2>
                <h3 class="text-lg mt-3 font-light">Program P4GN</h3>
            </div>
            
            <!-- Form Content -->
            <div class="p-6">
                <!-- Personal Information -->
                <div class="mb-10 grid grid-cols-1 md:grid-cols-2 gap-8 px-2">
                    <div class="bg-blue-50 p-6 rounded-xl shadow-sm transition duration-300 hover:shadow-md">
                        <label class="block text-blue-800 font-semibold mb-3 text-lg">Nama Pegawai</label>
                        <div class="bg-white p-4 rounded-lg border border-blue-100 shadow-inner">{{ $userName }}</div>
                    </div>
                    <div class="bg-blue-50 p-6 rounded-xl shadow-sm transition duration-300 hover:shadow-md">
                        <label class="block text-blue-800 font-semibold mb-3 text-lg">Jabatan</label>
                        <div class="bg-white p-4 rounded-lg border border-blue-100 shadow-inner">{{ $jabatan }}</div>
                    </div>
                </div>

                <div class="border-t-2 border-blue-100 pt-8">
                    <h3 class="text-2xl font-bold text-blue-800 mb-4 text-center">PEMETAAN BEBAN KERJA</h3>
                    <p class="mb-8 text-gray-600 text-center max-w-3xl mx-auto">Silahkan isi formulir berikut sesuai dengan yang dilakukan baik pada bidang masing-masing ataupun pekerjaan yang dikerjakan pada bidang lain</p>
                </div>

                <!-- Bidang Pencegahan -->
                <div class="mb-8 rounded-xl overflow-hidden shadow-lg transition-all duration-300 hover:shadow-blue-100">
                    <button wire:click="toggleSection('bidang_pencegahan')" class="w-full flex justify-between items-center bg-gradient-to-r from-blue-700 to-blue-600 text-white p-5 focus:outline-none group">
                        <span class="font-bold text-lg flex items-center">
                            <span class="bg-white text-blue-600 w-8 h-8 rounded-full flex items-center justify-center mr-3 shadow-sm">I</span>
                            BIDANG PENCEGAHAN
                        </span>
                        <div class="w-6 h-6 flex items-center justify-center transform {{ $openSections['bidang_pencegahan'] ? 'rotate-180' : '' }} transition-transform duration-500 ease-in-out group-hover:text-blue-200">
                            <span class="text-white text-lg">▼</span>
                        </div>
                    </button>
                    
                    @if($openSections['bidang_pencegahan'])
                    <div class="p-8 bg-gradient-to-b from-blue-50 to-white transition-all duration-500 ease-in-out">
                        @include('livewire.pegawai.p4gform.bidang-pencegahan.soal')
                    </div>
                    @endif
                </div>
                
                <!-- Bidang Pemberdayaan -->
                <div class="mb-8 overflow-hidden shadow-md rounded-xl border border-blue-100">
                    <button wire:click="toggleSection('bidang_pemberdayaan')" class="w-full flex justify-between items-center bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white p-5 focus:outline-none transition-all duration-300">
                        <span class="font-bold text-lg flex items-center">
                            <span class="bg-white text-blue-600 w-8 h-8 rounded-full flex items-center justify-center mr-3 shadow-sm">II</span>
                            BIDANG PEMBERDAYAAN MASYARAKAT
                        </span>
                        <div class="w-6 h-6 flex items-center justify-center transform {{ $openSections['bidang_pemberdayaan'] ? 'rotate-180' : '' }} transition-transform duration-300">
                            <span class="text-white text-lg">▼</span>
                        </div>
                    </button>
                    
                    @if($openSections['bidang_pemberdayaan'])
                    <div class="p-6 bg-gradient-to-b from-blue-50 to-white">
                        @include('livewire.pegawai.p4gform.bidang-pemberdayaan.soal')
                    </div>
                    @endif
                </div>
                
                <!-- Bidang Rehabilitasi -->
                <div class="mb-8 rounded-xl overflow-hidden shadow-lg transition-all duration-300 hover:shadow-blue-100">
                    <button wire:click="toggleSection('bidang_rehabilitasi')" class="w-full flex justify-between items-center bg-gradient-to-r from-blue-700 to-blue-600 text-white p-5 focus:outline-none group">
                        <span class="font-bold text-lg flex items-center">
                            <span class="bg-white text-blue-600 w-8 h-8 rounded-full flex items-center justify-center mr-3 shadow-sm">III</span>
                            BIDANG REHABILITASI
                        </span>
                        <div class="w-6 h-6 flex items-center justify-center transform {{ $openSections['bidang_rehabilitasi'] ? 'rotate-180' : '' }} transition-transform duration-500 ease-in-out group-hover:text-blue-200">
                            <span class="text-white text-lg">▼</span>
                        </div>
                    </button>
                    
                    @if($openSections['bidang_rehabilitasi'])
                    <div class="p-8 bg-gradient-to-b from-blue-50 to-white transition-all duration-500 ease-in-out">
                        @include('livewire.pegawai.p4gform.bidang-rehabilitasi.soal')
                    </div>
                    @endif
                </div>
                
                <!-- Bidang Pemberantasan -->
                <div class="mb-8 rounded-xl overflow-hidden shadow-lg transition-all duration-300 hover:shadow-blue-100">
                    <button wire:click="toggleSection('bidang_pemberantasan')" class="w-full flex justify-between items-center bg-gradient-to-r from-blue-700 to-blue-600 text-white p-5 focus:outline-none group">
                        <span class="font-bold text-lg flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 rounded-full bg-white text-blue-600 mr-3">
                                <span class="font-bold">IV</span>
                            </div>
                            BIDANG PEMBERANTASAN
                        </span>
                        <div class="w-6 h-6 flex items-center justify-center transform {{ $openSections['bidang_pemberantasan'] ? 'rotate-180' : '' }} transition-transform duration-500 ease-in-out group-hover:text-blue-200">
                            <span class="text-white text-lg">▼</span>
                        </div>
                    </button>
                    
                    @if($openSections['bidang_pemberantasan'])
                    <div class="p-8 bg-gradient-to-b from-blue-50 to-white transition-all duration-500 ease-in-out">
                        @include('livewire.pegawai.p4gform.bidang-pemberantasan.soal')
                    </div>
                    @endif
                </div>
                
                <!-- Kotak Saran Anonymous -->
                @include('components.kotak-saran', [
                    'formType' => 'p4gn',
                    'title' => 'Saran dan Masukan untuk Form P4GN',
                    'placeholder' => 'Berikan saran atau masukan Anda untuk perbaikan form P4GN...'
                ])
                
                <!-- Form Summary -->
                <div class="mb-10 bg-gradient-to-b from-blue-50 to-white p-8 rounded-xl shadow-lg border border-blue-200">
                    <h4 class="font-semibold text-blue-800 mb-6 text-xl text-center">
                        Ringkasan Penilaian P4GN
                    </h4>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @php
                            // Show data from database if form exists, otherwise calculate from current form inputs
                            if ($formStatus && isset($existingForm)) {
                                // Use saved data from database
                                $summary = [
                                    'total_pencegahan' => $existingForm->total_pencegahan ?? 0,
                                    'total_pemberdayaan_masyarakat' => $existingForm->total_pemberdayaan_masyarakat ?? 0,
                                    'total_rehabilitasi' => $existingForm->total_rehabilitasi ?? 0,
                                    'total_pemberantasan' => $existingForm->total_pemberantasan ?? 0,
                                    'total_keseluruhan' => $existingForm->total_keseluruhan ?? 0,
                                ];
                            } else {
                                // Calculate from current form inputs
                                $summary = $this->getFormSummary();
                            }
                        @endphp
                        
                        <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-100">
                            <div class="text-blue-600 font-semibold mb-2">Bidang Pencegahan</div>
                            <div class="text-2xl font-bold text-blue-800">{{ $summary['total_pencegahan'] }}</div>
                        </div>
                        
                        <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-100">
                            <div class="text-blue-600 font-semibold mb-2">Bidang Pemberdayaan Masyarakat</div>
                            <div class="text-2xl font-bold text-blue-800">{{ $summary['total_pemberdayaan_masyarakat'] }}</div>
                        </div>
                        
                        <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-100">
                            <div class="text-blue-600 font-semibold mb-2">Bidang Rehabilitasi</div>
                            <div class="text-2xl font-bold text-blue-800">{{ $summary['total_rehabilitasi'] }}</div>
                        </div>
                        
                        <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-100">
                            <div class="text-blue-600 font-semibold mb-2">Bidang Pemberantasan</div>
                            <div class="text-2xl font-bold text-blue-800">{{ $summary['total_pemberantasan'] }}</div>
                        </div>
                    </div>
                    
                    <div class="mt-6 bg-blue-600 text-white p-4 rounded-lg shadow-sm text-center">
                        <div class="text-lg font-semibold mb-1">Total Keseluruhan</div>
                        <div class="text-3xl font-bold">{{ $summary['total_keseluruhan'] }}</div>
                    </div>
                    
                    @if($formStatus)
                        <div class="mt-4 text-center text-sm text-gray-600">
                            Status: <span class="font-semibold">{{ ucfirst($formStatus) }}</span> | 
                            Periode: <span class="font-semibold">{{ $currentPeriod }}</span> | 
                            Terakhir diperbarui: <span class="font-semibold">{{ $lastUpdated ? $lastUpdated->timezone('Asia/Jakarta')->format('d M Y H:i') . ' WIB' : '-' }}</span>
                        </div>
                    @endif
                </div>
                
                <!-- Submit Button -->
                <div class="flex flex-col md:flex-row justify-center items-center gap-4 mt-10 mb-8">
                    <button wire:click="saveForm" class="px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-medium text-lg rounded-lg hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 focus:ring-opacity-50 transition-all duration-300 shadow-lg hover:shadow-xl">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-5 h-5 rounded-full bg-white text-blue-600 mr-2">
                                <span class="font-bold">✓</span>
                            </div>
                            {{ $existingForm ? 'Update Form' : 'Simpan Form' }}
                        </div>
                    </button>
                    
                    @if($formStatus)
                    <button 
                        wire:click="deleteForm" 
                        onclick="return confirm('Apakah Anda yakin ingin menghapus form ini? Tindakan ini tidak dapat dibatalkan.')" 
                        class="px-8 py-4 bg-gradient-to-r from-red-600 to-red-700 text-white font-medium text-lg rounded-lg hover:from-red-700 hover:to-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 focus:ring-opacity-50 transition-all duration-300 shadow-lg hover:shadow-xl">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-5 h-5 rounded-full bg-white text-red-600 mr-2">
                                <span class="font-bold">✕</span>
                            </div>
                            Hapus Form
                        </div>
                    </button>
                    @endif
                </div>
                
                <!-- Success Message -->
                @if (session()->has('message'))
                <div class="mt-6 p-5 bg-gradient-to-r from-green-50 to-green-100 text-green-700 rounded-lg shadow-md border-l-4 border-green-500 flex items-center animate__animated animate__fadeIn">
                    <div class="flex items-center justify-center w-6 h-6 rounded-full bg-green-500 text-white mr-3">
                        <span class="font-bold">✓</span>
                    </div>
                    {{ session('message') }}
                </div>
                @endif
                
                <!-- Error Message -->
                @if (session()->has('error'))
                <div class="mt-6 p-5 bg-gradient-to-r from-red-50 to-red-100 text-red-700 rounded-lg shadow-md border-l-4 border-red-500 flex items-center animate__animated animate__fadeIn">
                    <div class="flex items-center justify-center w-6 h-6 rounded-full bg-red-500 text-white mr-3">
                        <span class="font-bold">!</span>
                    </div>
                    {{ session('error') }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
