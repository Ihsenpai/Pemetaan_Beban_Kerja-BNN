<div class="bg-gray-50 flex-grow">
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-8 sm:p-10">
                    <div class="flex flex-col lg:flex-row gap-8">
                        <!-- Profile Info Card -->
                        <div class="w-full lg:w-2/3">
                            <h2 class="text-3xl font-bold text-gray-800 mb-2">Profile Information</h2>
                            <p class="text-base text-gray-500 mb-8">Update your account's profile information and email address.</p>
                            
                            @if (session('message'))
                                <div class="bg-green-50 border-l-4 border-green-400 p-5 mb-8">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-base text-green-700">{{ session('message') }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            
                            <form wire:submit="save" class="space-y-8">
                                <div>
                                    <label for="name" class="block text-lg font-medium text-gray-700">Name</label>
                                    <input type="text" wire:model="name" id="name" autocomplete="name" 
                                           class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-base">
                                    @error('name') <span class="text-red-500 text-base mt-1">{{ $message }}</span> @enderror
                                </div>
                                
                                <div>
                                    <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
                                    <input type="email" wire:model="email" id="email" autocomplete="email" 
                                           class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-base">
                                    @error('email') <span class="text-red-500 text-base mt-1">{{ $message }}</span> @enderror
                                </div>
                                
                                <div class="flex items-center gap-4 pt-4">
                                    <button type="submit" class="inline-flex items-center px-6 py-3 bg-blue-600 border border-transparent rounded-md font-semibold text-base text-white uppercase tracking-widest hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                                        Save Changes
                                    </button>
                                    
                                    <div wire:loading wire:target="save" class="text-base text-gray-600">
                                        Saving...
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <!-- User Info Card -->
                        <div class="w-full lg:w-1/3">
                            <div class="bg-gray-50 p-8 rounded-lg shadow-sm">
                                <div class="flex items-center justify-center">
                                    <div class="h-28 w-28 rounded-full bg-blue-100 flex items-center justify-center">
                                        <span class="text-4xl font-bold text-blue-700">{{ substr($user->name, 0, 1) }}</span>
                                    </div>
                                </div>
                                <div class="mt-6 text-center">
                                    <h3 class="text-xl font-medium text-gray-900">{{ $user->name }}</h3>
                                    <p class="text-base text-gray-500 mt-1">{{ $user->email }}</p>
                                </div>
                                <div class="mt-8">
                                    <div class="flex items-center justify-between py-3 border-b border-gray-200">
                                        <span class="text-base font-medium text-gray-500">Account type</span>
                                        <span class="text-base font-medium text-gray-900">
                                            @if (Auth::guard('admin')->check())
                                                Admin
                                            @elseif (Auth::guard('pimpinan')->check())
                                                Pimpinan
                                            @elseif (Auth::guard('pegawai')->check())
                                                Pegawai
                                            @elseif (Auth::guard('katim')->check())
                                                Katim
                                            @endif
                                        </span>
                                    </div>
                                    <div class="flex items-center justify-between py-3 border-b border-gray-200">
                                        <span class="text-base font-medium text-gray-500">Member since</span>
                                        <span class="text-base font-medium text-gray-900">{{ $user->created_at->format('d M Y') }}</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-6 space-y-4">
                                <a href="{{ route('settings.password') }}" class="w-full flex items-center justify-center px-6 py-3 bg-gray-100 border border-transparent rounded-md font-medium text-base text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition duration-150 ease-in-out">
                                    <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                    </svg>
                                    Change Password
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
