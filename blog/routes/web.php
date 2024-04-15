<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

//Simple Route
Route::get('/', HomeController::class);


//grupos de rutas por controlador
Route::controller(CursoController::class)->group( function () {
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show');
});

//Route with optional variables with if 
// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
//     if($categoria){
//         return "Bienvenido al curso $curso, de la categoria $categoria";
//     }else{
//         return "Bienvenido al curso $curso sin categoria";
//     }
// });