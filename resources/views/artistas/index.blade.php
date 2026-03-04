@extends('layouts.app')

@section('contenido')
<h2 class="section-title text-center mb-4">Artistas Destacados</h2>

<div class="row g-4">
  @foreach($artistas as $slug => $a)
    <div class="col-md-4">
      <a href="{{ route('artistas.show', $slug) }}" class="text-decoration-none">
        <div class="card shadow h-100 border-0">
          <img src="{{ asset($a['imagen']) }}" class="card-img-top" alt="{{ $a['nombre'] }}">
          <div class="card-body">
            <h5 class="text-dark">{{ $a['nombre'] }}</h5>
            <p class="text-muted">{{ $a['genero'] }}</p>
          </div>
        </div>
      </a>
    </div>
  @endforeach
</div>
@endsection