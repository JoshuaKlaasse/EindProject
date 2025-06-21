<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>

    <h1>Add a New Product</h1>

    <a href="{{ url('/user/profile') }}">Back to User List</a>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

<form method="POST" action="{{ url('/createProduct') }}">
    @csrf
    <label for="name">Name</label>
    <input type="text" id="name" name="name" required>

    <label for="description">Description</label>
    <input type="text" id="description" name="description" required>

    <label for="price">Price</label>
    <input type="number" id="price" name="price" required>

    <label for="stock">stock</label>
    <input type="number" id="stock" name="stock" required>

    <label for="image">Image URL</label>
    <input type="text" id="image" name="image" required placeholder="Enter image name">

    <button type="submit">Aanmaken</button>
</form>
</body>
</html>
