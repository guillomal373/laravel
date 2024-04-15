<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //Show main page
    public function index(){
        return "Bievenido a la página principal";
    }
    
    //Create a new course
    public function create(){
        return "En esta página podrás crear un curso";
    }

    //Show an element or course
    public function show($curso){
            return "Bienvenido al curso $curso";
        
    }
}
