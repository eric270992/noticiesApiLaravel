@if ($noticies)
<div class="container">
    @foreach ($noticies as $noticia)
    <div class="row row-noticia">
        <div class="col-12">
            <div class="noticia-header text-center">
                <h2>{{$noticia->titol}}</h2>
                @foreach ($noticia->categories as $categoria)
                    <a href="{{route('categorias.show',$categoria->id)}}"><span class="badge badge-info">{{$categoria->nom}}</span></a>
                @endforeach

                <p class="text-left">Autor: {{$noticia->autor->Nom}}</p>
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
@else
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12 text-center">
            <h1>No hay noticias.</h1>
        </div>
    </div>
</div>
@endif
