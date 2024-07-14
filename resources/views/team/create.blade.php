@extends('layouts.app')

@section('title', 'Tim Kami')

@section('content')

<div class="container">
    <a href="/teams" class="btn btn-primary mb-3">Kembali</a> 
    <div class="row">
        <div class="col-md-12">   
            <form action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="title" placeholder="Masukkan Nama">
                </div>
                @error ('title')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Bagian</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Bagian"></textarea>
                </div>
                @error ('description')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error ('image')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <button type = "submit" class="btn btn-primary btn-block">Submit</button>
            </from>
</div>

@endsection