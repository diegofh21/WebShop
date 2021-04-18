<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function shop()
    {
        return view('customer-views.shop');
    }

    public function about()
    {
        return view('customer-views.about');
    }

    public function contact()
    {
        return view('customer-views.contact');
    }

    public function faqs()
    {
        return view('customer-views.faqs');
    }

    // Al retornar estas vista se deberían de pasar un id como parametro
    // Por ahora solo se muestra asi para poderlas ver y ya
    public function checkout()
    {
        return view('customer-views.checkout');
    }

    public function carrito()
    {
        return view('customer-views.carrito');
    }

    // Deberia ser producto($id)
    public function producto()
    {
        return view('customer-views.producto');
    }

    
}
