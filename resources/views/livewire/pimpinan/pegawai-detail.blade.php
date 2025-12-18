<div class="bg-gradient-to-br from-blue-800 via-blue-900 to-indigo-900 min-h-screen">
    <!-- Header -->
    <div class="bg-gradient-to-b from-blue-600 to-blue-800 py-8 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <button wire:click="backToList" class="text-white hover:text-blue-200 mr-4 transition duration-300 ease-in-out transform hover:scale-110">
                        <div class="flex items-center justify-center w-8 h-8 rounded-full bg-white text-blue-600">
                            <span class="font-bold">←</span>
                        </div>
                    </button>
                    <div>
                        <h1 class="text-3xl font-bold text-white">Detail Pegawai</h1>
                        <p class="text-blue-200 mt-2">{{ $pegawai->name }} - {{ $pegawai->jabatan ?? 'Pegawai' }}</p>
                    </div>
                </div>
                <div class="text-white text-right">
                    <p class="text-sm opacity-75">Periode</p>
                    <p class="text-lg font-semibold">{{ $currentPeriod }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <!-- Pegawai Info Card -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">{{ $pegawai->name }}</h3>
                        <p class="text-sm text-gray-600">NIP: {{ $pegawai->nip }}</p>
                        <p class="text-sm text-gray-600">{{ $pegawai->jabatan ?? 'Pegawai' }}</p>
                    </div>
                </div>
                
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-600">
                        {{ ($p4gnData['total'] ?? 0) + ($dukunganData['total'] ?? 0) + ($katimData['total'] ?? 0) + ($rekanKerjaData['averageScore'] ?? 0) + ($rekanKerja2Data['averageScore'] ?? 0) }}
                    </div>
                    <div class="text-sm text-gray-600">Total Skor Keseluruhan</div>
                </div>
                
                <div class="flex justify-end space-x-2">
                    @if($p4gnData['submitted'])
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            P4GN: {{ $p4gnData['total'] }}
                        </span>
                    @else
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                            P4GN: Tidak Submit
                        </span>
                    @endif
                    
                    @if($dukunganData['submitted'])
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                            Dukungan: {{ $dukunganData['total'] }}
                        </span>
                    @else
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                            Dukungan: Tidak Submit
                        </span>
                    @endif

                    @if($katimData && $katimData['exists'])
                        @if($katimData['exists'])
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                Katim: {{ $katimData['total'] }}
                            </span>
                        @endif
                    @endif
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-{{ $rekanKerja2Data['hasData'] ? ($rekanKerjaData['hasData'] ? ($katimData ? '5' : '4') : ($katimData ? '4' : '3')) : ($rekanKerjaData['hasData'] ? ($katimData ? '4' : '3') : ($katimData ? '3' : '2')) }} gap-8">
            <!-- P4GN Chart -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-6 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 00-2-2z"></path>
                    </svg>
                    Form P4GN
                    @if($p4gnData['submitted'])
                        <span class="ml-2 text-sm text-green-600">({{ $p4gnData['tanggal']->format('d M Y') }})</span>
                    @endif
                </h3>
                
                @if($p4gnData['submitted'])
                    <div class="space-y-4">
                        @foreach($p4gnData['data'] as $bidang => $skor)
                            @php
                                $maxScore = 100; // Adjust based on your scoring system
                                $percentage = $maxScore > 0 ? ($skor / $maxScore) * 100 : 0;
                                $width = min($percentage, 100);
                            @endphp
                            <div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-sm font-medium text-gray-700">{{ $bidang }}</span>
                                    <span class="text-sm font-semibold text-gray-900">{{ $skor }}</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-4">
                                    <div class="bg-gradient-to-r from-green-400 to-green-600 h-4 rounded-full transition-all duration-1000 ease-out progress-bar" 
                                         data-width="{{ $width }}">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                        <div class="mt-6 pt-4 border-t border-gray-200">
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-semibold text-gray-900">Total</span>
                                <span class="text-2xl font-bold text-green-600">{{ $p4gnData['total'] }}</span>
                            </div>
                        </div>
                        
                        @if($p4gnData['catatan'])
                            <div class="mt-4 p-3 bg-gray-50 rounded-lg">
                                <p class="text-sm text-gray-600"><strong>Catatan:</strong> {{ $p4gnData['catatan'] }}</p>
                            </div>
                        @endif
                    </div>
                @else
                    <div class="text-center py-12">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">Belum Submit</h3>
                        <p class="mt-1 text-sm text-gray-500">Form P4GN belum disubmit untuk periode ini.</p>
                    </div>
                @endif
            </div>

            <!-- Dukungan Chart -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-6 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                    Form Dukungan
                    @if($dukunganData['submitted'])
                        <span class="ml-2 text-sm text-purple-600">({{ $dukunganData['tanggal']->format('d M Y') }})</span>
                    @endif
                </h3>
                
                @if($dukunganData['submitted'])
                    <div class="space-y-4">
                        @foreach($dukunganData['data'] as $bidang => $skor)
                            <div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-sm font-medium text-gray-700">{{ $bidang }}</span>
                                    @if($bidang === 'Pembangunan ZI')
                                        <span class="text-sm font-semibold text-gray-900">{{ $skor ?: 'Tidak Ada' }}</span>
                                    @else
                                        <span class="text-sm font-semibold text-gray-900">{{ $skor }}</span>
                                    @endif
                                </div>
                                @if($bidang !== 'Pembangunan ZI')
                                    @php
                                        $maxScore = 100; // Adjust based on your scoring system
                                        $percentage = $maxScore > 0 ? ($skor / $maxScore) * 100 : 0;
                                        $width = min($percentage, 100);
                                    @endphp
                                    <div class="w-full bg-gray-200 rounded-full h-4">
                                        <div class="bg-gradient-to-r from-purple-400 to-purple-600 h-4 rounded-full transition-all duration-1000 ease-out progress-bar" data-width="{{ $width }}"></div>
                                    </div>
                                @else
                                    @php
                                        $ziWidth = $skor ? '100' : '0';
                                    @endphp
                                    <div class="w-full bg-gray-200 rounded-full h-4">
                                        <div class="bg-gradient-to-r from-gray-400 to-gray-600 h-4 rounded-full progress-bar" data-width="{{ $ziWidth }}"></div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                        
                        <div class="mt-6 pt-4 border-t border-gray-200">
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-semibold text-gray-900">Total</span>
                                <span class="text-2xl font-bold text-purple-600">{{ $dukunganData['total'] }}</span>
                            </div>
                        </div>
                        
                        @if($dukunganData['catatan'])
                            <div class="mt-4 p-3 bg-gray-50 rounded-lg">
                                <p class="text-sm text-gray-600"><strong>Catatan:</strong> {{ $dukunganData['catatan'] }}</p>
                            </div>
                        @endif
                    </div>
                @else
                    <div class="text-center py-12">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">Belum Submit</h3>
                        <p class="mt-1 text-sm text-gray-500">Form Dukungan belum disubmit untuk periode ini.</p>
                    </div>
                @endif
            </div>

            <!-- Katim Chart (only show if user is also a katim) -->
            @if($katimData)
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-6 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        Penilaian Katim
                        @if($katimData['exists'])
                            <span class="ml-2 text-sm font-normal text-gray-500">({{ $katimData['totalEvaluations'] }} penilaian)</span>
                        @endif
                    </h3>

                    @if($katimData['exists'])
                        <div class="space-y-4">
                            <!-- Average Score Display -->
                            @if($katimData['totalEvaluations'] > 1)
                                <div class="text-center p-3 bg-indigo-50 rounded-lg mb-4">
                                    <div class="text-sm text-indigo-600 font-medium">
                                        Nilai rata-rata dari {{ $katimData['totalEvaluations'] }} penilaian
                                    </div>
                                </div>
                            @endif

                            @foreach($katimData['data'] as $section => $skor)
                                <div class="mb-4">
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-sm font-medium text-gray-700">{{ $section }}</span>
                                        <span class="text-sm font-semibold text-gray-900">{{ $skor ?? 0 }}/25</span>
                                    </div>
                                    <div class="w-full bg-gray-300 rounded-full h-6 overflow-hidden shadow-inner">
                                        @php
                                            $percentage = $skor === null ? 0 : ($skor / 25) * 100;
                                            $width = min($percentage, 100);
                                        @endphp
                                        <div class="bg-gradient-to-r from-indigo-400 to-indigo-600 h-6 rounded-full transition-all duration-1000 ease-out progress-bar"
                                             data-width="{{ $width }}">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                            <div class="mt-6 pt-4 border-t border-gray-200">
                                <div class="flex justify-between items-center">
                                    <span class="text-lg font-semibold text-gray-900">Total Rata-rata</span>
                                    <span class="text-2xl font-bold text-indigo-600">{{ $katimData['total'] }}</span>
                                </div>
                            </div>

                            <!-- List of Evaluators -->
                            <div class="mt-4 pt-4 border-t border-gray-200">
                                <h4 class="text-sm font-medium text-gray-700 mb-2">Dinilai oleh:</h4>
                                <div class="space-y-1">
                                    @foreach($katimData['evaluations'] as $eval)
                                        <div class="text-xs text-gray-600 flex justify-between">
                                            <span>{{ $eval->pegawai->name ?? 'Unknown Evaluator' }}</span>
                                            <span>{{ $eval->total_keseluruhan }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="text-center py-12">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            <h3 class="mt-2 text-sm font-medium text-gray-900">Belum Ada Penilaian</h3>
                            <p class="mt-1 text-sm text-gray-500">Penilaian katim belum dilakukan untuk periode ini.</p>
                        </div>
                    @endif
                </div>
            @endif

            <!-- Rekan Kerja 1 Evaluation Chart -->
            @if($rekanKerjaData['hasData'])
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-6 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        Evaluasi Rekan Kerja 1
                        <span class="ml-2 text-sm font-normal text-gray-500">({{ $rekanKerjaData['totalEvaluations'] }} evaluasi)</span>
                    </h3>
                    
                    <div class="space-y-4">
                        <!-- Overall Score -->
                        <div class="text-center p-4 bg-teal-50 rounded-lg">
                            <div class="text-2xl font-bold text-teal-600">{{ $rekanKerjaData['averageScore'] }}</div>
                            <div class="text-sm text-gray-600">Rata-rata Skor</div>
                        </div>

                        <!-- Section Breakdown -->
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-medium text-gray-700">Efektivitas</span>
                                <span class="text-sm font-semibold text-teal-600">{{ $rekanKerjaData['sectionAAverage'] }}</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="progress-bar bg-teal-600 h-2 rounded-full transition-all duration-500 ease-out" 
                                     data-width="{{ ($rekanKerjaData['sectionAAverage'] / 100) * 100 }}"></div>
                            </div>

                            <div class="flex items-center justify-between">
                                <span class="text-sm font-medium text-gray-700">Kerjasama & Komunikasi</span>
                                <span class="text-sm font-semibold text-teal-600">{{ $rekanKerjaData['sectionBAverage'] }}</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="progress-bar bg-teal-600 h-2 rounded-full transition-all duration-500 ease-out" 
                                     data-width="{{ ($rekanKerjaData['sectionBAverage'] / 100) * 100 }}"></div>
                            </div>

                            <div class="flex items-center justify-between">
                                <span class="text-sm font-medium text-gray-700">Aspek Lain</span>
                                <span class="text-sm font-semibold text-teal-600">{{ $rekanKerjaData['sectionCAverage'] }}</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="progress-bar bg-teal-600 h-2 rounded-full transition-all duration-500 ease-out" 
                                     data-width="{{ ($rekanKerjaData['sectionCAverage'] / 100) * 100 }}"></div>
                            </div>
                        </div>

                        <!-- List of Evaluators -->
                        <div class="mt-4 pt-4 border-t border-gray-200">
                            <h4 class="text-sm font-medium text-gray-700 mb-2">Dinilai oleh:</h4>
                            <div class="space-y-1">
                                @foreach($rekanKerjaData['evaluations'] as $eval)
                                    <div class="text-xs text-gray-600 flex justify-between">
                                        <span>{{ $eval->katim->name ?? 'Unknown Katim' }}</span>
                                        <span>{{ $eval->total_keseluruhan }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Rekan Kerja 2 Evaluation Chart -->
            @if($rekanKerja2Data['hasData'])
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-6 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 515.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 919.288 0M15 7a3 3 0 11-6 0 3 3 0 616 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        Evaluasi Rekan Kerja 2
                        <span class="ml-2 text-sm font-normal text-gray-500">({{ $rekanKerja2Data['totalEvaluations'] }} evaluasi)</span>
                    </h3>
                    
                    <div class="space-y-4">
                        <!-- Overall Score -->
                        <div class="text-center p-4 bg-pink-50 rounded-lg">
                            <div class="text-2xl font-bold text-pink-600">{{ $rekanKerja2Data['averageScore'] }}</div>
                            <div class="text-sm text-gray-600">Rata-rata Skor</div>
                        </div>

                        <!-- Section Breakdown -->
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-medium text-gray-700">Ketertiban</span>
                                <span class="text-sm font-semibold text-pink-600">{{ $rekanKerja2Data['averageKetertiban'] }}/5</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="progress-bar bg-pink-600 h-2 rounded-full transition-all duration-500 ease-out" 
                                     data-width="{{ ($rekanKerja2Data['averageKetertiban'] / 5) * 100 }}"></div>
                            </div>

                            <div class="flex items-center justify-between">
                                <span class="text-sm font-medium text-gray-700">Efektivitas</span>
                                <span class="text-sm font-semibold text-pink-600">{{ $rekanKerja2Data['averageEfektivitas'] }}/4</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="progress-bar bg-pink-600 h-2 rounded-full transition-all duration-500 ease-out" 
                                     data-width="{{ ($rekanKerja2Data['averageEfektivitas'] / 4) * 100 }}"></div>
                            </div>
                        </div>

                        <!-- List of Evaluators -->
                        <div class="mt-4 pt-4 border-t border-gray-200">
                            <h4 class="text-sm font-medium text-gray-700 mb-2">Dinilai oleh:</h4>
                            <div class="space-y-1">
                                @foreach($rekanKerja2Data['evaluations'] as $eval)
                                    <div class="text-xs text-gray-600 flex justify-between">
                                        <span>{{ $eval->katim->name ?? 'Unknown Katim' }}</span>
                                        <span>{{ $eval->calculateScore() }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <!-- Performance Summary -->
        @if($p4gnData['submitted'] || $dukunganData['submitted'] || ($katimData && $katimData['exists']) || $rekanKerjaData['hasData'] || $rekanKerja2Data['hasData'])
            <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-6">Ringkasan Performa</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Overall Score -->
                    <div class="text-center p-4 bg-blue-50 rounded-lg">
                        <div class="text-3xl font-bold text-blue-600">
                            {{ ($p4gnData['total'] ?? 0) + ($dukunganData['total'] ?? 0) + ($katimData['total'] ?? 0) + ($rekanKerjaData['averageScore'] ?? 0) + ($rekanKerja2Data['averageScore'] ?? 0) }}
                        </div>
                        <div class="text-sm text-gray-600 mt-1">Total Skor</div>
                    </div>
                    
                    <!-- Forms Completed -->
                    <div class="text-center p-4 bg-green-50 rounded-lg">
                        @php
                            $totalFormsAvailable = 2 + (($katimData && $katimData['exists']) ? 1 : 0) + ($rekanKerjaData['hasData'] ? 1 : 0) + ($rekanKerja2Data['hasData'] ? 1 : 0);
                            $completedForms = ($p4gnData['submitted'] ? 1 : 0) + ($dukunganData['submitted'] ? 1 : 0) + (($katimData && $katimData['exists']) ? 1 : 0) + ($rekanKerjaData['hasData'] ? 1 : 0) + ($rekanKerja2Data['hasData'] ? 1 : 0);
                        @endphp
                        <div class="text-3xl font-bold text-green-600">
                            {{ $completedForms }}/{{ $totalFormsAvailable }}
                        </div>
                        <div class="text-sm text-gray-600 mt-1">Form Diselesaikan</div>
                    </div>
                    
                    <!-- Completion Rate -->
                    <div class="text-center p-4 bg-yellow-50 rounded-lg">
                        @php
                            $completionRate = $totalFormsAvailable > 0 ? round(($completedForms / $totalFormsAvailable) * 100) : 0;
                        @endphp
                        <div class="text-3xl font-bold text-yellow-600">
                            {{ $completionRate }}%
                        </div>
                        <div class="text-sm text-gray-600 mt-1">Tingkat Penyelesaian</div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Set width for all progress bars
        const progressBars = document.querySelectorAll('.progress-bar');
        progressBars.forEach(function(bar) {
            const width = bar.getAttribute('data-width');
            if (width !== null) {
                bar.style.width = width + '%';
            }
        });
    });
</script>
