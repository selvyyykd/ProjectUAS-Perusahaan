@extends('layouts.app')

@section('title', 'Data Harga')

@section('content')

<div class="container ">
    <a href="/admin/services/create/" class="btn btn-primary mb-3"> Tambah Data</a>

    @if($message = Session::get('message'))
        <div class = "alert alert bg-success">
        <strong>Berhasil</strong>
        <p>{{$message}}</p>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped ">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Tipe Rumah</th>
                    <th class="text-center">Deskripsi Harga</th>
                    <th class="text-center">Gambar</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($services as $service)
		    <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$service->title}}</td>
                    <td>{{$service->description}}</td>
                    <td>
                        <center>
                        <img src="/image/{{$service->image}}" alt="" class="img-fluid" width="90">
                        </center>
                    </td>
                    <td> 
                        <div class="d-flex justify-content-center">
                            <div class="mx-2">

                                <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                            </div>
                            <div>

                                <form action="{{ route('services.destroy', $service->id) }}" method="POST">
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