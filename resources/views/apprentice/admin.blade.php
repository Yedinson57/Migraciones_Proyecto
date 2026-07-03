@extends('layouts.app')

@section('content')

<form action="{{ route('apprentice.admin') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h2>Aprendiz</h2>
    <label>
        Nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br><br>

    <label>
        Email:
        <br>
        <input type="email" name="email">
    </label>
    <br><br>

    <label>
        Numero de celular:
        <br>
        <input type="number" name="cell_number">
    </label>
    <br><br>

    <label for="course_id">Cursos:</label>
    <br>

    <select name="course_id" id="course_id" class="form-control">
        <option value="">Seleccione un curso:</option>

        @foreach ($courses as $course)
            <option value="{{ $course->id }}">
                {{ $course->course_number }}
            </option>
        @endforeach
    </select>
    <br><br>

    <label for="course_id">Computador:</label>
    <br>

    <select name="computer_id">

        <option value="">Seleccione un computador</option>
        @foreach ($computers as $computer)
            <option value="{{ $computer->id }}">
                {{ $computer->number }}
            </option>
        @endforeach
    </select>
    <br><br>
    <button type="submit">Enviar Formulario</button>
</form>

@endsection