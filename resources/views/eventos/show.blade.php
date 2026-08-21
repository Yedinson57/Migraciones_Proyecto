@extends('layouts.app')

@section('content')
<div class="container py-4">

    <!-- BREADCRUMB / BOTÓN VOLVER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="{{ route('eventos.index') }}" class="btn btn-outline-secondary btn-sm rounded-pill fw-bold px-3">
            <i class="bi bi-arrow-left me-1"></i> Volver a Eventos
        </a>
        <span class="text-muted small">
            <i class="bi bi-calendar-event me-1"></i> Evento #{{ $evento['id'] }}
        </span>
    </div>

    <!-- TARJETA PRINCIPAL -->
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        
        <!-- IMAGEN DEL EVENTO -->
        @if(!empty($evento['imagen']))
            <div class="w-100 bg-dark text-center overflow-hidden" style="max-height: 350px;">
                <img src="{{ $evento['imagen'] }}" class="img-fluid w-100 object-fit-cover" alt="{{ $evento['titulo'] }}" style="max-height: 350px;">
            </div>
        @endif

        <div class="card-body p-4 p-md-5">
            
            <div class="d-flex align-items-center gap-2 mb-3">
                <span class="badge bg-primary-subtle text-primary border border-primary px-3 py-2 rounded-pill fw-bold">
                    <i class="bi bi-trophy me-1"></i> {{ $evento['organizador'] }}
                </span>
            </div>

            <h2 class="fw-bold text-dark mb-3">{{ $evento['titulo'] }}</h2>

            <div class="mb-4">
                <h6 class="fw-bold text-dark text-uppercase small">Acerca del Evento</h6>
                <p class="text-secondary lead fs-6" style="white-space: pre-line;">
                    {{ $evento['descripcion'] }}
                </p>
            </div>

            <hr class="my-4 text-muted">

            <!-- DATOS DE PROGRAMACIÓN Y UBICACIÓN -->
            <div class="row g-3">
                <div class="col-md-6 col-lg-3">
                    <div class="p-3 bg-light rounded-3 h-100">
                        <small class="text-muted d-block mb-1"><i class="bi bi-calendar3 text-primary me-1"></i> Fecha</small>
                        <span class="fw-bold text-dark">{{ $evento['fecha'] }}</span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="p-3 bg-light rounded-3 h-100">
                        <small class="text-muted d-block mb-1"><i class="bi bi-clock text-primary me-1"></i> Hora</small>
                        <span class="fw-bold text-dark">{{ $evento['hora'] }}</span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="p-3 bg-light rounded-3 h-100">
                        <small class="text-muted d-block mb-1"><i class="bi bi-geo-alt text-primary me-1"></i> Lugar</small>
                        <span class="fw-bold text-dark">{{ $evento['lugar'] }}</span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="p-3 bg-light rounded-3 h-100">
                        <small class="text-muted d-block mb-1"><i class="bi bi-building text-primary me-1"></i> Organizador</small>
                        <span class="fw-bold text-dark">{{ $evento['organizador'] }}</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="card-footer bg-light border-0 p-4">
            <a href="{{ route('eventos.index') }}" class="btn btn-secondary fw-bold rounded-3">
                <i class="bi bi-arrow-left me-1"></i> Volver a la Lista
            </a>
        </div>

    </div>
</div>
@endsection