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
        Schema::create('nilai_tahsin', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nilai_att_id')->constrained('nilai_att')->onDelete('cascade');
            $table->enum('jenis_mulai', ['iqra', 'tahsin', 'alquran'])->default('iqra');
            $table->enum('jenis_selesai', ['iqra', 'tahsin', 'alquran'])->default('iqra');
            $table->integer('jilid_mulai')->nullable();
            $table->integer('jilid_selesai')->nullable();
            $table->integer('halaman_mulai')->nullable();
            $table->integer('halaman_selesai')->nullable();
            $table->integer('juz_mulai')->nullable();
            $table->integer('juz_selesai')->nullable();
            $table->string('surah_mulai')->nullable();
            $table->string('surah_selesai')->nullable();
            $table->integer('ayat_mulai')->nullable();
            $table->integer('ayat_selesai')->nullable();
            $table->integer('nilai')->nullable();
            $table->text('catatan')->nullable();
            $table->unique('nilai_att_id'); //Supaya 1 raport ATT hanya punya 1 data tahsin & hafalan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_tahsin');
    }
};
