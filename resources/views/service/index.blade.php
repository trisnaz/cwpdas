@extends('layouts.app');

@section('title', 'Data Service');

@section('content')

<div class="container">
    <a href="/admin/services/create" class="btn btn-primary mb-3">Tambah Data</a>

    @if ($message = Session::get('message'))
    <div class="alert alert-success">
        <strong>Berhasil</strong>
        <p>{{$message}}</p>
    </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered tabel-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @php
                    $i = 1
                    @endphp
                    @foreach ($services as $service)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $service->title }}</td>
                    <td>{{ $service->description }}</td>
                    <td>
                        <img src="/image/{{$service->image}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{route('services.destroy', $service->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>

                        </form>
                    </td>
                </tr>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection