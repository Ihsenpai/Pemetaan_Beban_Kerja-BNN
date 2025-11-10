<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sample pegawai accounts
        Pegawai::create([
            'nip' => '198801012020011001',
            'name' => 'Budi Santoso',
            'email' => 'budi.santoso@bnn.go.id',
            'jabatan' => 'Analis Kebijakan',
            'jenis_pegawai' => 'PNS',
            'role' => 'pegawai',
            'password' => Hash::make('password123'),
        ]);

        Pegawai::create([
            'nip' => '199001022020011002',
            'name' => 'Siti Nurhayati',
            'email' => 'siti.nurhayati@bnn.go.id',
            'jabatan' => 'Pengawas Narkotika',
            'jenis_pegawai' => 'PPNPN',
            'role' => 'pegawai',
            'password' => Hash::make('password123'),
        ]);

        Pegawai::create([
            'nip' => '198505032020011003',
            'name' => 'Ahmad Fadli',
            'email' => 'ahmad.fadli@bnn.go.id',
            'jabatan' => 'Penyuluh Narkotika',
            'jenis_pegawai' => 'PNS',
            'role' => 'pegawai',
            'password' => Hash::make('password123'),
        ]);
    }
}
