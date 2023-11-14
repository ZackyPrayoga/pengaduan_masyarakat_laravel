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
                <label for="isi_laporan" class="form-label" style="color: black;">isi tanggapan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tanggapan" maxlength="255"></textarea>
                @error('isi_laporan')
                    <div>{{'Isi Laporannya dulu ya!!!'}}</div>
                @enderror
              </div>
              <button class="btn btn-danger">Buat</button>
        </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
    </html>