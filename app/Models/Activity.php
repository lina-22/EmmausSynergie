<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable=['idVilles','type','name',];

    public function Users(){
        return $this-> belongsToMany(User::class,'activity_users');
    }
    public function Villes(){
        return $this-> belongsTo(Ville::class);
    }

    public function Actions(){
        return $this->hasMany(Action::class);
    }

    public function Rapports(){
        return $this->hasMany(Rapport::class);
    }
}
