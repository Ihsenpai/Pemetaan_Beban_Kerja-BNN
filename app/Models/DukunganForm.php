<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DukunganForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'pegawai_nip',
        'total_tata_usaha',
        'total_keuangan',
        'total_kerjasama',
        'total_kehumasan',
        'zi_tugas',
        'zi_kendala_saran',
        'total_keseluruhan',
        'tanggal_penilaian',
        'periode_penilaian',
        'status',
    ];

    protected $casts = [
        'tanggal_penilaian' => 'date',
    ];

    /**
     * Get the pegawai that owns the dukungan form.
     */
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_nip', 'nip');
    }
}
