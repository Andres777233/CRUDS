@extends('layout')
@section('content')
<h2>Jugadores</h2>
<a href="/players/create">Crear jugador</a><br><br>
<table>
    <tr><th>ID</th><th>Nombre</th><th>Posicion</th><th>Equipo</th><th>Acciones</th></tr>
    @foreach($players as $player)
    <tr>
        <td>{{ $player->id }}</td>
        <td>{{ $player->name }}</td>
        <td>{{ $player->position }}</td>
        <td>{{ $player->team->name ?? 'N/A' }}</td>
        <td>
            <a href="/players/{{ $player->id }}/edit">Editar</a>
            <form action="/players/{{ $player->id }}/delete" method="POST" style="display:inline">
                @csrf
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
