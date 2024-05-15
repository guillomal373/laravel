<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsociadoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('asociado/index');
    }

    //Show an element or course
    /*public function show(Curso $curso){
        //return view('cursos.show', ['curso'=> $curso]);
        //o
        //$curso = Curso::find($curso);//Al agregar como parámetro Curso $curso se debe borrar el find
        return view('cursos.show', compact ('curso'));
    }*/
}
