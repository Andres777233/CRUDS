@extends('layout')
@section('content')
<h2>Editar juego</h2>
<form action="/games/{{ $game->id }}" method="POST">
    @csrf
    Fecha: <input type="date" name="date" value="{{ $game->date }}"><br>
    Goles Local: <input type="number" name="local_goals" value="{{ $game->local_goals }}"><br>
    Goles Visita: <input type="number" name="visitor_goals" value="{{ $game->visitor_goals }}"><br><br>
    <button type="submit">Actualizar</button>
</form>
<a href="/games">Volver</a>
@endsection
