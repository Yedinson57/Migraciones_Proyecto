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
                        <h4 class="mb-0 fw-bold">Registrar Computador</h4>
                        <p class="mb-0 mt-1 small opacity-75">Ingrese las especificaciones del equipo de cómputo</p>
                    </div>
                    
                    <div class="card-body p-4 p-md-5 bg-white">
                        <form action="{{ route('computer.admin') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-floating mb-4">
                                <input type="number" 
                                    class="form-control" 
                                    id="number" 
                                    name="number" 
                                    placeholder="Número del equipo" 
                                    required>
                                <label for="number" class="text-secondary">Número de Inventario o Equipo</label>
                            </div>
                            
                            <div class="form-floating mb-4">
                                <input type="text" 
                                    class="form-control" 
                                    id="brand" 
                                    name="brand" 
                                    placeholder="Marca del equipo" 
                                    required>
                                <label for="brand" class="text-secondary">Marca (Ej. HP, Dell, Lenovo)</label>
                            </div>

                            <div class="form-floating mb-4">
                                <select name="environment_id" id="computer_environment_id" class="form-select" required>
                                    <option value="" selected disabled>Seleccione una opción...</option>
                                    @foreach ($environments as $environment)
                                        <option value="{{ $environment->id }}">{{ $environment->name }}</option>
                                    @endforeach
                                </select>
                                <label for="computer_environment_id" class="text-secondary">Ambiente Asociado</label>
                            </div>

                            <div class="mb-4">
                                <label for="urlFoto" class="form-label fw-bold text-secondary mb-1">Fotografía del Equipo</label>
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

                            <div class="d-flex justify-content-between align-items-center mt-5">
                                <a href="/" class="btn btn-outline-secondary px-4 py-2 fw-medium rounded-3">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-dark px-5 py-2 fw-bold rounded-3">
                                    Guardar Equipo
                                </button>
                            </div>
                        </form>
                    </div>
                    <a href="{{ route('computer.index') }}" class="btn text-white fw-bold px-4 py-2 shadow-sm d-inline-flex align-items-center gap-2" style="background-color: #39A900;">
                        Revisar Registros
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection