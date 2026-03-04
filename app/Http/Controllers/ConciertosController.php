<?php

namespace App\Http\Controllers;

class ConciertosController extends Controller
{
    private array $conciertos = [
        'vibra-fest-2026' => [
            'titulo' => 'Vibra Fest 2026',
            'fecha' => 'Sábado 21 de marzo',
            'lugar' => 'Foro Arena - Mérida',
            'hora' => '8:00 PM',
            'imagen' => 'img/conciertos/concierto1.jpg',
            'descripcion' => 'Festival con artistas invitados, zona food trucks y experiencias VIP.',
            'precio' => 'Desde $550 MXN'
        ],
        'noches-de-indie' => [
            'titulo' => 'Noches de Indie',
            'fecha' => 'Viernes 05 de abril',
            'lugar' => 'Teatro al Aire Libre',
            'hora' => '7:30 PM',
            'imagen' => 'img/conciertos/concierto2.jpg',
            'descripcion' => 'Un lineup indie para cantar y disfrutar en un ambiente chill.',
            'precio' => 'Desde $350 MXN'
        ],
        'electro-beach-night' => [
            'titulo' => 'Electro Beach Night',
            'fecha' => 'Sábado 13 de abril',
            'lugar' => 'Playa - Progreso',
            'hora' => '9:00 PM',
            'imagen' => 'img/conciertos/concierto3.jpg',
            'descripcion' => 'DJ set frente al mar, luces, arena y energía toda la noche.',
            'precio' => 'Desde $450 MXN'
        ],
    ];

    public function index()
    {
        return view('conciertos.index', ['conciertos' => $this->conciertos]);
    }

    public function show($slug)
    {
        if (!array_key_exists($slug, $this->conciertos)) {
            abort(404);
        }

        return view('conciertos.show', ['evento' => $this->conciertos[$slug]]);
    }
}