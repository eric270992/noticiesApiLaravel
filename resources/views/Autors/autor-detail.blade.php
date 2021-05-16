@extends('Layouts.page')

@section('contenido')

    <!-- Mostrar els detalls de l'autor, fins i tot podriem posar una foto de perfil-->
    <h1 class="text-center py-5">{{$autor->Nom}}</h1>

    <!-- Mostrarem les notícies d'e l'autor en concret -->
    @include('Noticies.list-noticies')
@endsection
