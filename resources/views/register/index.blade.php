@extends('layouts.main')


@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
            <form>
                {{-- name --}}
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top" id="name" placeholder="Name" name="name">
                    <label for="name">Name</label>
                </div>
                {{-- username --}}
                <div class="form-floating">
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                    <label for="username">Username</label>
                </div>
                {{-- email --}}
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                    <label for="email">Email</label>
                </div>
                {{-- password --}}
                <div class="form-floating">
                    <input type="password" class="form-control rounded-bottom" id="password" placeholder="Password" name="password">
                    <label for="password">Password</label>
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
