@extends('Layouts.page')

@section('contenido')

<div class="container">
    <form action="{{route('categorias.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nombre Categoria</label>
            <input type="text" class="form-control" name="nombre">
        </div>

        <div class="form-group">
            <label>Descripcion</label>
            <input type="text" class="form-control" name="descripcion">
        </div>

        <input type="submit" class="btn btn-success" value="Guardar">
    </form>
</div>

@endsection
