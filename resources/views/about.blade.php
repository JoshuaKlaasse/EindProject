@extends('layouts.MasterLayout') <!-- Verbind met de master layout -->

@section('title', 'About - Nederkwaliteit') <!-- Vul de title placeholder -->

@section('styles') <!-- Voeg de CSS toe voor de about pagina -->
    <link rel="stylesheet" href="{{ asset('css/FAQ.css') }}">
@endsection

@section('content') <!-- Vul de content placeholder -->
<main class="faq-container">
  <h1>Over Ons – Nederkwaliteit™</h1>

  <div class="faq">
    <button class="faq-question">Who We Are</button>
    <div class="faq-answer">
      We’re an energetic & slightly chaotic duo making clothes that are *just barely* good enough to wear — but always full of character.
    </div>
  </div>

  <div class="faq">
    <button class="faq-question">Our Mission</button>
    <div class="faq-answer">
      We’re not chasing perfection. We’re making clothes that put a little joy into your day — without draining your bank account.
    </div>
  </div>

  <div class="faq">
    <button class="faq-question">Our Story</button>
    <div class="faq-answer">
      It all started with a bold idea over a beer: “Why don’t we start a clothing brand?” We had zero experience, but maximum enthusiasm. Now here we are — with clothes that sometimes fall a little short… and we’re proudly honest about that.
    </div>
  </div>
</main>
@endsection