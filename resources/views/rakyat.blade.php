@include('layouts.nav')

@section('content')

@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
        <h1 style="text-align: center;">Laporan Masyarakat</h1>
        <div class="table-responsive">
            <table class="table table-dark" width='80%' border="1" style="margin-top:50px; content-align:center; width:100%;">
                <thead style="text-align: center">
        <tr>
            <th>nik</th>
            <th>nama</th>
            <th>username</th>
            <th>password</th>
            <th>telp</th>
            <th>option</th>
        </tr>
    </thead>
    @foreach ($masyarakat as $item)
        
    <tbody style="text-align: center">
        <tr>
            <td>{{$item->nik}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->username}}</td>
            <td>{{$item->password}}</td>
            <td>{{$item->telp}}</td>
            <td>
                <a href="">Delete</a>
                <a href="">Update</a>
            </td>
        </tr>
    </div>
    </tbody>
    @endforeach
    </table>
    <button class="btn btn-danger">Tambah</button>
</body>
</html>