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
        Schema::create('championship_titles', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g. Juara Utama 1
            $table->string('group'); // e.g. UTAMA, MADYA, HARAPAN, TERBAIK
            $table->integer('rank')->nullable(); // e.g. 1, 2, 3
            $table->foreignId('level_id')->constrained()->onDelete('cascade'); // e.g. SD, SMP, SMA
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null'); // jika hanya untuk kategori tertentu
            $table->integer('min_rank')->default(1); // ranking global minimal
            $table->integer('max_rank')->default(1); // ranking global maksimal
            $table->enum('type', ['UMUM', 'TERBAIK', 'KHUSUS'])->default('UMUM'); // jenis tropi
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('championship_titles');
    }
};
