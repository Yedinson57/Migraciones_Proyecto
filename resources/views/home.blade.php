@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3 shadow-sm">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold" style="color: #39A900;">¡Bienvenido a mi sitio web!</h1>
        <p class="col-md-8 fs-4">Esta página de inicio está construida utilizando Laravel, Blade y estilizada de manera rápida y responsive con Bootstrap.</p>
        
        <button class="btn btn-dark btn-lg" type="button">Empezar a explorar</button>
    </div>
</div>

<div class="row align-items-md-stretch">
    <div class="col-md-6 mb-3">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
            <h2>Mensaje op</h2>
            <p>Sea cordialmente bienvenido a la web admin sena, en la parte superior encontrará los enlaces de navegación en tres maneras diferentes.</p>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="h-100 p-5 bg-light border rounded-3">
            <h2>Últimas Novedades</h2>
            <p>
                Mejoras en la navegación <br>
                Actualización de colores <br>
                Logo del Sena
            </p>
        </div>
    </div>
</div>

@endsection