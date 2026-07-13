@extends('layouts.app')

@section('content')

    <h1>Actualizar Curso</h1>

    <form action="{{ route('course.update', $course) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Numero del curso:
            <br>
            <input type="number" name="course_number" value="{{ old('course_number', $course->course_number)}}">
        </label>
        <br><br>

        <label>
            Dia:
            <br>
            <input type="date" name="day" value="{{ old('day', $course->day)}}">
        </label>
        <br><br>

        <label>
            Area:
            <br>
            <select name="area_id">
                @foreach($areas as $area)
                    <option value="{{ $area->id }}" {{ old('area_id', $course->area_id) == $area->id ? 'selected' : '' }}>
                        {{ $area->name }}
                    </option>
                @endforeach
            </select>
        </label>
        <br><br>

        <label>
            Centro de Formación:
            <br>
            <select name="trainingcenter_id">
                @foreach($trainingcenters as $trainingcenter)
                    <option value="{{ $trainingcenter->id }}" {{ old('trainingcenter_id', $course->trainingcenter_id) == $trainingcenter->id ? 'selected' : '' }}>
                        {{ $trainingcenter->name }}
                    </option>
                @endforeach
            </select>
        </label>
        <br><br>

        <button type="submit" class="btn btn-success">Actualizar Curso</button>

    </form>
@endsection