@extends('layouts.app')

@section('contenido')

<style>
    /* Cards más estéticas */
    .artist-card{
        border: 1px solid rgba(0,0,0,.06);
        border-radius: 16px;
        overflow: hidden; /* para que la imagen respete el borde redondo */
        transition: transform .18s ease, box-shadow .18s ease;
    }
    .artist-card:hover{
        transform: translateY(-5px);
        box-shadow: 0 16px 28px rgba(0,0,0,.12) !important;
    }

    /* Imágenes del MISMO tamaño */
    .artist-img{
        height: 230px;        /* ajusta si quieres: 200, 240, 260 */
        width: 100%;
        object-fit: cover;    /* recorta sin deformar */
        display: block;
    }

    /* Textos */
    .artist-name{
        font-weight: 800;
        margin-bottom: 4px;
    }
    .artist-genre{
        margin: 0;
        color: rgba(0,0,0,.65);
        font-size: .95rem;
    }
</style>

<div class="container">
    <h2 class="section-title text-center mb-4">Artistas Destacados</h2>

    <div class="row g-4 justify-content-center">

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card artist-card shadow-sm">
                <img src="{{ asset('img/artistas/badbunny.jpg') }}" class="artist-img" alt="Bad Bunny">
                <div class="card-body text-center">
                    <h5 class="artist-name">Bad Bunny</h5>
                    <p class="artist-genre">Reggaetón / Trap Latino</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card artist-card shadow-sm">
                <img src="{{ asset('img/artistas/taylor.webp') }}" class="artist-img" alt="Taylor Swift">
                <div class="card-body text-center">
                    <h5 class="artist-name">Taylor Swift</h5>
                    <p class="artist-genre">Pop / Country</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card artist-card shadow-sm">
                <img src="{{ asset('img/artistas/TheWeeknd.webp') }}" class="artist-img" alt="The Weeknd">
                <div class="card-body text-center">
                    <h5 class="artist-name">The Weeknd</h5>
                    <p class="artist-genre">R&B / Pop</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card artist-card shadow-sm">
                <img src="{{ asset('img/artistas/drake.jpg') }}" class="artist-img" alt="Drake">
                <div class="card-body text-center">
                    <h5 class="artist-name">Drake</h5>
                    <p class="artist-genre">Hip Hop / Rap</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card artist-card shadow-sm">
                <img src="{{ asset('img/artistas/BillieEilish.webp') }}" class="artist-img" alt="Billie Eilish">
                <div class="card-body text-center">
                    <h5 class="artist-name">Billie Eilish</h5>
                    <p class="artist-genre">Pop Alternativo</p>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection