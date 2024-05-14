<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CursoController extends Controller
{
    //Show main page
    public function index(){
        //$cursos = Curso::all();//todos los cursos
        $cursos = Curso::orderBy('id','desc')->paginate();//paginados pero entonces ahy q pasar el número de la página por URL...?page=1
        return view('cursos.index', compact('cursos'));//pasar el listado de cursos a la vista en la variable $cursos
    }
    
    //Create a new course
    public function create(){
        return view('cursos.create');
    }

    //Store info in $request
    public function store(Request $request){

        //la validación es antes de la creación -> https://laravel.com/docs/11.x/validation#available-validation-rules
        $request->validate([
            'name'=>'required|min:3',
            'description'=>'required',
            'categoria'=>'required'
        ]);

        //creación después de la validación
        $curso = new Curso();
        $curso->name = $request->input('name');
        $curso->description = $request->input('description');
        $curso->categoria = $request->input('categoria');
        $curso->save();
        return redirect()->route('cursos.show', [$curso]);
        //return $request->all();

    }

    //Show an element or course
    public function show(Curso $curso){
        //return view('cursos.show', ['curso'=> $curso]);
        //o
        //$curso = Curso::find($curso);//Al agregar como parámetro Curso $curso se debe borrar el find
        return view('cursos.show', compact ('curso'));
    }

    //este id es una instancia del curso al poner en el parámetro la Clase "Curso"
    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){

        //la validación es antes de la creación -> https://laravel.com/docs/11.x/validation#available-validation-rules
        $request->validate([
            'name'=>'required|min:3',
            'description'=>'required',
            'categoria'=>'required'
        ]);

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;
        $curso->save();

        return redirect()->route('cursos.show', [$curso]);
    }
}
