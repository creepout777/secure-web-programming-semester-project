<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    protected $table = 'commentaires';
    protected $fillable = [
        'publication_id','devoir_id','auteur_id','contenu','parent_id','modifie'
    ];

    protected $casts = [
        'modifie' => 'boolean',
    ];

    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }

    public function devoir()
    {
        return $this->belongsTo(Devoir::class);
    }

    public function auteur()
    {
        return $this->belongsTo(Utilisateur::class, 'auteur_id');
    }

    public function parent()
    {
        return $this->belongsTo(Commentaire::class, 'parent_id');
    }

    public function enfants()
    {
        return $this->hasMany(Commentaire::class, 'parent_id');
    }
}
