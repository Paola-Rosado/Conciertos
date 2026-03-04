@extends('layouts.app')

@section('title','Conciertos')

@section('contenido')

<div class="text-center mb-4">
    <h1 class="page-title">Próximos conciertos</h1>
    <div class="title-accent"></div>
    <p class="text-muted mt-2">
        Descubre eventos, fechas y sedes. Elige tu favorito y revisa detalles.
    </p>
</div>

<div class="row g-4">

    {{-- Ejemplo 1 --}}
    <div class="col-md-4">
        <div class="card-event h-100">
            <img
                src="{{ asset('img/conciertos/vibra-fest.jpg') }}"
                class="event-img"
                alt="Vibra Fest 2026"
            >

            <div class="p-4">
                <h5 class="fw-bold mb-2">Vibra Fest 2026</h5>

                <div class="d-flex gap-2 flex-wrap mb-3">
                    <span class="badge badge-date">Sáb 21 marzo • 8:00 PM</span>
                    <span class="badge badge-place">Foro Arena • Mérida</span>
                </div>

                <p class="text-muted mb-4">
                    Un festival con artistas invitados, zona de comida y experiencias para fans.
                </p>

                <div class="d-flex gap-2">
                    <a href="{{ url('/conciertos/vibra-fest-2026') }}" class="btn btn-brand w-100">Ver detalles</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Ejemplo 2 --}}
    <div class="col-md-4">
        <div class="card-event h-100">
            <img
                src="{{ asset('img/conciertos/noches-indie.jpg') }}"
                class="event-img"
                alt="Noches de Indie"
            >

            <div class="p-4">
                <h5 class="fw-bold mb-2">Noches de Indie</h5>

                <div class="d-flex gap-2 flex-wrap mb-3">
                    <span class="badge badge-date">Vie 05 abril • 7:30 PM</span>
                    <span class="badge badge-place">Teatro al Aire Libre</span>
                </div>

                <p class="text-muted mb-4">
                    Música indie, ambiente chill y bandas locales en una noche para cantar a gusto.
                </p>

               <a href="{{ url('/conciertos/vibra-fest-2026') }}" class="btn btn-brand w-100">Ver detalles</a>
            </div>
        </div>
    </div>

    {{-- Ejemplo 3 --}}
    <div class="col-md-4">
        <div class="card-event h-100">
            <img
                src="{{ asset('img/conciertos/electro-beach.jpg') }}"
                class="event-img"
                alt="Electro Beach Night"
            >

            <div class="p-4">
                <h5 class="fw-bold mb-2">Electro Beach Night</h5>

                <div class="d-flex gap-2 flex-wrap mb-3">
                    <span class="badge badge-date">Sáb 13 abril • 9:00 PM</span>
                    <span class="badge badge-place">Playa • Progreso</span>
                </div>

                <p class="text-muted mb-4">
                    DJs invitados, zona VIP y show de luces junto al mar. Ideal para ir con amigos.
                </p>

                <a href="{{ url('/conciertos/electro-beach-night') }}" class="btn btn-brand w-100">Ver detalles</a>
            </div>
        </div>
    </div>

</div>

@endsection