@extends('layouts.admin')

@section('judul')
    Detail Profil Pelajar
@endsection

@section('content')

<div class="p-3">
<div class="card" style="width: 24rem;">
    <div class="card-body ">
        <h5 class="card-title"> Detail Data Profil Pelajar ke {{$siswa->id}}</h5>
        <h4>{{$siswa->nama_siswa}}</h4>
        <h4>{{$siswa->no_absen}}</h4>
        <h5>{{$siswa->Alamat}}</h5>
    </div>
</div>
<a href="/walisiswa" class="btn btn-primary my-3">Back</a>
</div>

@endsection