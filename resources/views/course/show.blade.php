@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="card shadow-lg border-0">

        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">
                {{ $course['name'] }}
            </h3>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">ID</label>
                    <div class="form-control">
                        {{ $course['id'] }}
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Numero del curso</label>
                <div class="form-control">
                    {{ $course['course_number'] }}
                </div>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Dia</label>
                <div class="form-control">
                    {{ $course['day'] }}
                </div>
            </div>

            <div class="mb-3">
                <label class="fw-bold">ID del Area</label>
                <div class="form-control">
                    {{ $course['area_id'] }}
                </div>
            </div>

            <div class="mb-3">
                <label class="fw-bold">ID del centro de formación</label>
                <div class="form-control">
                    {{ $course['training_center_id'] }}
                </div>
            </div>
            
            <hr>

            <div class="row">

                <div class="col-md-6">
                    <label class="fw-bold">Fecha de creación</label>
                    <div class="form-control">
                        {{ \Carbon\Carbon::parse($course['created_at'])->format('d/m/Y H:i') }}
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="fw-bold">Última actualización</label>
                    <div class="form-control">
                        {{ \Carbon\Carbon::parse($course['updated_at'])->format('d/m/Y H:i') }}
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