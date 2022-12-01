<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Boleta_Cita extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = "boleta_cita";

    public function boleta_cita(){
        return $this->hasMany('App\Models\BoletaCita');
    }
}
