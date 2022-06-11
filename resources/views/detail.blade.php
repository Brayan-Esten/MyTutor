@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                {{-- title --}}
                <h1>{{ $post->title }}</h1>

                    <p> 
                        By

                        {{-- author --}}
                        <a href="/post?username={{ $post->user->username }}">
                            {{ $post->user->name }}
                        </a>

                        in 

                        {{-- category --}}
                        <a href="/post?category={{ $post->category->slug }}">{{ $post->category->name }}</a>

                    </p>
                
                @if ($post->image)
                    <div style="max-height: 325px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif

                {{-- post's detail --}}
                <article class="my-3 fs-4">
                    <p>{!! $post->detail !!}</p>
                </article>

                {{-- back btn --}}
                <a href="/post">Back</a>
            </div>
        </div>
    </div>
@endsection
