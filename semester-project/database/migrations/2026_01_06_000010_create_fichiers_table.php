<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('fichiers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('publication_id')->nullable()->constrained('publications')->nullOnDelete();
            $table->foreignId('devoir_id')->nullable()->constrained('devoirs')->nullOnDelete();
            $table->foreignId('soumission_id')->nullable()->constrained('soumissions')->nullOnDelete();

            $table->string('nom_original');
            $table->string('nom_stockage');
            $table->string('type_mime');
            $table->bigInteger('taille');
            $table->string('chemin', 500);
            $table->timestamp('date_upload')->useCurrent();
            $table->index('publication_id', 'idx_publication');
            $table->index('devoir_id', 'idx_devoir');
            $table->index('soumission_id', 'idx_soumission');
        });
    }

    public function down(): void {
        Schema::dropIfExists('fichiers');
    }
};
