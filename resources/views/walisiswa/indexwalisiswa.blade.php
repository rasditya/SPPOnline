@extends('layouts.admin')

@section('judul')
Data Pelajar
@endsection
  <!-- Page Heading -->

@section('content') 

<div class="p-3">
  <a href="/tambahwalisiswa" class="btn btn-primary my-3"> Tambah Data 
  Pelajar</a>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">No Absen</th>
        <th scope="col">Alamat</th>
        <th scope="col">Aksi</th>
      </tr>
      </thead>

      <tbody>
        @forelse ($siswa as $key => $value)
            <tr>
              <th scope="row">{{$key + 1}}</th>
              <td>{{$value->nama_siswa}}</td>
              <td>{{$value->no_absen}}</td>
              <td>{{$value->Alamat}}</td>
              <td class="mr-3">
                <a href="/walisiswa/{{$value->id}}" class="btn btn-info">Show</a>
                <a href="/walisiswa/{{$value->id}}/edit" class="btn btn-success">Edit</a>
                <a href="/walisiswa/{{$value->id}}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
              </td>
            </tr>
      </tbody>
              @empty
            <tr colspan="6">
              <td>No Data</td>
            </tr>
        @endforelse
    </table>
</div>
@endsection


<link rel="stylesheet" type="text/css" 
href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>