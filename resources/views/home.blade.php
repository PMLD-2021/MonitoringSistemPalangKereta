<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/style.css">

    <title>Monitoring Sistem Palang Kereta Api</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F08200;">
        <div class="container-fluid">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item p-1">
                    <a class="nav-link active text-white float-end" href="/"><i class="fas fa-door-open fa-lg"></i> Sign Out</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    <div class="container my-4">
        <div class="row">
            <div class="col-8">
                <div class="row p-3 pt-0">
                    <div class="col-6">
                        <div class="p-3 rounded-3 bg-primary text-light">
                            <h3 class="text-center">Gate</h3>
                            <div class="text-center mr-2">
                                <a href="#" class="btn btn-warning btn-lg" tabindex="-1" role="button" aria-disabled="true">Open</a>
                                <a href="#" class="btn btn-outline-light btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Close</a>
                            </div>
                            <!-- <div class="row gx-2">
                                <div class="col-6 text-center text-light bg-primary p-2 border">
                                    <p>Open</p>
                                </div>
                                <div class="col-6 text-center bg-warning p-2 border">
                                    <p>Close</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 rounded-3 bg-primary text-light">
                            <h3 class="text-center">Battery Capacity</h3>
                            <div class="text-center mr-2">
                                <a href="/battery" class="btn btn-warning btn-lg" tabindex="-1" role="button" aria-disabled="true">Check</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="p-3">Custom column padding</div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row p-3 bg-primary rounded-3">
                    <div class="col-12 bg-primary">
                        <div class="p-3 text-light text-center">
                            <h3>Train Position</h3>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 text-light text-center">
                            <h5>East</h5>
                            <div class="rounded-3 bg-danger text-light py-1">
                                <h6>Sensor 1</h6>
                            </div>
                            <div class="mt-4"><i class="fas fa-circle fa-3x text-danger "></i></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 text-light text-center">
                            <h5>West</h5>
                            <div class="rounded-3 bg-danger text-light py-1">
                                <h6>Sensor 1</h6>
                            </div>
                            <div class="mt-4"><i class="fas fa-circle fa-3x text-warning"></i></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 text-light text-center">
                            <div class="rounded-3 bg-danger text-light py-1">
                                <h6>Sensor 2</h6>
                            </div>
                            <div class="mt-4"><i class="fas fa-circle fa-3x text-danger "></i></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 text-light text-center">
                            <div class="rounded-3 bg-danger text-light py-1">
                                <h6>Sensor 2</h6>
                            </div>
                            <div class="mt-4"><i class="fas fa-circle fa-3x text-warning"></i></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 text-light text-center">
                            <div class="rounded-3 bg-danger text-light py-1">
                                <h6>Sensor 3</h6>
                            </div>
                            <div class="mt-4"><i class="fas fa-circle fa-3x text-danger "></i></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 text-light text-center">
                            <div class="rounded-3 bg-danger text-light py-1">
                                <h6>Sensor 3</h6>
                            </div>
                            <div class="mt-4"><i class="fas fa-circle fa-3x text-warning"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>