    {{-- nav --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #4568DC;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #B06AB3, #4568DC);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #B06AB3, #4568DC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */">
        <div class="container-fluid">
          <a class="navbar-brand" href="/" style="color: white"><i class="fas fa-home"></i> Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/altasbajas" style="color: white"><i class="fas fa-list"></i> Altas y Bajas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route ('logout')}}" style="color: white"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    