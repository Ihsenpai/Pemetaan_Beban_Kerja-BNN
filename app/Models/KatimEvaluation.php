<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KatimEvaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'pegawai_nip',
        'katim_id',
        'total_section_a',
        'total_section_b',
        'total_section_c',
        'total_section_d',
        'total_keseluruhan',
        'periode',
    ];

    protected $casts = [
        'total_section_a' => 'integer',
        'total_section_b' => 'integer',
        'total_section_c' => 'integer',
        'total_section_d' => 'integer',
        'total_keseluruhan' => 'integer',
    ];

    /**
     * Relasi ke model Pegawai (penilai)
     */
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_nip', 'nip');
    }

    /**
     * Relasi ke model Katim (yang dinilai)
     */
    public function katim()
    {
        return $this->belongsTo(Katim::class);
    }
}