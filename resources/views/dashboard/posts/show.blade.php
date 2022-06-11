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
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">
                    <span data-feather="edit"></span>
                    Edit
                </a>
                
                <form class="d-inline" action="/dashboard/posts/{{ $post->slug }}" method="post" >

                    {{-- bajak method --}}
                    @method('delete') 
                    @csrf

                    <button class="btn btn-danger" onclick="return confirm('Yakin ?')">
                        <span data-feather="x-circle"></span>
                        Delete
                    </button>

                </form>

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
