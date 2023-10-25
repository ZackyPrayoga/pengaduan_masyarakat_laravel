@include('layouts.nav')

@section('content')

@endsection
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/home.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <div class="container" style="padding: 30px; background-color: transparent; margin-top: 50px; box-shadow: 0 4px 8px 0rgba(0,0,0,0.2) 0 6px rgba(0, 0, 0, 0.19);">
            <form action="" method="POST" enctype="multipart/form-data">
                @method("POST")
                @csrf
            <h1 style="margin-top: 30px; text-align: center; color: black;">Buat Laporan</h1>
            <div class="container">
              <div class="mb-3">
                <label for="nik" class="form-label" style="color: black;">nik</label>
                <input type="text" class="form-control" name="nik" required>
                @error('nik')
                    <div>{{$message}}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label" style="color:  black;">nama</label>
                <input type="text" class="form-control"  name="nama" placeholder="">
              </div>
              <div class="mb-3">
                <label for="username" class="form-label" style="color:  black;">username</label>
                <input type="text" class="form-control"  name="username" >
              </div>
              <div class="mb-3">
                <label for="password" class="form-label" style="color:  black;">password</label>
                <input type="password" class="form-control"  name="password" >
              </div>
              <div class="mb-3">
                <label for="no telp" class="form-label" style="color:  black;">telp</label>
                <input type="text" class="form-control"  name="telp" >
              </div>
              <button class="btn btn-danger" type="submit">Kirim</button>
            </div>
        </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
    </html>