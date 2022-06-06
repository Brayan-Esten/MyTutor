@extends('layouts.main')

@section('container')

        <h5>{{ $data['nama'] }}</h5>
        <h5>{{ $data['mapel'] }}</h5>
        <h5>{{ $data['status_akademik'] }}</h5>

        <a href="/book">Back</a>

        <br>
@endsection