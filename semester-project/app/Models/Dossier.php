<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;

    protected $table = 'dossiers';
    protected $fillable = ['cours_id','nom','description','ordre'];

    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }

    public function publications()
    {
        return $this->hasMany(Publication::class);
    }
}
