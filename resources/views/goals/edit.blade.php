@extends('layout')
@section('content')
<h2>Editar gol</h2>
<form action="/goals/{{ $goal->id }}" method="POST">
    @csrf
    Nombre: <input type="text" name="name" value="{{ $goal->name }}"><br>
    Descripcion: <input type="text" name="description" value="{{ $goal->description }}"><br>
    Jugador:
    <select name="player_id">
        @foreach($players as $p)
        <option value="{{ $p->id }}" {{ $goal->player_id == $p->id ? 'selected' : '' }}>{{ $p->name }}</option>
        @endforeach
    </select><br>
    Juego:
    <select name="game_id">
        @foreach($games as $g)
        <option value="{{ $g->id }}" {{ $goal->game_id == $g->id ? 'selected' : '' }}>{{ $g->date }} (ID: {{ $g->id }})</option>
        @endforeach
    </select><br><br>
    <button type="submit">Actualizar</button>
</form>
<a href="/goals">Volver</a>
@endsection
