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
        <h1 style="text-align: center;">Laporan Masyarakat</h1>
        <div class="table-responsive">
            <table class="table table-dark" width='80%' border="1" style="margin-top:50px; content-align:center; width:100%;">
                <thead style="text-align: center">
                    <tr>
                        <th>id</th>
                        <th>tanggal</th>
                        <th>nik</th>
                        <th>isi_laporan</th>
                        <th>foto</th>
                        <th>status</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
  @foreach ($pengaduan as $item)
            @if (Auth::guard('petugas')->check())
                {{-- If the user is a petugas, they can see all data --}}
                <tbody class="table-secondary" style="text-align: center">
                <tr>
                    <td>{{$item->id_pengaduan}}</td>
                    <td>{{$item->tgl_pengaduan}}</td>
                    <td>{{$item->nik}}</td>
                    <td>{{$item->isi_laporan}}</td>
                    <td><img style="width: 128px; height: 100px" src="{{ asset("/img/$item->foto")}}"></td>
                    <td>{{$item->status}}</td>
                    <td>
                        @if ($item->status == '0')
                        {{-- Show 'Terima' and 'Tolak' buttons --}}
                            <a href="/hasil/terima/{{$item->id_pengaduan}}" type="submit" class="btn btn-success">Terima</a>
                            <a href="/hasil/tolak/{{$item->id_pengaduan}}" type="submit" class="btn btn-danger">Tolak</a>
                    @elseif ($item->status == 'proses')
                        {{-- Show 'Selesai' a --}}
                            <a href="/hasil/selesai/{{$item->id_pengaduan}}" type="submit" class="btn btn-primary">Selesai</a>
                    @else
                        {{-- Hide buttons when status is 'selesai' --}}
                        <span>No actions available</span>
                    @endif
                    </td> 
                </tbody>

                    <tr>
            @elseif (Auth::user()->nik == $item->nik)
                {{-- If the user is a nik and the data belongs to them, they can see their data --}}
                    <tbody class="table-secondary" style="text-align: center">
                    
                    <td>{{$item->id_pengaduan}}</td>
                    <td>{{$item->tgl_pengaduan}}</td>
                    <td>{{$item->nik}}</td>
                    <td>{{$item->isi_laporan}}</td>
                    <td><img style="width: 128px; height: 100px" src="{{ asset("/img/$item->foto")}}"></td>
                    <td>{{$item->status}}</td>
                    <td>
                        <span><a href="/hasil/hapus/{{$item->id_pengaduan}}" class="btn btn-danger">Hapus</a></span>
                        <span><a href="/hasil/detail_pengaduan/{{$item->id_pengaduan}}" class="btn btn-success">Detail</a></span>
                        <span><a href="/hasil/update_pengaduan/{{$item->id_pengaduan}}" class="btn btn-warning">Update</a></span>
                    </td>
                </tr>
            </tbody>

            @endif
        @endforeach

            </table>
            <a href= "isi" class="btn btn-danger">Buat Laporan Baru</a>
        </div>
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
