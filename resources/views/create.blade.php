<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>

    <h1>Add a New User</h1>

    <a href="{{ url('/user/profile') }}">Back to User List</a>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

<form method="POST" action="{{ url('/create') }}">
    @csrf
    <label for="name">Naam:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Wachtwoord:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Aanmaken</button>
</form>
</body>
</html>
