@extends('layouts.app')

@section('content')

<h1>LISTAR CURSOS</h1>

<div class ="container">
        <table id="idCourse" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Numero del curso</th>
                    <th>Dia</th>
                    <th>Area</th>
                    <th>Centro de formación</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{ route('course.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Curso
                </a>
                @foreach ($courses as $course)
                    <tr>
                        <br>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->course_number }}</td>
                        <td>{{ $course->day }}</td>
                        <td>{{ $course->area_id }}</td>
                        <td>{{ $course->training_center_id }}</td>
                        <td><a href="{{ route('course.show', $course->id) }}">Mostrar</a></td>
                        <td><a href="{{ route('course.edit', $course->id) }}">Editar</a></td>
                        <td>
                            <form action="{{ route('course.destroy', $course->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar Curso</button>
                            </form>
                        </td>

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>


@endsection