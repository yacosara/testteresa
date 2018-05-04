<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResidenteController extends Controller
{
    
    function index(){
        return view('residentes.lista') ;
    }

}
