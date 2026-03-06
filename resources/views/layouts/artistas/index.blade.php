@extends('layouts.app')

@section('contenido')
<div class="container py-2">

    <h2 class="section-title text-center mb-2">Artistas Destacados</h2>
    <p class="text-center text-muted mb-5">
        Conoce algunos de los artistas más populares del momento.
    </p>

    <div class="row g-4 justify-content-center">

        @foreach($artistas as $artista)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <x-card 
                imagen="{{ $artista['imagen'] }}"
                titulo="{{ $artista['titulo'] }}"
                clase="artist-card"
                bodyClass="text-center"
            >
                <small class="text-muted d-block mb-2">{{ $artista['genero'] }}</small>
                <p class="artist-desc">{{ $artista['descripcion'] }}</p>
            </x-card>
        </div>
        @endforeach

        
    </div>

</div>
@endsection