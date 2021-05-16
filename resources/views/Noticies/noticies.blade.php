@extends('Layouts.page')

@section('contenido')
    <h1>Noticies</h1>
    <p>Aquí anirà el llistat de noticies</p>
    <a href="/noticies/create" class="btn btn-lg btn-success">Añadir Noticia</a>
    @include('Noticies.list-noticies');


@endsection
