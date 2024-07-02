<?php

namespace App\Models;
use App\Models\Gol;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    public function gols (){
        return $this->hasMany('App\Models\Gol');

    }
}
