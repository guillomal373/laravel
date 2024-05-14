@extends('layouts.plantilla')
@section('title', 'Cursos Edit')

@section('content')
    <h1>En esta página podrás editar un curso</h1>
    {{-- <span>{{route('cursos.store')}}</span> --}}
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    <form action="{{route('cursos.update', $curso)}}" method="POST">

        {{-- Token --}}
        @csrf 

        {{-- Para que se entienda que es PUT --}}
        @method('PUT')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label>
        <br>
        <label>
            Description:
            <br>
            <textarea name="description" id="" cols="21" rows="5">{{$curso->description}}</textarea>
        </label>
        <br>
        <label>
            Categoría:
            <br>
            <input type="text" name="categoria" value="{{$curso->categoria}}">
        </label>
        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection