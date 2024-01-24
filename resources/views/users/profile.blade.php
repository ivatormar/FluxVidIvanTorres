@extends('layout')

@section('content')
    <h1>Perfil de Usuario</h1>
    <p>Nombre de usuario: {{ $user->username }}</p>
    <p>Nombre: {{ $user->name }}</p>
    <p>Fecha de nacimiento:{{$user->birthDate}}</p>
@endsection
