@extends('layouts.app')

@section('title', 'Tipe Rumah')

@section('content')

<div class="container">
    <a href="/sliders/create/" class="btn btn-primary mb-3">Tambah Data</a>

    @if($message = Session::get('message'))
        <div class = "alert alert success">
        <strong>Berhasil</strong>
        <p>{{$message}}</p>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tipe</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($sliders as $slider)
            <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$slider->title}}</td>
                    <td>{{$slider->description}}</td>
                    <td>
                        <center>
                        <img src="/image/{{$slider->image}}" alt="" class="img-fluid" width="90">
                        </center>
                    </td>
                    <td>
                        <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                    </td>
            </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</div>

@endsection