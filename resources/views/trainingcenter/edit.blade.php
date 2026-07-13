@extends('layouts.app')

@section('content')

    <h1>Actualizar Centro de formacion</h1>

    <form action="{{ route('trainingcenter.update', $trainingcenter) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $trainingcenter->name)}}">
        </label>
        <br><br>
        <label>
            Ubicacion:
            <br>
            <input type="text" name="location" value="{{ old('location', $trainingcenter->location)}}">
        </label>
        <br><br>

        <button type="submit" class="btn btn-success">Actualizar Centro</button>

    </form>
@endsection