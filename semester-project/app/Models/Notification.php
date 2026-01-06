<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $table = 'notifications';
    protected $fillable = [
        'utilisateur_id','type','titre','message','lien','cours_id','lue','email_envoye'
    ];

    protected $casts = [
        'lue' => 'boolean',
        'email_envoye' => 'boolean',
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
