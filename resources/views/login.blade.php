@extends('layouts.MasterLayout')

@section('title', 'Login - Nederkwaliteit')

@section('content')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

<div class="login-container">
    <div class="form-box login">
        <h2>Inloggen</h2>
        <form method="POST" action="{{ url('/login') }}" id="login-form">
            @csrf
            <div class="input-box">
               <span class="icon">
                  <ion-icon name="mail-outline"></ion-icon>
               </span>
               <input type="email" name="email" required>
               <label>Email</label>
            </div>
            <div class="input-box">
               <span class="icon">
                  <ion-icon name="lock-closed-outline"></ion-icon>
               </span>
            <input type="password" name="password" required>
            <label>Password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>                
        <div class="login-register">
            <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
        </div>
    </div>

    <div class="form-box register">
        <h2>Registration</h2>
        <form method="POST" action="{{ url('/create') }}" id="register-form">
            @csrf
            <div class="input-box">
               <span class="icon">
                  <ion-icon name="person-outline"></ion-icon>
               </span>
               <input type="text" name="name" required>
               <label>Username</label>
            </div>
            <div class="input-box">
               <span class="icon">
                  <ion-icon name="mail-outline"></ion-icon>
               </span>
               <input type="email" name="email" required>
               <label>Email</label>
            </div>
            <div class="input-box">
               <span class="icon">
                  <ion-icon name="lock-closed-outline"></ion-icon>
               </span>
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox" required>I Agree to the terms and conditions</label>
            </div>
            <button type="submit" class="btn">Register</button>
            <div class="login-register">
                <p>Already have an account? <a href="#" class="login-link">Login</a></p>
            </div>     
        </form>       
    </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="{{ asset('js/login.js') }}"></script>

@endsection