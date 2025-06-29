@extends('layouts.MasterLayout') <!-- Verbind met de master layout -->

@section('title', 'Home - Nederkwaliteit') <!-- Vul de title placeholder -->

@section('content') <!-- Vul de content placeholder -->

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/create.css') }}"> <!-- Voeg de CSS toe voor de home pagina -->
@endsection
<div class="form-container">
    <h1>Add a New User</h1>

    <a href="{{ url('/user/profile') }}">Back to User List</a>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

<form method="POST" action="{{ url('/create') }}" id="create-form">
    @csrf
    <label for="name">Naam:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Wachtwoord:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit" id="submit">Aanmaken</button>
</form>
</div>
</div>
</body>
@endsection
