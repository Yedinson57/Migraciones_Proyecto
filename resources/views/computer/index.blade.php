@extends('layouts.app')

@section('content')

<h1>LISTAR COMPUTADORES</h1>

<div class ="container">
        <table id="idComputer" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Number</th>
                    <th>Brand</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{ route('computer.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Computador
                </a>
                @foreach ($computers as $computer)
                    <tr>
                        <br>
                        <td>{{ $computer->id }}</td>
                        <td>{{ $computer->number }}</td>
                        <td>{{ $computer->brand }}</td>
                        <td><a href="{{ route('computer.show', $computer->id) }}">Mostrar</a></td>
                        <td><a href="{{ route('computer.edit', $computer->id) }}">Editar</a></td>
                        <td>
                            <form action="{{ route('computer.destroy', $computer->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar Computador</button>
                            </form>
                        </td>

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>


@endsection