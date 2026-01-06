<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $table = 'utilisateurs';
    protected $fillable = [
        'nom', 'prenom', 'email', 'mot_de_passe', 'role',
        'avatar_path', 'bio', 'preferences_notif', 'derniere_connexion', 'actif'
    ];

    protected $casts = [
        'preferences_notif' => 'array',
        'derniere_connexion' => 'datetime',
        'actif' => 'boolean',
    ];

    protected $hidden = ['mot_de_passe'];

    // Relations
    public function coursEnseignes()
    {
        return $this->hasMany(Cours::class, 'professeur_id');
    }

    public function inscriptions()
    {
        return $this->hasMany(Inscription::class, 'etudiant_id');
    }

    public function devoirsCorriges()
    {
        return $this->hasMany(Soumission::class, 'corrige_par');
    }

    public function publications()
    {
        return $this->hasMany(Publication::class, 'auteur_id');
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class, 'auteur_id');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'utilisateur_id');
    }

    public function activites()
    {
        return $this->hasMany(Activite::class, 'utilisateur_id');
    }
}
