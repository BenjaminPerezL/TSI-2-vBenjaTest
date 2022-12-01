<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servicio extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = "servicios";

    public function servicios(){
        return $this->hasMany('App\Models\Servicio');
    }
}
