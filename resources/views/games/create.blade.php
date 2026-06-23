@extends('layout')
@section('content')
<h2>Crear juego</h2>
<form action="/games" method="POST">
    @csrf
    Fecha: <input type="date" name="date"><br>
    Goles Local: <input type="number" name="local_goals"><br>
    Goles Visita: <input type="number" name="visitor_goals"><br><br>
    <button type="submit">Guardar</button>
</form>
<a href="/games">Volver</a>
@endsection
