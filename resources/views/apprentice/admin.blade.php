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
                        <h4 class="mb-0 fw-bold">Registrar Aprendiz</h4>
                        <p class="mb-0 mt-1 small opacity-75">Ingrese los datos personales y vinculación del estudiante</p>
                    </div>
                    
                    <div class="card-body p-4 p-md-5 bg-white">
                        <form action="{{ route('apprentice.admin') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-floating mb-4">
                                <input type="text" 
                                    class="form-control" 
                                    id="name" 
                                    name="name" 
                                    placeholder="Nombre completo" 
                                    required>
                                <label for="name" class="text-secondary">Nombre Completo</label>
                            </div>
                            
                            <div class="form-floating mb-4">
                                <input type="email" 
                                    class="form-control" 
                                    id="email" 
                                    name="email" 
                                    placeholder="Correo electrónico" 
                                    required>
                                <label for="email" class="text-secondary">Correo Electrónico</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="number" 
                                    class="form-control" 
                                    id="cell_number" 
                                    name="cell_number" 
                                    placeholder="Número de celular" 
                                    required>
                                <label for="cell_number" class="text-secondary">Número de Celular</label>
                            </div>

                            <div class="form-floating mb-4">
                                <select name="course_id" id="apprentice_course_id" class="form-select" required>
                                    <option value="" selected disabled>Seleccione un curso...</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->course_number }}</option>
                                    @endforeach
                                </select>
                                <label for="apprentice_course_id" class="text-secondary">Ficha / Curso Matriculado</label>
                            </div>
                            
                            <div class="form-floating mb-4">
                                <select name="computer_id" id="apprentice_computer_id" class="form-select" required>
                                    <option value="" selected disabled>Seleccione un computador...</option>
                                    @foreach ($computers as $computer)
                                        <option value="{{ $computer->id }}">Equipo N° {{ $computer->number }}</option>
                                    @endforeach
                                </select>
                                <label for="apprentice_computer_id" class="text-secondary">Computador Coasociado</label>
                            </div>

                            <input type="file" name="urlFoto" class="form-control-file" accept="image/*"">

                            <div class="d-flex justify-content-between align-items-center mt-5">
                                <a href="/" class="btn btn-outline-secondary px-4 py-2 fw-medium rounded-3">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-dark px-5 py-2 fw-bold rounded-3">
                                    Guardar Aprendiz
                                </button>
                            </div>
                        </form>
                    </div>
                    <a href="{{ route('apprentice.index') }}" class="btn text-white fw-bold px-4 py-2 shadow-sm d-inline-flex align-items-center gap-2" style="background-color: #39A900;">
                        Revisar Registros
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection