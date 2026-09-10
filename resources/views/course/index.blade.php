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
                <h2 class="fw-bold text-dark mb-1">Listado de Cursos</h2>
                <p class="text-muted small mb-0">Administre los cursos con sus respectivos centros, fichas y ambientes</p>
            </div>
            <a href="{{ route('course.create') }}" class="btn text-white fw-bold px-4 py-2 shadow-sm d-inline-flex align-items-center gap-2" style="background-color: #39A900;">
                Nuevo Curso
            </a>
        </div>

        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
            <div class="card-body p-0">
                <div class="table-responsive">

                    <table id="idCourse" class="table table-hover align-middle mb-0" style="width:100%">
                        <thead class="table-dark" style="background-color: #212529;">
                            <tr>
                                <th class="ps-4 py-3">ID</th>
                                <th class="py-3">Número Curso</th>
                                <th class="py-3">Día / Fecha</th>
                                <th class="py-3">Centro Formación</th>
                                <th class="py-3">Ficha</th>
                                <th class="py-3">Ambiente</th>
                                <th class="py-3" style="width: 15%">Imagen Representativa</th>
                                <th class="text-center py-3" style="width: 30%">Acciones de Gestión</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($courses as $course)
                            <tr>
                                <td class="ps-4 fw-bold text-secondary">#{{ $course->id }}</td>
                                <td class="fw-bold text-dark">{{ $course->course_number }}</td>
                                <td class="text-secondary small">{{ $course->day }}</td>
                                <td>
                                    <span class="badge bg-success-subtle text-success border px-2 py-1 rounded">
                                        {{ $course->training_center?->name ?? 'No asignado' }}
                                    </span>
                                </td>
                                <td>
                                    <span class="badge bg-secondary-subtle text-secondary border px-2 py-1 rounded">
                                        {{ $course->cohort?->code ?? 'No asignada'  }}
                                    </span>
                                </td>

                                <td>
                                    <span class="badge bg-secondary-subtle text-secondary border px-2 py-1 rounded">
                                        {{ $course->environment?->name ?? 'No asignada'  }}
                                    </span>
                                </td>

                                {{-- Columna de Imagen con Disparador de Modal --}}
                                <td>
                                    @if($course->urlFoto)
                                    <a href="#modalFoto{{ $course->id }}" data-bs-toggle="modal" class="d-inline-block text-decoration-none" title="Clic para ampliar">
                                        <img src="{{ asset('storage/images/' . $course->urlFoto) }}"
                                            alt="Imagen de {{ $course->course_number }}"
                                            width="80"
                                            height="80"
                                            class="shadow-sm border"
                                            style="object-fit: cover; border-radius: 8px; cursor: pointer; transition: transform 0.2s;"
                                            onmouseover="this.style.transform='scale(1.05)'"
                                            onmouseout="this.style.transform='scale(1)'">
                                    </a>

                                    {{-- Modal para visualizar la imagen ampliada --}}
                                    <div class="modal fade" id="modalFoto{{ $course->id }}" tabindex="-1" aria-labelledby="modalFotoLabel{{ $course->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content rounded-4 border-0 shadow-lg overflow-hidden">
                                                <div class="modal-header text-white" style="background-color: #39A900;">
                                                    <h5 class="modal-title fw-bold" id="modalFotoLabel{{ $course->id }}">
                                                        <i class="bi bi-image me-2"></i>{{ $course->course_number }}
                                                    </h5>
                                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center p-4 bg-light">
                                                    <img src="{{ asset('storage/images/' . $course->urlFoto) }}"
                                                        alt="Imagen de {{ $course->course_number }}"
                                                        class="img-fluid rounded-3 shadow-sm"
                                                        style="max-height: 70vh; object-fit: contain;">
                                                </div>
                                                <div class="modal-footer bg-white border-top-0 d-flex justify-content-between">
                                                    <span class="text-muted small">Código ID: #{{ $course->id }}</span>
                                                    <button type="button" class="btn btn-secondary px-4 rounded-3" data-bs-dismiss="modal">Cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <span class="badge bg-light text-secondary border py-2 px-3 rounded-3">Sin foto</span>
                                    @endif
                                </td>

                                <td class="text-center">
                                    <div class="d-flex justify-content-center align-items-center gap-2">

                                        <a href="{{ route('course.show', $course->id) }}"
                                            class="btn btn-sm btn-light border fw-medium d-inline-flex justify-content-center align-items-center"
                                            style="width: 90px; height: 32px;">
                                            Ver
                                        </a>

                                        <a href="{{ route('course.edit', $course->id) }}"
                                            class="btn btn-sm btn-outline-dark fw-medium d-inline-flex justify-content-center align-items-center"
                                            style="width: 90px; height: 32px;">
                                            Editar
                                        </a>

                                        <form action="{{ route('course.destroy', $course->id) }}"
                                            method="POST"
                                            class="d-inline-flex m-0"
                                            style="width: 90px;"
                                            onsubmit="return confirm('¿Está seguro de eliminar este curso?')">
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