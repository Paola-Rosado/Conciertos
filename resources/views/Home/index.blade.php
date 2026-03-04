@extends('layouts.app')

@section('contenido')
<div class="p-5 bg-white rounded shadow text-center">
  <h1 class="section-title">Concierto</h1>
  <p class="lead">Explora conciertos, artistas y tipos de boletos.</p>

  <div class="d-flex justify-content-center gap-3 mt-3">
    <a class="btn btn-info text-white" href="{{ route('conciertos.index') }}">Ver conciertos</a>
    <a class="btn btn-outline-secondary" href="{{ route('artistas.index') }}">Ver artistas</a>
  </div>
</div>
@endsection
