<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekanKerja1Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'katim_nip',
        'pegawai_nip',
        'total_section_a',
        'total_section_b',
        'total_section_c',
        'total_keseluruhan',
        'periode',
    ];

    protected $casts = [
        'total_section_a' => 'integer',
        'total_section_b' => 'integer',
        'total_section_c' => 'integer',
        'total_keseluruhan' => 'integer',
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

    // Relationship ke evaluator (Katim yang menilai)
    public function evaluator()
    {
        return $this->belongsTo(Katim::class, 'katim_nip', 'nip');
    }
}
