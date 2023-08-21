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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('npm',12)->nullable()->unique();
            $table->string('nama',100)->nullable();
            $table->string('stambuk')->nullable();
            $table->string('id_peminatan')->nullable();
            $table->string('id_prodi')->nullable();
            $table->string('thn_lulus')->nullable();
            $table->date('sempro')->nullable();
            $table->date('semhas')->nullable();
            $table->date('meja_hijau')->nullable();
            $table->date('yudisium')->nullable();
            $table->string('judul_skripsi')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('tempat_pekerjaan')->nullable();
            $table->string('file');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnis');
    }
};
