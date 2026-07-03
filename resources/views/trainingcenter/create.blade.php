@extends('layouts.app')

@section('content')

    <form action="{{ route('trainingcenter.admin') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2>Centro de formación</h2>
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br><br>

        <label>
            Ubicacion:
            <br>
            <input type="text" name="location">
        </label>
        <br><br>
        <button type="submit">Enviar Formulario</button>
    </form>

@endsection