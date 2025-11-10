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
        Schema::create('katims', function (Blueprint $table) {
            $table->increments('id'); // Auto-increment primary key that can reuse deleted IDs
            $table->string('nip')->index();
            $table->foreign('nip')->references('nip')->on('pegawais')->onDelete('cascade');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('jabatan');
            $table->string('jenis_pegawai')->comment('Deskripsi jenis pegawai');
            $table->string('role')->default('katim');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('katims');
    }
};
