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