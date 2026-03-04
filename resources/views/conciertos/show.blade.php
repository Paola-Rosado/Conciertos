@extends('layouts.conciertos')

@section('title', $evento['titulo'])

@section('contenido')
<div class="bg-white rounded shadow p-4">
  <h1 class="section-title">{{ $evento['titulo'] }}</h1>

  <img src="{{ asset($evento['imagen']) }}" class="img-fluid rounded my-3" style="height:350px; width:100%; object-fit:cover;" alt="">

  <p class="lead">{{ $evento['descripcion'] }}</p>

  <ul>
    <li><strong>Fecha:</strong> {{ $evento['fecha'] }}</li>
    <li><strong>Hora:</strong> {{ $evento['hora'] }}</li>
    <li><strong>Lugar:</strong> {{ $evento['lugar'] }}</li>
    <li><strong>Precio:</strong> {{ $evento['precio'] }}</li>
  </ul>

  <a href="{{ route('conciertos.index') }}" class="btn btn-info text-white">← Volver</a>
</div>
@endsection