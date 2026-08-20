<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #39A900 !important;">
    <div class="container-fluid">
      
      <a class="navbar-brand d-flex align-items-center text-white fw-bold" href="/">
        <img src="https://diba.planeacionycalidad.org/diba/Views/representante/logo-blanco-sena-sin-fondo.png" alt="logo_sena" width="80" height="45" class="d-inline-block align-text-top me-2">
        <span class="fs-5 tracking-tight">Admin Sena</span>
      </a>
      
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
          
          <li class="nav-item">
            <a class="nav-link text-white px-2 active fw-semibold" aria-current="page" href="/">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white px-2 active fw-semibold" aria-current="page" href="/about">¿Quienes Somos?</a>
          </li>

          <li class="nav-item dropdown" id="adminDropdownNav">
            <a class="dropdown-toggle text-light text-decoration-none fw-medium px-3 spear-dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Administracion
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 mt-2">
              <li><a class="dropdown-item py-2" href="/area/create">Area</a></li>
              <li><a class="dropdown-item py-2" href="/trainingcenter/create">Centro</a></li>
              <li><a class="dropdown-item py-2" href="/computer/create">Equipo</a></li>
              <li><a class="dropdown-item py-2" href="/course/create">Curso</a></li>
              <li><a class="dropdown-item py-2" href="/teacher/create">Instructor</a></li>
              <li><a class="dropdown-item py-2" href="/apprentice/create">Aprendiz</a></li>
            </ul>
          </li>
          
          <form action="{{ route('apprentice.index') }}" method="GET" class="d-flex me-lg-3 my-2 my-lg-0" role="search">
              <div class="input-group">
                  <input class="form-control border-0 shadow-sm" 
                        type="search" 
                        name="search" 
                        placeholder="Buscar registros" 
                        aria-label="Buscar" 
                        value="{{ request('search') }}">
                  <button class="btn btn-dark fw-bold px-3" type="submit">
                      <i class="bi bi-search"></i>
                  </button>
              </div>
          </form>

          <div id="authContainer" class="d-flex align-items-center">
            <!-- Se llena mediante JavaScript -->
          </div>

        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        checkAuthStatus();
    });

    function checkAuthStatus() {
        const userSession = JSON.parse(localStorage.getItem('user_session'));
        const authContainer = document.getElementById('authContainer');
        const adminDropdown = document.getElementById('adminDropdownNav');

        // SI HAY SESIÓN EN LOCALSTORAGE
        if (userSession) {
            // DESBLOQUEAR MENÚ DE ADMINISTRACIÓN
            if (adminDropdown) adminDropdown.classList.remove('d-none');

            // MOSTRAR FOTO DE PERFIL CON MENU DESPLEGABLE
            authContainer.innerHTML = `
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="${userSession.avatar}" alt="${userSession.name}" width="38" height="38" class="rounded-circle border border-2 border-white shadow-sm me-2 object-fit-cover">
                        <span class="fw-bold d-none d-md-inline small">${userSession.name}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg rounded-3 mt-2" aria-labelledby="profileDropdown">
                        <li>
                            <div class="px-3 py-2 border-bottom">
                                <p class="fw-bold mb-0 text-dark small">${userSession.name}</p>
                                <small class="text-muted">${userSession.email}</small>
                            </div>
                        </li>
                        <li>
                            <button onclick="logout()" class="dropdown-item text-danger fw-bold py-2">
                                <i class="bi bi-box-arrow-right me-2"></i> Cerrar Sesión
                            </button>
                        </li>
                    </ul>
                </div>
            `;
        } 
        // SI NO HAY SESIÓN
        else {
            // BLOQUEAR/OCULTAR MENÚ DE ADMINISTRACIÓN
            if (adminDropdown) adminDropdown.classList.add('d-none');

            // MOSTRAR BOTÓN DE INICIAR SESIÓN
            authContainer.innerHTML = `
                <a href="{{ route('login') }}" class="btn btn-light text-success fw-bold btn-sm px-3 rounded-3 shadow-sm d-flex align-items-center gap-1">
                    <i class="bi bi-person-circle"></i> Iniciar Sesión
                </a>
            `;
        }
    }

    // Función para cerrar sesión
    function logout() {
        localStorage.removeItem('user_session');
        localStorage.removeItem('user_role');
        checkAuthStatus();
        window.location.href = "{{ url('/') }}";
    }
</script>