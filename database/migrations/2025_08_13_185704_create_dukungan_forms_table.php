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
        Schema::create('dukungan_forms', function (Blueprint $table) {
            $table->id();
            $table->engine = 'InnoDB';
            $table->string('pegawai_nip');
            $table->foreign('pegawai_nip')
                  ->references('nip')
                  ->on('pegawais')
                  ->onDelete('cascade');

            // Only store total fields per section (ZI tidak masuk dalam total karena bukan numeric)
            $table->integer('total_tata_usaha')->default(0)->comment('Total nilai bidang Tata Usaha');
            $table->integer('total_keuangan')->default(0)->comment('Total nilai bidang Keuangan dan Perencanaan');
            $table->integer('total_kerjasama')->default(0)->comment('Total nilai bidang Kerjasama');
            $table->integer('total_kehumasan')->default(0)->comment('Total nilai bidang Kehumasan');
            
            // ZI data (text fields, tidak masuk dalam total keseluruhan)
            $table->string('zi_tugas')->nullable()->comment('Tugas dalam Zona Integritas');
            $table->text('zi_kendala_saran')->nullable()->comment('Kendala, saran, dan masukan ZI');
            
            $table->integer('total_keseluruhan')->default(0)->comment('Total nilai keseluruhan (tanpa ZI)');

            $table->date('tanggal_penilaian')->nullable();
            $table->string('periode_penilaian')->nullable();
            $table->enum('status', ['draft', 'submitted', 'approved'])->default('draft');
            $table->timestamps();
            
            // Ensure one form per pegawai per period
            $table->unique(['pegawai_nip', 'periode_penilaian'], 'unique_pegawai_periode_dukungan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dukungan_forms');
    }
};
