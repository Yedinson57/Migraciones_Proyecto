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
                        <h4 class="mb-0 fw-bold">Actualizar Programa</h4>
                        <p class="mb-0 mt-1 small opacity-75">Modifique la vinculación y credenciales del programa</p>
                    </div>

                    <div class="card-body p-4 p-md-5 bg-white">
                        <form action="{{ route('program.update', $programs) }}" method="POST">
                            @csrf
                            @method('put')

                            <div class="mb-4">
                                <label for="name" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Nombre</label>
                                <input type="text"
                                    id="name"
                                    name="name"
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium"
                                    value="{{ old('name', $programs->name) }}"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="description" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Descripcion</label>
                                <input type="text"
                                    id="description"
                                    name="description"
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium"
                                    value="{{ old('description', $programs->description) }}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="type" class="form-label fw-bold">
                                    Tipo de Programa
                                </label>

                                <select name="type" id="type" class="form-select">
                                    <option value="" selected disabled>Seleccione el tipo</option>
                                    <option value="Tecnólogo" {{ old('type', $programs->type) == 'Tecnólogo' ? 'selected' : '' }}>Tecnólogo</option>
                                    <option value="Técnico" {{ old('type', $programs->type) == 'Técnico' ? 'selected' : '' }}>Técnico</option>
                                    <option value="Especialización" {{ old('type', $programs->type) == 'Especialización' ? 'selected' : '' }}>Especialización</option>
                                    <option value="Curso" {{ old('type', $programs->type) == 'Curso' ? 'selected' : '' }}>Curso</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="type" class="form-label fw-bold">
                                    Modalidad
                                </label>

                                <select name="modality" id="modality" class="form-select">
                                    <option value="" selected disabled>Seleccione la modalidad</option>
                                    <option value="Presencial" {{ old('modality', $programs->modality) == 'Presencial' ? 'selected' : '' }}>Presencial</option>
                                    <option value="Virtual" {{ old('modality', $programs->modality) == 'Virtual' ? 'selected' : '' }}>Virtual</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="duration" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Duración</label>
                                <input type="text"
                                    id="duration"
                                    name="duration"
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium"
                                    value="{{ old('duration', $programs->duration) }}"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="area_id" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Área de Especialidad</label>
                                <select name="area_id" id="area_id" class="form-select form-select-lg bg-light border-0 rounded-3 text-dark fw-medium" required>
                                    @foreach($areas as $area)
                                    <option value="{{ $area->id }}" {{ old('area_id', $programs->area_id) == $area->id ? 'selected' : '' }}>
                                        {{ $area->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Vista previa de imagen actual (si existe) --}}
                            @if($programs->urlFoto)
                            <div class="mb-3 text-center">
                                <span class="d-block text-secondary small fw-bold mb-2">Fotografía Actual</span>
                                <div class="d-inline-block p-2 border rounded-4 bg-light shadow-sm">
                                    <img src="{{ asset('storage/images/' . $programs->urlFoto) }}"
                                        alt="Foto {{ $programs->name }}"
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
                                    Actualizar Programa
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