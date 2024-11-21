<?php

use Illuminate\Support\Facades\Route;
/*use App\Http\Controllers\Facades\HomeController;*/
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*//**   anzoateg_test   test123*     */
/*
Route::get('/', HomeController::class);
/*index, create y show son los metodos del controller de curso */
/*
Route::get('cursos',[CursoController::class, 'index']);
Route::get('cursos/create',[CursoController::class, 'create']);
Route::get('cursos/{curso}',[CursoController::class, 'show']);
Route::get('cursos/{curso}/{catCurso}',[CursoController::class, 'catCurso']);
/*para optimizar el c{odigo creo un grupo de rutas, ya que utlizan el mismo controller*/

Route::controller(CursoController::class)->group(function(){
    Route::get('cursos',[CursoController::class, 'index']);
    Route::get('cursos/create',[CursoController::class, 'create']);
    Route::get('cursos/{curso}',[CursoController::class, 'show']);
    Route::get('cursos/{curso}/{catCurso}',[CursoController::class, 'catCurso']);

});


/*[]*/
/*
Route::get('curso', function () {
    // return view('welcome');
    return "Estas en la página de cursos!";
 });
 Route::get('curso/create', function () {
    // return view('welcome');
    
 });

 Route::get('curso/{cadenacurso}', function ($cadenacurso) {
    return "Bienvenido al curso de: $cadenacurso";
 });
 Route::get('curso/{cadenacurso}/{categoria}', function ($cadenacurso, $categoria) {
    if($categoria){
        return "Bienvenido al curso de: $cadenacurso, perteneciente a la categoría $categoria";
    }else {
        return "Bienvenido al curso de: $cadenacurso";
    }
});
*/