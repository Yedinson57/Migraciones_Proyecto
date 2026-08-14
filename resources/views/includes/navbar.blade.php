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

          <li class="nav-item dropdown">
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

          <li class="nav-item">
            <a class="btn btn-light nav-link text-dark px-2 active fw-semibold" aria-current="page" href="/login">Iniciar Sesion</a>
          </li>

        </ul>
      </div>
    </div>
</nav>