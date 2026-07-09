@extends('layouts.app')

@section('content')

<h1>LISTAR AREAS</h1>

<div class ="container">
        <table id="idCourse" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Numero del curso</th>
                    <th>Area</th>
                    <th>Centro de formación</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <br>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->course_number }}</td>
                        <td>{{ $course->day }}</td>
                        <td>{{ $course->area_id }}</td>
                        <td>{{ $course->training_center_id }}</td>
                        <td><a href="{{ route('course.show', $course->id) }}">Mostrar</a></td>

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>


@endsection