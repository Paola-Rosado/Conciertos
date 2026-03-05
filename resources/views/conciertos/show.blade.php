@extends('layouts.app')

@section('contenido')
<div class="container py-3">

    {{-- Card principal --}}
    <div class="card shadow-lg border-0 overflow-hidden">
        <div class="row g-0">

            {{-- Imagen --}}
           <div class="col-md-5 d-flex justify-content-center align-items-center">

    <div class="imagen-concierto">
        <img src="{{ asset($concierto['imagen']) }}"
             alt="{{ $concierto['titulo'] }}">
    </div>

</div>

            {{-- Info --}}
            <div class="col-md-7 p-4 p-lg-5">

                <h2 class="fw-bold mb-2">
                    {{ $concierto['titulo'] }}
                </h2>

                <p class="text-muted mb-3">
                    {{ $concierto['descripcion'] }}
                </p>

                {{-- Badges (resumen rápido) --}}
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <span class="badge badge-date px-3 py-2">
                        {{ $concierto['fecha'] }}
                    </span>

                    <span class="badge badge-date px-3 py-2">
                         {{ $concierto['hora'] }}
                    </span>

                    <span class="badge badge-place px-3 py-2">
                         {{ $concierto['lugar'] }} • {{ $concierto['ciudad'] ?? 'CDMX' }}
                    </span>

                </div>

                {{-- Lista más formal --}}
                <div class="bg-light rounded-4 p-3 mb-4" style="border:1px solid rgba(4,20,45,.08);">
                    <div class="row">
                        <div class="col-sm-6 mb-2">
                            <strong>Fecha:</strong> {{ $concierto['fecha'] }}
                        </div>
                        <div class="col-sm-6 mb-2">
                            <strong>Hora:</strong> {{ $concierto['hora'] }}
                        </div>
                        <div class="col-sm-6 mb-2">
                            <strong>Lugar:</strong> {{ $concierto['lugar'] }}
                        </div>
                        <div class="col-sm-6 mb-2">
                            <strong>Ciudad:</strong> {{ $concierto['ciudad'] ?? 'CDMX' }}
                        </div>
        
                    </div>
                </div>

                {{-- Botones --}}
                <div class="d-flex flex-wrap gap-2">
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

    {{-- Card extra --}}
    <div class="card mt-4 shadow-sm border-0 p-4">
        <h4 class="fw-bold mb-3">Detalles del evento</h4>

        <p class="mb-2">
            Este concierto promete una experiencia única para los fans. Habrá producción, luces
            y un ambiente ideal para ir con amigos o familia.
        </p>

        <ul class="mb-0">
            <li>Llega con anticipación para evitar filas.</li>
            <li>Revisa accesos y estacionamiento del recinto.</li>
            <li>Habrá comida, bebidas y mercancía oficial.</li>
        </ul>
    </div>

</div>
@endsection