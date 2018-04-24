<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesion extends Model
{
    //
    protected $table ='profesiones'; // cambia el nombre de la tabla  
    //public $created_at =false;  // indica que no se utilice este campo  
    protected $fillable  = ['profesion']; // habilita carga masiva en los campos del array asociativo   

    public function usuarios() { 
         return $this->hasMany(User::class) ;
    }
}
