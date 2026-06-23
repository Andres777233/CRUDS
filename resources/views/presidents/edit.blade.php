@extends('layout')
@section('content')
<h2>Editar presidente</h2>
<form action="/presidents/{{ $president->id }}" method="POST">
    @csrf
    Nombre: <input type="text" name="name" value="{{ $president->name }}"><br>
    Anio: <input type="date" name="year" value="{{ $president->year }}"><br><br>
    <button type="submit">Actualizar</button>
</form>
<a href="/presidents">Volver</a>
@endsection
