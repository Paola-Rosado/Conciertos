
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="{{ route('home') }}">
            {{-- si tienes logo: public/img/logo.png --}}
            {{-- <img src="{{ asset('img/logo.png') }}" alt="Logo" width="34" height="34" class="rounded"> --}}
            Conciertos
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navMain" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto gap-lg-2">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('conciertos.index') }}">Conciertos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('artistas.index') }}">Artistas</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('boletos.index') }}">Boletos</a></li>
            </ul>
        </div>
    </div>
</nav>