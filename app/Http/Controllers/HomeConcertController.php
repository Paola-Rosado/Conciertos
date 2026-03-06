<?php

namespace App\Http\Controllers;

class HomeConcertController extends Controller
{
    public function index()
    {
        return view('layouts.home.index');
    }
}