<?php

use App\Http\Controllers\AssociateController;
use App\Http\Controllers\HomeController;
use App\Models\Associate;
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

Route::get('asociado', function(){
    return Associate::get();
});

Route::controller(AssociateController::class)->group( function(){
    Route::get('/asociados', 'index')->name('asociados.index');
    Route::get('/asociados/create', 'create')->name('asociados.create');//formulario de crear un asociado
    Route::post('/asociados', 'store')->name('asociados.store');//post para crear un nuevo registro de asociado
    Route::get('/asociados/{asociado}', 'show')->name('asociados.show');//solo mostrar
    Route::get('/asociados/{asociado}/edit', 'edit')->name('asociados.edit');//formulario para editar
    Route::put('/asociados/{asociado}','update')->name('asociados.update');
    
    //Route::get('/asociados/create', 'create')->name('asociados.create');
    //Route::post('/asociados', 'store')->name('asociados.store');
    //Route::put('asociados/{associate}', 'asociados.update')->name('cursos.update'); //método put mejor para actualizar
    //route('associates.update', $associate->id)
});

/*Route::controller(CursoController::class)->group( function () {
    Route::get('cursos', 'index')->name('cursos.index'); //listar todos los cursos, el alias es muy bueno pq si cambia la url no hay problema
    Route::get('cursos/create', 'create')->name('cursos.create'); //
});*/