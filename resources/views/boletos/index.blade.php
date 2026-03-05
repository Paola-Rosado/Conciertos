@extends('layouts.app')

@section('contenido')
<h2 class="section-title text-center mb-4">Tipos de Boletos</h2>

<div class="row g-4">
  @foreach($tipos as $b)
    <div class="col-md-4">

      <x-card 
        :imagen="'img/boletos/bol.jpg'"
        :titulo="$b['titulo']">

      <ul>
        @foreach($b['incluye'] as $item)
        <li>{{ $item }}</li>
        @endforeach
      </ul>

      <p class="fw-bold">{{ $b['precio'] }}</p>

      </x-card>

    </div>
  @endforeach
</div>
@endsection