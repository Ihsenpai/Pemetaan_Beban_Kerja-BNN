<!-- Main index file for Rekan Kerja Evaluation Form -->
<div class="bg-gradient-to-br from-blue-800 via-blue-900 to-indigo-900 min-h-screen">
    <div class="bg-gradient-to-b from-blue-600 to-blue-800 py-12 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center">
                <a href="{{ route($userRole . '.dashboard') }}" class="text-white hover:text-blue-200 mr-4 transition duration-300 ease-in-out transform hover:scale-110">
                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-white text-blue-600">
                        <span class="font-bold">←</span>
                    </div>
                </a>
                <h2 class="text-2xl font-bold text-white">Form Penilaian Rekan Kerja 1</h2>
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
        
        @if (session()->has('pegawai_selected'))
            <div class="mt-6 mb-6 p-5 bg-gradient-to-r from-blue-50 to-blue-100 text-blue-700 rounded-lg shadow-md border-l-4 border-blue-500 flex items-center animate__animated animate__fadeIn">
                <div class="flex items-center justify-center w-6 h-6 rounded-full bg-blue-500 text-white mr-3">
                    <span class="font-bold">✓</span>
                </div>
                {{ session('pegawai_selected') }}
            </div>
        @endif
    
        <div class="bg-white shadow-2xl rounded-xl overflow-hidden transition-all duration-300 hover:shadow-blue-200/20">
            <!-- Form Header -->
            <div class="bg-gradient-to-r from-blue-700 to-blue-600 text-white p-8 text-center">
                <h1 class="text-3xl font-bold mb-3">Pemetaan Beban Kerja BNNK Cilacap</h1>
                <h2 class="text-xl">Form Penilaian Rekan Kerja</h2>
                <h3 class="text-lg mt-3 font-light">Form penilaian ini diisi oleh Katim Kerja untuk memberikan penilaian terhadap Personil yang tergabung dalam Tim Kerja berdasarkan sprin.</h3>
            </div>
            
            <div class="p-6">
                <!-- Personal Information -->
                <div class="mb-10 grid grid-cols-1 md:grid-cols-2 gap-8 px-2">
                    <div class="bg-blue-50 p-6 rounded-xl shadow-sm transition duration-300 hover:shadow-md">
                        <label class="block text-blue-800 font-semibold mb-3 text-lg">Ketua Tim</label>
                        <div class="bg-white p-4 rounded-lg border border-blue-100 shadow-inner">{{ $userName }}</div>
                    </div>
                    <div class="bg-blue-50 p-6 rounded-xl shadow-sm transition duration-300 hover:shadow-md">
                        <label class="block text-blue-800 font-semibold mb-3 text-lg">Tim Kerja</label>
                        <div class="bg-white p-4 rounded-lg border border-blue-100 shadow-inner">{{ $jabatan }}</div>
                    </div>
                </div>
                
                <!-- Pegawai Selection -->
                <div class="mb-8 bg-blue-50 p-6 rounded-xl shadow-sm transition duration-300 hover:shadow-md">
                    <label for="pegawai" class="block text-blue-800 font-semibold mb-3 text-lg">
                        Pilih Rekan Kerja untuk Dinilai:
                    </label>
                    <div class="space-y-4">
                        <div>
                            <select id="pegawaiSelector" wire:model="selectedPegawai" class="w-full p-3 rounded-lg border border-blue-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="">-- Pilih Pegawai --</option>
                                @forelse ($pegawaiList as $pegawai)
                                    <option value="{{ $pegawai['id'] }}">{{ $pegawai['name'] }}</option>
                                @empty
                                    <option disabled>Tidak ada data pegawai tersedia</option>
                                @endforelse
                            </select>
                        </div>
                        
                        <div>
                            <button type="button" wire:click="setSelectedPegawaiFromUI" class="w-full p-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-all duration-300">
                                Pilih Pegawai Ini
                            </button>
                        </div>
                    </div>
                    @error('selectedPegawai') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                </div>

                @if ($selectedPegawai)
                    <div class="border-t-2 border-blue-100 pt-8">
                        <h3 class="text-2xl font-bold text-blue-800 mb-4 text-center">FORMULIR PENILAIAN</h3>
                        <div class="flex items-center justify-center mb-4">
                            <div class="inline-block bg-blue-100 text-blue-800 px-4 py-2 rounded-full font-semibold">
                                Pegawai terpilih: 
                                @foreach ($pegawaiList as $pegawai)
                                    @if ($pegawai['id'] == $selectedPegawai)
                                        {{ $pegawai['name'] }}
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <p class="mb-8 text-gray-600 text-center max-w-3xl mx-auto">Silahkan isi formulir berikut sesuai dengan penilaian Anda terhadap kinerja Rekan Kerja</p>
                    </div>

                    <!-- Form Sections -->
                    @include('livewire.katim.rekankerjaform1.section-a')
                    @include('livewire.katim.rekankerjaform1.section-b')
                    @include('livewire.katim.rekankerjaform1.section-c')

                    <!-- Submit Button -->
                    <div class="flex justify-center mt-10 mb-8">
                        <button type="button" wire:click="saveForm" class="px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-medium text-lg rounded-lg hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 focus:ring-opacity-50 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <div class="flex items-center">
                                <div class="flex items-center justify-center w-5 h-5 rounded-full bg-white text-blue-600 mr-2">
                                    <span class="font-bold">✓</span>
                                </div>
                                Simpan Form
                            </div>
                        </button>
                    </div>
                @else
                    <div class="p-8 bg-blue-50 rounded-xl text-center">
                        <div class="flex flex-col items-center justify-center">
                            <div class="text-blue-600 bg-blue-100 rounded-full p-3 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-blue-800 mb-2">Pilih Tim dan Pegawai</h3>
                            <p class="text-blue-600 max-w-md">Silahkan pilih Tim Kerja dan Pegawai yang ingin dinilai untuk menampilkan formulir penilaian.</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('livewire:init', function () {
        // Listen for custom refresh event
        Livewire.on('refresh', () => {
            // Ensure component gets fully re-rendered
            setTimeout(() => {
                // Force UI update if needed
                document.getElementById('pegawaiSelector')?.dispatchEvent(new Event('change', { bubbles: true }));
                
                // Scroll to the form if it's visible
                if (document.querySelector('.border-t-2.border-blue-100')) {
                    document.querySelector('.border-t-2.border-blue-100').scrollIntoView({ 
                        behavior: 'smooth', 
                        block: 'start' 
                    });
                }
            }, 100);
        });
    });
</script>
