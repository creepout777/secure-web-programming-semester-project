<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('soumissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('devoir_id')->constrained('devoirs')->cascadeOnDelete();
            $table->foreignId('etudiant_id')->constrained('utilisateurs');
            $table->foreignId('corrige_par')->nullable()->constrained('utilisateurs');


            $table->text('commentaire_etudiant')->nullable();
            $table->enum('statut', ['brouillon','soumis','en_retard','rendu','a_refaire'])->default('brouillon');
            $table->dateTime('date_soumission')->nullable();
            $table->decimal('note', 5, 2)->nullable();
            $table->json('notes_rubrique')->nullable();
            $table->text('feedback')->nullable();
            $table->dateTime('date_correction')->nullable();
            $table->boolean('retourne')->default(false);
            $table->dateTime('date_retour')->nullable();
            $table->timestamps();
            $table->unique(['devoir_id', 'etudiant_id'], 'unique_soumission');
            $table->index('statut', 'idx_soumissions_statut');
        });
    }

    public function down(): void {
        Schema::dropIfExists('soumissions');
    }
};
