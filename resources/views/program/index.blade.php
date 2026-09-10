@extends('layouts.app')

@section('content')

<script>
    if (!localStorage.getItem('user_session')) {
        alert('Acceso denegado: Debes iniciar sesión para acceder al panel de administración.');
        window.location.href = "{{ route('login') }}";
    }
</script>

<div class="py-4">
    <div class="container">
        
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
            <div>
                <h2 class="fw-bold text-dark mb-1">Listado de Programas</h2>
                <p class="text-muted small mb-0">Gestione los programas.</p>
            </div>
            <a href="{{ route('program.create') }}" class="btn text-white fw-bold px-4 py-2 shadow-sm d-inline-flex align-items-center gap-2" style="background-color: #39A900;">
                Nuevo Programa
            </a>
        </div>

        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
            <div class="card-body p-0">
                <div class="table-responsive">
                    
                    <table id="idprogram" class="table table-hover align-middle mb-0" style="width:100%">
                        <thead class="table-dark" style="background-color: #212529;">
                            <tr>
                                <th class="ps-4 py-3">ID</th>
                                <th class="py-3">Nombre</th>
                                <th class="py-3" style="width:10%">Descripción</th>
                                <th class="py-3">Tipo</th>
                                <th class="py-3">Modalidad</th>
                                <th class="py-3">Duración</th>
                                <th class="py-3">Area</th>
                                <th class="text-center py-3" style="width: 30%">Acciones de Gestión</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($programs as $program)
                                <tr>
                                    <td class="ps-4 fw-bold text-secondary">#{{ $program->id }}</td>
                                    <td class="fw-bold text-dark">{{ $program->name }}</td>
                                    <td class="text-secondary small">{{ $program->description }}</td>
                                    <td class="text-secondary small">{{ $program->type }}</td>
                                    <td class="text-secondary small">{{ $program->modality }}</td>
                                    <td class="text-secondary small">{{ $program->duration }}</td>
                                    <td>
                                        <span class="badge bg-secondary-subtle text-secondary border px-2 py-1 rounded">
                                            {{ $program->area?->name ?? 'No asignada' }}
                                        </span>
                                    </td>
                                    <td><img
                                        src="{{ asset('storage/images/' . $course->urlFoto) }}"
                                        alt="Imagen del curso"
                                        width="80"
                                        height="80"
                                        style="object-fit: cover; border-radius: 5px;"
                                    ></td>

                                    <td class="text-center">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            
                                            <a href="{{ route('program.show', $program->id) }}" 
                                                class="btn btn-sm btn-light border fw-medium d-inline-flex justify-content-center align-items-center" 
                                                style="width: 90px; height: 32px;">
                                                Ver
                                            </a>
                                            
                                            <a href="{{ route('program.edit', $program->id) }}" 
                                                class="btn btn-sm btn-outline-dark fw-medium d-inline-flex justify-content-center align-items-center" 
                                                style="width: 90px; height: 32px;">
                                                Editar
                                            </a>
                                            
                                            <form action="{{ route('program.destroy', $program->id) }}" 
                                                    method="POST" 
                                                    class="d-inline-flex m-0" 
                                                    style="width: 90px;"
                                                    onsubmit="return confirm('¿Está seguro de eliminar este Programa?')">
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