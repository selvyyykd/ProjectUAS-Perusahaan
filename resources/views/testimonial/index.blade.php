@extends('layouts.app')

@section('title', 'Data Pembeli')

@section('content')

<div class="container active">
    <a href="/testimonials/create/" class="btn btn-primary mb-3">Tambah Data</a>

    @if($message = Session::get('message'))
        <div class = "alert alert-success">
        <strong>Berhasil</strong>
        <p>{{$message}}</p>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Pelanggan</th>
                    <th class="text-center">Deskripsi dan Tipe Rumah</th>
                    <th class="text-center">Gambar</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($testimonials as $testimonial)
		    <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$testimonial->title}}</td>
                    <td>{{$testimonial->description}}</td>
                    <td>
                        <center>
                        <img src="/image/{{$testimonial->image}}" alt="" class="img-fluid" width="90">
                        </center>
                    </td>
                    <td > 
                         <div class="d-flex justify-content-center">
                            <div class="mx-2">

                                <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-warning">Edit</a>
                            </div>
                            <div>

                                <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </div>
                                </div>
                    </td>
		    </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</div>

@endsection