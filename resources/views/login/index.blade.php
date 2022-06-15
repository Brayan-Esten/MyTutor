@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">

                {{-- after successful registration --}}
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="bi bi-check-circle-fill"></i>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                {{-- after failed attempt to login --}}
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-x-circle-fill"></i>
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <main class="form-signin w-100 m-auto mt-5">

                    <h3 class="h3 mb-5 fw-bold text-center">
                        Login to your account
                    </h3>

                    <form action="/login" method="post">
                        @csrf

                        {{-- email --}}
                        <div class="form-floating">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" autofocus required value={{ old('email') }}>

                            <label for="email">Email Address</label>
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>

                        {{-- password --}}
                        <div class="form-floating">
                            <input type="password" class="form-control" 
                            id="password" placeholder="password" name="password" required>
                            <label for="password">Password</label>
                        </div>

                        <button type="submit" class="w-100 btn btn-lg btn-primary mt-4">
                            LOGIN
                        </button>

                    </form>

                    <small class="d-block text-center mt-4">
                        Not registered ? register <a href="/register">here</a>
                    </small>
                    
                </main>

            </div>
        </div>
    </div>
@endsection
