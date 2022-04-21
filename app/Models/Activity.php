<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    public function Ville(){
        return $this-> belongsTo(Ville::class);
    }

    public function Action(){
        return $this->hasMany(Action::class);
    }

    public function Rapport(){
        return $this->hasMany(Rapport::class);
    }
}
