<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P4gnForm extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'p4gn_forms';
    
    /**
     * Use InnoDB engine to enable ID reuse after deletion
     * 
     * @var string
     */
    protected $engine = 'InnoDB';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'pegawai_nip',
        'total_pencegahan',
        'total_pemberdayaan_masyarakat',
        'total_rehabilitasi',
        'total_pemberantasan',
        'total_keseluruhan',
        'tanggal_penilaian',
        'periode_penilaian',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'tanggal_penilaian' => 'date',
        'total_pencegahan' => 'integer',
        'total_pemberdayaan_masyarakat' => 'integer',
        'total_rehabilitasi' => 'integer',
        'total_pemberantasan' => 'integer',
        'total_keseluruhan' => 'integer',
    ];

    /**
     * Get the pegawai that owns the P4GN form.
     */
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_nip', 'nip');
    }
}
