<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/header_footer.css">
</head>
<body>
<div id="header">
    <div id="logo">
        <img src="../Images/logo.png" alt="logo" id="logo">
    </div>
    <nav class="navigation">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        <button class="btnlogin-popup">login</button>
    </nav>
</div>
<h1>Admin panel</h1>
<div class="users">
    <h2>Users</h2>

    <table border="1">
        <th>Name</th>
        <th>Password</th>
        <th>ID</th>
        <th>Email</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Update</th>
        <th>Delete</th>
    
    @foreach($users as $user)
        <tr>
            <td>{{$user->name}} </td>
            <td>{{$user->password}}</td>
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