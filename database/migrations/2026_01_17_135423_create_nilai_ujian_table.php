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
        Schema::create('nilai_ujian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nilai_att_id')->constrained('nilai_att')->onDelete('cascade');
            $table->foreignId('ujian_id')->constrained('ujian')->onDelete('cascade');
            $table->foreignId('ujian_item_id')->constrained('ujian_item')->onDelete('cascade');
            $table->integer('nilai')->nullable();
            $table->text('catatan')->nullable();
            $table->unique(['nilai_att_id', 'ujian_item_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_ujian');
    }
};
