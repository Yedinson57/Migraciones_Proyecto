@extends('layouts.app')

@section('content')
<div class="container py-4">

    <div class="row mb-5 text-center">
        <div class="col-lg-8 mx-auto">
            <span class="badge px-3 py-2 fs-6 rounded-pill text-white mb-2" style="background-color: #39A900;">
                <i class="bi bi-building me-1"></i> Nuestra Institución
            </span>
            <h1 class="fw-bold display-5 text-dark">Servicio Nacional de Aprendizaje</h1>
            <p class="lead text-muted">
                Conoce el propósito y la proyección institucional del SENA en el desarrollo social, técnico y tecnológico de Colombia.
            </p>
        </div>
    </div>

    <div class="row g-4 mb-5">
        
        <div class="col-md-6">
            <div class="card h-100 border-1 border-success shadow-lg rounded-4 overflow-hidden">
                <div class="card-header border-1 border-success py-3 text-white d-flex align-items-center gap-2" style="background-color: #39A900;">
                    <i class="bi bi-bullseye fs-3"></i>
                    <h3 class="card-title fw-bold mb-0">Misión</h3>
                </div>
                <div class="card-body p-4 bg-white fs-6 text-secondary lh-lg">
                    <p class="card-text mb-0">
                        El SENA está encargado de cumplir la función que le corresponde al Estado de invertir en el desarrollo social y técnico de los trabajadores colombianos, ofreciendo y ejecutando la <strong>formación profesional integral</strong>, para la incorporación y el desarrollo de las personas en actividades productivas que contribuyan al desarrollo social, económico y tecnológico del país <em>(Ley 119/1994)</em>.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100 border-1 border-primary shadow-lg rounded-4 overflow-hidden">
                <div class="card-header border-1 border-primary py-3 text-white d-flex align-items-center gap-2" style="background-color: #00324D;">
                    <i class="bi bi-eye-fill fs-3"></i>
                    <h3 class="card-title fw-bold mb-0">Visión</h3>
                </div>
                <div class="card-body p-4 bg-white fs-6 text-secondary lh-lg">
                    <p class="card-text mb-0">
                        Para el año 2026, el Servicio Nacional de Aprendizaje – SENA estará a la vanguardia de la cualificación del talento humano, tanto a nivel nacional como internacional. Esto se logrará a través de la formación profesional integral, el empleo, el emprendimiento y el reconocimiento de aprendizajes previos. Nuestro objetivo es generar valor público y fortalecer la economía campesina, popular, verde y digital, siempre con un enfoque diferencial orientado a la construcción del cambio, la transformación productiva, la soberanía alimentaria y la consolidación de una paz total, materializando así la autonomía territorial, y promoviendo la justicia social, ambiental y económica.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div class="row text-center mt-4">
        <div class="col-md-4 mb-3">
            <div class="p-3 bg-white rounded-3 shadow-lg border border-success h-100">
                <i class="bi bi-journal-check text-success fs-1 mb-2"></i>
                <h5 class="fw-bold">Formación Integral</h5>
                <p class="small text-muted mb-0">Educación teórica y práctica adaptada a las necesidades reales del sector productivo.</p>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="p-3 bg-white rounded-3 shadow-lg border border-warning h-100">
                <i class="bi bi-lightbulb-fill text-warning fs-1 mb-2"></i>
                <h5 class="fw-bold">Innovación y Tecnología</h5>
                <p class="small text-muted mb-0">Uso de tecnologías de punta y actualización constante en áreas de conocimiento.</p>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="p-3 bg-white rounded-3 shadow-lg border border-info h-100">
                <i class="bi bi-people-fill text-primary fs-1 mb-2"></i>
                <h5 class="fw-bold">Inclusión Social</h5>
                <p class="small text-muted mb-0">Oportunidades de formación para todos los ciudadanos en todo el territorio nacional.</p>
            </div>
        </div>
    </div>

</div>
@endsection