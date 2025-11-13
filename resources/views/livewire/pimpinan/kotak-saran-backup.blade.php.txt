<div class="bg-gradient-to-br from-blue-800 via-blue-900 to-indigo-900 min-h-screen">
    <!-- Header -->
    <div class="bg-gradient-to-b from-blue-600 to-blue-800 py-8 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-white">Kotak Saran</h1>
                    <p class="text-blue-200 mt-2">Kelola saran dan masukan dari pegawai</p>
                </div>
                <a href="{{ route('pimpinan.dashboard') }}" 
                   class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-all duration-200 flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali ke Dashboard
                </a>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mb-8">
            <!-- Total Saran -->
            <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-blue-500">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-blue-100">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-sm font-medium text-gray-600">Total Saran</h3>
                        <p class="text-2xl font-bold text-gray-900">{{ $statistics['total_saran'] }}</p>
                    </div>
                </div>
            </div>

            <!-- P4GN Saran -->
            <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-500">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-green-100">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-sm font-medium text-gray-600">Saran P4GN</h3>
                        <p class="text-2xl font-bold text-gray-900">{{ $statistics['total_p4gn_saran'] }}</p>
                    </div>
                </div>
            </div>

            <!-- Dukungan Saran -->
            <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-purple-500">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-purple-100">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-sm font-medium text-gray-600">Saran Dukungan</h3>
                        <p class="text-2xl font-bold text-gray-900">{{ $statistics['total_dukungan_saran'] }}</p>
                    </div>
                </div>
            </div>

            <!-- ZI Saran -->
            <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-yellow-500">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-yellow-100">
                            <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-sm font-medium text-gray-600">Saran ZI</h3>
                        <p class="text-2xl font-bold text-gray-900">{{ $statistics['total_zi_saran'] }}</p>
                    </div>
                </div>
            </div>

            <!-- Bulan Ini -->
            <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-indigo-500">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-100">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-sm font-medium text-gray-600">Bulan Ini</h3>
                        <p class="text-2xl font-bold text-gray-900">{{ $statistics['saran_bulan_ini'] }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filters and Search -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                <!-- Search -->
                <div class="flex-1 max-w-md">
                    <div class="relative">
                        <input type="text" 
                               wire:model.live.debounce.300ms="searchTerm"
                               placeholder="Cari saran atau nama pegawai..." 
                               class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Filter Type -->
                <div class="flex gap-2">
                    <button wire:click="$set('filterType', 'all')" 
                            class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ $filterType === 'all' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                        Semua
                    </button>
                    <button wire:click="$set('filterType', 'p4gn')" 
                            class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ $filterType === 'p4gn' ? 'bg-green-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                        P4GN
                    </button>
                    <button wire:click="$set('filterType', 'dukungan')" 
                            class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ $filterType === 'dukungan' ? 'bg-purple-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                        Dukungan
                    </button>
                </div>
            </div>
        </div>

        <!-- Saran List -->
        <div class="bg-white rounded-xl shadow-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900">Daftar Saran dan Masukan</h3>
                @if($pagination['total'] > 0)
                    <p class="text-sm text-gray-600 mt-1">
                        Menampilkan {{ $pagination['from'] }} - {{ $pagination['to'] }} dari {{ $pagination['total'] }} saran
                    </p>
                @endif
            </div>

            <div class="divide-y divide-gray-200">
                @forelse($saranData as $saran)
                    <div class="p-6 hover:bg-gray-50 transition-all duration-200">
                        <div class="flex items-start justify-between">
                            <div class="flex-1">
                                <!-- Header -->
                                <div class="flex items-center gap-3 mb-3">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                        {{ $saran['type'] === 'P4GN' ? 'bg-green-100 text-green-800' : 
                                           ($saran['type'] === 'Dukungan' ? 'bg-purple-100 text-purple-800' : 'bg-yellow-100 text-yellow-800') }}">
                                        {{ $saran['type'] }}
                                    </span>
                                    <span class="text-sm font-medium text-gray-900">{{ $saran['pegawai_name'] }}</span>
                                    <span class="text-xs text-gray-500">NIP: {{ $saran['pegawai_nip'] }}</span>
                                </div>

                                <!-- Saran Content -->
                                <div class="bg-gray-50 rounded-lg p-4 mb-3">
                                    <p class="text-gray-800 leading-relaxed">{{ $saran['saran'] }}</p>
                                </div>

                                <!-- Footer -->
                                <div class="flex items-center justify-between text-xs text-gray-500">
                                    <span>Dibuat: {{ $saran['created_at']->format('d M Y, H:i') }}</span>
                                    @if($saran['updated_at'] != $saran['created_at'])
                                        <span>Diperbarui: {{ $saran['updated_at']->format('d M Y, H:i') }}</span>
                                    @endif
                                </div>
                            </div>

                            <!-- Action Button -->
                            <div class="ml-4">
                                <a href="{{ route('pimpinan.pegawai.detail', $saran['pegawai_nip']) }}" 
                                   class="inline-flex items-center px-3 py-1.5 bg-blue-100 text-blue-700 text-xs font-medium rounded-lg hover:bg-blue-200 transition-all duration-200">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="p-8 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">Belum ada saran</h3>
                        <p class="mt-1 text-sm text-gray-500">
                            @if($searchTerm)
                                Tidak ada saran yang sesuai dengan pencarian "{{ $searchTerm }}"
                            @else
                                Belum ada saran dan masukan dari pegawai.
                            @endif
                        </p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($pagination['total'] > 0 && $pagination['last_page'] > 1)
                <div class="px-6 py-4 border-t border-gray-200">
                    <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-500">
                            Halaman {{ $pagination['current_page'] }} dari {{ $pagination['last_page'] }}
                        </div>
                        <div class="flex gap-2">
                            @if($pagination['current_page'] > 1)
                                <button wire:click="previousPage" 
                                        class="px-3 py-1 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-all duration-200">
                                    Sebelumnya
                                </button>
                            @endif
                            
                            @if($pagination['current_page'] < $pagination['last_page'])
                                <button wire:click="nextPage" 
                                        class="px-3 py-1 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-all duration-200">
                                    Selanjutnya
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
