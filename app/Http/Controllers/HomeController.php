<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{  
    public function __invoke(){
        //este controlador administra solo una ruta
            // return view('welcome');
            return "hola";
         
    }
}
