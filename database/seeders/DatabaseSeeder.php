<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Run pegawai seeder first (only if no pegawai data exists)
        if (\App\Models\Pegawai::count() === 0) {
            $this->call([
                PegawaiSeeder::class,
            ]);
        }
        
        // Run katim seeder (only if no katim data exists)
        if (\App\Models\Katim::count() === 0) {
            $this->call([
                KatimSeeder::class,
            ]);
        }
        
        // Run kotak saran seeder (only if no kotak saran data exists)
        if (\App\Models\KotakSaran::count() === 0) {
            $this->call([
                KotakSaranSeeder::class,
            ]);
        }
        
        // Seed admin data (only if no admin exists)
        if (\App\Models\Admin::count() === 0) {
            DB::table('admins')->insert([
                'name' => 'Admin BNN',
                'email' => 'admin@bnn.test',
                'role' => 'admin',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
        // Seed pimpinan data (only if no pimpinan exists)
        if (\App\Models\Pimpinan::count() === 0) {
            DB::table('pimpinans')->insert([
                'nip' => '198301012010011001',
                'name' => 'Kepala BNN',
                'email' => 'kepala@bnn.test',
                'jabatan' => 'Kepala BNN Kabupaten',
                'role' => 'pimpinan',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
