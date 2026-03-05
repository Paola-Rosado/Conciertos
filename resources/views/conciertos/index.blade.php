@extends('layouts.app')

@section('contenido')
<div class="container">

    <h2 class="section-title text-center mb-4">Próximos conciertos</h2>
    <p class="text-center text-muted mb-5">
        Descubre eventos, fechas y sedes. Elige tu favorito y revisa detalles.
    </p>

    <div class="row g-4 justify-content-center">

        <!-- Bad Bunny -->
        <div class="col-md-4">

            <x-card 
            :imagen="'img/conciertos/badbunny.png'"
            titulo="Bad Bunny World Tour">

                <span class="badge bg-primary">Sáb 15 junio • 9:00 PM</span>
                <span class="badge bg-info text-dark">Estadio Azteca • CDMX</span>

                <p class="mt-3">
                    El fenómeno global del reggaetón llega con su gira mundial
                    interpretando sus mayores éxitos y una producción espectacular.
                </p>

                <a href="{{ route('conciertos.show', 'vibra-fest-2026') }}" class="btn btn-primary w-100">
                    Ver detalles
                </a>

            </x-card>

        </div>

        <!-- Shakira -->
        <div class="col-md-4">

            <x-card 
            :imagen="'img/conciertos/shakira.jpg'"
            titulo="Shakira - Las Mujeres Ya No Lloran Tour">

                <span class="badge bg-primary">Vie 05 julio • 8:30 PM</span>
                <span class="badge bg-info text-dark">Foro Sol • CDMX</span>

                <p class="mt-3">
                    Shakira regresa a los escenarios con un espectáculo lleno de
                    energía, baile y todos sus grandes éxitos.
                    "Las Mujeres no lloran, las Mujeres facturan"
                </p>

                <a href="{{ route('conciertos.show', 'noches-de-indie') }}" class="btn btn-primary w-100">
                    Ver detalles
                </a>

            </x-card>

        </div>

        <!-- Latin Mafia -->
        <div class="col-md-4">

            <x-card 
            :imagen="'img/conciertos/LatinMafia.jpg'"
            titulo="Latin Mafia Live">

                <span class="badge bg-primary">Sáb 20 julio • 8:00 PM</span>
                <span class="badge bg-info text-dark">Auditorio Nacional • CDMX</span>

                <p class="mt-3">
                    Latin Mafia llega con su sonido alternativo y urbano para
                    ofrecer una noche única llena de emoción y música.
                </p>

                <a href="{{ route('conciertos.show', 'electro-beach-night') }}" class="btn btn-primary w-100">
                    Ver detalles
                </a>

            </x-card>

        </div>

    </div>
</div>
@endsection