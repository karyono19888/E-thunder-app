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
        Schema::create('penalty_rules', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // contoh: "Melebihi waktu tampil", "Administrasi tidak lengkap"
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null'); // jika pengurangan khusus kategori tertentu
            $table->boolean('is_dynamic')->default(false); // jika TRUE, maka poin dihitung per unit
            $table->integer('point_per_unit')->default(1); // misal 2 poin per detik
            $table->string('unit_label')->nullable(); // contoh: 'detik', 'siswa'
            $table->text('default_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penalty_rules');
    }
};
