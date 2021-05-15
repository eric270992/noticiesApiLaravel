@extends('Layouts.page')

@section('contenido')
    <h1>Noticies</h1>
    <p>Aquí anirà el llistat de noticies</p>
    <a href="/noticies/create" class="btn btn-lg btn-success">Añadir Noticia</a>
    @if ($noticies)
        <div class="container">
            @foreach ($noticies as $noticia)
            <div class="row row-noticia">
                <div class="col-12">
                    <div class="noticia-header text-center">
                        <h2>{{$noticia->titol}}</h2>
                        @foreach ($noticia->categories as $categoria)
                            <a href="/categoria/{{$categoria->id}}"><span class="badge badge-info">{{$categoria->nom}}</span></a>
                        @endforeach
                        <p class="text-left">Autor:</p>
                    </div>
                    <div class="noticia-body">
                        {{$noticia->contingut}}
                    </div>
                    <div class="noticia-footer my-5 text-center">
                        <a href="/noticies/{{$noticia->id}}" class="btn btn-primary">Veure detall</a>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="my-5 text-center">
                {{ $noticies->links() }}
            </div>
        </div>
    @endif
@endsection
