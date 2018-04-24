<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    $table="pacientes";
    $fillable=['nombre','apellido','fechanaci','tipodocumento_id','nacionalidad_id','religion_id','estadocivil_id','obrasocial_id'];            
}
