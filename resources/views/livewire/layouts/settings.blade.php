<div class="flex flex-col bg-gray-50">
    <div class="py-4 flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row gap-6">
                <!-- Navigation Sidebar -->
                <aside class="w-full md:w-64 bg-white p-4 rounded-lg shadow-sm">
                    <div class="flex items-center mb-6">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('img/logo_bnn.png') }}" alt="BNN Logo" class="h-10">
                        </div>
                        <div class="ml-3">
                            <h3 class="text-lg font-medium text-gray-900">Settings</h3>
                        </div>
                    </div>
                    
                    <nav class="space-y-1">
                        @foreach ($navigation as $item)
                            <a href="{{ route($item['route']) }}" 
                               class="group flex items-center px-3 py-3 text-sm font-medium rounded-md transition duration-150 ease-in-out {{ $item['active'] ? 'bg-blue-50 text-blue-700' : 'text-gray-700 hover:bg-gray-50 hover:text-gray-900' }}"
                               aria-current="{{ $item['active'] ? 'page' : 'false' }}">
                                
                                @if ($item['name'] == 'Profile')
                                    <svg class="mr-3 h-5 w-5 {{ $item['active'] ? 'text-blue-500' : 'text-gray-400 group-hover:text-gray-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                @elseif ($item['name'] == 'Password')
                                    <svg class="mr-3 h-5 w-5 {{ $item['active'] ? 'text-blue-500' : 'text-gray-400 group-hover:text-gray-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                    </svg>
                                @elseif ($item['name'] == 'Account')
                                    <svg class="mr-3 h-5 w-5 {{ $item['active'] ? 'text-blue-500' : 'text-gray-400 group-hover:text-gray-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                @endif
                                
                                {{ $item['name'] }}
                            </a>
                        @endforeach
                    </nav>
                </aside>

                <!-- Main Content Area -->
                <div class="flex-1">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
