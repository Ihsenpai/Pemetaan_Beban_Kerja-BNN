<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KotakSaran;
use Carbon\Carbon;

class KotakSaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sampleData = [
            [
                'saran' => 'Form P4GN sudah cukup baik, namun perlu penambahan kolom untuk keterangan tambahan pada setiap bidang.',
                'form_type' => 'p4gn',
                'status' => 'pending',
                'created_at' => Carbon::now()->subDays(5),
                'updated_at' => Carbon::now()->subDays(5),
            ],
            [
                'saran' => 'Sistem evaluasi rekan kerja perlu ditingkatkan dengan menambahkan indikator yang lebih spesifik.',
                'form_type' => 'rekan_kerja_1',
                'status' => 'reviewed',
                'created_at' => Carbon::now()->subDays(3),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'saran' => 'Form dukungan untuk bidang keuangan perlu diperjelas kriteria penilaiannya.',
                'form_type' => 'dukungan',
                'status' => 'pending',
                'created_at' => Carbon::now()->subDays(1),
                'updated_at' => Carbon::now()->subDays(1),
            ],
            [
                'saran' => 'Interface untuk evaluasi rekan kerja 2 masih perlu penyesuaian agar lebih user-friendly.',
                'form_type' => 'rekan_kerja_2',
                'status' => 'reviewed',
                'created_at' => Carbon::now()->subDays(10),
                'updated_at' => Carbon::now()->subDays(8),
            ],
            [
                'saran' => 'Sistem secara keseluruhan sudah baik, hanya perlu sedikit perbaikan pada tampilan interface.',
                'form_type' => 'p4gn',
                'status' => 'pending',
                'created_at' => Carbon::now()->subHours(6),
                'updated_at' => Carbon::now()->subHours(6),
            ]
        ];

        foreach ($sampleData as $data) {
            KotakSaran::create($data);
        }
    }
}