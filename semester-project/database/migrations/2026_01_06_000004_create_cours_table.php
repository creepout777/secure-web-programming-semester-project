<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 200);
            $table->text('description')->nullable();
            $table->string('matiere', 100)->nullable();
            $table->string('niveau', 50)->nullable();
            $table->string('code_invitation', 12)->unique();
            $table->foreignId('professeur_id')->constrained('utilisateurs');
            $table->string('couleur_theme', 7)->default('#1967d2');
            $table->string('banniere_path')->nullable();
            $table->boolean('autoriser_commentaires')->default(true);
            $table->boolean('autoriser_retard')->default(false);
            $table->boolean('archive')->default(false);
            $table->dateTime('date_archivage')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('cours');
    }
};
