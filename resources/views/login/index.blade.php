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
    <div class="row">
        <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <div class="text-center mb-4" style="color: #F08200;">
                        <i class="fas fa-user-circle fa-5x"></i>
                    </div>
                    <form>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Username">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div class="d-grid">
                            <a href="/home" class="btn btn-primary btn-login btn-lg" type="submit">Login</a>
                        </div>
                    </form>
                    <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection