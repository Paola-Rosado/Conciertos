@extends('layouts.app')

@section('contenido')

<div class="container">

    <div class="card shadow-lg border-0 p-4">

        <div class="row align-items-center">

            <!-- Imagen -->
            <div class="col-md-5 text-center">
                <img src="{{ asset($concierto['imagen']) }}"
                     class="img-fluid rounded shadow"
                     style="max-height:350px; object-fit:cover;">
            </div>

            <!-- Información -->
            <div class="col-md-7">

                <h2 class="fw-bold mb-3">
                    {{ $concierto['titulo'] }}
                </h2>

                <p class="text-muted mb-4">
                    {{ $concierto['descripcion'] }}
                </p>

                <ul class="list-group mb-4">

                    <li class="list-group-item">
                        <strong>Fecha:</strong> {{ $concierto['fecha'] }}
                    </li>

                    <li class="list-group-item">
                        <strong>Hora:</strong> {{ $concierto['hora'] }}
                    </li>

                    <li class="list-group-item">
                        <strong>Lugar:</strong> {{ $concierto['lugar'] }}
                    </li>

                    <li class="list-group-item">
                        <strong>Precio:</strong> {{ $concierto['precio'] }}
                    </li>

                </ul>

                <div class="d-flex gap-3">

                    <a href="{{ route('boletos.index') }}" class="btn btn-brand">
                        Comprar boletos
                    </a>

                    <a href="{{ route('conciertos.index') }}" class="btn btn-outline-brand">
                        Volver a conciertos
                    </a>

                </div>

            </div>

        </div>

    </div>


    <!-- Información adicional -->
    <div class="card mt-4 shadow-sm border-0 p-4">

        <h4 class="fw-bold mb-3">Detalles del evento</h4>

        <p>
            Este concierto promete una experiencia única para los fans de la música en vivo.
            El evento contará con producción de alta calidad, luces, pantallas gigantes
            y una atmósfera increíble para disfrutar con amigos o familia.
        </p>

        <p>
            Se recomienda llegar con anticipación para evitar filas y asegurar una buena
            ubicación dentro del recinto. También habrá zonas de comida, bebidas y
            mercancía oficial del artista.
        </p>

    </div>

</div>

@endsection