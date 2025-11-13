<div class="bg-gradient-to-br from-blue-800 via-blue-900 to-indigo-900 min-h-screen">
    <!-- Header -->
    <div class="bg-gradient-to-b from-blue-600 to-blue-800 py-8 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-white">Manajemen Ketua Tim</h1>
                    <p class="text-blue-200 mt-2">Kelola data ketua tim BNN Kabupaten Cilacap</p>
                </div>
                <a href="{{ route('admin.dashboard') }}" class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-200">
                    <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali
                </a>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        
        <!-- Action Bar -->
        <div class="mb-6 bg-white rounded-lg shadow-lg p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <!-- Search -->
                <div class="flex-1">
                    <div class="relative">
                        <input 
                            type="text" 
                            wire:model.live="search" 
                            placeholder="Cari katim berdasarkan nama, NIP, atau email..."
                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        >
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Add Button -->
                <button 
                    wire:click="create" 
                    class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition duration-200 flex items-center"
                >
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Tambah Katim
                </button>
            </div>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Katim ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIP</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jabatan</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Pegawai</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($katims as $index => $katim)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $katims->firstItem() + $index }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600">
                                    {{ $katim->katim_id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $katim->nip }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $katim->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $katim->email }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $katim->jabatan }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        {{ $katim->jenis_pegawai }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                    <div class="flex items-center justify-center space-x-2">
                                        <button 
                                            wire:click="edit({{ $katim->id }})" 
                                            class="text-blue-600 hover:text-blue-900 transition duration-200"
                                            title="Edit"
                                        >
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                            </svg>
                                        </button>
                                        <button 
                                            wire:click="confirmDelete({{ $katim->id }})" 
                                            class="text-red-600 hover:text-red-900 transition duration-200"
                                            title="Hapus"
                                        >
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="px-6 py-12 text-center text-gray-500">
                                    <svg class="w-12 h-12 mx-auto mb-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                    </svg>
                                    <p class="text-lg">Tidak ada data ketua tim</p>
                                    <p class="text-sm">Klik tombol "Tambah Katim" untuk menambah data baru</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if($katims->hasPages())
                <div class="bg-gray-50 px-6 py-3 border-t border-gray-200">
                    {{ $katims->links() }}
                </div>
            @endif
        </div>
    </div>

    <!-- Modal Create/Edit -->
    @if($showModal)
        <div class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <div class="relative inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="mb-4">
                            <h3 class="text-lg font-medium text-gray-900">
                                {{ $isEdit ? 'Edit Ketua Tim' : 'Tambah Ketua Tim' }}
                            </h3>
                        </div>

                        <form wire:submit.prevent="save">
                            <div class="space-y-4">
                                <!-- NIP -->
                                <div>
                                    <label for="nip" class="block text-sm font-medium text-gray-700">NIP</label>
                                    <input 
                                        type="text" 
                                        id="nip"
                                        wire:model="form.nip" 
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('form.nip') border-red-500 @enderror"
                                        placeholder="Masukkan NIP"
                                    >
                                    @error('form.nip')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Nama -->
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                                    <input 
                                        type="text" 
                                        id="name"
                                        wire:model="form.name" 
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('form.nama') border-red-500 @enderror"
                                        placeholder="Masukkan nama lengkap"
                                    >
                                    @error('form.name')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input 
                                        type="email" 
                                        id="email"
                                        wire:model="form.email" 
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('form.email') border-red-500 @enderror"
                                        placeholder="Masukkan email"
                                    >
                                    @error('form.email')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Jabatan -->
                                <div>
                                    <label for="jabatan" class="block text-sm font-medium text-gray-700">Jabatan</label>
                                    <input 
                                        type="text" 
                                        id="jabatan"
                                        wire:model="form.jabatan" 
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('form.jabatan') border-red-500 @enderror"
                                        placeholder="Masukkan jabatan"
                                    >
                                    @error('form.jabatan')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Jenis Pegawai -->
                                <div>
                                    <label for="jenis_pegawai" class="block text-sm font-medium text-gray-700">Jenis Pegawai</label>
                                    <select 
                                        id="jenis_pegawai"
                                        wire:model="form.jenis_pegawai" 
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('form.jenis_pegawai') border-red-500 @enderror"
                                    >
                                        <option value="PNS">PNS</option>
                                        <option value="PPPK">PPPK</option>
                                        <option value="Kontrak">Kontrak</option>
                                    </select>
                                    @error('form.jenis_pegawai')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Password (hanya untuk create atau reset) -->
                                @if(!$isEdit || $showPasswordField)
                                    <div>
                                        <label for="password" class="block text-sm font-medium text-gray-700">
                                            {{ $isEdit ? 'Password Baru' : 'Password' }}
                                        </label>
                                        <input 
                                            type="password" 
                                            id="password"
                                            wire:model="form.password" 
                                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('form.password') border-red-500 @enderror"
                                            placeholder="{{ $isEdit ? 'Kosongkan jika tidak ingin mengubah' : 'Masukkan password' }}"
                                        >
                                        @error('form.password')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                @endif

                                @if($isEdit && !$showPasswordField)
                                    <div>
                                        <button 
                                            type="button"
                                            wire:click="$set('showPasswordField', true)"
                                            class="text-sm text-blue-600 hover:text-blue-800"
                                        >
                                            Ubah Password
                                        </button>
                                    </div>
                                @endif


                            </div>

                            <div class="mt-6 flex justify-end space-x-3">
                                <button 
                                    type="button" 
                                    wire:click="closeModal"
                                    class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400 transition duration-200"
                                >
                                    Batal
                                </button>
                                <button 
                                    type="submit"
                                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-200"
                                    wire:loading.attr="disabled"
                                >
                                    <span wire:loading.remove>{{ $isEdit ? 'Update' : 'Simpan' }}</span>
                                    <span wire:loading>Menyimpan...</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Modal Delete Confirmation -->
    @if(isset($showDeleteModal) && $showDeleteModal)
        <div class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <div class="relative inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z" />
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Konfirmasi Hapus</h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">
                                        Apakah Anda yakin ingin menghapus ketua tim ini? Tindakan ini tidak dapat dibatalkan.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button 
                            wire:click="delete"
                            type="button" 
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm"
                            wire:loading.attr="disabled"
                        >
                            <span wire:loading.remove>Hapus</span>
                            <span wire:loading>Menghapus...</span>
                        </button>
                        <button 
                            wire:click="$set('showDeleteModal', false)"
                            type="button" 
                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                        >
                            Batal
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>