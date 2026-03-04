@extends('layouts.app')

@section('contenido')
<h2 class="section-title text-center mb-4">Tipos de Boletos</h2>

<div class="row g-4">
  @foreach($tipos as $b)
    <div class="col-md-4">
      <div class="card shadow h-100 border-0">
       <img src="{{ asset('img/boletos/bol.jpg') }}" class="card-img-top" alt="{{ $b['titulo'] }}">
        <div class="card-body">
          <h5>{{ $b['titulo'] }}</h5>
          <ul>
            @foreach($b['incluye'] as $item)
              <li>{{ $item }}</li>
            @endforeach
          </ul>
          <p class="fw-bold">{{ $b['precio'] }}</p>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection