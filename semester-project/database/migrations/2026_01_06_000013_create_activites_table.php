<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('activites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('utilisateur_id')->constrained('utilisateurs');
            $table->foreignId('cours_id')->nullable()->constrained('cours')->nullOnDelete();
            $table->string('action', 100);
            $table->json('details')->nullable();
            $table->timestamp('date_action')->useCurrent();
        });
    }

    public function down(): void {
        Schema::dropIfExists('activites');
    }
};
