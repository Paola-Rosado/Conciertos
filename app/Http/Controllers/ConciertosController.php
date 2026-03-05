<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConciertosController extends Controller
{
    private array $conciertos = [
        'vibra-fest-2026' => [
            'titulo' => 'Bad Bunny World Tour',
            'imagen' => 'img/conciertos/badbunny.png',
            'descripcion' => 'El fenómeno global del reggaetón llega con su gira mundial interpretando sus mayores éxitos y una producción espectacular.',
            'fecha' => 'Sábado 15 de junio',
            'hora' => '9:00 PM',
            'lugar' => 'Estadio Azteca • CDMX',
        ],

        'noches-de-indie' => [
            'titulo' => 'Shakira - Las Mujeres Ya No Lloran Tour',
            'imagen' => 'img/conciertos/shakira.jpg',
            'descripcion' => 'Shakira regresa a los escenarios con un espectáculo lleno de energía, baile y todos sus grandes éxitos. "Las Mujeres no lloran, las Mujeres facturan".',
            'fecha' => 'Viernes 05 de julio',
            'hora' => '8:30 PM',
            'lugar' => 'Foro Sol • CDMX',
        ],

        'electro-beach-night' => [
            'titulo' => 'Latin Mafia Live',
            'imagen' => 'img/conciertos/LatinMafia.jpg',
            'descripcion' => 'Latin Mafia llega con su sonido alternativo y urbano para ofrecer una noche única llena de emoción y música.',
            'fecha' => 'Sábado 20 de julio',
            'hora' => '8:00 PM',
            'lugar' => 'Auditorio Nacional • CDMX',
        ],
    ];

    public function index()
    {
        return view('conciertos.index', [
            'conciertos' => $this->conciertos
        ]);
    }

    public function show(string $slug)
    {
        abort_unless(isset($this->conciertos[$slug]), 404);

        return view('conciertos.show', [
            'concierto' => $this->conciertos[$slug]
        ]);
    }
}