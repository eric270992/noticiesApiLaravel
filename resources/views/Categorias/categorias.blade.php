@extends('Layouts.page')

@section('contenido')

<a href="{{route('categorias.create')}}" class="btn btn-lg btn-success my-5">Añadir Categoria</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>EDITAR</th>
            <th>NOTICIAS</th>
            <th>ELIMINAR</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categorias as $categoria)
            <tr>
                <td>{{$categoria->id}}</td>
                <td>{{$categoria->nom}}</td>
                <td>{{$categoria->descripcio}}</td>
                <td>
                    <a href="#" class="btn btn-success">EDITAR</a>
                </td>
                <td>
                    <a href="#" class="btn btn-info">NOTICIES</a>
                </td>
                <td>
                    <a href="#" class="btn btn-danger">-</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
