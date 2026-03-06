<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConciertosController extends Controller
{
    private array $conciertos = [
        'Bad bunny' => [
            'titulo' => 'Bad Bunny DeBí TiRAR MáS FOToS "World Tour"',
            'imagen' => 'img/conciertos/badbunny.png',
            'descripcion' => 'El fenómeno global del reggaetón llega con su gira mundial interpretando sus mayores éxitos y una producción espectacular.',
            'fecha' => 'Sábado 15 de junio',
            'hora' => '9:00 PM',
            'lugar' => 'Estadio Azteca ',
        ],

        'Rosalia' => [
            'titulo' => 'La Rosalia LUX Tour 2026',
            'imagen' => 'img/conciertos/Rosalia.jpg',
            'descripcion' => 'Rosalía aterriza en la Ciudad de México con el espectáculo más disruptivo, vanguardista y potente del año. "Ni una amapola ni un sentimiento de culpa, yo soy la Motomami".',
            'fecha' => 'Sabado 30 de Mayo ',
            'hora' => '9:30 PM',
            'lugar' => 'Auditorio Nacional ',
        ],

     'Arcangel' => [
            'titulo' => 'LA 8VA MARAVILLA "WORLD TOUR"',
            'imagen' => 'img/conciertos/Arcangel.webp',
            'descripcion' => 'El máximo exponente del reggaetón, Arcángel, ha confirmado su esperado regreso ',
            'fecha' => 'Jueves 20 de agosto ',
            'hora' => '9:00 PM',
            'lugar' => 'Foro GNP ',
        ],
       
        'BTS' => [
            'titulo' => 'BTS WORLD TOUR ARIRANG',
            'imagen' => 'img/conciertos/BTS.jpg',
            'descripcion' => 'BTS regresa a los escenarios en 2026 El grupo confirmó su "BTS WORLD TOUR ARIRANG" en el Estadio GNP Seguros de la Ciudad de México',
            'fecha' => 'Sabado 07 de Mayo ',
            'hora' => '9:00 PM',
            'lugar' => 'Estadio GNP Seguros ',
        ],

        'Shakira' => [
            'titulo' => 'Shakira  Las Mujeres Ya No Lloran Tour',
            'imagen' => 'img/conciertos/shakira.jpg',
            'descripcion' => 'Shakira regresa a los escenarios con un espectáculo lleno de energía, baile y todos sus grandes éxitos. "Las Mujeres no lloran, las Mujeres facturan".',
            'fecha' => 'Viernes 05 de julio',
            'hora' => '8:30 PM',
            'lugar' => 'Foro Sol ',
        ],

        'Latin Mafia' => [
            'titulo' => 'Latin Mafia "Te odio y te extraño mucho"',
            'imagen' => 'img/conciertos/LatinMafia.jpg',
            'descripcion' => 'Latin Mafia llega con su sonido alternativo y urbano para ofrecer una noche única llena de emoción y música.',
            'fecha' => 'Sábado 20 de julio',
            'hora' => '8:00 PM',
            'lugar' => 'Auditorio Nacional',
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