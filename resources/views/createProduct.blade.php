@extends('layouts.MasterLayout') <!-- Verbind met de master layout -->

@section('title', 'Home - Nederkwaliteit') <!-- Vul de title placeholder -->

@section('content') <!-- Vul de content placeholder -->

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/createProduct.css') }}"> <!-- Voeg de CSS toe voor de home pagina -->
@endsection
<div class="form-container">
    <h1>Add a New Product</h1>

    

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

<form method="POST" action="{{ url('/createProduct') }}" id="create-product-form">
    @csrf
    <label for="name">Name</label>
    <input type="text" id="name" name="name" required><br>

    <label for="description">Description</label>
    <input type="text" id="description" name="description" required><br>

    <label for="price">Price</label>
    <input type="number" id="price" name="price" required><br>

    <label for="stock">stock</label>
    <input type="number" id="stock" name="stock" required><br>

    <label for="image">Image URL</label>
    <input type="text" id="image" name="image" required placeholder="Enter image name"><br>

    <button type="submit" id="submit">Aanmaken</button>
    <a href="{{ url('/user/profile') }}">Back to User List</a>
</form>
</div>
</div>
</body>
@endsection
