@extends('layouts.main')

@section('container')

        <h5>{{ $data->name }}</h5>
        <p>{{ $data->body }}</p>

        <a href="/book">Back</a>

        <br>
@endsection