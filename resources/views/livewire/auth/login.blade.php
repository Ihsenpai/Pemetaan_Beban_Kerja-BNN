<div class="flex min-h-screen">
    <!-- Left Side - Blue Background with Logo -->
    <div class="hidden lg:flex lg:w-1/2 bg-bnn-blue flex-col items-center justify-center p-12 relative">
        <a href="{{ route('home') }}" class="absolute top-8 left-8 text-white flex items-center">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Back -->
        </a>
        <div class="flex flex-col items-center">
            <img src="{{ asset('img/logo_bnn.png') }}" alt="Logo BNN" class="h-64 w-64 mb-8">
            <h1 class="text-white text-4xl font-bold mb-2 text-center">KABUPATEN</h1>
            <h1 class="text-white text-4xl font-bold text-center">CILACAP</h1>
        </div>
    </div>

    <!-- Right Side - Login Form -->
    <div class="w-full lg:w-1/2 bg-white flex items-center justify-center p-8 lg:p-16">
        <div class="w-full max-w-md">
            <div class="mb-12">
                <h2 class="text-4xl lg:text-5xl text-bnn-dark-blue mb-3 font-righteous">Pemetaan Beban Kerja BNNK Cilacap</h2>
                <p class="text-blue-500 text-lg">Halo, Selamat Datang Kembali!</p>
            </div>

            <h3 class="text-2xl lg:text-3xl font-bold text-gray-800 mb-10">Masuk</h3>

            @if (session('status'))
                <div class="mb-4 text-sm font-medium text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form wire:submit.prevent="login" class="space-y-6">
                <!-- Email Address -->
                <div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                        </div>
                        <input 
                            wire:model="email" 
                            type="email" 
                            required 
                            class="w-full pl-12 pr-4 py-3 text-lg border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                            placeholder="Email" 
                            autocomplete="email"
                        >
                    </div>
                    @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Password -->
                <div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input 
                            wire:model="password" 
                            type="password" 
                            required 
                            class="w-full pl-12 pr-4 py-3 text-lg border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                            placeholder="Password"
                            autocomplete="current-password"
                        >
                    </div>
                    @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Login As Dropdown -->
                <div>
                    <div class="relative">
                        <button 
                            type="button"
                            wire:click="toggleDropdown"
                            class="w-full pl-4 pr-10 py-3 text-lg border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white text-left flex justify-between items-center"
                        >
                            <span class="block truncate">{{ $loginAs ? $loginAs : 'Masuk Sebagai' }}</span>
                            <span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </button>
                        
                        @if ($showDropdown)
                        <div class="absolute z-10 mt-1 w-full bg-white shadow-lg rounded-md py-1">
                            <button type="button" wire:click="selectRole('Pimpinan')" class="block w-full text-left px-4 py-3 text-base text-gray-700 hover:bg-blue-100">Pimpinan</button>
                            <button type="button" wire:click="selectRole('Katim')" class="block w-full text-left px-4 py-3 text-base text-gray-700 hover:bg-blue-100">Katim</button>
                            <button type="button" wire:click="selectRole('Pegawai')" class="block w-full text-left px-4 py-3 text-base text-gray-700 hover:bg-blue-100">Pegawai</button>
                            <button type="button" wire:click="selectRole('Admin')" class="block w-full text-left px-4 py-3 text-base text-gray-700 hover:bg-blue-100">Admin</button>
                        </div>
                        @endif
                    </div>
                    @error('loginAs') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                </div>

                <div class="pt-4">
                    <button 
                        type="submit" 
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 text-lg rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                    >
                        Masuk
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
