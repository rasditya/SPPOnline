@extends('layouts.apk')

@section('content')
<div class="w-50 center border rounded px-3 py-3 mx-auto">
    <h1>Register</h1>
    
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="/sesi/create" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="name" value="{{ Session::get('name') }}" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">

        </div>
        
        <div class="mb-3 d-grid">
            <button name="submit" type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>

    @error('password')
    <div class="text-danger">{{ $message }}</div>
    @enderror

    @if($errors->any())
        <div class="text-danger">
            {{ $errors->first() }}
        </div>
    @endif

</div>
@endsection
