@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold" style="color: #00324D;">Oferta Educativa SENA</h2>
            <p class="text-muted mb-0">Programas de formación disponibles para inscripción</p>
        </div>
        <a href="{{ url('/') }}" class="btn btn-outline-secondary btn-sm">
            <i class="bi bi-arrow-left me-1"></i> Volver al Inicio
        </a>
    </div>

    <div class="row g-4">
        @foreach($ofertas as $oferta)
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-2 border-secundary shadow-sm rounded-4 overflow-hidden">
                <img src="{{ $oferta['imagen'] }}" class="card-img-top" style="height: 180px; object-fit: cover;" alt="{{ $oferta['titulo'] }}">
                <div class="card-body p-4 d-flex flex-column">
                    <span class="badge text-uppercase fw-bold px-3 py-2 rounded-pill mb-2 w-auto me-auto" style="background-color: #00324D; color: white;">
                        {{ $oferta['modalidad'] }}
                    </span>
                    <h5 class="fw-bold text-dark mt-2 mb-2">{{ $oferta['titulo'] }}</h5>
                    <p class="text-muted small flex-grow-1">{{ Str::limit($oferta['descripcion'], 90) }}</p>
                    
                    <ul class="list-unstyled small text-secondary my-3 border-top pt-2">
                        <li><i class="bi bi-clock me-2 text-success"></i><strong>Duración:</strong> {{ $oferta['duracion'] }}</li>
                        <li><i class="bi bi-people me-2 text-success"></i><strong>Cupos:</strong> {{ $oferta['cupos'] }} disponibles</li>
                    </ul>

                    <a href="{{ route('ofertas.show', $oferta['id']) }}" class="btn text-white fw-bold w-100 rounded-3" style="background-color: #39A900;">
                        Ver Detalles e Inscribirme
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection