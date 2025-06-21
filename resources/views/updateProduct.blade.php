<h1>Update product: {{ $product->name }}</h1>

<form method="POST" action="{{ url('/updateProduct/' . $product->id) }}">
    @csrf
    <label for="name">New name </label>
    <input type="text" id="name" name="name" value="{{ $product->name }}">
    <p>Old name: {{$product->name}}</p>
    <label for="price">New Price:</label>
    <input type="integer" id="price" name="price" value="{{ $product->price }}">
    <p>Old Price: {{$product->price}}</p>
    <label for="description">New description:</label>
    <input type="text" id="description" name="description" value="{{ $product->description }}">
    <p>Old description: {{$product->description}}</p>
    <label for="stock">New stock:</label>
    <input type="integer" id="stock" name="stock" value="{{ $product->stock }}">
    <p>Old stock: {{$product->stock}}</p>
    <label for="image">New image URL:</label>
    <input type="text" id="image" name="image" value="{{ $product->image }}">
    <p>Old image: <img src="{{ asset('/images/shirts/' . $product->image) }}" alt="Product Image" width="100"></p>
    <p>Old image URL: {{$product->image}}</p>

    <button type="submit">Update</button>
</form>