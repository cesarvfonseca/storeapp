@extends('store.template')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1>Detalle del producto</h1>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="product-block">
                    <img src="{{ $product -> image }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="product-block">
                    <h3>{{ $product -> name }}</h3><hr>
                    <div class="product-info panel">
                            <p>{{ $product -> description }}</p>
                            <h3>
                                <span class="label label-success">Precio: ${{ number_format($product -> price, 2) }}</span>
                            </h3>
                            <p>
                                <a href="{{ route('cart-add', $product -> slug) }}" class="btn btn-success btn-block">
                                    Añadir al carrito
                                </a>
                            </p>
                    </div>
                </div>
            </div>
        </div>


        <hr>
        <p><a href="{{ route('home')}}" class="btn btn-secondary btn-block"> Regresar </a></p>

    </div>

@endsection
