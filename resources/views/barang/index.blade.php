@extends('layouts.app')

@section('main')
<br>
    <div class="container">
        <a href="{{route('barang.create')}}" class="btn btn-sm btn-info">Create</a>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Harga</th>
                    <th>Warna</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barangs as $barang)
                    <tr>
                        <td><img src="/images/{{$barang->Photo->file}}" alt="" srcset="" height="70" width="70"></td>
                        <td>{{$barang->nama}}</td>
                        <td>{{$barang->jenis ? $barang->jenis->jenis_id : "jenis Tidak DItemukan"}}</td>
                        <td>{{$barang->harga}}</td>
                        <td>{{$barang->warna}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection