@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="card shadow-lg border-0">

        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">
                {{ $computer['name'] }}
            </h3>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">ID</label>
                    <div class="form-control">
                        {{ $computer['id'] }}
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Numero</label>
                <div class="form-control">
                    {{ $computer['number'] }}
                </div>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Marca</label>
                <div class="form-control">
                    {{ $computer['brand'] }}
                </div>
            </div>

            <hr>

            <div class="row">

                <div class="col-md-6">
                    <label class="fw-bold">Fecha de creación</label>
                    <div class="form-control">
                        {{ \Carbon\Carbon::parse($computer['created_at'])->format('d/m/Y H:i') }}
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="fw-bold">Última actualización</label>
                    <div class="form-control">
                        {{ \Carbon\Carbon::parse($computer['updated_at'])->format('d/m/Y H:i') }}
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>
@endsection