<div class="bg-blue-900 min-h-screen">
    <div class="bg-gradient-to-b from-blue-800 to-blue-900 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('img/logo_bnn.png') }}" alt="Logo BNN Kabupaten Cilacap" class="h-24">
            </div>
            <h1 class="text-4xl font-bold text-white mb-3">KABUPATEN CILACAP</h1>
            <p class="text-white text-xl">Analisis Beban Kerja Pegawai BNN Kabupaten Cilacap</p>
            @if($isLoggedIn)
                <div class="mt-6 inline-block bg-white/10 backdrop-blur-sm px-6 py-3 rounded-full border border-white/20 shadow-lg">
                    <div class="flex items-center space-x-3">
                        <div class="bg-blue-600 rounded-full p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h2 class="text-white font-medium">Selamat datang, <span class="font-bold text-blue-300">{{ $userName }}</span> | <span class="bg-blue-800 text-xs uppercase font-bold text-white px-2 py-1 rounded-md ml-1">{{ ucfirst($userRole) }}</span></h2>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Form Program P4GN - Commented out as requested
                <a href="#" class="bg-blue-100 rounded-lg shadow-lg p-8 flex flex-col items-center justify-center text-center transition duration-300 hover:shadow-xl hover:bg-blue-50 transform hover:-translate-y-1">
                    <div class="mb-6 w-24 h-24 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-800" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-medium text-blue-900 mb-2">Form Program P4GN</h3>
                    <p class="text-base text-gray-700">Self assesment pegawai dalam program P4GN</p>
                </a>
                -->

                <!-- Form Program Rekan Kerja I -->
                <a href="{{ route('katim.form.rekankerja1') }}" class="bg-blue-100 rounded-lg shadow-lg p-8 flex flex-col items-center justify-center text-center transition duration-300 hover:shadow-xl hover:bg-blue-50 transform hover:-translate-y-1">
                    <div class="mb-6 w-24 h-24 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-800" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-medium text-blue-900 mb-2">Form Program Rekan Kerja I</h3>
                    <p class="text-base text-gray-700">Form penilaian terhadap rekan kerja satu tim</p>
                </a>

                <!-- Form Program Rekan Kerja II -->
                <a href="{{ route('katim.form.rekankerja2') }}" class="bg-blue-100 rounded-lg shadow-lg p-8 flex flex-col items-center justify-center text-center transition duration-300 hover:shadow-xl hover:bg-blue-50 transform hover:-translate-y-1">
                    <div class="mb-6 w-24 h-24 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-800" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-medium text-blue-900 mb-2">Form Program Rekan Kerja II</h3>
                    <p class="text-base text-gray-700">Form penilaian terhadap rekan kerja diluar tim</p>
                </a>
            </div>
        </div>
    </div>
</div>
