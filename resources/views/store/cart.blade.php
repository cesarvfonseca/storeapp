@extends('store.template')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fas fa-shopping-cart"></i> Carrito de compras</h1>
        </div>

        <div class="table-cart">
            @if(count($cart))
            
            <p>
                    <h3><a href="{{ route('cart-trash') }}" class="btn btn-danger btn-block btn-lg"><i class="fas fa-trash-alt"></i> Vaciar carrito</a></h3>
            </p>

            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th>Quitar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $item)
                            <tr>
                                <td><img src="{{ $item -> image }}" alt=""></td>
                                <td>{{ $item -> name }}</td>
                                <td>${{ number_format($item -> price, 2) }}</td>
                                <td>
                                    <input type="number" min="1" max="100" value="{{ $item -> qty }}" id="product_{{ $item -> id }}">

                                    <a 
                                        class="btn btn-success btn-sm btn-update-item"
                                        data-href="{{ $item -> slug }}"
                                        data-id="{{ $item -> id }}" 
                                    >
                                        <i class="fas fa-sync-alt"></i>
                                    </a>
                                    
                                </td>
                                <td>${{ number_format($item -> price * $item -> qty, 2) }}</td>
                                <td>
                                    <a href="{{ route('cart-delete', $item -> slug) }}" class="btn btn-danger"><i class="fas fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <hr>

                <h3>
                    <span class="label label-success">
                        Total: $ {{ number_format($total, 2) }}
                    </span>
                </h3>

            </div> 
            @else 
                <div class="alert alert-info" role="alert">
                    No hay productos en tu carrito
                </div>
            @endif

            <hr>

            <p>
                    <a href="{{ route('home') }}" class="btn btn-secondary btn-lg"><i class="fas fa-home"></i> Ir a Tienda</a>
                    
                    <a href="{{ route('home') }}" class="btn btn-primary btn-lg"><i class="fas fa-arrow-right"></i> Continuar</a>
            </p>

        </div>

    </div>
@endsection