<?php

use Illuminate\Support\Facades\Route;

//Simple Route
Route::get('/', function () {
    return view('welcome');
});

//Route with variable
Route::get('/cursos/{curso}', function ($curso) {
    return "Hola Guillo, escribiste el curso: $curso";
});
