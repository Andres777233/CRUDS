@extends('layout')
@section('content')
<h2>Editar equipo</h2>
<form action="/teams/{{ $team->id }}" method="POST">
    @csrf
    Nombre: <input type="text" name="name" value="{{ $team->name }}"><br>
    Ciudad: <input type="text" name="city" value="{{ $team->city }}"><br>
    Estadio: <input type="text" name="stadium" value="{{ $team->stadium }}"><br>
    Capacidad: <input type="number" name="capacity" value="{{ $team->capacity }}"><br>
    Fundacion: <input type="date" name="year_of_foundation" value="{{ $team->year_of_foundation }}"><br>
    Presidente:
    <select name="president_id">
        @foreach($presidents as $p)
        <option value="{{ $p->id }}" {{ $team->president_id == $p->id ? 'selected' : '' }}>{{ $p->name }}</option>
        @endforeach
    </select><br><br>
    <button type="submit">Actualizar</button>
</form>
<a href="/teams">Volver</a>
@endsection
