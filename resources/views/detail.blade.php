@extends('layouts.main')

@section('container')

        <h5>{{ $data->name }}</h5>
        <h6><a href="/category/{{ $data->category->slug }}">{{ $data->category->name }}</a></h6>
        <p>{{ $data->body }}</p>

        <a href="/book">Back</a>

        <br>
@endsection