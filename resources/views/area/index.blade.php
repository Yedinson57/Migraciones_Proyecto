@extends('layouts.app')

@section('content')

<h1>LISTAR AREAS</h1>

<div class ="container">
        <table id="idArea" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{ route('computer.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nueva Area
                </a>
                @foreach ($areas as $area)
                    <tr>
                        <br>
                        <td>{{ $area->id }}</td>
                        <td>{{ $area->name }}</td>
                        <td><a href="{{ route('area.show', $area->id) }}">Mostrar</a></td>
                        <td><a href="{{ route('area.edit', $area->id) }}">Editar</a></td>

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>


@endsection