@extends('layouts.app')

@section('main')
<div class="container">
    <h2>Create</h2>
    <br>
    {!! Form::open(['method'=>'POST','action'=>'BarangController@store','files'=>'true']) !!}
        <div class="form-group">
            {!! Form::label('nama', 'Nama:') !!}
            {!! Form::text('nama', null, ['class'=>'form-control','placeholder'=>'Nama']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('jenis_id', 'Jenis:') !!}
            {!! Form::select('jenis_id', $jeniss, null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('harga', 'Harga:') !!}
            {!! Form::text('harga', null, ['class'=>'form-control','placeholder'=>'Harga']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('warna', 'Warna:') !!}
            {!! Form::select('warna',['hitam'=>'Hitam','merah'=>'Merah','putih'=>'Putuh','biru'=>'Biru'], null, ['class'=>'form-control','placeholder'=>'Harga']) !!}
        </div>

        <div class="form-group custom-file">
            {!! Form::label('photo_id', 'Photo:') !!}<br>
            {!! Form::file('photo_id', null, ['class'=>'custom-file-input']) !!}<br><br>
        </div>
        <div class="form-group">
            {!! Form::submit('Create Post', ['class'=>'form-control btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}
</div>
@endsection