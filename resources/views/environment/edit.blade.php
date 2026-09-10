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
                        <h4 class="mb-0 fw-bold">Actualizar Ambiente</h4>
                        <p class="mb-0 mt-1 small opacity-75">Modifique la vinculación y credenciales del Ambiente</p>
                    </div>

                    <div class="card-body p-4 p-md-5 bg-white">
                        <form action="{{ route('environment.update', $environments) }}" method="POST">
                            @csrf
                            @method('put')

                            <div class="mb-4">
                                <label for="name" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Nombre</label>
                                <input type="text"
                                    id="name"
                                    name="name"
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium"
                                    value="{{ old('name', $environments->name) }}"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="location" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Descripcion</label>
                                <input type="text"
                                    id="location"
                                    name="location"
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium"
                                    value="{{ old('location', $environments->location) }}"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="training_center_id" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Centro al que pertenece</label>
                                <select name="training_center_id" id="training_center_id" class="form-select form-select-lg bg-light border-0 rounded-3 text-dark fw-medium" required>
                                    @foreach($trainingcenters as $trainingcenter)
                                    <option value="{{ $trainingcenter->id }}" {{ old('trainingcenter_id', $environments->trainingcenter_id) == $trainingcenter->id ? 'selected' : '' }}>
                                        {{ $trainingcenter->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Vista previa de imagen actual (si existe) --}}
                            @if($environments->urlFoto)
                            <div class="mb-3 text-center">
                                <span class="d-block text-secondary small fw-bold mb-2">Fotografía Actual</span>
                                <div class="d-inline-block p-2 border rounded-4 bg-light shadow-sm">
                                    <img src="{{ asset('storage/images/' . $environments->urlFoto) }}"
                                        alt="Foto {{ $environments->name }}"
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
                                    Actualizar Ambiente
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