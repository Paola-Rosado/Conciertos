<div class="card shadow-sm h-100 {{ $clase ?? '' }}">
    {{-- Contenedor de imagen con altura fija --}}
    <div class="card-img-wrap" style="height: 250px; overflow: hidden;">
        <img src="{{ asset($imagen) }}" alt="{{ $titulo }}" class="img-fluid w-100 h-100" style="object-fit: cover;">
    </div>

    {{-- Contenido --}}
    <div class="card-body {{ $bodyClass ?? '' }}">
        {{-- Cambié de {{ $titulo }} a {!! $titulo !!} para mostrar & correctamente --}}
        <h5 class="card-title">{!! $titulo !!}</h5>

        {{ $slot }}
    </div>
    
</div>