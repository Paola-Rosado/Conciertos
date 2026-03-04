@extends('layouts.conciertos')

@section('title', 'Conciertos')

@section('contenido')
<h2 class="section-title text-center mb-4">Próximos conciertos</h2>

<div class="row g-4">
  @foreach($conciertos as $slug => $c)
    <div class="col-md-4">
      <a href="{{ route('conciertos.show', $slug) }}" class="text-decoration-none">
        <div class="card shadow h-100 border-0">
          <img src="{{ asset($c['imagen']) }}" class="card-img-top" alt="{{ $c['titulo'] }}">
          <div class="card-body">
            <h5 class="text-dark">{{ $c['titulo'] }}</h5>
            <p class="text-muted mb-1">{{ $c['fecha'] }} · {{ $c['hora'] }}</p>
            <p class="text-muted mb-0">{{ $c['lugar'] }}</p>
          </div>
        </div>
      </a>
    </div>
  @endforeach
</div>
@endsection