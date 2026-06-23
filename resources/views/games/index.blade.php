@extends('layout')
@section('content')
<h2>Juegos</h2>
<a href="/games/create">Crear juego</a><br><br>
<table>
    <tr><th>ID</th><th>Fecha</th><th>Goles Local</th><th>Goles Visita</th><th>Acciones</th></tr>
    @foreach($games as $game)
    <tr>
        <td>{{ $game->id }}</td>
        <td>{{ $game->date }}</td>
        <td>{{ $game->local_goals }}</td>
        <td>{{ $game->visitor_goals }}</td>
        <td>
            <a href="/games/{{ $game->id }}/edit">Editar</a>
            <form action="/games/{{ $game->id }}/delete" method="POST" style="display:inline">
                @csrf
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
