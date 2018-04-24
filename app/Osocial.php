<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Osocial extends Model
{
    //
    $table="osociales";
    $fillable=['descripcion','telefono','contacto','email','calle' , 'nro' ];
}
