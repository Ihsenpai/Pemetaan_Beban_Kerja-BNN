<!-- Main index file for Rekan Kerja 2 Evaluation Form -->
<div class="bg-gradient-to-br from-blue-800 via-blue-900 to-indigo-900 min-h-screen">
    <div class="bg-gradient-to-b from-blue-600 to-blue-800 py-12 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center">
                <a href="{{ route($userRole . '.dashboard') }}" class="text-white hover:text-blue-200 mr-4 transition duration-300 ease-in-out transform hover:scale-110">
                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-white text-blue-600">
                        <span class="font-bold">←</span>
                    </div>
                </a>
                <div>
                    <h2 class="text-2xl font-bold text-white">Form Penilaian Rekan Kerja 2</h2>
                    <p class="text-blue-200 mt-1">Form penilaian terhadap rekan kerja di luar tim</p>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        @if (session()->has('message'))
            <div class="mt-6 mb-6 p-5 bg-gradient-to-r from-green-50 to-green-100 text-green-700 rounded-lg shadow-md border-l-4 border-green-500 flex items-center animate__animated animate__fadeIn">
                <div class="flex items-center justify-center w-6 h-6 rounded-full bg-green-500 text-white mr-3">
                    <span class="font-bold">✓</span>
                </div>
                <div>
                    <p class="font-medium">{{ session('message') }}</p>
                </div>
            </div>
        @endif

        <div class="bg-white rounded-lg shadow-lg p-8">
            <div class="mb-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Pemetaan Beban Kerja BNNK Cilacap</h3>
                <h4 class="text-lg font-medium text-blue-900 mb-4">Form Penilaian Rekan Kerja (Di Luar Tim)</h4>
                <p class="text-gray-600 text-sm">Form penilaian ini diisi oleh Katim Kerja untuk memberikan penilaian terhadap Personil yang tergabung dalam Tim Kerja</p>
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Katim Kerja :</label>
                <div class="p-3 bg-blue-50 rounded-lg border border-blue-200">
                    <span class="text-blue-900 font-medium">{{ $userName }}</span>
                </div>
            </div>

            <form wire:submit.prevent="saveForm">
                <div class="mb-6">
                    <h5 class="text-lg font-medium text-gray-900 mb-4">Silahkan berikan penilaian :</h5>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                            <thead class="bg-blue-600">
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider border-r border-blue-500" style="width: 300px;">
                                        Nama Pegawai
                                    </th>
                                    <th class="px-4 py-3 text-center text-xs font-medium text-white uppercase tracking-wider border-r border-blue-500" style="width: 200px;">
                                        Ketertiban
                                    </th>
                                    <th class="px-4 py-3 text-center text-xs font-medium text-white uppercase tracking-wider" style="width: 200px;">
                                        Efektivitas
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($pegawaiList as $pegawai)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-4 border-r border-gray-200">
                                            <div>
                                                <div class="text-sm font-medium text-gray-900">{{ $pegawai['nama'] }}</div>
                                                <div class="text-sm text-gray-500">{{ $pegawai['jabatan'] }}</div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-center border-r border-gray-200">
                                            <select wire:model="evaluations.{{ $pegawai['nip'] }}.ketertiban" 
                                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                                                <option value="">-- Pilih --</option>
                                                <option value="1">1 - Tidak Pernah</option>
                                                <option value="2">2 - Sesekali (1-2 Kali dalam setahun)</option>
                                                <option value="3">3 - Jarang (3-5 Kali dalam setahun)</option>
                                                <option value="4">4 - Sering (Hampir setiap bulan)</option>
                                                <option value="5">5 - Rutinitas (Dilaksanakan setiap bulan)</option>
                                            </select>
                                        </td>
                                        <td class="px-4 py-4 text-center">
                                            <select wire:model="evaluations.{{ $pegawai['nip'] }}.efektivitas" 
                                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                                                <option value="">-- Pilih --</option>
                                                <option value="1">1 - Tidak Efektif</option>
                                                <option value="2">2 - Kurang Efektif</option>
                                                <option value="3">3 - Cukup Efektif</option>
                                                <option value="4">4 - Efektif</option>
                                            </select>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Kotak Saran Anonymous -->
                <div class="mt-8 mb-8">
                    @include('components.kotak-saran', [
                        'formType' => 'rekan_kerja_2',
                        'title' => 'Saran untuk Perbaikan Evaluasi Rekan Kerja 2',
                        'placeholder' => 'Berikan saran Anda untuk perbaikan sistem evaluasi rekan kerja di luar tim...'
                    ])
                </div>

                <div class="flex justify-center space-x-4 mt-8">
                    <button type="button" onclick="window.history.back()" 
                            class="px-6 py-3 bg-gray-100 text-gray-700 font-medium rounded-lg hover:bg-gray-200 transition duration-300 focus:outline-none focus:ring-2 focus:ring-gray-500">
                        Save
                    </button>
                    <button type="submit" 
                            class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-lg">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>