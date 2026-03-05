@extends('layouts.app')

@section('contenido')
<h2 class="section-title text-center mb-4">Artistas Destacados</h2>

<div class="row g-4">
  @foreach($artistas as $slug => $a)
    <div class="col-md-4">
      <a href="{{ route('artistas.show', $slug) }}" class="text-decoration-none">
        
        <x-card 
        :imagen="$a['imagen']"
        :titulo="$a['nombre']">

          <p class="text-muted">{{ $a['genero'] }}</p>

        </x-card>

      </a>
    </div>
  @endforeach
</div>
@endsection