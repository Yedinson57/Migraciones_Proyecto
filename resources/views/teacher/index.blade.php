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
                @foreach ($teachers as $teacher)
                    <tr>
                        <br>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>{{ $teacher->area_id }}</td>
                        <td>{{ $teacher->training_center_id }}</td>
                        <td><a href="{{ route('teacher.show', $teacher->id) }}">Mostrar</a></td>

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>


@endsection