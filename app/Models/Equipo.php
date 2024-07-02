<?php

namespace App\Models;
use App\Models\Presidente;
use App\Models\Partido;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    public function presidente (){
        return $this->belongsTo('App\Models\Presidente');

    }
    public function partidos (){
        return $this->belongsToMany('App\Models\Partido');

    }
}
