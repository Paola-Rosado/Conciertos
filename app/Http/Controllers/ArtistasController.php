<?php

namespace App\Http\Controllers;

class ArtistasController extends Controller
{
    public function index()
    {
        $artistas = [
            [
                'titulo' => 'Bad Bunny',
                'imagen' => 'img/artistas/badbunny.jpg',
                'genero' => 'Reggaetón / Trap Latino',
                'descripcion' => 'Ícono global del género urbano, conocido por shows con energía brutal y hits virales.',
            ],
            [
                'titulo' => 'Taylor Swift',
                'imagen' => 'img/artistas/taylor.webp',
                'genero' => 'Pop / Country',
                'descripcion' => 'Cantautora que domina escenarios con producciones enormes y letras que conectan con todos.',
            ],
            [
                'titulo' => 'The Weeknd',
                'imagen' => 'img/artistas/TheWeeknd.webp',
                'genero' => 'R&B / Pop',
                'descripcion' => 'Sonido oscuro y elegante, mezclando pop con R&B en conciertos con vibra cinematográfica.',
            ],
            [
                'titulo' => 'Drake',
                'imagen' => 'img/artistas/drake.jpg',
                'genero' => 'Hip Hop / Rap',
                'descripcion' => 'Rapero top mundial, combina estilo, flow y hits que suenan en todos lados.',
            ],
            [
                'titulo' => 'Sabrina Carpenter',
                'imagen' => 'img/artistas/Sabrina.jpg',
                'genero' => 'Pop / Country-Pop',
                'descripcion' => 'Cantante, compositora y actriz estadounidense que se ha consolidado como una de las mayores superestrellas del pop actual.',
            ],
            [
                'titulo' => 'Lady Gaga',
                'imagen' => 'img/artistas/Ladygaga.webp',
                'genero' => 'Pop electrónica / dance jazz',
                'descripcion' => 'Artista multifacética conocida por su talento musical, estilo extravagante y capacidad de reinventarse.',
            ],
            [
                'titulo' => 'Luis Miguel',
                'imagen' => 'img/artistas/Luismi.jpg',
                'genero' => 'Pop Latino / Baladas',
                'descripcion' => 'Conocido como "El Sol de México", uno de los intérpretes más importantes de habla hispana.',
            ],
            [
                'titulo' => 'Billie Eilish',
                'imagen' => 'img/artistas/BillieEilish.webp',
                'genero' => 'Pop Alternativo',
                'descripcion' => 'Estilo único y emocional, con un show minimalista pero visualmente potente.',
            ],
        ];

        return view('artistas.index', compact('artistas'));
    }
}