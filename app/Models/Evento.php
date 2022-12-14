<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    static $rules=[
        'title'=>'required',
        'descripcion'=>'required',
        'start'=>'required',
        'end'=>'required',

    ];

    
    //ayuda a distinguir cuales son los datos con los q se trabajara
    protected $fillable=['title','descripcion','start','end'];
}
