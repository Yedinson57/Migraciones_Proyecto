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
                <h2 class="fw-bold text-dark mb-1">Listado de Aprendices</h2>
                <p class="text-muted small mb-0">Registro y control de estudiantes matriculados y sus equipos coasociados.</p>
            </div>
            <a href="{{ route('apprentice.create') }}" class="btn text-white fw-bold px-4 py-2 shadow-sm d-inline-flex align-items-center gap-2" style="background-color: #39A900;">
                Nuevo Aprendiz
            </a>
        </div>

        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
            <div class="card-body p-0">
                <div class="table-responsive">
                    
                    <table id="idApprentice" class="table table-hover align-middle mb-0" style="width:100%">
                        <thead class="table-dark" style="background-color: #212529;">
                            <tr>
                                <th class="ps-4 py-3">ID</th>
                                <th class="py-3">Nombre</th>
                                <th class="py-3">Email / Celular</th>
                                <th class="py-3">Ficha Curso</th>
                                <th class="py-3">Computador</th>
                                <th class="text-center py-3" style="width: 25%">Acciones de Gestión</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($apprentices as $apprentice)
                                <tr>
                                    <td class="ps-4 fw-bold text-secondary">#{{ $apprentice->id }}</td>
                                    <td class="fw-bold text-dark">{{ $apprentice->name }}</td>
                                    <td>
                                        <div class="small text-dark">{{ $apprentice->email }}</div>
                                        <div class="small text-muted font-monospace">{{ $apprentice->cell_number }}</div>
                                    </td>
                                    <td>
                                        <span class="badge bg-light text-dark border px-3 py-2 rounded">
                                            Ficha: {{ $apprentice->course?->course_number ?? 'Sin Curso' }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge bg-dark-subtle text-dark border px-3 py-2 rounded">
                                            Equipo N° {{ $apprentice->computer?->number ?? 'Sin PC'}}
                                        </span>
                                    </td>
                                    
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            
                                            <a href="{{ route('apprentice.show', $apprentice->id) }}" 
                                                class="btn btn-sm btn-light border fw-medium d-inline-flex justify-content-center align-items-center" 
                                                style="width: 90px; height: 32px;">
                                                Ver
                                            </a>
                                            
                                            <a href="{{ route('apprentice.edit', $apprentice->id) }}" 
                                                class="btn btn-sm btn-outline-dark fw-medium d-inline-flex justify-content-center align-items-center" 
                                                style="width: 90px; height: 32px;">
                                                Editar
                                            </a>
                                            
                                            <form action="{{ route('apprentice.destroy', $apprentice->id) }}" 
                                                    method="POST" 
                                                    class="d-inline-flex m-0" 
                                                    style="width: 90px;"
                                                    onsubmit="return confirm('¿Está seguro de eliminar este aprendiz?')">
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