@extends('layouts.main')

@section('container')
    <h2>Category : {{ $category }}</h2>

    @foreach ($data as $row)
        <a href="/book/{{ $row->slug }}">
            <h5>{{ $row->name }}</h5>
        </a>
        <p>{{ $row->exert }}</p>
        <br>
    @endforeach
@endsection
