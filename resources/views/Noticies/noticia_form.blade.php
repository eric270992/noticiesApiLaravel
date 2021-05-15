@extends('Layouts.page')

@section('contenido')
<div class="text-center my-5">
    <h1>Formulario nueva noticia</h1>
</div>

<div class="container">
    <form action="{{route("noticies.store")}}" method="POST">

        @csrf
        <div class="form-group">
            <label>Titulo</label>
            <input class="form-control" name="titulo" type="text">
        </div>

        <div class="form-group">
            <label>Categoria</label>
            <select  class="form-control" name="categorias" multiple>
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nom}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Autor</label>
            <select  class="form-control" name="autor">
                @foreach ($autors as $autor)
                    <option value="{{$autor->id}}">{{$autor->Nom}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Contenido</label>
            <textarea class="form-control" rows="3" name="contenido"></textarea>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01" name="imatges">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>

        <div class="form-group">
            <input class="form-check-input" type="checkbox" value="" id="noticia_publicada" name="publicar_noticia">
            <label class="form-check-label" for="defaultCheck1">
                ¿Quieres publicarla?
            </label>
        </div>

        <input type="submit" class="btn btn-lg btn-primary" value="Guardar">
    </form>
</div>

@endsection
