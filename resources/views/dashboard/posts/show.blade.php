@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                {{-- title --}}
                <h1>{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-primary">
                    <span data-feather="arrow-left"></span>
                    Back
                </a>
                <a href="" class="btn btn-warning">
                    <span data-feather="edit"></span>
                    Edit
                </a>
                <a href="" class="btn btn-danger">
                    <span data-feather="x-circle"></span>
                    Delete
                </a>
                
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="img-fluid mt-3">

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
