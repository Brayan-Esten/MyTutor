
@extends('layouts.main')

@section('container')
    <h2>Book-a-Tutor</h2>

    @foreach ($data as $row)
        <a href="/book/{{ $row['slug'] }}"><h5>{{ $row['nama'] }}</h5></a>

        <h5>{{ $row['mapel'] }}</h5>
        <h5>{{ $row['status_akademik'] }}</h5>
        <br>
    @endforeach

@endsection