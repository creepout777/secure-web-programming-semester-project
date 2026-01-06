<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cours_id')->constrained('cours')->cascadeOnDelete();
            $table->foreignId('auteur_id')->constrained('utilisateurs');
            $table->enum('type', ['annonce', 'ressource']);
            $table->string('titre', 255);
            $table->text('contenu')->nullable();
            $table->foreignId('dossier_id')->nullable()->constrained('dossiers')->nullOnDelete();
            $table->boolean('epingle')->default(false);
            $table->boolean('autoriser_commentaires')->default(true);
            $table->dateTime('date_publication')->nullable();
            $table->timestamps();
            $table->index(['cours_id', 'date_publication'], 'idx_publications_cours');
        });
    }

    public function down(): void {
        Schema::dropIfExists('publications');
    }
};
