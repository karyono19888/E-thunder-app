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
        Schema::create('deductions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('participant_id')->constrained()->onDelete('cascade');
            $table->foreignId('penalty_rule_id')->nullable()->constrained()->onDelete('set null');
            $table->integer('points')->default(0);
            $table->integer('unit_count')->nullable(); // jumlah detik / siswa / dll jika dinamis
            $table->text('description')->nullable(); // detail khusus kasus ini
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deductions');
    }
};
