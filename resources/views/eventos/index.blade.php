@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold" style="color: #00324D;">Próximos Eventos</h2>
            <p class="text-muted mb-0">Agenda Institucional y Actividades Académicas</p>
        </div>
        <a href="{{ url('/') }}" class="btn btn-outline-secondary btn-sm">
            <i class="bi bi-arrow-left me-1"></i> Volver al Inicio
        </a>
    </div>

    <div class="row g-4">
        @foreach($eventos as $evento)
        <div class="col-md-6">
            <div class="card border-2 border-secundary shadow-sm rounded-4 overflow-hidden">
                <div class="row g-0">
                    <div class="col-sm-5 position-relative">
                        <img src="{{ $evento['imagen'] }}" class="w-100 h-100" style="object-fit: cover; min-height: 200px;" alt="{{ $evento['titulo'] }}">
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body p-4">
                            <span class="badge bg-warning text-dark fw-bold mb-2">
                                <i class="bi bi-calendar3 me-1"></i> {{ $evento['fecha'] }}
                            </span>
                            <h5 class="fw-bold text-dark">{{ $evento['titulo'] }}</h5>
                            <p class="text-muted small mb-2"><i class="bi bi-geo-alt-fill text-danger me-1"></i>{{ $evento['lugar'] }}</p>
                            <p class="text-muted small mb-3"><i class="bi bi-clock-fill me-1"></i>{{ $evento['hora'] }}</p>
                            <a href="{{ route('eventos.show', $evento['id']) }}" class="btn btn-sm text-white fw-bold px-3 py-2 rounded-3" style="background-color: #00324D;">
                                Más Información
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection