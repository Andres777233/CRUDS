@extends('layout')
@section('content')
<h2>Crear jugador</h2>
<form action="/players" method="POST">
    @csrf
    Nombre: <input type="text" name="name"><br>
    Posicion: <input type="text" name="position"><br>
    Equipo:
    <select name="team_id">
        @foreach($teams as $t)
        <option value="{{ $t->id }}">{{ $t->name }}</option>
        @endforeach
    </select><br><br>
    <button type="submit">Guardar</button>
</form>
<a href="/players">Volver</a>
@endsection
