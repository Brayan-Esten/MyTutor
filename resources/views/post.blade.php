@extends('layouts.main')

@section('container')
    <h1 class="mb-5 text-center mb-3">{{ $title }}</h1>


    {{-- search bar --}}
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/post">

                @if (request('category'))
                    <input type="hidden" name="category" value={{ request('category') }}>
                @endif

                @if (request('user'))
                    <input type="hidden" name="user" value={{ request('user') }}>
                @endif

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    {{ $data->links() }}

    @if ($data->count())

        {{-- main banner --}}

        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $data[0]->category->name }}" class="card-img-top"
                alt="{{ $data[0]->category->name }}">
            <div class="card-body text-center">
                <h3 class="card-title">

                    {{-- title onclick ke detail --}}
                    <a class="text-decoration-none text-dark" href="/post/{{ $data[0]->slug }}">
                        {{ $data[0]->title }}</>
                    </a>

                </h3>
                <p>
                    <small> By : 
                        {{-- user onclick ke author's post only --}}
                        <a class="text-decoration-none" href="/post?user={{ $data[0]->user->username }}">{{ $data[0]->user->name }}</a>
                        in

                        {{-- category onclick post berisi kategori tsb only--}}
                        <a class="text-decoration-none" href="/post?category={{ $data[0]->category->slug }}">
                            {{ $data[0]->category->name }}
                        </a> 
                        
                        {{-- post time --}}
                        {{ $data[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $data[0]->preview }}</p>

                {{-- onclick ke detail --}}
                <a class="text-decoration-none btn btn-primary" href="/post/{{ $data[0]->slug }}">Read More</a>
            </div>
        </div>


        <div class="container">
            <div class="row">
                @foreach ($data->skip(1) as $row)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.7)"><a
                                    class="text-decoration-none text-light"
                                    href="/post?category={{ $row->category->slug }}">
                                    {{ $row->category->name }}
                                </a></div>
                            <img src="https://source.unsplash.com/500x500?{{ $row->category->name }}"
                                class="card-img-top" alt="{{ $row->category->name }}" />
                            <div class="card-body">
                                <a class="text-decoration-none" href="/post/{{ $row->slug }}">
                                    <h5>{{ $row->title }}</h5>
                                    <p>
                                        <small>
                                            By : <a class="text-decoration-none"
                                                href="/post?user={{ $row->user->username }}">{{ $row->user->name }}</a>
                                            {{ $row->created_at->diffForHumans() }}
                                        </small>
                                    </p>
                                </a>

                                <p>{{ $row->preview }}</p>
                                <a href="/post/{{ $row->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found</p>
    @endif
@endsection
