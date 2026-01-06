<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devoir extends Model
{
    use HasFactory;

    protected $table = 'devoirs';
    protected $fillable = [
        'cours_id','titre','instructions','date_limite','points_max','rubrique','autoriser_retard',
        'penalite_retard','limite_fichiers','formats_autorises','assigne_a','publie','date_publication'
    ];

    protected $casts = [
        'rubrique' => 'array',
        'formats_autorises' => 'array',
        'assigne_a' => 'array',
        'autoriser_retard' => 'boolean',
        'publie' => 'boolean',
        'date_limite' => 'datetime',
        'date_publication' => 'datetime',
    ];

    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }

    public function soumissions()
    {
        return $this->hasMany(Soumission::class);
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
