<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('utilisateur_id')->constrained('utilisateurs')->cascadeOnDelete();
            $table->enum('type', ['annonce','ressource','devoir','note','commentaire','deadline','inscription']);
            $table->string('titre', 255);
            $table->text('message')->nullable();
            $table->string('lien', 500)->nullable();
            $table->foreignId('cours_id')->nullable()->constrained('cours')->cascadeOnDelete();
            $table->boolean('lue')->default(false);
            $table->boolean('email_envoye')->default(false);
            $table->timestamps();
            $table->index(['utilisateur_id', 'lue'], 'idx_notifications_user');
        });
    }

    public function down(): void {
        Schema::dropIfExists('notifications');
    }
};
