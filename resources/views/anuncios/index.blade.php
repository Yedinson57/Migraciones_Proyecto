@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold" style="color: #00324D;">Anuncios e Informativos</h2>
            <p class="text-muted mb-0">Comunicados oficiales para la comunidad SENA</p>
        </div>
        <a href="{{ url('/') }}" class="btn btn-outline-secondary btn-sm">
            <i class="bi bi-arrow-left me-1"></i> Volver al Inicio
        </a>
    </div>

    <div class="row g-4">
        @foreach($anuncios as $anuncio)
        <div class="col-md-6">
            <div class="card h-100 border-2 border-secundary shadow-sm rounded-4 overflow-hidden">
                <img src="{{ $anuncio['imagen'] }}" class="card-img-top" alt="{{ $anuncio['titulo'] }}" style="height: 200px; object-fit: cover;">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge bg-success bg-opacity-10 text-success fw-bold px-3 py-2 rounded-pill">
                            {{ $anuncio['categoria'] }}
                        </span>
                        <small class="text-muted"><i class="bi bi-calendar3 me-1"></i>{{ $anuncio['fecha'] }}</small>
                    </div>
                    <h5 class="fw-bold text-dark mt-2">{{ $anuncio['titulo'] }}</h5>
                    <p class="text-muted small mb-3">{{ $anuncio['resumen'] }}</p>
                    <a href="{{ route('anuncios.show', $anuncio['id']) }}" class="btn text-white fw-bold w-100 rounded-3" style="background-color: #39A900;">
                        Leer Anuncio Completo <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection