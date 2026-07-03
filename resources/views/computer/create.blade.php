@extends('layouts.app')

@section('content')

<form action="{{route('computer.admin')}}" method="POST" enctype="multipart/form-data">

    @csrf
    <h2>Computador</h2>
    <label>
        Numero:
        <br>
        <input type="number" name="number">
    </label>
    <br><br>

    <label>
        Marca:
        <br>
        <input type="text" name="brand">
    </label>
    <br><br>


    <button type="submit">Enviar Formulario</button>
</form>

@endsection