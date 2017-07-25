<div class="col-md-6">
    <h3>{{ $titulo }}</h3>
    <p>{{ $descripcion }}</p>
    {{ $slot }}
    <a href="{{ route('products.show',['id'=>$id]) }}">Ver más</a>
</div>