@extends('layouts.app')

@section('content')
<style>
    .register-full-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: linear-gradient(rgba(208, 222, 226, 0.8), rgba(0, 0, 0, 0.85)), 
                    url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxLw-L18oaXvM8MuD9p3DLDX4BpsuXx3QRFmRwje9UZZHyA1aQym1Xa0_j&s=10') center/cover no-repeat;
        z-index: -1;
    }

    .register-wrapper {
        min-height: calc(100vh - 80px);
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<div class="register-full-bg"></div>

<div class="container register-wrapper py-5">
    <div class="row justify-content-center w-100">
        <div class="col-sm-10 col-md-8 col-lg-5">
            
            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                
                <!-- Encabezado -->
                <div class="card-header text-white text-center py-4 border-0" style="background-color: #39A900;">
                    <div class="mb-2">
                        <i class="bi bi-person-plus-fill display-5"></i>
                    </div>
                    <h4 class="fw-bold mb-0">Crear Cuenta</h4>
                    <small class="opacity-75">SISTEMA DE GESTIÓN ACADÉMICA SENA</small>
                </div>

                <!-- Formulario -->
                <div class="card-body p-4 bg-white">
                    <form id="registerPageForm" onsubmit="executeRegister(event)">
                        
                        <!-- Nombre Completo -->
                        <div class="mb-3">
                            <label for="regName" class="form-label small fw-bold text-muted text-uppercase">
                                <i class="bi bi-person me-1"></i> Nombre Completo
                            </label>
                            <input type="text" id="regName" class="form-control bg-light border-0 rounded-3 py-2" placeholder="Ej: Maria López" required>
                        </div>

                        <!-- Correo Electrónico -->
                        <div class="mb-3">
                            <label for="regEmail" class="form-label small fw-bold text-muted text-uppercase">
                                <i class="bi bi-envelope me-1"></i> Correo Electrónico
                            </label>
                            <input type="email" id="regEmail" class="form-control bg-light border-0 rounded-3 py-2" placeholder="ejemplo@sena.edu.co" required>
                        </div>

                        <!-- Contraseña -->
                        <div class="mb-3">
                            <label for="regPass" class="form-label small fw-bold text-muted text-uppercase">
                                <i class="bi bi-key me-1"></i> Contraseña
                            </label>
                            <input type="password" id="regPass" class="form-control bg-light border-0 rounded-3 py-2" placeholder="••••••••" required>
                        </div>

                        <!-- Confirmar Contraseña -->
                        <div class="mb-4">
                            <label for="regPassConfirm" class="form-label small fw-bold text-muted text-uppercase">
                                <i class="bi bi-check-circle me-1"></i> Confirmar Contraseña
                            </label>
                            <input type="password" id="regPassConfirm" class="form-control bg-light border-0 rounded-3 py-2" placeholder="••••••••" required>
                        </div>

                        <!-- Botón Registro -->
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn text-white fw-bold py-2 rounded-3 shadow-sm d-flex align-items-center justify-content-center gap-2" style="background-color: #39A900;">
                                <span>Registrarse</span>
                                <i class="bi bi-arrow-right-circle fs-5"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Pie de Tarjeta -->
                <div class="card-footer bg-light border-0 py-3 text-center">
                    <div class="mb-2">
                        <span class="small text-muted">¿Ya tienes cuenta?</span>
                        <a href="{{ route('login') }}" class="text-decoration-none small fw-bold ms-1" style="color: #39A900;">
                            Iniciar Sesión
                        </a>
                    </div>

                    <div class="border-top pt-2 mt-2">
                        <a href="{{ route('home') }}" class="text-decoration-none small text-muted">
                            <i class="bi bi-arrow-left me-1"></i> Volver al Inicio
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<script>
    function executeRegister(e) {
        e.preventDefault();
        
        const name = document.getElementById('regName').value.trim();
        const email = document.getElementById('regEmail').value.trim();
        const pass = document.getElementById('regPass').value;
        const passConfirm = document.getElementById('regPassConfirm').value;

        // Validación de contraseña corregida
        if (pass !== passConfirm) {
            alert('Las contraseñas no coinciden');
            return;
        }

        const avatarUrl = `https://ui-avatars.com/api/?name=${encodeURIComponent(name)}&background=39A900&color=fff&bold=true`;

        const userSession = {
            name: name,
            email: email,
            avatar: avatarUrl
        };

        // Guardar sesión en LocalStorage
        localStorage.setItem('user_session', JSON.stringify(userSession));

        // Redireccionar al home
        window.location.href = "{{ url('/') }}";
    }
</script>
@endsection