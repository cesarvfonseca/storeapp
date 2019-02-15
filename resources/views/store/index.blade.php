@extends('store.template')

@section('content')

    @include('store.partials.slider')

    <div class="container text-center">
        <div id="products">
            @foreach($products as $product)
                <div class="products white-panel">
                    <h3>{{ $product -> name }}</h3><hr>
                    <img src="{{ $product -> image }}">
                    <div class="product-info panel">
                        <p>{{ $product -> extract }}</p>
                        <h3><span class="label label-success">Precio: ${{ number_format($product -> price, 2) }}</span></h3><hr>
                        <p>
                            <a href="{{ route('cart-add', $product -> slug) }}" class="btn btn-success">
                                Añadir al carrito
                            </a>
                            <a href="{{ route('product-detail', $product -> slug)}}" class="btn btn-info">Ver más</a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
