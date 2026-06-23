@extends('layout')
@section('content')
<h2>Crear gol</h2>
<form action="/goals" method="POST">
    @csrf
    Nombre: <input type="text" name="name"><br>
    Descripcion: <input type="text" name="description"><br>
    Jugador:
    <select name="player_id">
        @foreach($players as $p)
        <option value="{{ $p->id }}">{{ $p->name }}</option>
        @endforeach
    </select><br>
    Juego:
    <select name="game_id">
        @foreach($games as $g)
        <option value="{{ $g->id }}">{{ $g->date }} (ID: {{ $g->id }})</option>
        @endforeach
    </select><br><br>
    <button type="submit">Guardar</button>
</form>
<a href="/goals">Volver</a>
@endsection
