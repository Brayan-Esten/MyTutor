@extends('layouts.main')


@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <main class="form-registration w-100 m-auto mt-5">

                <h3 class="h3 mb-5 fw-bold text-center">
                    Register your account
                </h3>

                <form action="/register" method="post">
                    @csrf

                    {{-- name --}}
                    <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                        id="name" placeholder="Your Name" name="name"
                        value="{{ old('name') }}" autofocus>
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- email --}}
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="example.com" name="email" 
                        value="{{ old('email') }}">
                        <label for="email">Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- password --}}
                    <div class="form-floating">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">REGISTER</button>

                </form>

                <small class="d-block text-center mt-4">
                    Already registered ? <a href="/login">login</a>
                </small>

            </main>
        </div>
    </div>
@endsection
