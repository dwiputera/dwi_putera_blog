<!DOCTYPE html>
@extends('layouts/main')

@section('container')
    
    <h1>Halaman About</h1>
    {{-- <h3><?php echo $name; ?></h3> --}}
    {{-- bisa kaya diatas, bisa kaya dibawah, "=" bisa buat menggantikan php echo --}}
    {{-- <h3><?= $name; ?></h3> --}}
    <h3>{{ $name }}</h3>
    {{-- ini lebih baik dari cara sebelumnya karena bisa mencegah XSS attack --}}
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
    {{-- bahkan php echo bisa untuk attribute value --}}

@endsection

