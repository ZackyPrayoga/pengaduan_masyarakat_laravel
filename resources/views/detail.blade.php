@extends('layouts.nav')
@section('content')
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
                            <th>id</th>
                            <th>tanggal</th>
                            <th>nik</th>
                            <th>isi_laporan</th>
                            <th>foto</th>
                            <th>status</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>

                    @if(Auth::guard('petugas')->check() && Auth::guard('petugas')->user()->level === 'admin')


                        <tbody class="table-secondary" style="text-align: center">
                            <tr>
                                <td>{{$pengaduan->id_pengaduan}}</td>
                                <td>{{$pengaduan->tgl_pengaduan}}</td>
                                <td>{{$pengaduan->nik}}</td>
                                <td>{{$pengaduan->isi_laporan}}</td>
                                <td><img style="width: 120px; height: 100px" src="{{ asset("/img/$pengaduan->foto")}}"></td>
                                <td>{{$pengaduan->status}}</td>
                                <td>
                                    <a href="/hasil/detail_pengaduan/generate-report/{{$pengaduan->id_pengaduan}}" class="btn btn-primary">Print</a>
                                </td>
                            </tr>
                        </tbody>    
                        @elseif (Auth::guard('petugas')->check() && Auth::guard('petugas')->user()->level === 'petugas')
                        <tbody class="table-secondary" style="text-align: center">
                    <tr>

                        <td>{{$pengaduan->id_pengaduan}}</td>
                        <td>{{$pengaduan->tgl_pengaduan}}</td>
                        <td>{{$pengaduan->nik}}</td>
                        <td>{{$pengaduan->isi_laporan}}</td>
                        <td><img style="width: 120px; height: 100px" src="{{ asset("/img/$pengaduan->foto")}}"></td>
                        <td>{{$pengaduan->status}}</td>
                        <td>
                            <span>No actions available</span>
                        </td>
                    </tr>

                </tbody>
                @else
                <tbody class="table-secondary" style="text-align: center">
            <tr>

                <td>{{$pengaduan->id_pengaduan}}</td>
                <td>{{$pengaduan->tgl_pengaduan}}</td>
                <td>{{$pengaduan->nik}}</td>
                <td>{{$pengaduan->isi_laporan}}</td>
                <td><img style="width: 120px; height: 100px" src="{{ asset("/img/$pengaduan->foto")}}"></td>
                <td>{{$pengaduan->status}}</td>
                <td>
                    <span>No actions available</span>
                </td>
            </tr>

        </tbody>
                @endif
                </table>
            </div>
        </div>
    
        <!-- Include Bootstrap JS (optional) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    </body>
    </html>
@endsection