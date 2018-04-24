<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    //acciones 

    function __invoke($nombre,$apodo=null) {
    	$nombre= ucfirst($nombre);
    if ($apodo) {
    	$apodo= ucfirst($apodo);
        return "Bienvenido {$nombre} y tu apodo es {$apodo} " ;  
    }else {
         return "Bienvenido {$nombre}." ;  
    }
    }
}
