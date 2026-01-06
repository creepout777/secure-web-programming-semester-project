<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cours_id')->constrained('cours')->cascadeOnDelete();
            $table->foreignId('etudiant_id')->constrained('utilisateurs');
            $table->timestamp('date_inscription')->useCurrent();
            $table->boolean('actif')->default(true);
            $table->unique(['cours_id', 'etudiant_id']);
        });
    }

    public function down(): void {
        Schema::dropIfExists('inscriptions');
    }
};
