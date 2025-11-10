<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekanKerja2Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'katim_nip',
        'pegawai_nip',
        'pegawai_nama',
        'pegawai_jabatan',
        'ketertiban',
        'efektivitas',
        'total_score',
        'periode',
    ];

    protected $casts = [
        'ketertiban' => 'integer',
        'efektivitas' => 'integer',
        'total_score' => 'integer',
    ];

    // Relationship ke Katim yang menilai
    public function katim()
    {
        return $this->belongsTo(Katim::class, 'katim_nip', 'nip');
    }

    // Relationship ke Pegawai yang dinilai
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_nip', 'nip');
    }

    // Method untuk menghitung score
    public function calculateScore()
    {
        // Ketertiban: 1-5, Efektivitas: 1-4
        // Total score maksimal = 5 + 4 = 9
        return ($this->ketertiban ?? 0) + ($this->efektivitas ?? 0);
    }
}
