<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConciertosController extends Controller
{
    private array $conciertos = [
        'vibra-fest-2026' => [
            'titulo' => 'Vibra Fest 2026',
            'imagen' => 'img/conciertos/vibra-fest-2026.jpg',
            'descripcion' => 'Festival con artistas invitados, zona food trucks y experiencias VIP.',
            'fecha' => 'Sábado 21 de marzo',
            'hora' => '8:00 PM',
            'lugar' => 'Foro Arena - Mérida',
            'precio' => 'Desde $550 MXN',
        ],
        'noches-de-indie' => [
            'titulo' => 'Noches de Indie',
            'imagen' => 'img/conciertos/noches-de-indie.jpg',
            'descripcion' => 'Música indie, ambiente chill y bandas locales en una noche para cantar a gusto.',
            'fecha' => 'Viernes 05 de abril',
            'hora' => '7:30 PM',
            'lugar' => 'Teatro al Aire Libre',
            'precio' => 'Desde $320 MXN',
        ],
        'electro-beach-night' => [
            'titulo' => 'Electro Beach Night',
            'imagen' => 'img/conciertos/electro-beach-night.jpg',
            'descripcion' => 'DJs invitados, zona VIP y show de luces junto al mar. Ideal para ir con amigos.',
            'fecha' => 'Sábado 13 de abril',
            'hora' => '9:00 PM',
            'lugar' => 'Playa - Progreso',
            'precio' => 'Desde $450 MXN',
        ],
    ];

    // LISTA de conciertos
    public function index()
    {
        return view('conciertos.index', [
            'conciertos' => $this->conciertos
        ]);
    }

    // DETALLE de un concierto
    public function show(string $slug)
    {
        abort_unless(isset($this->conciertos[$slug]), 404);

        return view('conciertos.show', [
            'concierto' => $this->conciertos[$slug]
        ]);
    }
}