@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $title }}</h1>

    @if ($data->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $data[0]->category->name }}" class="card-img-top"
                alt="{{ $data[0]->category->name }}">
            <div class="card-body text-center">
                <h3 class="card-title">
                    <a class="text-decoration-none text-dark" href="/post/{{ $data[0]->slug }}">
                        {{ $data[0]->title }}</>
                    </a>
                </h3>
                <p><small>
                        By : <a class="text-decoration-none"
                            href="/author/{{ $data[0]->user->username }}">{{ $data[0]->user->name }}</a>
                        in
                        <a class="text-decoration-none" href="/category/{{ $data[0]->category->slug }}">
                            {{ $data[0]->category->name }}
                        </a> {{ $data[0]->created_at->diffForHumans() }}
                    </small></p>
                <p class="card-text">{{ $data[0]->preview }}</p>
                <a class="text-decoration-none btn btn-primary" href="/post/{{ $data[0]->slug }}">Read More</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($data->skip(1) as $row)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.7)"><a class="text-decoration-none text-light" href="/category/{{ $row->category->slug }}">
                            {{ $row->category->name }}
                        </a></div>
                        <img src="https://source.unsplash.com/500x500?{{ $row->category->name }}" class="card-img-top"
                            alt="{{ $row->category->name }}" />
                        <div class="card-body">
                            <a class="text-decoration-none" href="/post/{{ $row->slug }}">
                                <h5>{{ $row->title }}</h5>
                                <p>
                                    <small>
                                        By : <a class="text-decoration-none"
                                            href="/author/{{ $row->user->username }}">{{ $row->user->name }}</a>
                                        {{ $row->created_at->diffForHumans() }}
                                    </small>
                                </p>
                            </a>

                            <p>
                                By : <a href="/author/{{ $row->user->username }}">{{ $row->user->name }} </a><br>
                                <a class="text-decoration-none" href="/category/{{ $row->category->slug }}">
                                    {{ $row->category->name }}
                                </a>
                            </p>

                            <p>{{ $row->preview }}</p>
                            <a href="/post/{{ $row->slug }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
