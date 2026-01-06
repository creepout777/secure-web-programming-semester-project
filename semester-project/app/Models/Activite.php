<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;

    protected $table = 'activites';
    protected $fillable = ['utilisateur_id','cours_id','action','details','date_action'];

    protected $casts = [
        'details' => 'array',
        'date_action' => 'datetime',
    ];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }

    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }
}
