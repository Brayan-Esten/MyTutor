@extends('layouts.main')

@section('container')
    <h2>Category : {{ $category }}</h2>

    @foreach ($data as $row)
        <a href="/post/{{ $row->slug }}">
            <h5>{{ $row->title }}</h5>
        </a>
        <p>{{ $row->preview }}</p>
        <br>
    @endforeach
@endsection
