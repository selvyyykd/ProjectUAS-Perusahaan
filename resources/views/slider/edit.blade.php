@extends('layouts.app')

@section('title', 'Tipe Rumah')

@section('content')

<div class="container">
    <a href="/admin/sliders/edit" class="btn btn-primary mb-3">Kembali</a> 
    <div class="row">
        <div class="col-md-12">   
            <form action="{{ route('sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Tipe</label>
                    <input type="text" class="form-control" name="title" placeholder="Tipe rumah" value="{{$slider->title}}">
                </div>
                @error ('title')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{$slider->description}}</textarea>
                </div>
                @error ('description')
                <small style="color:red">{{$message}}</small>
                @enderror
                <img src="/image/{{$slider->image}}" alt="" class="img-fluid">
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