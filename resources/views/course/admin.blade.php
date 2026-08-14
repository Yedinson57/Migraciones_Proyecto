@extends('layouts.app')

@section('content')
<div class="py-5 rounded-4" style="background-color: #f4f6f9;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    
                    <div class="card-header text-white text-center py-4" style="background-color: #39A900; border-bottom: none;">
                        <h4 class="mb-0 fw-bold">Registrar Nuevo Curso</h4>
                        <p class="mb-0 mt-1 small opacity-75">Asigne el número de ficha, fecha y locación</p>
                    </div>
                    
                    <div class="card-body p-4 p-md-5 bg-white">
                        <form action="{{ route('course.admin') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-floating mb-4">
                                <input type="number" 
                                    class="form-control" 
                                    id="course_number" 
                                    name="course_number" 
                                    placeholder="Número de curso" 
                                    required>
                                <label for="course_number" class="text-secondary">Número de Ficha o Curso</label>
                            </div>
                            
                            <div class="form-floating mb-4">
                                <input type="date" 
                                    class="form-control" 
                                    id="day" 
                                    name="day" 
                                    placeholder="Seleccione el día" 
                                    required>
                                <label for="day" class="text-secondary">Día / Fecha de Asignación</label>
                            </div>

                            <div class="form-floating mb-4">
                                <select name="area_id" id="area_id" class="form-select" required>
                                    <option value="" selected disabled>Seleccione una opción...</option>
                                    @foreach ($areas as $area)
                                        <option value="{{ $area->id }}">{{ $area->name }}</option>
                                    @endforeach
                                </select>
                                <label for="area_id" class="text-secondary">Área Asociada</label>
                            </div>
                            
                            <div class="form-floating mb-4">
                                <select name="training_center_id" id="training_center_id" class="form-select" required>
                                    <option value="" selected disabled>Seleccione una opción...</option>
                                    @foreach ($training_centers as $training)
                                        <option value="{{ $training->id }}">{{ $training->name }}</option>
                                    @endforeach
                                </select>
                                <label for="training_center_id" class="text-secondary">Centro de Formación</label>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-5">
                                <a href="/" class="btn btn-outline-secondary px-4 py-2 fw-medium rounded-3">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-dark px-5 py-2 fw-bold rounded-3">
                                    Guardar Curso
                                </button>
                            </div>
                        </form>
                    </div>
                    <a href="{{ route('course.index') }}" class="btn text-white fw-bold px-4 py-2 shadow-sm d-inline-flex align-items-center gap-2" style="background-color: #39A900;">
                        Revisar Registros
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection