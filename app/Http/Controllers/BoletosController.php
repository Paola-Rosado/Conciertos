<?php

namespace App\Http\Controllers;

class BoletosController extends Controller
{
    public function index()
    {
        $tipos = [
            [
                'titulo' => 'General',
                'imagen' => 'img/boletos/bol.jpg',
                'incluye' => ['Acceso al evento', 'Zona general', 'Entrada digital'],
                'precio' => '$350 MXN'
            ],
            [
                'titulo' => 'VIP',
                'imagen' => 'img/boletos/bol.jpg',
                'incluye' => ['Acceso preferente', 'Zona VIP', 'Bebida de cortesía'],
                'precio' => '$850 MXN'
            ],
            [
                'titulo' => 'Meet & Greet',
                'imagen' => "img/boletos/bol.jpg",
                'incluye' => ['Foto con artista', 'Souvenir', 'Acceso VIP'],
                'precio' => '$1,500 MXN'
            ],
        ];

        return view('boletos.index', ['tipos' => $tipos]);
    }
}