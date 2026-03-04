<?php

namespace App\Http\Controllers;

class HomeConcertController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
}