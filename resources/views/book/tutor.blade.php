@extends('layouts.main')

@section('container')

    @foreach ($tutors as $tutor)
        {{ $tutor->name }} <br>
    @endforeach

@endsection