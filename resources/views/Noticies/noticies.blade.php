@extends('Layouts.page');

@section('contenido')
    <h1>Noticies</h1>
    <p>Aquí anirà el llistat de noticies</p>

    @if ($noticies)
        @foreach ($noticies as $noticia)
            <h2>{{$noticia->titol}}</h2>
        @endforeach
    @endif
@endsection
