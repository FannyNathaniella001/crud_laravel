<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{ //muestra home pag principal se llama index
    public function index(){
        return "Bienvenido a la pagina principal!";
    }
    // para crear curso o lo que sea, formulario o curso
    public function create(){
        return "En esta página podras crear un curso!";
    }
    // para mostrar una cosa en particular. un curso por ejemplo
    public function show($cadenacurso){
        return "Bienvenido al curso de: $cadenacurso";
    }
    public function catCurso ($cadenacurso, $categoria){
        return "Bienvenido al curso de: $cadenacurso, perteneciente a la categoría $categoria";

    }
}

