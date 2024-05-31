@extends('layouts.admin')

@section('judul')
  
@endsection

@section('content')
<div class="p-3">
    <h2>Edit Data Pelajar {{$siswa->id}} </h2>
        <form action="/walisiswa/{{$siswa->id}}" method="POST">
            @csrf
           @method('PUT')
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" value="{{$siswa->nama_siswa}}" id="nama" placeholder="Masukkan Nama Lengkap">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="noabs">No Absen</label>
                <input type="number" class="form-control" name="noabs" value="{{$siswa->no_absen}}" id="noabs" placeholder="Masukkan no absen">
                @error('noabs')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="{{$siswa->Alamat}}" id="alamat" placeholder="Masukkan Alamat">
                @error('alamat')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/walisiswa" class="btn btn-success my-3">Kembali</a>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
</div>

 
@endsection