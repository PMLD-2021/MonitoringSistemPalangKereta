@extends('layouts.secondary')

@section('container')
<div class="container">
    <h1 class="text-center mt-5">Account Registration</h1>
    <small class="d-block text-center">Monitoring Sistem Palang Kereta Api</small>
    <div class="row">
        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5 form-registration">
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-floating mb-4">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old ('name') }}">
                            <label for="name">Name</label>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old ('username') }}">
                            <label for="username">Username</label>
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-4">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old ('email') }}">
                            <label for="email">Email</label>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary btn-login btn-lg" type="submit">Register</button>
                        </div>
                    </form>
                    <small class="d-block text-center mt-3">Already registered? <a href="/">Login Now!</a></small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection