@extends('layouts.app')

@section('content')

    <h1>Actualizar area</h1>

    <form action="{{ route('area.update', $area) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $area->name)}}">
        </label>
        <br><br>

        <button type="submit">Actualizar Area</button>

    </form>
@endsection