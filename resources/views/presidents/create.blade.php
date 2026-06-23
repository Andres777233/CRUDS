@extends('layout')
@section('content')
<h2>Crear presidente</h2>
<form action="/presidents" method="POST">
    @csrf
    Nombre: <input type="text" name="name"><br>
    Anio: <input type="date" name="year"><br><br>
    <button type="submit">Guardar</button>
</form>
<a href="/presidents">Volver</a>
@endsection
