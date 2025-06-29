@extends('layouts.MasterLayout')

@section('title', 'Product - Nederkwaliteit')

@section('content')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">
@endsection

<div class="order-container">
    <h1 class="order-title">{{ $product->name }}</h1>
    <h3 class="Product-title">{{ $product->name }} Description</h3>

    <div class="order-product">
        <img src="{{ asset('/images/shirts/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
        
        <div class="product-details">
            <p class="product-description">{{ $product->description }}</p>
            <p class="product-price">Prijs: €{{ number_format($product->price, 2) }}</p>
            
            <form method="POST" action="{{ url('/cart/add') }}">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button type="submit" class="btn">Toevoegen aan winkelwagen</button>
            </form>
        </div>
    </div>
</div>

@endsection