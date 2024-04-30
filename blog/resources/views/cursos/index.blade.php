@extends('layouts.plantilla')
@section('title', 'Cursos')

@section('content')
    <h1>Bienvenido a la página principal de cursos</h1>

    {{-- <a href="cursos/create" class="href">Crear Curso</a>  //curso sin alias de la URL --}}
    <a href="{{route('cursos.create')}}" class="btn btn-primary">Crear Curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>{{$curso->name}} <span><a href="{{route('cursos.show',$curso->id)}}">ir</a></span> </li> 
        @endforeach
    </ul>
  
    {{$cursos->links()}}
@endsection