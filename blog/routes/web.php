<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

//Simple Route
Route::get('/', HomeController::class);


//grupos de rutas por controlador
Route::controller(CursoController::class)->group( function () {
    Route::get('cursos', 'index')->name('cursos.index'); //listar todos los cursos, el alias es muy bueno pq si cambia la url no hay problema
    Route::get('cursos/create', 'create')->name('cursos.create'); //
    Route::get('cursos/{id}', 'show')->name('cursos.show'); //
});