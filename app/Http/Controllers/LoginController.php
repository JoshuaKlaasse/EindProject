<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Toon de loginpagina
    public function login()
    {
        return view('login');
    }

    // Verwerk de login
    public function authenticate(Request $request)
    {
        // Valideer de invoer
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Probeer de gebruiker in te loggen
        if (Auth::attempt($credentials, $request->has('remember'))) {
            // Regenerate de sessie om beveiligingsproblemen te voorkomen
            $request->session()->regenerate();

            // Redirect naar dashboard of gewenste pagina
            return redirect()->intended('/')->with('success', 'Logged in successfully!');
        }

        // Login mislukt, stuur terug met foutmelding
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
