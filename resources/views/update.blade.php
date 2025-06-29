@extends('layouts.MasterLayout')

@section('title', 'Product - Nederkwaliteit')

@section('content')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/update.css') }}">
@endsection
<div class="form-container">
<h1>Update Gebruiker: {{ $user->name }}</h1>

<form method="POST" action="{{ url('/update/' . $user->id) }}">
    @csrf
    <label for="name">New username: </label>
    <input type="text" id="name" name="name">
    <p>Old username: {{$user->name}}</p>
    <label for="email">New Email:</label>
    <input type="email" id="email" name="email">
    <p>Old Email: {{$user->email}}</p>
    <label for="password">New password:</label>
    <input type="text" id="password" name="password" >
    <p>Old password: {{$user->password}}</p>

    <button type="submit">Update</button>
</form>
</div>
</div>
@endsection