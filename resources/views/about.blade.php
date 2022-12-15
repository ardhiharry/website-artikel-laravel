@extends('layouts.main')

@section('container')
    <h1>Welcome to About</h1>
    <h3>Halo, {{ $name }}</h3>
    <p>Email: {{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
@endsection