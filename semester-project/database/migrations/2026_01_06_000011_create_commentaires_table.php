<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->foreignId('publication_id')->nullable()->constrained('publications')->cascadeOnDelete();
            $table->foreignId('devoir_id')->nullable()->constrained('devoirs')->cascadeOnDelete();
            $table->foreignId('auteur_id')->constrained('utilisateurs');
            $table->text('contenu');
            $table->foreignId('parent_id')->nullable()->constrained('commentaires')->cascadeOnDelete();
            $table->boolean('modifie')->default(false);
            $table->timestamps();
            $table->timestamp('date_modification')->nullable();
        });
    }

    public function down(): void {
        Schema::dropIfExists('commentaires');
    }
};
