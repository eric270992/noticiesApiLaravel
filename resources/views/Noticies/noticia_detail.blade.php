@extends('Layouts.page')

@section('contenido')
<a href="{{route('noticies.edit',$noticia->id)}}" class="btn btn-lg btn-info my-5">Editar</a>
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
                <div class="galeria">
                    @foreach ($noticia->imatges as $imatge)
                        <div class="col-xs-3 col-md-3">
                            <img src="{{asset('images/'.$imatge->nom)}}" class="img-fluid">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
