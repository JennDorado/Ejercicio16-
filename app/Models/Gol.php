<?php

namespace App\Models;
use App\Models\Jugador;
use App\Models\Partido;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gol extends Model
{
    use HasFactory;

    public function jugadors (){
        return $this->belongsToMany('App\Models\Jugador');

    }
    public function partidos (){
        return $this->belongsTo('App\Models\Partido');

    }
}
