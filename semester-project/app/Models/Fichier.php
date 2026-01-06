<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fichier extends Model
{
    use HasFactory;

    protected $table = 'fichiers';
    protected $fillable = [
        'publication_id','devoir_id','soumission_id','nom_original','nom_stockage','type_mime','taille','chemin'
    ];

    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }

    public function devoir()
    {
        return $this->belongsTo(Devoir::class);
    }

    public function soumission()
    {
        return $this->belongsTo(Soumission::class);
    }
}
