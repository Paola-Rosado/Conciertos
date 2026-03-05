@extends('layouts.app')

@section('contenido')
<div class="container">

    <h2 class="section-title text-center mb-4">Tipos de Boletos</h2>
    <p class="text-center text-muted mb-5">
        Elige el tipo de boleto que prefieras. (compra)
    </p>

    <div class="row g-4 justify-content-center">

        {{-- GENERAL --}}
        <div class="col-md-4">
            <div class="card shadow-sm h-100 border-0">
                <img src="{{ asset('img/boletos/bol.jpg') }}" class="card-img-top" style="height:220px; object-fit:cover;" alt="General">

                <div class="card-body">
                    <h5 class="fw-bold">General</h5>
                    <ul class="mb-3">
                        <li>Acceso al evento</li>
                        <li>Zona general</li>
                        <li>Entrada digital</li>
                    </ul>

                    <p class="fw-bold mb-3">$350 MXN</p>

                    <button
                        class="btn btn-primary w-100 btn-comprar"
                        data-tipo="General"
                        data-precio="350"
                    >
                        Comprar
                    </button>
                </div>
            </div>
        </div>

        {{-- VIP --}}
        <div class="col-md-4">
            <div class="card shadow-sm h-100 border-0">
                <img src="{{ asset('img/boletos/bol.jpg') }}" class="card-img-top" style="height:220px; object-fit:cover;" alt="VIP">

                <div class="card-body">
                    <h5 class="fw-bold">VIP</h5>
                    <ul class="mb-3">
                        <li>Acceso preferente</li>
                        <li>Zona VIP</li>
                        <li>Bebida de cortesía</li>
                    </ul>

                    <p class="fw-bold mb-3">$850 MXN</p>

                    <button
                        class="btn btn-primary w-100 btn-comprar"
                        data-tipo="VIP"
                        data-precio="850"
                    >
                        Comprar
                    </button>
                </div>
            </div>
        </div>

        {{-- MEET & GREET --}}
        <div class="col-md-4">
            <div class="card shadow-sm h-100 border-0">
                <img src="{{ asset('img/boletos/bol.jpg') }}" class="card-img-top" style="height:220px; object-fit:cover;" alt="Meet & Greet">

                <div class="card-body">
                    <h5 class="fw-bold">Meet &amp; Greet</h5>
                    <ul class="mb-3">
                        <li>Foto con artista</li>
                        <li>Souvenir</li>
                        <li>Acceso VIP</li>
                    </ul>

                    <p class="fw-bold mb-3">$1,500 MXN</p>

                    <button
                        class="btn btn-primary w-100 btn-comprar"
                        data-tipo="Meet & Greet"
                        data-precio="1500"
                    >
                        Comprar
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- JS de simulación --}}
<script>
document.addEventListener('DOMContentLoaded', () => {
    const botones = document.querySelectorAll('.btn-comprar');

    botones.forEach(btn => {
        btn.addEventListener('click', () => {
            const tipo = btn.dataset.tipo;
            const precio = btn.dataset.precio;

            alert(`Compra\n\nBoleto: ${tipo}\nPrecio: $${precio} MXN\n\n(Esto es solo una simulación)`);

            // Opcional: cambiar el botón para que se note la compra
            btn.textContent = 'Comprado';
            btn.classList.remove('btn-primary');
            btn.classList.add('btn-success');
            btn.disabled = true;
        });
    });
});
</script>
@endsection