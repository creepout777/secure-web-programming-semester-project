<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soumission extends Model
{
    use HasFactory;

    protected $table = 'soumissions';
    protected $fillable = [
        'devoir_id','etudiant_id','commentaire_etudiant','statut','date_soumission','note','notes_rubrique',
        'feedback','corrige_par','date_correction','retourne','date_retour'
    ];

    protected $casts = [
        'notes_rubrique' => 'array',
        'retourne' => 'boolean',
        'date_soumission' => 'datetime',
        'date_correction' => 'datetime',
        'date_retour' => 'datetime',
    ];

    public function devoir()
    {
        return $this->belongsTo(Devoir::class);
    }

    public function etudiant()
    {
        return $this->belongsTo(Utilisateur::class, 'etudiant_id');
    }

    public function correcteur()
    {
        return $this->belongsTo(Utilisateur::class, 'corrige_par');
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
