@extends('layouts.app')

@section('content')
<div class="py-4">
    <div class="container">
        
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
            <div>
                <h2 class="fw-bold text-dark mb-1">Listado de Instructores</h2>
                <p class="text-muted small mb-0">Gestione el cuerpo docente, sus correos de contacto y asignaciones.</p>
            </div>
            <a href="{{ route('teacher.create') }}" class="btn text-white fw-bold px-4 py-2 shadow-sm d-inline-flex align-items-center gap-2" style="background-color: #39A900;">
                Nuevo Instructor
            </a>
        </div>

        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
            <div class="card-body p-0">
                <div class="table-responsive">
                    
                    <table id="idTeacher" class="table table-hover align-middle mb-0" style="width:100%">
                        <thead class="table-dark" style="background-color: #212529;">
                            <tr>
                                <th class="ps-4 py-3">ID</th>
                                <th class="py-3">Nombre</th>
                                <th class="py-3">Email</th>
                                <th class="py-3">Área</th>
                                <th class="py-3">Centro de Formación</th>
                                <th class="text-center py-3" style="width: 30%">Acciones de Gestión</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($teachers as $teacher)
                                <tr>
                                    <td class="ps-4 fw-bold text-secondary">#{{ $teacher->id }}</td>
                                    <td class="fw-bold text-dark">{{ $teacher->name }}</td>
                                    <td class="text-secondary small">{{ $teacher->email }}</td>
                                    <td>
                                        <span class="badge bg-secondary-subtle text-secondary border px-2 py-1 rounded">
                                            Área ID: {{ $teacher->area_id }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge bg-success-subtle text-success border px-2 py-1 rounded">
                                            Centro ID: {{ $teacher->training_center_id }}
                                        </span>
                                    </td>
                                    
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            
                                            <a href="{{ route('teacher.show', $teacher->id) }}" 
                                                class="btn btn-sm btn-light border fw-medium d-inline-flex justify-content-center align-items-center" 
                                                style="width: 90px; height: 32px;">
                                                Ver
                                            </a>
                                            
                                            <a href="{{ route('teacher.edit', $teacher->id) }}" 
                                                class="btn btn-sm btn-outline-dark fw-medium d-inline-flex justify-content-center align-items-center" 
                                                style="width: 90px; height: 32px;">
                                                Editar
                                            </a>
                                            
                                            <form action="{{ route('teacher.destroy', $teacher->id) }}" 
                                                    method="POST" 
                                                    class="d-inline-flex m-0" 
                                                    style="width: 90px;"
                                                    onsubmit="return confirm('¿Está seguro de eliminar este instructor?')">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" 
                                                        class="btn btn-sm btn-danger fw-medium w-100 d-inline-flex justify-content-center align-items-center"
                                                        style="height: 32px;">
                                                    Eliminar
                                                </button>
                                            </form>
                                            
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>

    </div>
</div>
@endsection