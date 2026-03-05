@extends('layouts.app')

@section('contenido')
<div class="container py-2">

    <h2 class="section-title text-center mb-2">Artistas Destacados</h2>
    <p class="text-center text-muted mb-5">
        Conoce algunos de los artistas más populares del momento.
    </p>

    <div class="row g-4 justify-content-center">

        {{-- Bad Bunny --}}
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card artist-card">
                <div class="artist-img-box">
                <img src="{{ asset('img/artistas/badbunny.jpg') }}" class="artist-img" alt="Bad Bunny">
                </div>

                <div class="card-body text-center">
                <h5 class="fw-bold mb-1">Bad Bunny</h5>
                <small class="text-muted d-block mb-2">Reggaetón / Trap Latino</small>
                <p class="artist-desc">Ícono global del género urbano, conocido por shows con energía brutal y hits virales.</p>
                </div>

            </div>
            </div>

        {{-- Taylor Swift --}}
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card artist-card">
                <div class="artist-img-box">
                    <img src="{{ asset('img/artistas/taylor.webp') }}" alt="Taylor Swift" class="artist-img">
                </div>

                <div class="card-body text-center">
                    <h5 class="fw-bold mb-1">Taylor Swift</h5>
                    <small class="text-muted d-block mb-2">Pop / Country</small>
                    <p class="mb-0 artist-desc">
                        Cantautora que domina escenarios con producciones enormes y letras que conectan con todos.
                    </p>
                </div>
            </div>
        </div>

        {{-- The Weeknd --}}
               <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card artist-card">
                <div class="artist-img-box">
                    <img src="{{ asset('img/artistas/TheWeeknd.webp') }}" alt="The Weeknd" class="artist-img">
                </div>

                <div class="card-body text-center">
                    <h5 class="fw-bold mb-1">The Weeknd</h5>
                    <small class="text-muted d-block mb-2">R&amp;B / Pop</small>
                    <p class="mb-0 artist-desc">
                        Sonido oscuro y elegante, mezclando pop con R&amp;B en conciertos con vibra cinematográfica.
                    </p>
                </div>
            </div>
        </div>

        {{-- Drake --}}
             <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card artist-card">
                <div class="artist-img-box">
                    <img src="{{ asset('img/artistas/drake.jpg') }}" alt="Drake" class="artist-img">
                </div>

                <div class="card-body text-center">
                    <h5 class="fw-bold mb-1">Drake</h5>
                    <small class="text-muted d-block mb-2">Hip Hop / Rap</small>
                    <p class="mb-0 artist-desc">
                        Rapero top mundial, combina estilo, flow y hits que suenan en todos lados.
                    </p>
                </div>
            </div>
        </div>
        {{--  Sabrina Carpenter  --}}
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card artist-card">
                <div class="artist-img-box">
                    <img src="{{ asset('img/artistas/Sabrina.jpg') }}" alt="Sabrina Carpenter" class="artist-img">
                </div>

                <div class="card-body text-center">
                    <h5 class="fw-bold mb-1">Sabrina Carpenter</h5>
                    <small class="text-muted d-block mb-2">Pop / Country-Pop</small>
                    <p class="mb-0 artist-desc">
                    Sabrina Carpenter es una cantante, compositora y actriz estadounidense que se ha consolidado como una de las mayores superestrellas del pop actual
                    </p>
                </div>
            </div>
        </div>
        {{-- Lady Gaga --}}
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card artist-card">
                <div class="artist-img-box">
                    <img src="{{ asset('img/artistas/Ladygaga.webp') }}" alt="Lady Gaga" class="artist-img">
                </div>

                <div class="card-body text-center">
                    <h5 class="fw-bold mb-1">Lady Gaga</h5>
                    <small class="text-muted d-block mb-2">Pop electrónica / dance jazz / country rock</small>
                    <p class="mb-0 artist-desc">
                    Lady Gaga es una artista multifacética descrita como una cantante, compositora, actriz, pianista y activista, conocida por su talento musical, estilo extravagante, y su capacidad para reinventarse.
                    </p>
                </div>
            </div>
        </div>

        {{-- Luis Miguel --}}
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card artist-card">
                <div class="artist-img-box">
                    <img src="{{ asset('img/artistas/Luismi.jpg') }}" alt="Luis Miguel" class="artist-img">
                </div>
                <div class="card-body text-center">
                    <h5 class="fw-bold mb-1">Luis Miguel</h5>
                    <small class="text-muted d-block mb-2">Pop Latino / Baladas</small>
                    <p class="mb-0 artist-desc">
                    Luis Miguel, conocido como "El Sol de México", es un aclamado cantante y productor mexicano nacido en Puerto Rico el 19 de abril de 1970. Es considerado uno de los mejores intérpretes de habla hispana, destacando en pop, bolero y mariachi. 

                    </p>
                </div>
            </div>
        </div>
        
        {{-- Billie Eilish --}}
               <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card artist-card">
                <div class="artist-img-box">
                    <img src="{{ asset('img/artistas/BillieEilish.webp') }}" alt="Billie Eilish" class="artist-img">
                </div>

                <div class="card-body text-center">
                    <h5 class="fw-bold mb-1">Billie Eilish</h5>
                    <small class="text-muted d-block mb-2">Pop Alternativo</small>
                    <p class="mb-0 artist-desc">
                        Estilo único y emocional, con un show minimalista pero súper potente y visual.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection