@extends('layouts.app')

@section('title', $concierto['titulo'] ?? 'Detalle del concierto')

@section('contenido')

<div class="container my-4">

    <div class="card-event p-0">
        {{-- Imagen / Hero --}}
        <div class="position-relative">
            <img
                src="{{ asset($concierto['imagen']) }}"
                alt="{{ $concierto['titulo'] }}"
                class="w-100 event-img"
                style="height: 320px;"

            {{-- Etiquetas encima de la imagen --}}
            <div class="position-absolute top-0 start-0 p-3">
                <span class="badge badge-date me-2">
                    {{ $concierto['fecha'] ?? 'Fecha por definir' }}
                </span>
                <span class="badge badge-place">
                    {{ $concierto['lugar'] ?? 'Lugar por definir' }}
                </span>
            </div>
        </div>

        <div class="p-4 p-md-5">

            {{-- Título + subtítulo --}}
            <div class="mb-3">
                <h1 class="page-title mb-1">{{ $concierto['titulo'] }}</h1>
                <div class="title-accent"></div>
                <p class="mt-3 section-subtitle">
                    {{ $concierto['descripcion'] ?? 'Vive una experiencia inolvidable con música en vivo.' }}
                </p>
            </div>

            {{-- Info en tarjetas --}}
            <div class="row g-3 mt-2">

                <div class="col-md-3">
                    <div class="card-soft p-3 h-100">
                        <small class="text-muted">Hora</small>
                        <div class="fw-bold">{{ $concierto['hora'] ?? '—' }}</div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card-soft p-3 h-100">
                        <small class="text-muted">Lugar</small>
                        <div class="fw-bold">{{ $concierto['lugar'] ?? '—' }}</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-soft p-3 h-100">
                        <small class="text-muted">Precio</small>
                        <div class="fw-bold">{{ $concierto['precio'] ?? '—' }}</div>
                    </div>
                </div>

            </div>

            {{-- Extra: Recomendaciones --}}
            <div class="mt-4">
                <h5 class="fw-bold mb-2">Recomendaciones</h5>

                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="card-soft p-3 h-100">
                            <span class="badge badge-mint mb-2">Acceso</span>
                            <div class="small">Llega 30 min antes para evitar filas y ubicar tu zona.</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-soft p-3 h-100">
                            <span class="badge badge-mint mb-2">Qué llevar</span>
                            <div class="small">Identificación, batería portátil y ropa cómoda.</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-soft p-3 h-100">
                            <span class="badge badge-mint mb-2">Tip</span>
                            <div class="small">Si hay VIP, llega temprano para buen lugar.</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Botones --}}
            <div class="d-flex flex-wrap gap-2 mt-4">
                <a href="{{ route('conciertos.index') }}" class="btn btn-outline-brand">
                    ← Volver a conciertos
                </a>
            </div>

        </div>
    </div>

</div>

@endsection