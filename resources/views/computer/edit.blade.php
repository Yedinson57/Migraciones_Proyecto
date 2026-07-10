@extends('layouts.app')

@section('content')

    <h1>Actualizar computador</h1>

    <form action="{{ route('computer.update', $computer) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Numero:
            <br>
            <input type="number" name="number" value="{{ old('number', $computer->number)}}">
        </label>
        <br><br>

        <label>
            Marca:
            <br>
            <input type="text" name="brand" value="{{ old('brand', $computer->brand)}}">
        </label>
        <br><br>

        <button type="submit">Actualizar Computador</button>

    </form>
@endsection