@extends('layouts.MasterLayout')

@section('title', 'Product - Nederkwaliteit')

@section('content')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/search_results.css') }}">
@endsection

<div class="search-results-container">
    <h1>Zoekresultaten voor "{{ $query }}"</h1>

    @if($products->isEmpty())
        <p>Geen producten gevonden.</p>
    @else
        <ul>
            @foreach($products as $product)
                <li>
                    <h2>{{ $product->name }}</h2>
                    <p id="description">{{ $product->description }}</p>
                    <p>Prijs: €{{ number_format($product->price, 2) }}</p>
                    <img src="{{ asset('images/shirts/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
                    <form method="GET" action="{{ url('/order/' . $product->id) }}">
                        <button type="submit" class="btn">Bestel nu</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
</div>

@endsection