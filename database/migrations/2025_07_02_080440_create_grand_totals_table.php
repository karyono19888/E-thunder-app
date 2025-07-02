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
        Schema::create('grand_totals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('participant_id')->constrained()->onDelete('cascade');
            $table->foreignId('championship_title_id')->nullable()->constrained()->onDelete('set null');
            $table->integer('total_score')->default(0);
            $table->integer('point_deduction')->default(0);
            $table->integer('final_score')->default(0);
            $table->integer('main_score')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grand_totals');
    }
};
