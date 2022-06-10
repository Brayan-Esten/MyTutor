@extends('layouts.main')


@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">

            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if(session()->has('logInError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('logInError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal">Please Log In</h1>
                <form action="/login" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" autofocus required value={{ old('email') }}>
                        <label for="email">Email address</label>
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">LOGIN</button>
                </form>
                <small class="d-block text-center mt-4">
                    Not registered ? register <a href="/register">here</a>
                </small>
            </main>
        </div>
    </div>
@endsection
