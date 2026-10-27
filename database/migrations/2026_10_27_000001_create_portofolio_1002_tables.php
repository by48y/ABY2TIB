<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portofolio_1002', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('kategori', 80);
            $table->text('deskripsi');
            $table->string('teknologi')->nullable();
            $table->string('link_project')->nullable();
            $table->string('gambar')->nullable();
            $table->unsignedSmallInteger('tahun')->nullable();
            $table->timestamps();
        });

        Schema::create('skill_1002', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedTinyInteger('level')->default(75);
            $table->timestamps();
        });

        Schema::create('pengalaman_1002', function (Blueprint $table) {
            $table->id();
            $table->string('posisi');
            $table->string('instansi');
            $table->string('periode', 80);
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengalaman_1002');
        Schema::dropIfExists('skill_1002');
        Schema::dropIfExists('portofolio_1002');
    }
};
