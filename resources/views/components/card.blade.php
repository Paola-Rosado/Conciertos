<div class="card shadow-sm h-100">

    <div class="card-img-wrap">
        <img src="{{ asset($imagen) }}" alt="{{ $titulo }}">
    </div>

    <div class="card-body">
        <h5 class="card-title">{{ $titulo }}</h5>

        {{ $slot }}
    </div>

</div>