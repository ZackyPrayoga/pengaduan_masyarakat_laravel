@extends('layouts.nav')
@section('content')
<link rel="stylesheet" href="../css/home.css">
  <section class="hero">
    <div class="hero-content">
      @if (Auth::user())
      <h1>{{$TextJudul}}</h1>
      <p>{{$TextParagraph}}</p>
      @else
      <h1>Selamat Datang di Pengaduan Masyarakat</h1>
      <p>Selamat Datang Sebelum Melapor Kami Sarankan Login Atau Register Terlebih Dahulu</p>
      @endif
    </div>
    </section>
@endsection