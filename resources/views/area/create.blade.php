@extends('layouts.app')

@section('content')

<form action="{{route('area.admin')}}" method="POST" enctype="multipart/form-data">

    @csrf
    <h2>Area</h2>
    <label>
        Nombre del area:
        <br>
        <input type="text" name="name">
    </label>
    <br><br>

    <button type="submit">Enviar Formulario</button>
</form>

@endsection