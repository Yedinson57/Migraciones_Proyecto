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
                        <h4 class="mb-0 fw-bold">Registrar Ficha</h4>
                        <p class="mb-0 mt-1 small opacity-75">Ingrese los datos de la Ficha</p>
                    </div>

                    <div class="card-body p-4 p-md-5 bg-white">
                        <form action="{{ route('cohort.admin') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-floating mb-4">
                                <input type="text"
                                    class="form-control"
                                    id="code"
                                    name="code"
                                    placeholder="Ingrese el codigo"
                                    required>
                                <label for="code" class="text-secondary">Numero de ficha</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="date"
                                    class="form-control"
                                    id="start_date"
                                    name="start_date"
                                    placeholder="Fecha de inicio"
                                    required>
                                <label for="start_date" class="text-secondary">Fecha inicio</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="text"
                                    class="form-control"
                                    id="schedule"
                                    name="schedule"
                                    placeholder="Ingrese el cronograma"
                                    required>
                                <label for="schedule" class="text-secondary">Cronograma</label>
                            </div>

                            <div class="form-floating mb-4">
                                <select name="offer_id" id="cohort_offer_id" class="form-select" required>
                                    <option value="" selected disabled>Seleccione una opción...</option>
                                    @foreach ($offers as $offer)
                                    <option value="{{ $offer->id }}">{{ $offer->registration_date }}</option>
                                    @endforeach
                                </select>
                                <label for="cohort_offer_id" class="text-secondary">Oferta a la que pertenece</label>
                            </div>

                            <div class=" d-flex justify-content-between align-items-center mt-5">
                            <a href="/" class="btn btn-outline-secondary px-4 py-2 fw-medium rounded-3">
                                Cancelar
                            </a>
                            <button type="submit" class="btn btn-dark px-5 py-2 fw-bold rounded-3">
                                Registrar Ficha
                            </button>
                    </div>

                    </form>
                </div>
                <a href="{{ route('cohort.index') }}" class="btn text-white fw-bold px-4 py-2 shadow-sm d-inline-flex align-items-center gap-2" style="background-color: #39A900;">
                    Revisar Registros
                </a>
            </div>

        </div>
    </div>
</div>
</div>
@endsection