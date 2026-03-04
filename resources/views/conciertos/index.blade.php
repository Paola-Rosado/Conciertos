@extends('layouts.app')

@section('contenido')
<div class="container">

    <h2 class="text-center mb-4">Próximos conciertos</h2>
    <p class="text-center text-muted mb-5">
        Descubre eventos, fechas y sedes. Elige tu favorito y revisa detalles.
    </p>

    <div class="row g-4 justify-content-center">

        <!-- Bad Bunny -->
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-img-wrap">
                    <img src="{{ asset('img/conciertos/badbunny.png') }}" alt="Bad Bunny">
                </div>

                <div class="card-body">
                    <h5 class="card-title">Bad Bunny World Tour</h5>
                    <span class="badge bg-primary">Sáb 15 junio • 9:00 PM</span>
                    <span class="badge bg-info text-dark">Estadio Azteca • CDMX</span>

                    <p class="mt-3">
                        El fenómeno global del reggaetón llega con su gira mundial
                        interpretando sus mayores éxitos y una producción espectacular.
                    </p>

                    <a href="#" class="btn btn-primary w-100">Ver detalles</a>
                </div>
            </div>
        </div>

        <!-- Shakira -->
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-img-wrap">
                    <img src="{{ asset('img/conciertos/shakira.jpg') }}" alt="Shakira">
                </div>

                <div class="card-body">
                    <h5 class="card-title">Shakira - Las Mujeres Ya No Lloran Tour</h5>
                    <span class="badge bg-primary">Vie 05 julio • 8:30 PM</span>
                    <span class="badge bg-info text-dark">Foro Sol • CDMX</span>

                    <p class="mt-3">
                        Shakira regresa a los escenarios con un espectáculo lleno de
                        energía, baile y todos sus grandes éxitos.
                        "Las Mujeres no lloran, las Mujeres facturan"
                    </p>

                    <a href="#" class="btn btn-primary w-100">Ver detalles</a>
                </div>
            </div>
        </div>

        <!-- Latin Mafia -->
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-img-wrap">
                    <img src="{{ asset('img/conciertos/LatinMafia.jpg') }}" alt="Latin Mafia">
                </div>

                <div class="card-body">
                    <h5 class="card-title">Latin Mafia Live</h5>
                    <span class="badge bg-primary">Sáb 20 julio • 8:00 PM</span>
                    <span class="badge bg-info text-dark">Auditorio Nacional • CDMX</span>

                    <p class="mt-3">
                        Latin Mafia llega con su sonido alternativo y urbano para
                        ofrecer una noche única llena de emoción y música.
                    </p>

                    <a href="#" class="btn btn-primary w-100">Ver detalles</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection