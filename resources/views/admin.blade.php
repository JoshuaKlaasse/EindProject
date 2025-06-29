@extends('layouts.MasterLayout') <!-- Verbind met de master layout -->

@section('title', 'Home - Nederkwaliteit') <!-- Vul de title placeholder -->

@section('content') <!-- Vul de content placeholder -->

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}"> <!-- Voeg de CSS toe voor de home pagina -->
@endsection
<h1>Admin panel</h1>
<div class="users">
    <h2>Users</h2>

    <table border="1">
        <th>Name</th>
        <th>ID</th>
        <th>Email</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Update</th>
        <th>Delete</th>
    
    @foreach($users as $user)
        <tr>
            <td>{{$user->name}} </td>
            <td>{{$user->id}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td><a href="{{url('/update?id=').$user->id}}">Update</a></td>
            <td><a href="{{ url('/delete?id=' . $user->id) }}" onclick="return confirm('Weet je zeker dat je deze gebruiker wilt verwijderen?')">Delete</a></td>
        </tr>
    @endforeach
    </table>
    <a href="{{ url('/create') }}">Add User</a>
</div>
<div class="products">
    <h2>Products</h2>

    <table border="1">
        <th>Name</th>
        <th>Id</th>
        <th>Price</th>
        <th>Description</th>
        <th>Stock</th>
        <th>Image</th>
        <th>Update</th>
        <th>Delete</th>

    @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->id}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->stock}}</td>
            <td><img src="{{ asset('/images/shirts/' . $product->image) }}" alt="Product Image" width="100"></td>
            <td><a href="{{url('/updateProduct?id=').$product->id}}">Update</a></td>
            <td><a href="{{ url('/deleteProduct?id=' . $product->id) }}" onclick="return confirm('Weet je zeker dat je dit product wilt verwijderen?')">Delete</a></td>
        </tr>
    @endforeach
    </table>
    <a href="{{ url('/createProduct') }}">Add Product</a>
</div>
@endsection 