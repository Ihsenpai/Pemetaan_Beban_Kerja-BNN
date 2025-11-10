<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rekan_kerja1_evaluations', function (Blueprint $table) {
            $table->id();
            $table->string('katim_nip'); // NIP katim yang menilai
            $table->string('pegawai_nip'); // NIP pegawai yang dinilai
            $table->integer('total_section_a')->nullable(); // Total Efektivitas dalam Mencapai Tujuan
            $table->integer('total_section_b')->nullable(); // Total Kerjasama dan Komunikasi  
            $table->integer('total_section_c')->nullable(); // Total Aspek Lain
            $table->integer('total_keseluruhan')->nullable(); // Total semua section
            $table->string('periode'); // Periode penilaian (YYYY-MM)
            $table->timestamps();
            
            // Foreign key constraints
            $table->foreign('katim_nip')->references('nip')->on('katims')->onDelete('cascade');
            $table->foreign('pegawai_nip')->references('nip')->on('pegawais')->onDelete('cascade');
            
            // Unique constraint untuk menghindari duplikasi penilaian
            $table->unique(['katim_nip', 'pegawai_nip', 'periode']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekan_kerja1_evaluations');
    }
};
