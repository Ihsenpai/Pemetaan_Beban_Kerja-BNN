<div class="bg-gradient-to-br from-blue-800 via-blue-900 to-indigo-900 min-h-screen">
    <!-- Header -->
    <div class="bg-gradient-to-b from-blue-600 to-blue-800 py-8 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-white">Kotak Saran Anonymous</h1>
                    <p class="text-blue-200 mt-2">Kelola saran dan masukan anonim dari semua form</p>
                    <p class="text-blue-300 mt-1 text-sm">
                        <svg class="inline w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Semua saran dikirim secara anonim tanpa identitas pengirim untuk menjaga privasi
                    </p>
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
        
        <!-- Flash Messages -->
        @if(session()->has('success'))
            <div class="mb-6 bg-green-50 border border-green-200 rounded-lg p-4">
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-green-800 font-medium">{{ session('success') }}</span>
                    <button wire:click="$set('', '')" class="ml-auto text-green-500 hover:text-green-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        @endif

        @if(session()->has('error'))
            <div class="mb-6 bg-red-50 border border-red-200 rounded-lg p-4">
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-red-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-red-800 font-medium">{{ session('error') }}</span>
                    <button wire:click="$set('', '')" class="ml-auto text-red-500 hover:text-red-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        @endif

        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-6 mb-8">
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
                        <p class="text-2xl font-bold text-gray-900">{{ $statistics['total'] }}</p>
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
                        <h3 class="text-sm font-medium text-gray-600">P4GN</h3>
                        <p class="text-2xl font-bold text-gray-900">{{ $statistics['by_form_type']['p4gn'] ?? 0 }}</p>
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
                        <h3 class="text-sm font-medium text-gray-600">Dukungan</h3>
                        <p class="text-2xl font-bold text-gray-900">{{ $statistics['by_form_type']['dukungan'] ?? 0 }}</p>
                    </div>
                </div>
            </div>

            <!-- Rekan Kerja 1 -->
            <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-indigo-500">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-100">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-sm font-medium text-gray-600">Rekan Kerja 1</h3>
                        <p class="text-2xl font-bold text-gray-900">{{ $statistics['by_form_type']['rekan_kerja_1'] ?? 0 }}</p>
                    </div>
                </div>
            </div>

            <!-- Rekan Kerja 2 -->
            <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-teal-500">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-teal-100">
                            <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-sm font-medium text-gray-600">Rekan Kerja 2</h3>
                        <p class="text-2xl font-bold text-gray-900">{{ $statistics['by_form_type']['rekan_kerja_2'] ?? 0 }}</p>
                    </div>
                </div>
            </div>

            <!-- Bulan Ini -->
            <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-orange-500">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-orange-100">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-sm font-medium text-gray-600">Bulan Ini</h3>
                        <p class="text-2xl font-bold text-gray-900">{{ $statistics['this_month'] }}</p>
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
                               placeholder="Cari isi saran atau catatan..." 
                               class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap gap-2">
                    <!-- Filter Type -->
                    <div class="flex gap-1">
                        <button wire:click="$set('filterType', 'all')" 
                                class="px-3 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ $filterType === 'all' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                            Semua
                        </button>
                        <button wire:click="$set('filterType', 'p4gn')" 
                                class="px-3 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ $filterType === 'p4gn' ? 'bg-green-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                            P4GN
                        </button>
                        <button wire:click="$set('filterType', 'dukungan')" 
                                class="px-3 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ $filterType === 'dukungan' ? 'bg-purple-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                            Dukungan
                        </button>
                        <button wire:click="$set('filterType', 'rekan_kerja_1')" 
                                class="px-3 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ $filterType === 'rekan_kerja_1' ? 'bg-indigo-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                            Rekan 1
                        </button>
                        <button wire:click="$set('filterType', 'rekan_kerja_2')" 
                                class="px-3 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ $filterType === 'rekan_kerja_2' ? 'bg-teal-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                            Rekan 2
                        </button>
                    </div>

                    <!-- Status Filter -->
                    <div class="flex gap-1">
                        <button wire:click="$set('statusFilter', 'all')" 
                                class="px-3 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ $statusFilter === 'all' ? 'bg-gray-800 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                            Semua Status
                        </button>
                        <button wire:click="$set('statusFilter', 'pending')" 
                                class="px-3 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ $statusFilter === 'pending' ? 'bg-yellow-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                            Pending
                        </button>
                        <button wire:click="$set('statusFilter', 'reviewed')" 
                                class="px-3 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ $statusFilter === 'reviewed' ? 'bg-green-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                            Reviewed
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Saran List -->
        <div class="bg-white rounded-xl shadow-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Daftar Saran dan Masukan Anonim</h3>
                        <p class="text-xs text-blue-600 mt-1 flex items-center">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                            Identitas pengirim dilindungi untuk menjaga privasi dan kebebasan berpendapat
                        </p>
                    </div>
                </div>
                @if($saranData->total() > 0)
                    <p class="text-sm text-gray-600 mt-2">
                        Menampilkan {{ $saranData->firstItem() }} - {{ $saranData->lastItem() }} dari {{ $saranData->total() }} saran
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
                                        {{ $saran->form_type === 'p4gn' ? 'bg-green-100 text-green-800' : 
                                           ($saran->form_type === 'dukungan' ? 'bg-purple-100 text-purple-800' : 
                                           ($saran->form_type === 'rekan_kerja_1' ? 'bg-indigo-100 text-indigo-800' : 'bg-teal-100 text-teal-800')) }}">
                                        {{ strtoupper(str_replace('_', ' ', $saran->form_type)) }}
                                    </span>
                                    <span class="text-sm font-medium text-gray-500 italic">Saran Anonim</span>
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium
                                        {{ $saran->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800' }}">
                                        {{ $saran->status === 'pending' ? 'Menunggu Review' : 'Sudah Direview' }}
                                    </span>
                                </div>

                                <!-- Saran Content -->
                                <div class="bg-gray-50 rounded-lg p-4 mb-3">
                                    <p class="text-gray-800 leading-relaxed">{{ $saran->saran }}</p>
                                </div>

                                <!-- Footer -->
                                <div class="flex items-center justify-between text-xs text-gray-500">
                                    <span>Dibuat: {{ $saran->created_at->format('d M Y, H:i') }}</span>
                                    @if($saran->updated_at != $saran->created_at)
                                        <span>Diperbarui: {{ $saran->updated_at->format('d M Y, H:i') }}</span>
                                    @endif
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="ml-4 flex flex-col gap-2">
                                @if($saran->status === 'pending')
                                    <button wire:click="markAsReviewed({{ $saran->id }})"
                                            wire:loading.attr="disabled"
                                            wire:target="markAsReviewed"
                                            class="inline-flex items-center px-3 py-1.5 bg-green-100 text-green-700 text-xs font-medium rounded-lg hover:bg-green-200 disabled:opacity-50 disabled:cursor-not-allowed transition-all duration-200">
                                        
                                        <!-- Loading spinner -->
                                        <svg wire:loading wire:target="markAsReviewed" class="animate-spin -ml-1 mr-2 h-3 w-3 text-green-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                        
                                        <!-- Default icon -->
                                        <svg wire:loading.remove wire:target="markAsReviewed" class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        
                                        <span wire:loading.remove wire:target="markAsReviewed">Tandai Reviewed</span>
                                        <span wire:loading wire:target="markAsReviewed">Processing...</span>
                                    </button>
                                @else
                                    <button wire:click="markAsPending({{ $saran->id }})"
                                            wire:loading.attr="disabled"
                                            wire:target="markAsPending"
                                            class="inline-flex items-center px-3 py-1.5 bg-yellow-100 text-yellow-700 text-xs font-medium rounded-lg hover:bg-yellow-200 disabled:opacity-50 disabled:cursor-not-allowed transition-all duration-200">
                                        
                                        <!-- Loading spinner -->
                                        <svg wire:loading wire:target="markAsPending" class="animate-spin -ml-1 mr-2 h-3 w-3 text-yellow-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                        
                                        <!-- Default icon -->
                                        <svg wire:loading.remove wire:target="markAsPending" class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        
                                        <span wire:loading.remove wire:target="markAsPending">Ubah ke Pending</span>
                                        <span wire:loading wire:target="markAsPending">Processing...</span>
                                    </button>
                                @endif
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
                                Belum ada saran dan masukan yang tersedia.
                            @endif
                        </p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($saranData->hasPages())
                <div class="px-6 py-4 border-t border-gray-200">
                    {{ $saranData->links() }}
                </div>
            @endif
        </div>
    </div>
</div>