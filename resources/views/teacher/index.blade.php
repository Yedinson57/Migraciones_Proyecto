@extends('layouts.app')

@section('content')

<h1>LISTAR INSTRUCTORES</h1>

<div class ="container">
        <table id="idTeacher" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Area</th>
                    <th>Centro de formación</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{ route('teacher.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Instructor
                </a>
                @foreach ($teachers as $teacher)
                    <tr>
                        <br>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>{{ $teacher->area_id }}</td>
                        <td>{{ $teacher->training_center_id }}</td>
                        <td><a href="{{ route('teacher.show', $teacher->id) }}">Mostrar</a></td>
                        <td><a href="{{ route('teacher.edit', $teacher->id) }}">Editar</a></td>

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>


@endsection