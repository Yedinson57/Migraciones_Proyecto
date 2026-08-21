@extends('layouts.app')

@section('content')
<div class="container py-4">

    <!-- BREADCRUMB / BOTÓN VOLVER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="{{ route('ofertas.index') }}" class="btn btn-outline-secondary btn-sm rounded-pill fw-bold px-3">
            <i class="bi bi-arrow-left me-1"></i> Volver a Ofertas
        </a>
        <span class="text-muted small">
            <i class="bi bi-journal-plus me-1"></i> Oferta #{{ $oferta['id'] }}
        </span>
    </div>

    <!-- TARJETA PRINCIPAL -->
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        
        <!-- IMAGEN DE LA OFERTA -->
        @if(!empty($oferta['imagen']))
            <div class="w-100 bg-dark text-center overflow-hidden" style="max-height: 350px;">
                <img src="{{ $oferta['imagen'] }}" class="img-fluid w-100 object-fit-cover" alt="{{ $oferta['titulo'] }}" style="max-height: 350px;">
            </div>
        @endif

        <div class="card-body p-4 p-md-5">
            
            <div class="d-flex align-items-center gap-2 mb-3">
                <span class="badge bg-success-subtle text-success border border-success px-3 py-2 rounded-pill fw-bold">
                    <i class="bi bi-journal-check me-1"></i> {{ $oferta['modalidad'] }}
                </span>
                <span class="badge bg-light text-dark border px-3 py-2 rounded-pill">
                    <i class="bi bi-people me-1"></i> {{ $oferta['cupos'] }} Cupos disponibles
                </span>
            </div>

            <h2 class="fw-bold text-dark mb-3">{{ $oferta['titulo'] }}</h2>

            <div class="mb-4">
                <h6 class="fw-bold text-dark text-uppercase small">Descripción del Programa</h6>
                <p class="text-secondary lead fs-6" style="white-space: pre-line;">
                    {{ $oferta['descripcion'] }}
                </p>
            </div>

            @if(!empty($oferta['requisitos']))
                <div class="mb-4 p-3 bg-light rounded-3 border-start border-4 border-success">
                    <h6 class="fw-bold text-dark mb-1">
                        <i class="bi bi-file-earmark-check me-1 text-success"></i> Requisitos de Ingreso
                    </h6>
                    <p class="mb-0 text-muted small">
                        {{ $oferta['requisitos'] }}
                    </p>
                </div>
            @endif

            <hr class="my-4 text-muted">

            <!-- DETALLES TÉCNICOS -->
            <div class="row g-3">
                <div class="col-md-6 col-lg-4">
                    <div class="p-3 bg-light rounded-3 h-100">
                        <small class="text-muted d-block mb-1"><i class="bi bi-clock text-success me-1"></i> Duración</small>
                        <span class="fw-bold text-dark">{{ $oferta['duracion'] }}</span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="p-3 bg-light rounded-3 h-100">
                        <small class="text-muted d-block mb-1"><i class="bi bi-laptop text-success me-1"></i> Modalidad</small>
                        <span class="fw-bold text-dark">{{ $oferta['modalidad'] }}</span>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4">
                    <div class="p-3 bg-light rounded-3 h-100">
                        <small class="text-muted d-block mb-1"><i class="bi bi-geo-alt text-success me-1"></i> Centro de Formación</small>
                        <span class="fw-bold text-dark">{{ $oferta['centro'] }}</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="card-footer bg-light border-0 p-4">
            <a href="{{ route('ofertas.index') }}" class="btn btn-secondary fw-bold rounded-3">
                <i class="bi bi-arrow-left me-1"></i> Volver a la Lista
            </a>
        </div>

    </div>
</div>
@endsection