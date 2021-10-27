{{-- @dd($posts) --}}
{{-- untuk mengecek apakah variabel bisa diakses --}}

@extends('layouts/main')

@section('container')
    <h1>Post Category: {{ $title }}</h1>
    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>
            <h5>By: <a href="/author/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a></h5>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach

@endsection