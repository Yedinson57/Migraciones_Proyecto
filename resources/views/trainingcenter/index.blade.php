@extends('layouts.app')

@section('content')

<h1>LISTAR CENTROS DE FORMACION</h1>

<div class ="container">
        <table id="idTrainingcenter" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Ubicación</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{ route('trainingcenter.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Centro
                </a>
                @foreach ($trainingcenters as $trainingcenter)
                    <tr>
                        <br>
                        <td>{{ $trainingcenter->id }}</td>
                        <td>{{ $trainingcenter->name }}</td>
                        <td>{{ $trainingcenter->location }}</td>
                        <td><a href="{{ route('trainingcenter.show', $trainingcenter->id) }}">Mostrar</a></td>
                        <td><a href="{{ route('trainingcenter.edit', $trainingcenter->id) }}">Editar</a></td>

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>


@endsection