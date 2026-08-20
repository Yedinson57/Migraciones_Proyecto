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
                <div class="carousel-caption d-none d-md-block z-2 mt-4">
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
                <div class="carousel-caption d-none d-md-block z-2 mt-4">
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
                <div class="carousel-caption d-none d-md-block z-2 mt-4">
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

    <!-- Anuncios -->

    <div class="mt-5">
        
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mt-4">
            <div>
                <span class="badge px-3 py-2 fs-6 rounded-pill text-white mb-2" style="background-color: #39A900;">
                    <i class="bi bi-megaphone-fill me-1"></i> Novedades del Centro
                </span>
                <h2 class="fw-bold text-dark mb-0">Anuncios, Ofertas y Eventos</h2>
            </div>
            <div class="mt-2 mt-md-0">
                <span class="text-muted small">Actualizado semanalmente</span>
            </div>
        </div>

        <div class="alert alert-warning border border-warning shadow-lg rounded-4 p-4 mt-4 d-flex align-items-start gap-3">
            <div class="bg-warning text-dark p-3 rounded-circle d-none d-sm-block">
                <i class="bi bi-exclamation-triangle-fill fs-3"></i>
            </div>
            <div>
                <span class="badge bg-dark text-warning fw-bold mb-1">¡Importante!</span>
                <h5 class="fw-bold mb-1 text-dark">Convocatoria de Formación Titulada Presencial 2026</h5>
                <p class="mb-0 text-dark opacity-75">
                    Las inscripciones para la oferta de cursos técnicos y tecnólogos cierran este viernes. Asegúrate de verificar los cupos disponibles en la sección de cursos.
                </p>
            </div>
        </div>

        <div class="row g-4">

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-1 border-secundary shadow-lg rounded-4 overflow-hidden card-hover">
                    <div class="card-header bg-white border-0 pt-4 px-4 d-flex justify-content-between align-items-center">
                        <span class="badge bg-success-subtle text-success border border-success fw-bold px-3 py-2 rounded-pill">
                            <i class="bi bi-journal-plus me-1"></i> Oferta Educativa
                        </span>
                        <small class="text-muted"><i class="bi bi-calendar3 me-1"></i> 20 Ago 2026</small>
                    </div>
                    <div class="card-body px-4">
                        <h5 class="card-title fw-bold text-dark mb-2">Nuevo Tecnólogo en Desarrollo de Software</h5>
                        <p class="card-text text-secondary small mb-3">
                            Abierta la preinscripción para la jornada nocturna. Aprende desarrollo web, bases de datos y desarrollo de APIS con metodologías ágiles.
                        </p>
                        <ul class="list-unstyled small text-muted mb-0">
                            <li class="mb-1"><i class="bi bi-clock me-2 text-success"></i> 24 Meses (Lectiva + Práctica)</li>
                            <li><i class="bi bi-geo-alt me-2 text-success"></i> Centro de Formación Central</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-light border-0 px-4 py-3 text-end">
                        <a href="{{ route('course.index') }}" class="btn btn-sm text-white fw-bold px-3 rounded-3" style="background-color: #39A900;">
                            Ver Fichas <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-1 border-secundary shadow-lg rounded-4 overflow-hidden card-hover">
                    <div class="card-header bg-white border-0 pt-4 px-4 d-flex justify-content-between align-items-center">
                        <span class="badge bg-primary-subtle text-primary border border-primary fw-bold px-3 py-2 rounded-pill">
                            <i class="bi bi-trophy me-1"></i> Evento
                        </span>
                        <small class="text-muted"><i class="bi bi-calendar3 me-1"></i> 28 Ago 2026</small>
                    </div>
                    <div class="card-body px-4">
                        <h5 class="card-title fw-bold text-dark mb-2">Feria de Innovación y Tecnología SENA</h5>
                        <p class="card-text text-secondary small mb-3">
                            Exposición de proyectos formativos creados por los aprendices. Contaremos con la participación de empresas invitadas y muestra de prototipos.
                        </p>
                        <ul class="list-unstyled small text-muted mb-0">
                            <li class="mb-1"><i class="bi bi-clock me-2 text-primary"></i> 8:00 AM – 4:00 PM</li>
                            <li><i class="bi bi-geo-alt me-2 text-primary"></i> Auditorio Principal</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-light border-0 px-4 py-3 text-end">
                        <a href="{{ route('about') }}" class="btn btn-sm btn-outline-primary fw-bold px-3 rounded-3">
                            Más Detalles <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-1 border-secundary shadow-lg rounded-4 overflow-hidden card-hover">
                    <div class="card-header bg-white border-0 pt-4 px-4 d-flex justify-content-between align-items-center">
                        <span class="badge bg-info-subtle text-info-emphasis border border-info fw-bold px-3 py-2 rounded-pill">
                            <i class="bi bi-heart-pulse me-1"></i> Taller
                        </span>
                        <small class="text-muted"><i class="bi bi-calendar3 me-1"></i> 02 Sep 2026</small>
                    </div>
                    <div class="card-body px-4">
                        <h5 class="card-title fw-bold text-dark mb-2">Taller de Hoja de Vida y Entrevistas</h5>
                        <p class="card-text text-secondary small mb-3">
                            Organizado por Bienestar al Aprendiz. Aprende a redactar un perfil profesional atractivo para el inicio de tu etapa productiva.
                        </p>
                        <ul class="list-unstyled small text-muted mb-0">
                            <li class="mb-1"><i class="bi bi-clock me-2 text-info"></i> 2:00 PM – 5:00 PM</li>
                            <li><i class="bi bi-laptop me-2 text-info"></i> Modalidad Virtual (Teams)</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-light border-0 px-4 py-3 text-end">
                        <a href="{{ route('apprentice.index') }}" class="btn btn-sm btn-outline-dark fw-bold px-3 rounded-3">
                            Ir a Aprendices <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="homeGuestContent" class="my-4">
        <div class="card border border-dark shadow-sm rounded-4 p-4 bg-light">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h5 class="fw-bold mb-1 text-dark">¿Eres Administrador o Instructor?</h5>
                    <p class="mb-0 text-muted">Inicia sesión para gestionar las listas de aprendices y fichas de formación.</p>
                </div>
                <a href="{{ route('login') }}" class="btn text-white fw-bold px-4 py-2 rounded-3" style="background-color: #39A900;">
                    <i class="bi bi-box-arrow-in-right me-1"></i> Iniciar Sesión
                </a>
            </div>
        </div>
    </div>

    <div id="homeAdminContent" class="d-none my-4">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mt-4">
            <h2 class="fw-bold text-dark mb-0">Acceso directo</h2>
        </div>

        <div class="row g-3 text-center mt-4">
            <div class="col-6 col-md-4 col-lg-2">
                <a href="{{ route('apprentice.index') }}" class="text-decoration-none">
                    <div class="p-3 bg-white rounded-4 shadow-lg border border-success h-100 d-flex flex-column align-items-center justify-content-center">
                        <i class="bi bi-people text-success fs-2 mb-2"></i>
                        <span class="fw-bold text-dark small">Aprendices</span>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <a href="{{ route('course.index') }}" class="text-decoration-none">
                    <div class="p-3 bg-white rounded-4 shadow-lg border border-primary h-100 d-flex flex-column align-items-center justify-content-center">
                        <i class="bi bi-journal-bookmark text-primary fs-2 mb-2"></i>
                        <span class="fw-bold text-dark small">Cursos</span>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <a href="{{ route('teacher.index') }}" class="text-decoration-none">
                    <div class="p-3 bg-white rounded-4 shadow-lg border border-warning h-100 d-flex flex-column align-items-center justify-content-center">
                        <i class="bi bi-person-badge text-warning fs-2 mb-2"></i>
                        <span class="fw-bold text-dark small">Instructores</span>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <a href="{{ route('about') }}" class="text-decoration-none">
                    <div class="p-3 bg-white rounded-4 shadow-lg border border-info h-100 d-flex flex-column align-items-center justify-content-center">
                        <i class="bi bi-building text-info fs-2 mb-2"></i>
                        <span class="fw-bold text-dark small">Nosotros</span>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-4">
                <div class="p-3 bg-white rounded-4 shadow-lg border border-dark h-100 d-flex align-items-center justify-content-between px-4">
                    <div class="text-start">
                        <h6 class="fw-bold text-dark mb-0">¿Necesitas ayuda?</h6>
                        <small class="text-muted">Consulta la Misión SENA</small>
                    </div>
                    <a href="{{ route('about') }}" class="btn btn-sm btn-outline-success fw-bold rounded-3">
                        Saber más
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- BOTÓN FLOTANTE VOLVER ARRIBA -->
<button id="btnScrollToTop" 
        class="btn text-white shadow-lg rounded-circle border-0 d-flex align-items-center justify-content-center" 
        onclick="scrollToTop()" 
        title="Volver al principio"
        style="position: fixed; bottom: 30px; right: 30px; width: 50px; height: 50px; background-color: #39A900; z-index: 1050; opacity: 0; pointer-events: none; transition: all 0.3s ease-in-out;">
    <i class="bi bi-arrow-up-short fs-2"></i>
</button>

<style>
    /* Efecto de elevación al pasar el cursor */
    #btnScrollToTop:hover {
        background-color: #00324D !important;
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3) !important;
    }
</style>

<script>
    // Controla la visibilidad del botón al hacer scroll
    window.addEventListener('scroll', function() {
        const btn = document.getElementById('btnScrollToTop');
        if (window.scrollY > 300) {
            btn.style.opacity = '1';
            btn.style.pointerEvents = 'auto';
        } else {
            btn.style.opacity = '0';
            btn.style.pointerEvents = 'none';
        }
    });

    // Desplazamiento suave al inicio de la página
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        checkHomeAuth();
    });

    function checkHomeAuth() {
        const userSession = localStorage.getItem('user_session');
        const adminContent = document.getElementById('homeAdminContent');
        const guestContent = document.getElementById('homeGuestContent');

        if (userSession) {
            // Muestra el contenido exclusivo para admins
            if (adminContent) adminContent.classList.remove('d-none');
            // Oculta la invitación a iniciar sesión
            if (guestContent) guestContent.classList.add('d-none');
        } else {
            // Oculta el contenido exclusivo
            if (adminContent) adminContent.classList.add('d-none');
            // Muestra la invitación a iniciar sesión
            if (guestContent) guestContent.classList.remove('d-none');
        }
    }
</script>

@endsection