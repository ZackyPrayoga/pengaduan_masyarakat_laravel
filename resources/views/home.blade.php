@extends('layouts.nav')
@section('content')
<link rel="stylesheet" href="../css/home.css">
  <section class="hero">
    <div class="hero-content">
      @if (auth()->check())
      <!-- User is logged in -->
      <h1>{{ $TextJudul }}</h1>
      <p>{{ $TextParagraph }}</p>
  @else
      @guest('petugas')
          <!-- Guest user (not logged in as petugas) -->
          <h1>Selamat Datang di Pengaduan Masyarakat</h1>
          <p>Selamat Datang Sebelum Melapor Kami Sarankan Login Atau Register Terlebih Dahulu</p>
      @else
          <!-- Petugas is logged in -->
          <h1>Selamat Datang di Pengaduan Masyarakat</h1>
          <p>Selamat Bekerja!!!</p>
      @endguest
  @endif
  
    </div>
    </section>
@endsection