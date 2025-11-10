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
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Form Program P4GN -->
                <a href="{{ route('pegawai.form.p4gn') }}" class="bg-blue-100 rounded-lg shadow-lg p-8 flex flex-col items-center justify-center text-center transition duration-300 hover:shadow-xl hover:bg-blue-50 transform hover:-translate-y-1">
                    <div class="mb-6 w-24 h-24 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-800" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-medium text-blue-900 mb-2">Form Program P4GN</h3>
                    <p class="text-base text-gray-700">Self assesment pegawai dalam program P4GN</p>
                </a>

                <!-- Form Program Dukungan Manajemen -->
                <a href="{{ route('pegawai.form.dukungan') }}" class="bg-blue-100 rounded-lg shadow-lg p-8 flex flex-col items-center justify-center text-center transition duration-300 hover:shadow-xl hover:bg-blue-50 transform hover:-translate-y-1">
                    <div class="mb-6 w-24 h-24 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-800" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm5-1a1 1 0 00-1 1v2a1 1 0 102 0v-2a1 1 0 00-1-1zm-8-6a1 1 0 100 2h8a1 1 0 100-2H5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-medium text-blue-900 mb-2">Form Program Dukungan Manajemen</h3>
                    <p class="text-base text-gray-700">Self assesment pegawai dalam program dukungan manajemen</p>
                </a>

                <!-- Form Penilaian Katim -->
                <a href="{{ route('pegawai.form.katim') }}" class="bg-blue-100 rounded-lg shadow-lg p-8 flex flex-col items-center justify-center text-center transition duration-300 hover:shadow-xl hover:bg-blue-50 transform hover:-translate-y-1">
                    <div class="mb-6 w-24 h-24 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-800" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-medium text-blue-900 mb-2">Form Penilaian Katim</h3>
                    <p class="text-base text-gray-700">Form penilaian tim terhadap katim kerja</p>
                </a>
            </div>
        </div>
    </div>
</div>
