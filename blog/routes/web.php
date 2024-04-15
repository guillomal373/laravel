<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

//Simple Route
Route::get('/', HomeController::class);

Route::get('cursos', [CursoController::class, 'index']);
Route::get('cursos/create', [CursoController::class, 'create']);
Route::get('cursos/{curso}', [CursoController::class, 'show']);

//Route with optional variables with if 
// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
//     if($categoria){
//         return "Bienvenido al curso $curso, de la categoria $categoria";
//     }else{
//         return "Bienvenido al curso $curso sin categoria";
//     }
// });