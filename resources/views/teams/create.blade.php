@extends('layout')
@section('content')
<h2>Crear equipo</h2>
<form action="/teams" method="POST">
    @csrf
    Nombre: <input type="text" name="name"><br>
    Ciudad: <input type="text" name="city"><br>
    Estadio: <input type="text" name="stadium"><br>
    Capacidad: <input type="number" name="capacity"><br>
    Fundacion: <input type="date" name="year_of_foundation"><br>
    Presidente:
    <select name="president_id">
        @foreach($presidents as $p)
        <option value="{{ $p->id }}">{{ $p->name }}</option>
        @endforeach
    </select><br><br>
    <button type="submit">Guardar</button>
</form>
<a href="/teams">Volver</a>
@endsection
