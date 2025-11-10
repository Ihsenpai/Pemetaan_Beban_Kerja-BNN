<?php

namespace Database\Seeders;

use App\Models\Katim;
use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class KatimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create additional pegawais that will be katims
        $pegawai1 = Pegawai::create([
            'nip' => '198001012010011001',
            'name' => 'Hendra Wijaya',
            'email' => 'hendra.wijaya@bnn.go.id',
            'jabatan' => 'Tim P4GN',
            'jenis_pegawai' => 'PNS',
            'role' => 'pegawai',
            'password' => Hash::make('password123'),
        ]);
        
        $pegawai2 = Pegawai::create([
            'nip' => '198201022010011002',
            'name' => 'Maya Kusuma',
            'email' => 'maya.kusuma@bnn.go.id',
            'jabatan' => ' Rehabilitasi',
            'jenis_pegawai' => 'PNS',
            'role' => 'pegawai',
            'password' => Hash::make('password123'),
        ]);
        
        // Create katim accounts linked to pegawais
        Katim::create([
            'nip' => '198001012010011001',
            'name' => 'Hendra Wijaya',
            'email' => 'hendra.wijaya@bnn.go.id',
            'jabatan' => 'Ketua Tim P4GN',
            'jenis_pegawai' => 'PNS',
            'role' => 'katim',
            'password' => Hash::make('password123'),
        ]);

        Katim::create([
            'nip' => '198201022010011002',
            'name' => 'Maya Kusuma',
            'email' => 'maya.kusuma@bnn.go.id',
            'jabatan' => 'Ketua Tim Rehabilitasi',
            'jenis_pegawai' => 'PNS',
            'role' => 'katim',
            'password' => Hash::make('password123'),
        ]);
    }
}
