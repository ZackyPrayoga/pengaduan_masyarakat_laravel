<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg" data-bs-theme="dark" style="background-color:#900C3F;">
    <div class="container-fluid">
      
      @if (Auth::guard('petugas')->check() && Auth::guard('petugas')->user()->level === 'admin')

      <a class="navbar-brand" href="#">Admin</a>

      @elseif(Auth::guard('petugas')->check() && Auth::guard('petugas')->user()->level === 'petugas')
      
      <a class="navbar-brand" href="#">Petugas</a>
      
      @else
      <a class="navbar-brand" href="#">Masyarakat</a>

      @endif
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">

        @php
        $activePage = Request::path();
    @endphp
    
    <ul class="navbar-nav mx-auto">
        <li class="nav-item ">
            <a class="nav-link {{ '/' == request()->path() ? 'active' : '' }}" href="/">Home</a>
        </li>
        @if (Auth::check())
        <li class="nav-item">
            <a class="nav-link  {{ 'isi' == request()->path() ? 'active' : '' }}" href="/isi">Buat</a>
        </li>
        @endif
        @if (Auth::check() or Auth::guard('petugas')->check())
        <li class="nav-item ">
            <a class="nav-link  {{ 'hasil' == request()->path() ? 'active' : '' }}" href="/hasil">Hasil</a>
        </li>
    </ul>
    
          

          @endif
          @php
    $petugasUser = Auth::guard('petugas')->user();
@endphp

          @if (Auth::guard('petugas')->check() && Auth::guard('petugas')->user()->level === 'petugas')
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link active" href="/logout">Log Out</a>
          </li>

          @elseif(Auth::guard('petugas')->check() && Auth::guard('petugas')->user()->level === 'admin')
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link active" href="/register-petugas">Tambah Petugas</a>
            </li>
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link active" href="/logout">Log Out</a>
            </li>

            @elseif (Auth::check())
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link active" href="/logout">Log Out</a>
              </li>
            @else
          </ul>
          <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link active" href="register">Register</a>
          </li>
        <li class="nav-item">
          <a class="nav-link active" href="login">Log in</a>
        </li> 

      </ul>
      @endif
      </div>
    </div>
  </nav>
  </header>
  <div class="container mt-5">
    @yield('content')
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>