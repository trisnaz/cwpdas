@extends('layouts.app');

@section('title', 'Data About');

@section('content')

<div class="container">
    <div class="table-responsive">
        <div class="row">
            <div class="col-md-12">
                @if ($message = Session::get('message'))
                <div class="alert alert-success">
                    <strong>Berhasil</strong>
                    <p>{{$message}}</p>
                </div>
                @endif
                <form action="/admin/about/{{$about->id}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Judul" value="{{$about->judul}}">
                    </div>
                    @error('judul')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Sub Judul</label>
                        <textarea id="" cols="30" rows="10" class="form-control" name="subjudul" placeholder="Sub Judul">{{$about->subjudul}}</textarea>
                    </div>
                    @error('subjudul')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Deskripsi 1</label>
                        <textarea id="" cols="30" rows="10" class="form-control" name="deskripsi_1" placeholder="Deskripsi 1">{{$about->deskripsi_1}}</textarea>
                    </div>
                    @error('deskripsi_1')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Deskripsi 2</label>
                        <textarea id="" cols="30" rows="10" class="form-control" name="deskripsi_2" placeholder="Deskripsi 2">{{$about->deskripsi_2}}</textarea>
                    </div>
                    @error('deskripsi_2')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Kelebihan 1</label>
                        <input type="text" class="form-control" name="kelebihan_1" placeholder="Kelebihan 1" value="{{$about->kelebihan_1}}">
                    </div>
                    @error('kelebihan_1')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Kelebihan 2</label>
                        <input type="text" class="form-control" name="kelebihan_2" placeholder="Kelebihan 2" value="{{$about->kelebihan_2}}">
                    </div>
                    @error('kelebihan_2')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Kelebihan 3</label>
                        <input type="text" class="form-control" name="kelebihan_3" placeholder="Kelebihan 3" value="{{$about->kelebihan_3}}">
                    </div>
                    @error('kelebihan_3')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Kelebihan 4</label>
                        <input type="text" class="form-control" name="kelebihan_4" placeholder="Kelebihan 4" value="{{$about->kelebihan_4}}">
                    </div>
                    @error('kelebihan_4')
                    <small style="color:red">{{$message}}</small>
                    @enderror

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection