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
                        <h4 class="mb-0 fw-bold">Actualizar Anuncio</h4>
                        <p class="mb-0 mt-1 small opacity-75">Modifique la vinculación y credenciales del Anuncio</p>
                    </div>

                    <div class="card-body p-4 p-md-5 bg-white">
                        <form action="{{ route('advertisement.update', $advertisements) }}" method="POST">
                            @csrf
                            @method('put')

                            <div class="mb-4">
                                <label for="title" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Titulo</label>
                                <input type="text"
                                    id="title"
                                    name="title"
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium"
                                    value="{{ old('title', $advertisements->title) }}"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="category" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Categoria</label>
                                <input type="text"
                                    id="category"
                                    name="category"
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium"
                                    value="{{ old('category', $advertisements->category) }}"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="publish_date" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Fecha de publicación</label>
                                <input type="date"
                                    id="publish_date"
                                    name="publish_date"
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium"
                                    value="{{ old('publish_date', $advertisements->publish_date) }}"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="author" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Autor</label>
                                <input type="text"
                                    id="author"
                                    name="author"
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium"
                                    value="{{ old('author', $advertisements->author) }}"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="summary" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Resumen</label>
                                <input type="text"
                                    id="summary"
                                    name="summary"
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium"
                                    value="{{ old('summary', $advertisements->summary) }}"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="content" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Contenido</label>
                                <input type="text"
                                    id="content"
                                    name="content"
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium"
                                    value="{{ old('content', $advertisements->content) }}"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="training_center_id" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Centro al que pertenece</label>
                                <select name="training_center_id" id="training_center_id" class="form-select form-select-lg bg-light border-0 rounded-3 text-dark fw-medium" required>
                                    @foreach($trainingcenters as $trainingcenter)
                                    <option value="{{ $trainingcenter->id }}" {{ old('trainingcenter_id', $advertisements->trainingcenter_id) == $trainingcenter->id ? 'selected' : '' }}>
                                        {{ $trainingcenter->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Vista previa de imagen actual (si existe) --}}
                            @if($advertisements->urlFoto)
                            <div class="mb-3 text-center">
                                <span class="d-block text-secondary small fw-bold mb-2">Fotografía Actual</span>
                                <div class="d-inline-block p-2 border rounded-4 bg-light shadow-sm">
                                    <img src="{{ asset('storage/images/' . $advertisements->urlFoto) }}"
                                        alt="Foto {{ $advertisements->title }}"
                                        class="rounded-3 img-fluid"
                                        style="max-height: 180px; object-fit: cover;">
                                </div>
                            </div>
                            @endif

                            <hr class="my-4 opacity-25">

                            <div class="d-flex justify-content-center align-items-center gap-2 mt-4">
                                <a href="{{ url()->previous() }}" class="btn btn-light border fw-bold px-4 py-2 rounded-3">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn text-white fw-bold px-4 py-2 rounded-3 shadow-sm" style="background-color: #39A900;">
                                    Actualizar Anuncio
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection