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
                        <h4 class="mb-0 fw-bold">Actualizar Ficha</h4>
                        <p class="mb-0 mt-1 small opacity-75">Modifique la vinculación y credenciales de la Ficha</p>
                    </div>

                    <div class="card-body p-4 p-md-5 bg-white">
                        <form action="{{ route('cohort.update', $cohorts) }}" method="POST">
                            @csrf
                            @method('put')

                            <div class="mb-4">
                                <label for="code" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Numero de ficha</label>
                                <input type="text"
                                    id="code"
                                    name="code"
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium"
                                    value="{{ old('code', $cohorts->code) }}"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="start_date" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Fecha de inicio</label>
                                <input type="date"
                                    id="start_date"
                                    name="start_date"
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium"
                                    value="{{ old('start_date', $cohorts->start_date) }}"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="schedule" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Capacidad</label>
                                <input type="text"
                                    id="schedule"
                                    name="schedule"
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium"
                                    value="{{ old('schedule', $cohorts->schedule) }}"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="offer_id" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Oferta a la que pertenece</label>
                                <select name="offer_id" id="offer_id" class="form-select form-select-lg bg-light border-0 rounded-3 text-dark fw-medium" required>
                                    @foreach($offers as $offer)
                                    <option value="{{ $offer->id }}" {{ old('offer_id', $cohorts->offer_id) == $offer->id ? 'selected' : '' }}>
                                        {{ $offer->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <hr class="my-4 opacity-25">

                            <div class="d-flex justify-content-center align-items-center gap-2 mt-4">
                                <a href="{{ url()->previous() }}" class="btn btn-light border fw-bold px-4 py-2 rounded-3">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn text-white fw-bold px-4 py-2 rounded-3 shadow-sm" style="background-color: #39A900;">
                                    Actualizar Ficha
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