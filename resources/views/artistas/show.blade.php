@extends('layouts.app')

@section('contenido')
<div class="bg-white rounded shadow p-4">
  <h1 class="section-title">{{ $artista['nombre'] }}</h1>

  <img src="{{ asset($artista['imagen']) }}" class="img-fluid rounded my-3" style="height:350px; width:100%; object-fit:cover;" alt="">

  <p><strong>Género:</strong> {{ $artista['genero'] }}</p>
  <p>{{ $artista['bio'] }}</p>

  <a href="{{ route('artistas.index') }}" class="btn btn-info text-white">← Volver</a>
</div>
@endsection