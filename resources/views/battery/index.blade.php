@extends('layouts.main')

@section('container')

<div class="p-4">
    <a href="/home" class="btn active text-white px-4" style="background-color: #1D67B0;" role="button" aria-pressed="true"><i class="fas fa-chevron-left"></i> Back</a>
</div>
<div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3 p-4">
    <div class="col">
        <h5 class="fw-bold">Battery A</h5>
        <div class="card text-white mb-3" style="background-color: #1D67B0;">
            <div class="card-body">
                <h5 class="card-title text-center mb-3">Battery Capacity</h5>
                <div class="progress" style="height: 40px;">
                    <div class="progress-bar progress-bar-striped bg-success rounded-3" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <h5 class="fw-bold">Battery B</h5>
        <div class="card text-white mb-3" style="background-color: #1D67B0;">
            <div class="card-body">
                <h5 class="card-title text-center mb-3">Battery Capacity</h5>
                <div class="progress" style="height: 40px;">
                    <div class="progress-bar progress-bar-striped bg-warning rounded-3 text-dark progress-bar-animated" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><i class="fas fa-bolt"></i> 50%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <h5 class="fw-bold">Battery C</h5>
        <div class="card text-white mb-3" style="background-color: #1D67B0;">
            <div class="card-body">
                <h5 class="card-title text-center mb-3">Battery Capacity</h5>
                <div class="progress" style="height: 40px;">
                    <div class="progress-bar progress-bar-striped bg-warning rounded-3 text-dark" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <h5 class="fw-bold">Battery D</h5>
        <div class="card text-white mb-3" style="background-color: #1D67B0;">
            <div class="card-body">
                <h5 class="card-title text-center mb-3">Battery Capacity</h5>
                <div class="progress" style="height: 40px;">
                    <div class="progress-bar progress-bar-striped bg-warning rounded-3 text-dark" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <h5 class="fw-bold">Battery E</h5>
        <div class="card text-white mb-3" style="background-color: #1D67B0;">
            <div class="card-body">
                <h5 class="card-title text-center mb-3">Battery Capacity</h5>
                <div class="progress" style="height: 40px;">
                    <div class="progress-bar progress-bar-striped bg-success rounded-3" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <h5 class="fw-bold">Battery F</h5>
        <div class="card text-white mb-3" style="background-color: #1D67B0;">
            <div class="card-body">
                <h5 class="card-title text-center mb-3">Battery Capacity</h5>
                <div class="progress" style="height: 40px;">
                    <div class="progress-bar progress-bar-striped bg-warning rounded-3 text-dark" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <h5 class="fw-bold">Battery G</h5>
        <div class="card text-white mb-3" style="background-color: #1D67B0;">
            <div class="card-body">
                <h5 class="card-title text-center mb-3">Battery Capacity</h5>
                <div class="progress" style="height: 40px;">
                    <div class="progress-bar progress-bar-striped bg-danger rounded-3" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <h5 class="fw-bold">Battery H</h5>
        <div class="card text-white mb-3" style="background-color: #1D67B0;">
            <div class="card-body">
                <h5 class="card-title text-center mb-3">Battery Capacity</h5>
                <div class="progress" style="height: 40px;">
                    <div class="progress-bar progress-bar-striped bg-success rounded-3" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection