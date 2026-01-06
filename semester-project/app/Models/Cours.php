<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;

    protected $table = 'cours';
    protected $fillable = [
        'titre','description','matiere','niveau','code_invitation','professeur_id',
        'couleur_theme','banniere_path','autoriser_commentaires','autoriser_retard','archive','date_archivage'
    ];

    protected $casts = [
        'autoriser_commentaires' => 'boolean',
        'autoriser_retard' => 'boolean',
        'archive' => 'boolean',
        'date_archivage' => 'datetime',
    ];

    // Relations
    public function professeur()
    {
        return $this->belongsTo(Utilisateur::class, 'professeur_id');
    }

    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }

    public function dossiers()
    {
        return $this->hasMany(Dossier::class);
    }

    public function publications()
    {
        return $this->hasMany(Publication::class);
    }

    public function devoirs()
    {
        return $this->hasMany(Devoir::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function activites()
    {
        return $this->hasMany(Activite::class);
    }
}
