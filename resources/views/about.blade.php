@extends('layouts.app')

@section('title', 'Data About')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if($message = Session::get('message'))
                <div class = "alert alert-success">
                    <strong>Berhasil</strong>
                    <p>{{$message}}</p>
                </div>
            @endif   
            <form action="/about/{{$about->id}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Nama Perusahaan</label>
                    <input type="text" class="form-control" name="name" placeholder="Judul" value="{{$about->name}}">
                </div>
                @error ('name')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{$about->description}}</textarea>
                </div>
                @error ('description')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{$about->alamat}}">
                </div>
                @error ('alamat')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{$about->email}}">
                </div>
                @error ('email')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Telepon</label>
                    <input type="text" class="form-control" name="telepon" placeholder="Telepon" value="{{$about->telepon}}">
                </div>
                @error ('telepon')
                <small style="color:red">{{$message}}</small>
                @enderror<div class="form-group">
                    <label for="">Maps Embed</label>
                    <textarea name="maps_embed" id="" cols="30" rows="10" class="form-control" placeholder="Maps Embed">{{$about->maps_embed}}</textarea>
                </div>
                @error ('maps_embed')
                <small style="color:red">{{$message}}</small>
                @enderror
                <img src="/image/{{$about->logo}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="logo">
                </div>
                @error ('image')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <button type = "submit" class="btn btn-primary btn-block">Submit</button>
            </from>
</div>

@endsection