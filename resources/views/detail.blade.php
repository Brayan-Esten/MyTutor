@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h5>{{ $post->title }} - <a href="/author/{{ $post->user->username }}">{{ $post->user->name }}</a></h5>
                <h6><a href="/post?category={{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">

                <article class="my-3 fs-4">
                    <p>{!! $post->detail !!}</p>
                </article>
                
                <a href="/post">Back</a>
            </div>
        </div>
    </div>
@endsection
