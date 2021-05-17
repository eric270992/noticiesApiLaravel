@extends('Layouts.page')

@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-12 text-center py-5">
            <h1>{{$categoria->nom}}</h1>
        </div>
        @if ($categoria->noticies)
            @foreach ($noticies as $noticia)
            <div class="col-xs-12 col-md-6">
                <div class="noticia-header">
                    <h2>{{$noticia->titol}}</h2>
                </div>
                <div class="noticia-body">
                    <p>
                        {{$noticia->contingut}}
                    </p>
                </div>
                <div class="noticia-footer">
                    <a href="{{route('noticies.show',$noticia->id)}}" class="btn btn-md btn-primary">Detalls</a>
                </div>
            </div>
            @endforeach
        @else
        <h2>No tenemos notícias aún en esta categoria</h2>
        @endif
    </div>
</div>

@endsection
