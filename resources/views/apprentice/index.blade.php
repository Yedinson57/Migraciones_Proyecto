@extends('layouts.app')

@section('content')

<h1>LISTAR APRENDICES</h1>

<div class ="container">
        <table id="idApprentice" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Cell_number</th>
                    <th>Curso</th>
                    <th>Computador</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{ route('apprentice.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Aprendiz
                </a>
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
                        <td><a href="{{ route('apprentice.edit', $apprentice->id) }}">Editar</a></td>
                        <td>
                            <form action="{{ route('apprentice.destroy', $apprentice->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar Aprendiz</button>
                            </form>
                        </td>

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>


@endsection