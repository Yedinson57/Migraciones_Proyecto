@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="card shadow-lg border-0">

        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">
                {{ $teacher['name'] }}
            </h3>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">ID</label>
                    <div class="form-control">
                        {{ $teacher['id'] }}
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Nombre</label>
                <div class="form-control">
                    {{ $teacher['name'] }}
                </div>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Email</label>
                <div class="form-control">
                    {{ $teacher['email'] }}
                </div>
            </div>

            <div class="mb-3">
                <label class="fw-bold">ID del Area</label>
                <div class="form-control">
                    {{ $teacher['area_id'] }}
                </div>
            </div>

            <div class="mb-3">
                <label class="fw-bold">ID del Centro de formacion</label>
                <div class="form-control">
                    {{ $teacher['training_center_id'] }}
                </div>
            </div>

            <hr>

            <div class="row">

                <div class="col-md-6">
                    <label class="fw-bold">Fecha de creación</label>
                    <div class="form-control">
                        {{ \Carbon\Carbon::parse($teacher['created_at'])->format('d/m/Y H:i') }}
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="fw-bold">Última actualización</label>
                    <div class="form-control">
                        {{ \Carbon\Carbon::parse($teacher['updated_at'])->format('d/m/Y H:i') }}
                    </div>
                </div>

                </div>

                <div class="mt-4 text-end">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
                </div>

            </div>

        </div>

    </div>

</div>
@endsection