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
                        <h4 class="mb-0 fw-bold">Actualizar Centro de Formación</h4>
                        <p class="mb-0 mt-1 small opacity-75">Modifique la información base del complejo o sede</p>
                    </div>
                    
                    <div class="card-body p-4 p-md-5 bg-white">
                        <form action="{{ route('trainingcenter.update', $trainingcenter) }}" method="POST">
                            @csrf
                            @method('put')

                            <div class="mb-4">
                                <label for="name" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Nombre del Centro</label>
                                <input type="text" 
                                    id="name"
                                    name="name" 
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium" 
                                    placeholder="Nombre completo de la sede"
                                    value="{{ old('name', $trainingcenter->name) }}" 
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="location" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Ubicación / Dirección</label>
                                <input type="text" 
                                    id="location"
                                    name="location" 
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium" 
                                    placeholder="Ciudad o complejo regional"
                                    value="{{ old('location', $trainingcenter->location) }}" 
                                    required>
                            </div>

                            {{-- Vista previa de imagen actual (si existe) --}}
                            @if($trainingcenter->urlFoto)
                            <div class="mb-3 text-center">
                                <span class="d-block text-secondary small fw-bold mb-2">Fotografía Actual</span>
                                <div class="d-inline-block p-2 border rounded-4 bg-light shadow-sm">
                                    <img src="{{ asset('storage/images/' . $trainingcenter->urlFoto) }}"
                                        alt="Foto {{ $trainingcenter->name }}"
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
                                    Actualizar Centro
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