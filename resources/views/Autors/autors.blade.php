@extends('Layouts.page')

@section('contenido')

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>VER</th>
                <th>ELIMINAR</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($autors as $autor)
                <tr>
                    <td>{{$autor->id}}</td>
                    <td>{{$autor->Nom}}</td>
                    <td>
                        <a href="{{route('autors.show',$autor->id)}}" class="btn btn-success">*</a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-danger">-</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
