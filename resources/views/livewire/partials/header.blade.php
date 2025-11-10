<div>
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 flex justify-between items-center">
            <div class="flex-shrink-0">
                <img src="{{ asset('img/logo-bnn_dengan-kabupaten-cilacap.png') }}" alt="Logo BNN" class="h-12 w-auto">
            </div>
            <div class="flex-grow text-center">
                <h1 class="text-xl font-medium text-gray-800">Pemetaan Beban Kerja BNNK Cilacap</h1>
            </div>
            <div class="flex items-center space-x-4">
                @if(!$isLoggedIn)
                    <a href="{{ route('login') }}" class="bg-blue-800 hover:bg-blue-900 text-white px-4 py-2 rounded-md text-sm font-medium inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v12a1 1 0 01-1 1H4a1 1 0 01-1-1V3zm5 4a1 1 0 10-2 0v1.586l-.293-.293a1 1 0 10-1.414 1.414l2 2a.997.997 0 001.414 0l2-2a1 1 0 00-1.414-1.414l-.293.293V7z" clip-rule="evenodd" />
                        </svg>
                        Masuk
                    </a>
                @else
                    @if($canSwitchRole)
                    <div class="mr-2 flex items-center">
                        <span class="mr-2 text-sm font-medium text-gray-700">Mode {{ $userRole === 'katim' ? 'Katim' : 'Pegawai' }}</span>
                        <button wire:click="switchRole" class="relative inline-flex items-center h-6 rounded-full w-11 {{ $userRole === 'katim' ? 'bg-blue-600' : 'bg-gray-200' }} transition-colors duration-200 ease-in-out focus:outline-none">
                            <span class="sr-only">Switch Role</span>
                            <span aria-hidden="true" class="inline-block h-5 w-5 rounded-full bg-white shadow transform transition ease-in-out duration-200 {{ $userRole === 'katim' ? 'translate-x-5' : 'translate-x-1' }}"></span>
                        </button>
                    </div>
                    @endif
                    <div class="relative">
                        <button wire:click="toggleDropdown" class="flex items-center space-x-2 focus:outline-none">
                            <div class="bg-blue-800 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm">
                                {{ substr($userName, 0, 1) }}
                            </div>
                            <span class="text-gray-700 font-medium">{{ $userName }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        
                        @if($showDropdown)
                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10">
                                <div class="px-4 py-2 text-xs text-gray-500">
                                    Login sebagai <span class="font-bold">{{ ucfirst($userRole) }}</span>
                                </div>
                                
                                @if($userRole === 'admin')
                                    <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard Admin</a>
                                @elseif($userRole === 'pimpinan')
                                    <a href="{{ route('pimpinan.dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard Pimpinan</a>
                                @elseif($userRole === 'katim')
                                    <a href="{{ route('katim.dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard Katim</a>
                                @elseif($userRole === 'pegawai')
                                    <a href="{{ route('pegawai.dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard Pegawai</a>
                                @else
                                    <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                                @endif
                                
                                <a href="{{ route('settings.profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pengaturan Profil</a>
                                <button wire:click="logout" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Keluar</button>
                            </div>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </header>
</div>
