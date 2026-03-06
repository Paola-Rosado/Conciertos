@extends('layouts.app')

@section('contenido')
<div class="container">

    <h2 class="section-title text-center mb-4">Tipos de Boletos</h2>
    <p class="text-center text-muted mb-5">
        Elige el tipo de boleto que prefieras. (compra)
    </p>
    
    <div class="row g-4 justify-content-center">

        @foreach($tipos as $tipo)
        <div class="col-md-4">
            <x-card 
                imagen="{{ $tipo['imagen'] }}" 
                titulo="{{ $tipo['titulo'] }}"
                clase="border-0"

            >   {{-- Lista de beneficios/inclusiones del boleto --}}
                <ul class="mb-3">
                    @foreach($tipo['incluye'] as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>

                <p class="fw-bold mb-3">{{ $tipo['precio'] }}</p>

                <button
                    class="btn btn-primary w-100 btn-comprar"
                    data-tipo="{{ $tipo['titulo'] }}"
                    data-precio="{{ preg_replace('/[^0-9]/', '', $tipo['precio']) }}"
                >
                    Comprar
                </button>
            </x-card>
        </div>
        @endforeach

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

            alert(`Compra\n\nBoleto: ${tipo}\nPrecio: $${precio} MXN`);

            // Cambiar el botón para que se note la compra
            btn.textContent = 'Comprado';
            btn.classList.remove('btn-primary');
            btn.classList.add('btn-success');
            btn.disabled = true;
        });
    });
});
</script>
@endsection