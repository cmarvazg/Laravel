<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Info 6</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">{{ auth()->user()->name }}</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Administración
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="{{route('category.index')}}">Categorías</a></li>
              <li><a class="dropdown-item" href="{{route('persona.index')}}">Personas</a></li>
              <li><a class="dropdown-item" href="{{route('post.index')}}">Posts</a></li>
              <li><a class="dropdown-item" href="{{route('user.index')}}">Usuarios</a></li>
            </ul>
          </li>
        </ul> 
        <form class="d-flex" role="search">
        <button class="btn btn-secondary" type="button" onclick="logout()">
          Cerrar sesión
        </button>
        </form>
        <script>
          function logout() {
            const form = document.createElement('form');
            form.action = "{{ route('logout') }}";
            form.method = 'POST';
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const csrfInput = document.createElement('input');
            csrfInput.setAttribute('name', '_token');
            csrfInput.setAttribute('value', csrfToken);
            form.appendChild(csrfInput);
            document.body.appendChild(form);
            form.submit();
          }
        </script>
      </div>
    </div>
</nav>
