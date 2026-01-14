<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'utilisateurs';

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'mot_de_passe',
        'role',
        'avatar_path',
        'bio',
        'preferences_notif',
        'derniere_connexion',
        'actif',
    ];

    protected $hidden = [
        'mot_de_passe',
        'remember_token',
    ];

    protected $casts = [
        'preferences_notif' => 'array',
        'derniere_connexion' => 'datetime',
        'actif' => 'boolean',
    ];

    public function getAuthPassword()
    {
        return $this->mot_de_passe;
    }
}
