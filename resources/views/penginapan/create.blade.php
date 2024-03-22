@extends('adminlte::page')
@section('title', 'Tambah Penginapan')
@section('content_header')<h1 class="m-0 text-dark">Tambah Penginapan</h1>
@stop
@section('content')
<form action="{{route('penginapan.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_penginapan">Nama Penginapan</label>
                        <input type="text" class="form-control 
@error('nama_penginapan') is-invalid @enderror" id="nama_penginapan" placeholder="Masukan Nama penginapan" name="nama_penginapan"
                            value="{{old('nama_penginapan')}}">
                        @error('nama_penginapan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Wisata</label>
                        <input type="text" class="form-control 
@error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Tulis Deskripsi Wisata"
                            name="deskripsi" value="{{old('deskripsi')}}">
                        @error('deskripsi') <span class="text-danger">{{$message}}</span> @enderror
                    </div>


                    <div class="form-group">
                        <label for="fasilitas">fasilitas</label>
                        <input type="text" class="form-control 
@error('fasilitas') is-invalid @enderror" id="fasilitas" placeholder="Tulisakan Fasilitas" name="fasilitas"
                            value="{{old('fasilitas')}}">
                        @error('fasilitas') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                   

                        <div class="form-group">
                            <label for="foto1">Foto 1</label>
                            <img class="img-thumbnail d-block  border-0" name="tampil1" width="15%" id="tampil1">
                            <input type="file" class="form-control 
    @error('foto1') is-invalid @enderror" id="foto1" placeholder="Masukan Foto" name="foto1" value="{{old('foto1')}}">
                            @error('foto1') <span class="text-danger">{{$message}}</span> @enderror
                        </div>


                        <div class="form-group">
                            <label for="foto2">Foto 2</label>
                            <img class="img-thumbnail d-block  border-0" name="tampil2" width="15%" id="tampil2">
                            <input type="file" class="form-control 
    @error('foto2') is-invalid @enderror" id="foto2" placeholder="Masukan Foto" name="foto2" value="{{old('foto2')}}">
                            @error('foto2') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="foto3">Foto 3</label>
                            <img class="img-thumbnail d-block  border-0" name="tampil3" width="15%" id="tampil3">
                            <input type="file" class="form-control 
    @error('foto3') is-invalid @enderror" id="foto3" placeholder="Masukan Foto" name="foto3" value="{{old('foto3')}}">
                            @error('foto3') <span class="text-danger">{{$message}}</span> @enderror
                        </div>


                        <div class="form-group">
                            <label for="foto4">Foto 4</label>
                            <img class="img-thumbnail d-block  border-0" name="tampil4" width="15%" id="tampil4">
                            <input type="file" class="form-control 
    @error('foto4') is-invalid @enderror" id="foto4" placeholder="Masukan Foto" name="foto4" value="{{old('foto4')}}">
                            @error('foto4') <span class="text-danger">{{$message}}</span> @enderror
                        </div>


                        <div class="form-group">
                            <label for="foto5">Foto 5</label>
                            <img class="img-thumbnail d-block  border-0" name="tampil5" width="15%" id="tampil5">
                            <input type="file" class="form-control 
    @error('foto5') is-invalid @enderror" id="foto5" placeholder="Masukan Foto" name="foto5" value="{{old('foto5')}}">
                            @error('foto5') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('obyekwisata.index')}}" class="btn btn-danger">
                        Batal
                    </a></div>
            </div>
        </div>
    </div>
  
    @stop
    @push('js')
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });
        //Fungsi pilih untuk memilih data bidang studi dan mengirimkan data Bidang Studi dari Modal ke form tambah
      
    </script>


    <script>
        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#tampil1').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#foto1").change(function () {
            readURL1(this);
        });
    </script>


    <script>
        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#tampil2').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#foto2").change(function () {
            readURL2(this);
        });
    </script>

    <script>
        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#tampil3').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#foto3").change(function () {
            readURL3(this);
        });
    </script>

    <script>
        function readURL4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#tampil4').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#foto4").change(function () {
            readURL4(this);
        });
    </script>


    <script>
        function readURL5(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#tampil5').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#foto5").change(function () {
            readURL5(this);
        });
    </script>

    @endpush