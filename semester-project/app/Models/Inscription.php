<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

    protected $table = 'inscriptions';
    protected $fillable = ['cours_id', 'etudiant_id', 'actif'];

    protected $casts = [
        'actif' => 'boolean',
    ];

    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }

    public function etudiant()
    {
        return $this->belongsTo(Utilisateur::class, 'etudiant_id');
    }
}
