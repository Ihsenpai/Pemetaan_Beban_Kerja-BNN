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
        Schema::create('katim_evaluations', function (Blueprint $table) {
            $table->id();
            $table->string('pegawai_nip'); // Menggunakan NIP pegawai, bukan foreign ID
            $table->unsignedInteger('katim_id'); // ID katim (unsigned integer)
            $table->integer('total_section_a')->default(0); // Total nilai section A
            $table->integer('total_section_b')->default(0); // Total nilai section B  
            $table->integer('total_section_c')->default(0); // Total nilai section C
            $table->integer('total_section_d')->default(0); // Total nilai section D
            $table->integer('total_keseluruhan')->default(0); // Total semua section
            $table->string('periode', 7); // Format: YYYY-MM (misal: 2025-08)
            $table->timestamps();
            
            // Foreign key constraints
            $table->foreign('pegawai_nip')->references('nip')->on('pegawais')->onDelete('cascade');
            $table->foreign('katim_id')->references('id')->on('katims')->onDelete('cascade');
            
            // Unique constraint: satu pegawai hanya bisa menilai satu ketua tim per periode
            $table->unique(['pegawai_nip', 'katim_id', 'periode'], 'unique_pegawai_katim_periode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('katim_evaluations');
    }
};
