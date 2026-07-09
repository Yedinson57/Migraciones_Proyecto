@extends('layouts.app')

@section('content')

<h1>LISTAR APRENDICES</h1>

<div class ="container">
        <table id="idApprentice" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($apprentices as $apprentice)
                    <tr>
                        <br>
                        <td>{{ $apprentice->id }}</td>
                        <td>{{ $apprentice->name }}</td>
                        <td>{{ $apprentice->email }}</td>
                        <td>{{ $apprentice->cell_number }}</td>
                        <td>{{ $apprentice->course_id }}</td>
                        <td>{{ $apprentice->computer_id }}</td>
                        <td><a href="{{ route('apprentice.show', $apprentice->id) }}">Mostrar</a></td>

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>


@endsection