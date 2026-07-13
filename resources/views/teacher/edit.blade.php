@extends('layouts.app')

@section('content')

    <h1>Actualizar instructor</h1>

    <form action="{{ route('teacher.update', $teacher) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $teacher->name)}}">
        </label>
        <br><br>

        <label>
            Email:
            <br>
            <input type="email" name="email" value="{{ old('email', $teacher->email)}}">
        </label>
        <br><br>

        <label>
            Area:
            <br>
            <select name="area_id">
                @foreach($areas as $area)
                    <option value="{{ $area->id }}" {{ old('area_id', $teacher->area_id) == $area->id ? 'selected' : '' }}>
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
                    <option value="{{ $trainingcenter->id }}" {{ old('trainingcenter_id', $teacher->trainingcenter_id) == $trainingcenter->id ? 'selected' : '' }}>
                        {{ $trainingcenter->name }}
                    </option>
                @endforeach
            </select>
        </label>
        <br><br>

        <button type="submit" class="btn btn-success">Actualizar Instructor</button>

    </form>
@endsection