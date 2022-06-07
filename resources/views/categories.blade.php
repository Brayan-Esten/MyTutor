@extends('layouts.main')

@section('container')

    @foreach ($data as $row)
        <ul>
            <li>
                <a href="/category/{{ $row->slug }}">
                    <h5>{{ $row->name }}</h5>
                </a>
            </li>
        </ul>
    @endforeach
@endsection
