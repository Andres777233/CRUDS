@extends('layout')
@section('content')
<h2>Equipos</h2>
<a href="/teams/create">Crear equipo</a><br><br>
<table>
    <tr><th>ID</th><th>Nombre</th><th>Ciudad</th><th>Estadio</th><th>Capacidad</th><th>Acciones</th></tr>
    @foreach($teams as $team)
    <tr>
        <td>{{ $team->id }}</td>
        <td>{{ $team->name }}</td>
        <td>{{ $team->city }}</td>
        <td>{{ $team->stadium }}</td>
        <td>{{ $team->capacity }}</td>
        <td>
            <a href="/teams/{{ $team->id }}/edit">Editar</a>
            <form action="/teams/{{ $team->id }}/delete" method="POST" style="display:inline">
                @csrf
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
