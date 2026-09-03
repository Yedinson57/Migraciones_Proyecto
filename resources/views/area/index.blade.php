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
                <h2 class="fw-bold text-dark mb-1">Listado de Áreas</h2>
                <p class="text-muted small mb-0">Visualice, edite o elimine las áreas de formación registradas.</p>
            </div>
            <a href="{{ route('area.create') }}" class="btn text-white fw-bold px-4 py-2 shadow-sm d-inline-flex align-items-center gap-2" style="background-color: #39A900;">
                Nueva Área
            </a>
        </div>

        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
            <div class="card-body p-0">
                <div class="table-responsive">
                    
                    <table id="idArea" class="table table-hover align-middle mb-0" style="width:100%">
                        <thead class="table-dark" style="background-color: #212529;">
                            <tr>
                                <th class="ps-4 py-3" style="width: 15%">Código ID</th>
                                <th class="py-3" style="width: 50%">Nombre del Área</th>
                                <th class="py-3" style="width: 25%">Imagen Representativa</th>
                                <th class="text-center py-3" style="width: 35%">Acciones de Gestión</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($areas as $area)
                                <tr>
                                    <td class="ps-4 fw-bold text-secondary">#{{ $area->id }}</td>
                                    <td class="fw-medium text-dark">{{ $area->name }}</td>

                                    <td><img
                                        src="{{ asset('storage/images/' . $area->urlFoto) }}"
                                        alt="Imagen del area"
                                        width="80"
                                        height="80"
                                        style="object-fit: cover; border-radius: 5px;"
                                    ></td>
                                    
                                    <td class="text-center">
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        
                                        <a href="{{ route('area.show', $area->id) }}" 
                                        class="btn btn-sm btn-light border fw-medium d-inline-flex justify-content-center align-items-center" 
                                        style="width: 90px; height: 32px;">
                                            Ver
                                        </a>
                                        
                                        <a href="{{ route('area.edit', $area->id) }}" 
                                        class="btn btn-sm btn-outline-dark fw-medium d-inline-flex justify-content-center align-items-center" 
                                        style="width: 90px; height: 32px;">
                                            Editar
                                        </a>
                                        
                                        <form action="{{ route('area.destroy', $area->id) }}" 
                                            method="POST" 
                                            class="d-inline-flex m-0" 
                                            style="width: 90px;"
                                            onsubmit="return confirm('¿Está completamente seguro de eliminar esta área?')">
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