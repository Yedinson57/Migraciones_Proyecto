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
                        <h4 class="mb-0 fw-bold">Actualizar Oferta</h4>
                        <p class="mb-0 mt-1 small opacity-75">Modifique la vinculación y credenciales de la Oferta</p>
                    </div>

                    <div class="card-body p-4 p-md-5 bg-white">
                        <form action="{{ route('offer.update', $offers) }}" method="POST">
                            @csrf
                            @method('put')

                            <div class="mb-4">
                                <label for="day" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Jornada</label>
                                <input type="text"
                                    id="day"
                                    name="day"
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium"
                                    value="{{ old('day', $offers->day) }}"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="registration_date" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Fecha de inscripción</label>
                                <input type="date"
                                    id="registration_date"
                                    name="registration_date"
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium"
                                    value="{{ old('registration_date', $offers->registration_date) }}"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="capacity" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Capacidad</label>
                                <input type="number"
                                    id="capacity"
                                    name="capacity"
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium"
                                    value="{{ old('capacity', $offers->capacity) }}"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="program_id" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Programa al que pertenece</label>
                                <select name="program_id" id="program_id" class="form-select form-select-lg bg-light border-0 rounded-3 text-dark fw-medium" required>
                                    @foreach($programs as $program)
                                    <option value="{{ $program->id }}" {{ old('program_id', $offers->program_id) == $program->id ? 'selected' : '' }}>
                                        {{ $program->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Vista previa de imagen actual (si existe) --}}
                            @if($offers->urlFoto)
                            <div class="mb-3 text-center">
                                <span class="d-block text-secondary small fw-bold mb-2">Fotografía Actual</span>
                                <div class="d-inline-block p-2 border rounded-4 bg-light shadow-sm">
                                    <img src="{{ asset('storage/images/' . $offers->urlFoto) }}"
                                        alt="Foto {{ $offers->name }}"
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
                                    Actualizar Oferta
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