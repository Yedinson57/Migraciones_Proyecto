@extends('layouts.app')

@section('content')

<script>
    if (!localStorage.getItem('user_session')) {
        alert('Acceso denegado: Debes iniciar sesión para acceder al panel de administración.');
        window.location.href = "{{ route('login') }}";
    }
</script>

<div class="py-5 rounded-4" style="background-color: #f4f6f9;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">

                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">

                    <div class="card-header text-white text-center py-4" style="background-color: #39A900; border-bottom: none;">
                        <h4 class="mb-0 fw-bold">Registrar Ambiente</h4>
                        <p class="mb-0 mt-1 small opacity-75">Ingrese los datos del Ambiente</p>
                    </div>

                    <div class="card-body p-4 p-md-5 bg-white">
                        <form action="{{ route('environment.admin') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-floating mb-4">
                                <input type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    placeholder="Nombre completo"
                                    required>
                                <label for="name" class="text-secondary">Nombre Completo</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="text"
                                    class="form-control"
                                    id="location"
                                    name="location"
                                    placeholder="Ubicacion del ambiente"
                                    required>
                                <label for="location" class="text-secondary">Ubicación</label>
                            </div>

                            <div class="form-floating mb-4">
                                <select name="training_center_id" id="environment_training_center_id" class="form-select" required>
                                    <option value="" selected disabled>Seleccione una opción...</option>
                                    @foreach ($training_centers as $training_center)
                                    <option value="{{ $training_center->id }}">{{ $training_center->name }}</option>
                                    @endforeach
                                </select>
                                <label for="environment_training_center_id" class="text-secondary">Centro al que pertence</label>
                            </div>

                            <div class=" d-flex justify-content-between align-items-center mt-5">
                            <a href="/" class="btn btn-outline-secondary px-4 py-2 fw-medium rounded-3">
                                Cancelar
                            </a>
                            <button type="submit" class="btn btn-dark px-5 py-2 fw-bold rounded-3">
                                Registrar Ambiente
                            </button>
                    </div>

                    </form>
                </div>
                <a href="{{ route('environment.index') }}" class="btn text-white fw-bold px-4 py-2 shadow-sm d-inline-flex align-items-center gap-2" style="background-color: #39A900;">
                    Revisar Registros
                </a>
            </div>

        </div>
    </div>
</div>
</div>
@endsection