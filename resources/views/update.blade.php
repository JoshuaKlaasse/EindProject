<div id="header">
    <div id="logo">
        <a href="{{ url('/') }}">
            <img src="../Images/logo.png" alt="logo" id="logo">
        </a>
    </div>
    <div id="search">
        <form action="{{ url('/search') }}" method="GET" class="search-form">
            <input type="text" name="query" placeholder="Zoek naar producten..." class="search-input" required>
            <button type="submit" class="search-button">
                <img src="../images/search.icon.png" alt="Search">
            </button>
        </form>
    </div>
      <nav class="navigation">
        <div class="header-links">
          <a href="login"><button class="btnlogin-popup">login</button></a>
          <a href="cart"><button class="btncart-popup"><img class="buttonimage" src="../images/basket-cart-icon-27.png"></button></a>
        </div>
    </nav>
</div>
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