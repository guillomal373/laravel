<?php

use App\Http\Controllers\AsociadoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
//Auth::routes();

//Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(HomeController::class)->group( function(){
    Route::get('/home', 'index')->name('home');
});

Route::controller(AsociadoController::class)->group( function(){
    Route::get('/asociados', 'index')->name('asociados.index');
});

/*Route::controller(CursoController::class)->group( function () {
    Route::get('cursos', 'index')->name('cursos.index'); //listar todos los cursos, el alias es muy bueno pq si cambia la url no hay problema
    Route::get('cursos/create', 'create')->name('cursos.create'); //
});*/