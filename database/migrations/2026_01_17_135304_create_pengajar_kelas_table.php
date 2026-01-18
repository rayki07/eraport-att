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
        Schema::create('pengajar_kelas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->nullable()->constrained('guru')->nullOnDelete();
            $table->foreignId('kelas_id')->constrained('kelas')->onDelete('cascade');
            $table->foreignId('mapel_id')->constrained('mapel')->onDelete('cascade');
            $table->foreignId('tahun_ajaran_id')->constrained('tahun_ajaran')->onDelete('cascade');
            $table->foreignId('semester_id')->constrained('semester')->onDelete('cascade');
            $table->timestamps();
            $table->unique(['tahun_ajaran_id', 'semester_id', 'kelas_id', 'mapel_id', 'guru_id'], 'idx_pengajar_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajar_kelas');
    }
};
