@extends('Layouts.page')

@section('contenido')

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>EDITAR</th>
                <th>NOTICIAS</th>
                <th>ELIMINAR</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($autors as $autor)
                <tr>
                    <td>{{$autor->id}}</td>
                    <td>{{$autor->Nom}}</td>
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
