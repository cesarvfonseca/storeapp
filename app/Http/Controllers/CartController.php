<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class CartController extends Controller
{
    public function __construct()
    {
        //CREAR VARIABLE DE SESION SI NO EXISTE
        if(!\Session::has('cart'))\Session::put('cart',array());
    }

    // Show Cart
    public function show()
    {
        // OBTENER VARIABLE DE SESION
        $cart = \Session::get('cart');
        $total = $this -> total();
        return view('store.cart', compact('cart', 'total'));
    }

    //Add item
    public function add(Products $product)
    {
        // OBTENER VARIABLE DE SESION
        $cart = \Session::get('cart');
        // ASIGNAR LA CANTIDAD DE PRODUCTOS EN EL CARRITO, POR DEFAULT 1
        $product -> qty = 1;
        //ASIGNAR EL PRODUCTO AL CARRITO
        $cart[$product -> slug] = $product;
        //ACTUALIZAR LA VARIABLE DE SESION CON LOS DATOS OBTENIDOS
        \Session::put('cart',$cart);

        //REDIRIGIR A LA VISTA DEL CARRITO
        return redirect() -> route('cart-show');

    }

    // Delete item
    public function delete(Products $product){
        // OBTENER VARIABLE DE SESION
        $cart = \Session::get('cart');
        //ELIMINAR OBJETO DE NUESTRO ARRAY  
        unset($cart[$product -> slug]);
        //ACTUALIZAR LA VARIABLE DE SESION CON LOS DATOS OBTENIDOS
        \Session::put('cart',$cart);

        //REDIRIGIR A LA VISTA DEL CARRITO
        return redirect() -> route('cart-show');
    }

    // Update item
    public function update(Products $product, $qty){
        // OBTENER VARIABLE DE SESION
        $cart = \Session::get('cart');
        //ACTUALIZAR LA VARIABLE qty DEL ARRAY, PARA EL PRODUCTO
        $cart[$product -> slug] -> qty = $qty;

        //ACTUALIZAR LA VARIABLE DE SESION CON LOS DATOS ACTUALIZADOS
        \Session::put('cart',$cart);

        //REDIRIGIR A LA VISTA DEL CARRITO
        return redirect() -> route('cart-show');
    }

    // Trash cart
    public function trash(Products $product){
        //BORRAR DATOS DE SSION DE LA VARIABLE cart
        \Session::forget('cart');
        //REDIRIGIR A LA VISTA DEL CARRITO
        return redirect() -> route('cart-show');
    }

    // Total
    private function total()
    {
        // OBTENER VARIABLE DE SESION
        $cart = \Session::get('cart');
        $total = 0;
        foreach ($cart as $item){
            $total += $item -> price * $item -> qty;
        }
        return $total;
    }
}
