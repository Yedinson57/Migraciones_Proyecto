@extends('layouts.app')

@section('content')

<form action="{{ route('course.admin') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>
        Numero de curso:
        <br>
        <input type="number" name="course_number">
    </label>
    <br><br>
    <label>
        Dia:
        <br>
        <input type="date" name="day">
    </label>
    <br><br>

    <label for="area_id">Area:</label>
    <br>

    <select name="area_id" id="area_id" class="form-control">
        <option value="">Seleccione un area</option>

        @foreach ($areas as $area)
            <option value="{{ $area->id }}">
                {{ $area->name }}
            </option>
        @endforeach
    </select>
    <br><br>
        
    <label for="area_id">Centro de Formacion:</label>
    <br>

    <select name="training_center_id">

        <option value="">Seleccione el centro de formación</option>
        @foreach ($training_centers as $training)
            <option value="{{ $training->id }}">
                {{ $training->name }}
            </option>
        @endforeach
    </select>
    <br><br>
    <button type="submit">Enviar Formulario</button>
</form>

@endsection