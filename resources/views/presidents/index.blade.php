@extends('layout')
@section('content')
<h2>Presidentes</h2>
<a href="/presidents/create">Crear presidente</a><br><br>
<table>
    <tr><th>ID</th><th>Nombre</th><th>Anio</th><th>Acciones</th></tr>
    @foreach($presidents as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->name }}</td>
        <td>{{ $p->year }}</td>
        <td>
            <a href="/presidents/{{ $p->id }}/edit">Editar</a>
            <form action="/presidents/{{ $p->id }}/delete" method="POST" style="display:inline">
                @csrf
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
