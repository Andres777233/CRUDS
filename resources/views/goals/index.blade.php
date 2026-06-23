@extends('layout')
@section('content')
<h2>Goles</h2>
<a href="/goals/create">Crear gol</a><br><br>
<table>
    <tr><th>ID</th><th>Nombre</th><th>Descripcion</th><th>Jugador</th><th>Juego</th><th>Acciones</th></tr>
    @foreach($goals as $g)
    <tr>
        <td>{{ $g->id }}</td>
        <td>{{ $g->name }}</td>
        <td>{{ $g->description }}</td>
        <td>{{ $g->player->name ?? 'N/A' }}</td>
        <td>{{ $g->game_id }}</td>
        <td>
            <a href="/goals/{{ $g->id }}/edit">Editar</a>
            <form action="/goals/{{ $g->id }}/delete" method="POST" style="display:inline">
                @csrf
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
