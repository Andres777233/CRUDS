@extends('layout')
@section('content')
<h2>Editar jugador</h2>
<form action="/players/{{ $player->id }}" method="POST">
    @csrf
    Nombre: <input type="text" name="name" value="{{ $player->name }}"><br>
    Posicion: <input type="text" name="position" value="{{ $player->position }}"><br>
    Equipo:
    <select name="team_id">
        @foreach($teams as $t)
        <option value="{{ $t->id }}" {{ $player->team_id == $t->id ? 'selected' : '' }}>{{ $t->name }}</option>
        @endforeach
    </select><br><br>
    <button type="submit">Actualizar</button>
</form>
<a href="/players">Volver</a>
@endsection
