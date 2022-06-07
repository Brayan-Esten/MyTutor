@extends('layouts.main')

@section('container')

        <h5>{{ $post->title }} - {{ $post->user->name }}</h5>

        <h6>
                <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </h6>

        <p>{!! $post->detail !!}</p>

        <a href="/post">Back</a>

        <br>
@endsection