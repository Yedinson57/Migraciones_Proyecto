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
                        <h4 class="mb-0 fw-bold">Registrar Anuncio</h4>
                        <p class="mb-0 mt-1 small opacity-75">Ingrese los datos del Anuncio</p>
                    </div>

                    <div class="card-body p-4 p-md-5 bg-white">
                        <form action="{{ route('advertisement.admin') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-floating mb-4">
                                <input type="text"
                                    class="form-control"
                                    id="title"
                                    name="title"
                                    placeholder="Titulo del anuncio"
                                    required>
                                <label for="title" class="text-secondary">Titulo</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="text"
                                    class="form-control"
                                    id="category"
                                    name="category"
                                    placeholder="Ingrese una descripción"
                                    required>
                                <label for="category" class="text-secondary">Categoria</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="date"
                                    class="form-control"
                                    id="publish_date"
                                    name="publish_date"
                                    placeholder="Fecha de Publicación del Anuncio"
                                    required>
                                <label for="publish_date" class="text-secondary">Fecha de Publicación</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="text"
                                    class="form-control"
                                    id="author"
                                    name="author"
                                    placeholder="Ingrese el autor del anuncio"
                                    required>
                                <label for="author" class="text-secondary">Autor</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="text"
                                    class="form-control"
                                    id="summary"
                                    name="summary"
                                    placeholder="Resumen del anuncio"
                                    required>
                                <label for="summary" class="text-secondary">Resumen</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="text"
                                    class="form-control"
                                    id="content"
                                    name="content"
                                    placeholder="Contenido del anuncio"
                                    required>
                                <label for="content" class="text-secondary">Contenido</label>
                            </div>

                            <div class="form-floating mb-4">
                                <select name="training_center_id" id="advertisement_training_center_id" class="form-select" required>
                                    <option value="" selected disabled>Seleccione una opción...</option>
                                    @foreach ($training_centers as $training_center)
                                    <option value="{{ $training_center->id }}">{{ $training_center->name }}</option>
                                    @endforeach
                                </select>
                                <label for="advertisement_training_center_id" class="text-secondary">Centro al que pertenece</label>
                            </div>

                            <div class="mb-4">
                                <label for="urlFoto" class="form-label fw-bold text-secondary mb-1">Fotografía del Anuncio</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light text-secondary border-end-0 rounded-start-3">
                                        <i class="bi bi-image"></i>
                                    </span>
                                    <input type="file"
                                        name="urlFoto"
                                        id="urlFoto"
                                        class="form-control border-start-0 rounded-end-3 focus-ring @error('urlFoto') is-invalid @enderror"
                                        accept="image/*">
                                    @error('urlFoto')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="text-muted small mt-1 ps-1">
                                    Formatos permitidos: JPG, PNG, WEBP.
                                </div>
                            </div>

                            <div class=" d-flex justify-content-between align-items-center mt-5">
                                <a href="/" class="btn btn-outline-secondary px-4 py-2 fw-medium rounded-3">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-dark px-5 py-2 fw-bold rounded-3">
                                    Registrar Anuncio
                                </button>
                            </div>

                        </form>
                    </div>
                    <a href="{{ route('advertisement.index') }}" class="btn text-white fw-bold px-4 py-2 shadow-sm d-inline-flex align-items-center gap-2" style="background-color: #39A900;">
                        Revisar Registros
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection