<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //Show main page
    public function index(){
        return view('cursos.index');
    }
    
    //Create a new course
    public function create(){
        return view('cursos.create');
    }

    //Show an element or course
    public function show($curso){
        //return view('cursos.show', ['curso'=> $curso]);
        //o
        return view('cursos.show', compact ('curso'));
    }
}
