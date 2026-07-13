@extends('layouts.app')

@section('content')

    <h1>Actualizar aprendiz</h1>

    <form action="{{ route('apprentice.update', $apprentice) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $apprentice->name)}}">
        </label>
        <br><br>

        <label>
            Email:
            <br>
            <input type="email" name="email" value="{{ old('email', $apprentice->email)}}">
        </label>
        <br><br>

        <label>
            Numero de telefono:
            <br>
            <input type="number" name="cell_number" value="{{ old('cell_number', $apprentice->cell_number)}}">
        </label>
        <br><br>

        <label>
            Curso:
            <br>
            <select name="course_id">
                @foreach($courses as $course)
                    <option value="{{ $course->id }}" {{ old('course_id', $apprentice->course_id) == $course->id ? 'selected' : '' }}>
                        {{ $course->course_number }}
                    </option>
                @endforeach
            </select>
        </label>
        <br><br>

        <label>
            Computador:
            <br>
            <select name="computer_id">
                @foreach($computers as $computer)
                    <option value="{{ $computer->id }}" {{ old('computer_id', $apprentice->computer_id) == $computer->id ? 'selected' : '' }}>
                        {{ $computer->number }}
                    </option>
                @endforeach
            </select>
        </label>
        <br><br>

        <button type="submit" class="btn btn-success">Actualizar Aprendiz</button>

    </form>
@endsection