<?php

namespace App\Models;
use App\Models\Equipo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presidente extends Model
{
    use HasFactory;

    public function equipos (){
        return $this->hasOne('App\Models\Equipo');

    }


}
