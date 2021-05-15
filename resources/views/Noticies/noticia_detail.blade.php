@extends('Layouts.page')

@section('contenido')

<div class="row">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="noticia-detail-titol">
                    <h1>{{$noticia->titol}}</h1>
                </div>
                <div class="noticia-detail-body">
                    {{$noticia->contingut}}
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
