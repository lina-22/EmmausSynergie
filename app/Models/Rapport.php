<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    use HasFactory;

    protected $fillable=['idActivites','annee','fichier'];

    public function activity(){
        return $this->belongsto(Activity::class);
    }
}
