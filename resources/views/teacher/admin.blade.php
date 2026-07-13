@extends('layouts.app')

@section('content')
<div class="py-5 rounded-4" style="background-color: #f4f6f9;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    
                    <div class="card-header text-white text-center py-4" style="background-color: #39A900; border-bottom: none;">
                        <h4 class="mb-0 fw-bold">Registrar Instructor</h4>
                        <p class="mb-0 mt-1 small opacity-75">Ingrese los datos del docente y su vinculación</p>
                    </div>
                    
                    <div class="card-body p-4 p-md-5 bg-white">
                        <form action="{{ route('teacher.admin') }}" method="POST" enctype="multipart/form-data">
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
                                <label for="email" class="text-secondary">Correo Electrónico Institucional</label>
                            </div>

                            <div class="form-floating mb-4">
                                <select name="area_id" id="teacher_area_id" class="form-select" required>
                                    <option value="" selected disabled>Seleccione una opción...</option>
                                    @foreach ($areas as $area)
                                        <option value="{{ $area->id }}">{{ $area->name }}</option>
                                    @endforeach
                                </select>
                                <label for="teacher_area_id" class="text-secondary">Área de Especialidad</label>
                            </div>
                            
                            <div class="form-floating mb-4">
                                <select name="training_center_id" id="teacher_center_id" class="form-select" required>
                                    <option value="" selected disabled>Seleccione una opción...</option>
                                    @foreach ($training_centers as $training)
                                        <option value="{{ $training->id }}">{{ $training->name }}</option>
                                    @endforeach
                                </select>
                                <label for="teacher_center_id" class="text-secondary">Centro de Formación Asignado</label>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-5">
                                <a href="/" class="btn btn-outline-secondary px-4 py-2 fw-medium rounded-3">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-dark px-5 py-2 fw-bold rounded-3">
                                    Registrar Instructor
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