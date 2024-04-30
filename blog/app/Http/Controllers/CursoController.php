<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //Show main page
    public function index(){
        //$cursos = Curso::all();//todos los cursos
        $cursos = Curso::paginate();//paginados pero entonces ahy q pasar el número de la página por URL...?page=1
        return view('cursos.index', compact('cursos'));//pasar el listado de cursos a la vista en la variable $cursos
    }
    
    //Create a new course
    public function create(){
        return view('cursos.create');
    }

    //Show an element or course
    public function show($id){
        //return view('cursos.show', ['curso'=> $curso]);
        //o
        $curso = Curso::find($id);
        return view('cursos.show', compact ('curso'));
    }
}
