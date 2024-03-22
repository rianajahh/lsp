@extends('adminlte::page')
@section('title', 'Edit Kategori Wisata')
@section('content_header')
<h1 class="m-0 text-dark">Edit Kategori Wisata</h1>
@stop
@section('content')
<form action="{{route('kategoriwisata.update',$kategoriwisata)}}" method="post">
    @method('put')
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="kategori_wisata">Kategori Wisata</label>
                        <input type="text" class="form-control 
@error('kategori_wisata') is-invalid @enderror" id="kategori_wisata" placeholder="Masukan Kategori"
                            name="kategori_wisata" value="{{  $kategoriwisata->kategori_wisata  ?? old('kategori_wisata')}}">
                        @error('kategori_wisata') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('kategoriwisata.index')}}" class="btn 
btn-danger">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
    @stop