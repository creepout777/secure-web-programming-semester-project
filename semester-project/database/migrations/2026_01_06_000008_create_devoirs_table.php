<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('devoirs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cours_id')->constrained('cours')->cascadeOnDelete();
            $table->string('titre', 255);
            $table->text('instructions')->nullable();
            $table->dateTime('date_limite');
            $table->decimal('points_max', 5, 2)->default(20);
            $table->json('rubrique')->nullable();
            $table->boolean('autoriser_retard')->default(false);
            $table->decimal('penalite_retard', 5, 2)->default(0);
            $table->integer('limite_fichiers')->default(10);
            $table->json('formats_autorises')->nullable();
            $table->json('assigne_a')->nullable();
            $table->boolean('publie')->default(true);
            $table->dateTime('date_publication')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('devoirs');
    }
};
