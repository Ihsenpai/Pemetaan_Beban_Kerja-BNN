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
        Schema::create('p4gn_forms', function (Blueprint $table) {
            $table->id();
            $table->engine = 'InnoDB';
            $table->string('pegawai_nip');
            $table->foreign('pegawai_nip')
                  ->references('nip')
                  ->on('pegawais')
                  ->onDelete('cascade');

            // Only store total fields per section
            $table->integer('total_pencegahan')->default(0)->comment('Total nilai bidang Pencegahan');
            $table->integer('total_pemberdayaan_masyarakat')->default(0)->comment('Total nilai bidang Pemberdayaan Masyarakat');
            $table->integer('total_rehabilitasi')->default(0)->comment('Total nilai bidang Rehabilitasi');
            $table->integer('total_pemberantasan')->default(0)->comment('Total nilai bidang Pemberantasan');
            $table->integer('total_keseluruhan')->default(0)->comment('Total nilai keseluruhan');

            $table->date('tanggal_penilaian')->nullable();
            $table->string('periode_penilaian')->nullable();
            $table->enum('status', ['draft', 'submitted', 'approved'])->default('draft');
            $table->timestamps();
            
            // Ensure one form per pegawai per period
            $table->unique(['pegawai_nip', 'periode_penilaian'], 'unique_pegawai_periode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p4gn_forms');
    }
};
