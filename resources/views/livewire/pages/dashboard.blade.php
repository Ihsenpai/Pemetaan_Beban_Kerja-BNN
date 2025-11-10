<div>
    <div class="bg-gradient-to-b from-blue-600 to-blue-800 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('img/logo_bnn.png') }}" alt="Logo BNN Kabupaten Cilacap" class="h-24">
            </div>
            <h1 class="text-4xl font-bold text-white mb-3">KABUPATEN CILACAP</h1>
            <p class="text-white text-xl">Analisis Beban Kerja Pegawai BNN Kabupaten Cilacap</p>
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <div class="border-b border-blue-200 pb-4 mb-8">
                <h2 class="text-2xl font-semibold text-blue-800">Pemetaan Beban Kerja BNNK Cilacap</h2>
                @if($isLoggedIn)
                    <p class="mt-2 text-blue-600">Selamat datang, {{ $userName }}! Anda login sebagai {{ ucfirst($userRole) }}.</p>
                @endif
            </div>
            
            <div class="space-y-6">
                @livewire('components.menu-item', [
                    'title' => 'Pemetaan Beban Kerja BNNK Cilacap (Program P4GN)',
                    'description' => 'Self assesment pegawai dalam program P4GN',
                    'url' => '#'
                ])
                
                @livewire('components.menu-item', [
                    'title' => 'Pemetaan Beban Kerja BNNK Cilacap (Program Dukungan Manajemen)',
                    'description' => 'Self assesment pegawai dalam program Dukungan Manajemen',
                    'url' => '#'
                ])
                
                @livewire('components.menu-item', [
                    'title' => 'Pemetaan Beban Kerja BNNK Cilacap Formulir Penilaian Rekan Kerja I',
                    'description' => 'Formulir penilaian terhadap rekan kerja satu tim',
                    'url' => '#'
                ])
                
                @livewire('components.menu-item', [
                    'title' => 'Pemetaan Beban Kerja BNNK Cilacap Formulir Penilaian Rekan Kerja II',
                    'description' => 'Formulir penilaian terhadap rekan kerja diluar tim',
                    'url' => '#'
                ])
                
                @livewire('components.menu-item', [
                    'title' => 'Pemetaan Beban Kerja BNNK Cilacap Formulir Penilaian Katim',
                    'description' => 'Formulir penilaian tim terhadap katim kerja',
                    'url' => '#'
                ])
            </div>
        </div>
    </div>
</div>
