@extends('layouts.main')

@section('container')
  <h1>Halaman About</h1>
  <h3>{{ $name }}</h3>
  <p>{{ $campus }}</p>
  <img src="img/{{ $image }}"  alt="{{ $name }}" width=200>
@endsection