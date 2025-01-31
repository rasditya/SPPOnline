@extends('layouts.admin')

@section('judul', 'Tambah Profil Wali Siswa')

@section('content')
<form action="/walisiswa" method="POST">
    @csrf
<div class="form-group p-3">
    <label>Nama Lengkap </label>
    <input type="text" name='nama' class="form-control" placeholder="Masukan Nama Lengkap">
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
</div>

<div class="form-group p-3">
    <label>Nomor Absen </label>
    <input type="number" name='noabs' class="form-control" placeholder="Masukan Nomor absen">
        @error('noabs')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
</div>

<div class="form-group p-3">
    <label>Alamat </label>
    <input type="text" name='alamat' class="form-control" placeholder="Masukan Alamat">
        @error('alamat')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
</div>

<div class="p-3">
<button type="submit" class="btn btn-primary ">Submit</button>
</div>

</form>
@endsection