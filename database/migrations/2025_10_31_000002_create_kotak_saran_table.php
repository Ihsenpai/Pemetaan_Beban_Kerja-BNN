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
        Schema::create('kotak_saran', function (Blueprint $table) {
            $table->id();
            $table->text('saran'); // Isi saran/catatan
            $table->enum('form_type', [
                'p4gn', 
                'dukungan', 
                'rekan_kerja_1', 
                'rekan_kerja_2'
            ]); // Jenis form asal (anonymous)
            $table->enum('status', ['pending', 'reviewed'])->default('pending');
            $table->timestamps();
            
            // Index untuk pencarian berdasarkan form_type dan status
            $table->index(['form_type', 'status']);
            $table->index(['created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kotak_saran');
    }
};
