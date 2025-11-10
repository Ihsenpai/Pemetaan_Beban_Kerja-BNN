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
        Schema::create('rekan_kerja2_evaluations', function (Blueprint $table) {
            $table->id();
            $table->string('katim_nip'); // NIP katim yang menilai
            $table->string('pegawai_nip'); // NIP pegawai yang dinilai
            
            // Snapshot data pegawai untuk menghindari masalah perubahan data
            $table->string('pegawai_nama'); // Nama pegawai saat evaluasi
            $table->string('pegawai_jabatan'); // Jabatan pegawai saat evaluasi
            
            // Penilaian berdasarkan 2 aspek
            $table->tinyInteger('ketertiban')->nullable(); // 1-5 (1=tidak pernah, 2=sesekali, 3=jarang, 4=sering, 5=rutinitas)
            $table->tinyInteger('efektivitas')->nullable(); // 1-4 (1=tidak efektif, 2=kurang efektif, 3=cukup efektif, 4=efektif)
            
            // Total score (calculated)
            $table->integer('total_score')->nullable();
            
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
        Schema::dropIfExists('rekan_kerja2_evaluations');
    }
};
