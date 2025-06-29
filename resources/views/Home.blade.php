@extends('layouts.MasterLayout') <!-- Verbind met de master layout -->

@section('title', 'Home - Nederkwaliteit') <!-- Vul de title placeholder -->

@section('content') <!-- Vul de content placeholder -->

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}"> <!-- Voeg de CSS toe voor de home pagina -->
@endsection
    <div id="main_content">
            <div id="sales_header">
                <h1>Our sales</h1>
            </div>
        <div id="sales">
            <div class="sales_product">
                <h2>{{$product1->name}}</h2>
                <img src="{{ asset('/images/shirts/' . $product1->image) }}" alt="Product 1" class="product_image">
                <p class="priceProduct">€{{$product1->price}}</p>
                <form method="GET" action="{{ url('/order/' . $product1->id) }}">
                    <button type="submit" class="btn">Bestel nu</button>
                </form>
            </div>

            <div class="sales_product">
                <h2>{{$product2->name}}</h2>
                <img src="{{ asset('/images/shirts/' . $product2->image) }}" alt="Product 2" class="product_image">
                <p class="priceProduct">€{{$product2->price}}</p>
                <form method="GET" action="{{ url('/order/' . $product2->id) }}">
                    <button type="submit" class="btn">Bestel nu</button>
                </form>
            </div>

            <div class="sales_product">
                <h2>{{$product4->name}}</h2>
                <img src="{{ asset('/images/shirts/' . $product4->image) }}" alt="Product 3" class="product_image">
                <p class="priceProduct">€{{$product4->price}}</p>
                <form method="GET" action="{{ url('/order/' . $product4->id) }}">
                    <button type="submit" class="btn">Bestel nu</button>
                </form>
            </div>
        </div>
        <div id="popular_header">
            <h1>Popular products</h1>
        </div>        
        <div id="Popular_product">

            <div id=info>
            </div>
            <div class="popular_product">
                <h2>{{$product3->name}}</h2>
                <img src="{{ asset('/images/shirts/' . $product3->image) }}" alt="Product 1" class="product_image">
                <p class="priceProduct">€{{$product3->price}}</p>
                <form method="GET" action="{{ url('/order/' . $product3->id) }}">
                    <button type="submit" class="btn">Bestel nu</button>
                </form>
            </div>
            <div class="popular_product">
                <h2>{{$product5->name}}</h2>
                <img src="{{ asset('/images/shirts/' . $product5->image) }}" alt="Product 2" class="product_image">
                <p class="priceProduct">€{{$product5->price}}</p>
            <form method="GET" action="{{ url('/order/' . $product5->id) }}">
                <button type="submit" class="btn">Bestel nu</button>
            </form>
            </div>
            <div class="popular_product">
                <h2>{{$product6->name}}</h2>
                <img src="{{ asset('/images/shirts/' . $product6->image) }}" alt="Product 3" class="product_image">
                <p class="priceProduct">€{{$product6->price}}</p>
                <form method="GET" action="{{ url('/order/' . $product6->id) }}">
                    <button type="submit" class="btn">Bestel nu</button>
                </form>
            </div>
        </div>
    </div>              
@endsection