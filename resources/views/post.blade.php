
@extends('layouts.main')

@section('container')

    @foreach ($data as $row)
    <article class="mb-5 pb-4 border-bottom">

        <a class="text-decoration-none" href="/post/{{ $row->slug }}"><h5>{{ $row->title }}</h5></a>

        <p>
            By : {{ $row->user->name }} <br>
            <a class="text-decoration-none" href="/category/{{ $row->category->slug }}">
                {{ $row->category->name }}
            </a>
        </p>

        <p>{{ $row->preview }}</p>

        <a class="text-decoration-none" href="/post/{{ $row->slug }}">Read more ...</a>
    
    </article>
    @endforeach

@endsection