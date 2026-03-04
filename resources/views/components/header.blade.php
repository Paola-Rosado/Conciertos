<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
      <img src="{{ asset('img/home/hero.jpg') }}" width="40" height="40" class="me-2 rounded" alt="Logo">
      ConciertoHub
    </a>

    <div class="ms-auto">
      <a class="nav-link d-inline text-white" href="{{ route('conciertos.index') }}">Conciertos</a>
      <a class="nav-link d-inline text-white" href="{{ route('artistas.index') }}">Artistas</a>
      <a class="nav-link d-inline text-white" href="{{ route('boletos.index') }}">Boletos</a>
    </div>
  </div>
</nav>