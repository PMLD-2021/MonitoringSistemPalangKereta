<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F08200;">
    <div class="container d-flex justify-content-end">
        <ul class="navbar-nav">
            <li class="nav-item p-1">
                <a class="nav-link active text-white" href="/notification"><i class="fas fa-bell fa-lg"></i></a>
            </li>
            <li class="nav-item p-1">
                <form action="/logout" method="post">
                    @csrf
                    <button class="btn text-white"><i class="fas fa-door-open fa-lg"></i></button>
                </form>
            </li>
        </ul>
    </div>
</nav>