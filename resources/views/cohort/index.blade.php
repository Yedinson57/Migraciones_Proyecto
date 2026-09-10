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
                <h2 class="fw-bold text-dark mb-1">Listado de Fichas</h2>
                <p class="text-muted small mb-0">Gestione las Fichas.</p>
            </div>
            <a href="{{ route('cohort.create') }}" class="btn text-white fw-bold px-4 py-2 shadow-sm d-inline-flex align-items-center gap-2" style="background-color: #39A900;">
                Nueva Ficha
            </a>
        </div>

        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
            <div class="card-body p-0">
                <div class="table-responsive">
                    
                    <table id="idcohort" class="table table-hover align-middle mb-0" style="width:100%">
                        <thead class="table-dark" style="background-color: #212529;">
                            <tr>
                                <th class="ps-4 py-3">ID</th>
                                <th class="py-3">Numero de Ficha</th>
                                <th class="py-3">Fecha de Inicio</th>
                                <th class="py-3">Cronograma</th>
                                <th class="py-3">Oferta</th>
                                <th class="text-center py-3" style="width: 30%">Acciones de Gestión</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($cohorts as $cohort)
                                <tr>
                                    <td class="ps-4 fw-bold text-secondary">#{{ $cohort->id }}</td>
                                    <td class="fw-bold text-dark">{{ $cohort->code }}</td>
                                    <td class="text-secondary small">{{ $cohort->start_date }}</td>
                                    <td class="text-secondary small">{{ $cohort->schedule }}</td>
                                    <td>
                                        <span class="badge bg-secondary-subtle text-secondary border px-2 py-1 rounded">
                                            {{ $cohort->offer?->registration_date ?? 'No asignada' }}
                                        </span>
                                    </td>

                                    <td class="text-center">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            
                                            <a href="{{ route('cohort.show', $cohort->id) }}" 
                                                class="btn btn-sm btn-light border fw-medium d-inline-flex justify-content-center align-items-center" 
                                                style="width: 90px; height: 32px;">
                                                Ver
                                            </a>
                                            
                                            <a href="{{ route('cohort.edit', $cohort->id) }}" 
                                                class="btn btn-sm btn-outline-dark fw-medium d-inline-flex justify-content-center align-items-center" 
                                                style="width: 90px; height: 32px;">
                                                Editar
                                            </a>
                                            
                                            <form action="{{ route('cohort.destroy', $cohort->id) }}" 
                                                    method="POST" 
                                                    class="d-inline-flex m-0" 
                                                    style="width: 90px;"
                                                    onsubmit="return confirm('¿Está seguro de eliminar este Oferta?')">
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