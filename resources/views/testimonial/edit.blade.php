@extends('layouts.app')

@section('title', 'Data Pembeli')

@section('content')

<div class="container">
    <a href="/testimonials" class="btn btn-primary mb-3">Kembali</a> 
    <div class="row">
        <div class="col-md-12">   
            <form action="{{ route('testimonials.update', $testimonials->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Nama Pelanggan</label>
                    <input type="text" class="form-control" name="title" placeholder="Masukkan nama pelanggan" value="{{$testimonial->title}}">
                </div>
                @error ('title')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi dan Tipe Rumah</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Masukkan tipe rumah yang dibeli">{{$testimonial->description}}</textarea>
                </div>
                @error ('description')
                <small style="color:red">{{$message}}</small>
                @enderror
                <img src="/image/{{$testimonials->image}}" alt="" class="img-fluid">
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