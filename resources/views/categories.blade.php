@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row">
            @foreach ($data as $row)
            <div class="col-md-4">
                <a href="/post?category={{ $row->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500?{{ $row->name }}" class="card-img" alt="{{ $row->name }}">
                    <div class="card-img-overlay d-flex justify-content-center align-items-center p-0">
                        <h5 class="card-title fs-2 text-center py-4 flex-fill" style="background-color: rgba(0,0,0,0.7)">{{ $row->name }}</h5>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

@endsection
