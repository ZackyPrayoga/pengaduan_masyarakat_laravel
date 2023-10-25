@include('layouts.nav')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home.css">
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
        <h1 style="text-align: center;">Daftar Petugas</h1>
        <div class="table-responsive">
            <table class="table table-dark" width='80%' border="1" style="margin-top:50px; content-align:center; width:100%;">
                <thead style="text-align: center">
                    <tr>
                        <th>id</th>
                        <th>nama</th>
                        <th>username</th>
                        <th>telp</th>
                    </tr>
                </thead>
                @foreach ($petugas as $item)
                    <tbody style="text-align: center">
                        <tr>
                            <td>{{$item->id_petugas}}</td>
                            <td>{{$item->nama_petugas}}</td>
                            <td>{{$item->username}}</td>
                            <td>{{$item->telp}}</td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            <a  href="tambah" class="btn btn-danger">Tambah Petugas</a>
        </div>
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
