@extends('layouts.app')

@section('title','Inicio')

@section('contenido')

<div class="hero">
    <div class="content">
        <span class="badge badge-mint mb-3">Eventos • Artistas • Boletos</span>
        <h1 class="display-4 mb-2">Conciertos</h1>
        <p class="mb-4">
            Explora conciertos, artistas y tipos de boletos disponibles.
            Elige tu próximo evento y vive la experiencia.
        </p>

        <div class="d-flex justify-content-center gap-2 flex-wrap">
            <a class="btn btn-brand" href="{{ route('conciertos.index') }}">Ver conciertos</a>
            <a class="btn btn-ghost" href="{{ route('artistas.index') }}">Ver artistas</a>
        </div>
    </div>
</div>

<div class="text-center mt-5">
    <h2 class="section-title">Explora nuestras secciones</h2>
    <p class="section-subtitle">Entra a la sección que necesites.</p>
</div>

<div class="row g-4 mt-2">

    <!-- Conciertos -->
    <div class="col-md-4">
        <div class="card card-soft h-100">
            <img class="card-img-top" src="{{ asset('img/conciertos/conciertos.jpg') }}" alt="Conciertos">
            <div class="card-body text-center">
                <h5 class="fw-bold">Conciertos</h5>
                <p class="text-muted mb-3">Descubre los próximos conciertos y eventos musicales.</p>
                <a href="{{ route('conciertos.index') }}" class="btn btn-brand">Ver conciertos</a>
            </div>
        </div>
    </div>

    <!-- Artistas -->
    <div class="col-md-4">
        <div class="card card-soft h-100">
            <img class="card-img-top" src="{{ asset('img/artistas/artistas.jpg') }}" alt="Artistas">
            <div class="card-body text-center">
                <h5 class="fw-bold">Artistas</h5>
                <p class="text-muted mb-3">Conoce a los artistas que estarán presentes en los eventos.</p>
                <a href="{{ route('artistas.index') }}" class="btn btn-brand">Ver artistas</a>
            </div>
        </div>
    </div>

    <!-- Boletos -->
    <div class="col-md-4">
        <div class="card card-soft h-100">
            <img class="card-img-top" src="{{ asset('img/boletos/boletos.jpg') }}" alt="Boletos">
            <div class="card-body text-center">
                <h5 class="fw-bold">Boletos</h5>
                <p class="text-muted mb-3">Consulta tipos de boletos disponibles para cada concierto.</p>
                <a href="{{ route('boletos.index') }}" class="btn btn-brand">Ver boletos</a>
            </div>
        </div>
    </div>

</div>

@endsection