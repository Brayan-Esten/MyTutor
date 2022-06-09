@extends('layouts.main')


@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal">Please Log In</h1>
            <form>
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
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
