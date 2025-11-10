<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class KotakSaran extends Model
{
    use HasFactory;

    protected $table = 'kotak_saran';

    protected $fillable = [
        'saran',
        'form_type',
        'status'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Constants untuk form types
    const FORM_TYPES = [
        'p4gn' => 'Form P4GN',
        'dukungan' => 'Form Dukungan',
        'rekan_kerja_1' => 'Evaluasi Rekan Kerja 1',
        'rekan_kerja_2' => 'Evaluasi Rekan Kerja 2'
    ];

    // Constants untuk status
    const STATUS_TYPES = [
        'pending' => 'Menunggu Review',
        'reviewed' => 'Sudah Direview'
    ];

    // Scope untuk filter berdasarkan form type
    public function scopeFromForm($query, $formType)
    {
        return $query->where('form_type', $formType);
    }

    // Scope untuk filter berdasarkan user role
    public function scopeFromRole($query, $userRole)
    {
        return $query->where('user_role', $userRole);
    }

    // Scope untuk filter berdasarkan form type
    public function scopeByFormType($query, $formType)
    {
        return $query->where('form_type', $formType);
    }

    // Scope untuk filter berdasarkan status
    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    // Scope untuk search
    public function scopeSearch($query, $term)
    {
        return $query->where('saran', 'like', '%' . $term . '%');
    }

    // Method untuk mendapatkan form type label
    public function getFormTypeLabel()
    {
        return self::FORM_TYPES[$this->form_type] ?? $this->form_type;
    }

    // Method untuk mendapatkan status label
    public function getStatusLabel()
    {
        return self::STATUS_TYPES[$this->status] ?? $this->status;
    }

    // Method untuk membuat saran baru (anonymous)
    public static function createSaran($saran, $formType)
    {
        return self::create([
            'saran' => $saran,
            'form_type' => $formType,
            'status' => 'pending'
        ]);
    }

    // Method untuk mengubah status menjadi reviewed
    public function markAsReviewed()
    {
        $this->update(['status' => 'reviewed']);
    }

    // Method untuk mengubah status menjadi pending
    public function markAsPending()
    {
        $this->update(['status' => 'pending']);
    }

    // Method untuk mendapatkan statistik saran
    public static function getStatistics()
    {
        $query = self::query();
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        return [
            'total' => $query->count(),
            'pending' => $query->where('status', 'pending')->count(),
            'reviewed' => $query->where('status', 'reviewed')->count(),
            'this_month' => $query->whereMonth('created_at', $currentMonth)
                                 ->whereYear('created_at', $currentYear)
                                 ->count(),
            'by_form_type' => $query->groupBy('form_type')
                                   ->selectRaw('form_type, count(*) as count')
                                   ->pluck('count', 'form_type')
                                   ->toArray()
        ];
    }
}