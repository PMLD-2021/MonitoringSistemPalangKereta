@extends('layouts.secondary')

@section('container')
<div class="container">
    <h1 class="text-center mt-5">Sistem Monitoring Palang Kereta Api</h1>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="row">
        <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <div class="text-center mb-4" style="color: #F08200;">
                        <i class="fas fa-user-circle fa-5x"></i>
                    </div>
                    <form action="/" method="post">
                        @csrf
                        <div class="form-floating mb-4">
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" autofocus required value="{{ old ('username') }}">
                            <label for="username">Username</label>
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" type="submit">Login</button>
                        </div>
                    </form>
                    <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection