<div class="card card-event h-100 {{ $clase ?? '' }}">

    <div class="card-img-wrap">
        <img src="{{ asset($imagen) }}" alt="{{ $titulo }}">
    </div>

    <div class="card-body d-flex flex-column">

        <h5 class="card-title">{{ $titulo }}</h5>

        {{ $slot }}

    </div>

</div>