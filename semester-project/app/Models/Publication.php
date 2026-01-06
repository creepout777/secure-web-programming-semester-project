<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $table = 'publications';
    protected $fillable = [
        'cours_id','auteur_id','type','titre','contenu','dossier_id','epingle','autoriser_commentaires','date_publication'
    ];

    protected $casts = [
        'epingle' => 'boolean',
        'autoriser_commentaires' => 'boolean',
        'date_publication' => 'datetime',
    ];

    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }

    public function auteur()
    {
        return $this->belongsTo(Utilisateur::class, 'auteur_id');
    }

    public function dossier()
    {
        return $this->belongsTo(Dossier::class);
    }

    public function fichiers()
    {
        return $this->hasMany(Fichier::class);
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
}
