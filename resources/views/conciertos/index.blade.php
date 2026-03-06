@extends('layouts.app')

@section('contenido')
<div class="container">

    <h2 class="section-title text-center mb-4">Próximos conciertos</h2>
    <p class="text-center text-muted mb-5">
        Descubre eventos, fechas y sedes. Elige tu favorito y revisa detalles.
    </p>

    <div class="row g-4 justify-content-center">

        {{-- conciertos --}}
        @foreach($conciertos as $slug => $concierto)
            <div class="col-md-4">

                <x-card 
                    :imagen="$concierto['imagen']"
                    :titulo="$concierto['titulo']"
                    clase="border-0"
                >

                    {{-- fecha y lugar --}}
        <div class="d-flex gap-2 mb-2">
                <span class="badge bg-primary">
                    {{ $concierto['fecha'] }} • {{ $concierto['hora'] }}
                </span>
                <span class="badge bg-info text-dark">
                    {{ $concierto['lugar'] }}
                </span>
            </div>
                    {{-- Descripción breve --}}
                    <p class="mt-3">{{ $concierto['descripcion'] }}</p>

                    {{-- Botón para ver detalles --}}
                    <a href="{{ route('conciertos.show', $slug) }}" class="btn btn-primary w-100">
                        Ver detalles
                    </a>

                </x-card>

            </div>
        @endforeach

    </div>
</div>
@endsection