@include('layouts.nav')

@section('content')

@endsection
    <title>W.I.P</title>

<h1 class="mt-5 text-center">Tambah Petugas</h1>
<div class="container register" style="width: 50%; display:flex;">
    <form method="POST" action="tambah-petugas" class="container mt-5">
        @method("POST")
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama_petugas" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Username</label>
          <input type="text" class="form-control" name="username" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Telp</label>
          <input type="number" class="form-control" name="telp" id="exampleInputall1">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
      </form>
</div>