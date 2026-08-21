@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <a href="{{ route('anuncios.index') }}" class="btn btn-link text-decoration-none text-muted mb-3 p-0">
                <i class="bi bi-arrow-left me-1"></i> Volver a Anuncios
            </a>

            <div class="card border-2 border-secundary shadow-sm rounded-4 overflow-hidden">
                <img src="{{ $anuncio['imagen'] }}" class="w-100" style="max-height: 350px; object-fit: cover;" alt="{{ $anuncio['titulo'] }}">
                <div class="card-body p-4 p-md-5 bg-white">
                    <span class="badge px-3 py-2 rounded-pill text-white mb-3" style="background-color: #00324D;">
                        {{ $anuncio['categoria'] }}
                    </span>
                    <h2 class="fw-bold text-dark mb-3">{{ $anuncio['titulo'] }}</h2>
                    <div class="d-flex align-items-center gap-3 text-muted small border-bottom pb-3 mb-4">
                        <span><i class="bi bi-person-fill me-1"></i>{{ $anuncio['autor'] }}</span>
                        <span><i class="bi bi-calendar-event me-1"></i>{{ $anuncio['fecha'] }}</span>
                    </div>
                    <p class="fs-6 text-secondary leading-relaxed mb-0">{{ $anuncio['contenido'] }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection