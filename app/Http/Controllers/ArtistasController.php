<?php

namespace App\Http\Controllers;

class ArtistasController extends Controller
{
    private array $artistas = [
        'luna-azul' => [
            'nombre' => 'Luna Azul',
            'genero' => 'Pop / Indie',
            'imagen' => 'img/artistas/artista1.jpg',
            'bio' => 'Voz fresca con letras románticas y sonido moderno.'
        ],
        'norte-sonoro' => [
            'nombre' => 'Norte Sonoro',
            'genero' => 'Rock Alternativo',
            'imagen' => 'img/artistas/artista2.jpg',
            'bio' => 'Banda con shows enérgicos y riffs potentes.'
        ],
        'dj-marino' => [
            'nombre' => 'DJ Marino',
            'genero' => 'Electrónica',
            'imagen' => 'img/artistas/artista3.jpg',
            'bio' => 'Sets con vibra tropical, beats y mezclas playeras.'
        ],
    ];

    public function index()
    {
        return view('artistas.index', ['artistas' => $this->artistas]);
    }

    public function show($slug)
    {
        if (!array_key_exists($slug, $this->artistas)) {
            abort(404);
        }

        return view('artistas.show', ['artista' => $this->artistas[$slug]]);
    }
}