@extends('layouts.app')

@section('content')
<div class="container-fluid px-0 mb-5 rounded-3 overflow-hidden shadow-sm">
    <div id="homeCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            
            <div class="carousel-item active" data-bs-interval="5000">
                <div class="position-relative" style="height: 500px;">
                    <div class="w-100 h-100 bg-dark opacity-50 position-absolute top-0 start-0 z-1"></div>
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=1200&q=80" class="d-block w-100 h-100 object-fit-cover" alt="Sena Tecnologico">
                </div>
                <div class="carousel-caption d-none d-md-block z-2 mb-4">
                    <h1 class="display-4 fw-bold text-uppercase" style="color: #39A900; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Admin SENA</h1>
                    <p class="fs-4 fw-medium text-white" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.8);">Bienvenido al Panel de Administración y Gestión de Procesos Académicos.</p>
                    <a href="/area/create" class="btn btn-light fw-bold px-4 py-2 mt-2">Comenzar Registro</a>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="5000">
                <div class="position-relative" style="height: 500px;">
                    <div class="w-100 h-100 bg-dark opacity-50 position-absolute top-0 start-0 z-1"></div>
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=1200&q=80" class="d-block w-100 h-100 object-fit-cover" alt="Formacion Profesional">
                </div>
                <div class="carousel-caption d-none d-md-block z-2 mb-4">
                    <h1 class="display-4 fw-bold text-white" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Control de Instructores y Cursos</h1>
                    <p class="fs-4 fw-medium text-white-50" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.8);">Administra de forma ágil las áreas, ambientes tecnológicos y asignaciones.</p>
                    <a href="/teacher/list" class="btn btn-success fw-bold px-4 py-2 mt-2" style="background-color: #39A900; border-color: #39A900;">Ver Instructores</a>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="5000">
                <div class="position-relative" style="height: 500px;">
                    <div class="w-100 h-100 bg-dark opacity-50 position-absolute top-0 start-0 z-1"></div>
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1200&q=80" class="d-block w-100 h-100 object-fit-cover" alt="Gestion de Aprendices">
                </div>
                <div class="carousel-caption d-none d-md-block z-2 mb-4">
                    <h1 class="display-4 fw-bold text-white" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Seguimiento de Aprendices</h1>
                    <p class="fs-4 fw-medium text-white-50" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.8);">Monitorea la base de datos de alumnos matriculados y sus equipos asignados.</p>
                    <a href="/apprentice/list" class="btn btn-outline-light fw-bold px-4 py-2 mt-2">Consultar Listas</a>
                </div>
            </div>

        </div>

        <button class="carousel-control-prev z-3" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next z-3" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div>
@endsection