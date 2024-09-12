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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Colonna chiave esterna per 'user_id'
            $table->foreignId('game_id')->constrained()->onDelete('cascade'); // Colonna chiave esterna per 'game_id'
            $table->integer('rating'); // Colonna per il punteggio della recensione
            $table->text('review'); // Colonna per il testo della recensione
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
