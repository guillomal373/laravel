<?php

use Illuminate\Support\Facades\Route;

//Simple Route
Route::get('/', function () {
    return view('welcome');
});

//Route with optional variables with if 
Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if($categoria){
    return "Bienvenido al curso $curso, de la categoria $categoria";
}else{
    return "Bienvenido al curso $curso sin categoria";
    }
});

//Route with variable
Route::get('/cursos/{curso}', function ($curso) {
    return "Hola Guillo, escribiste el curso: $curso";
});
