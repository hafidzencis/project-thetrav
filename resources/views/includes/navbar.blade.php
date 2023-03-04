<!-- navbar -->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a href="#" class="navbar-brand">
        <img src="frontend/images/logothetrav.png" alt="" srcset="" />
        </a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto mr-3">
            <li class="nav-item mx-md-2">
            <a href="#" class="nav-link active"> Home </a>
            </li>
            <li class="nav-item mx-md-2">
            <a href="#" class="nav-link"> Paket Travel </a>
            </li>
            <li class="nav-item dropdown mx-md-2">
            <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown"> Services </a>
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Link 1</a>
                <a href="#" class="dropdown-item">Link 2</a>
                <a href="#" class="dropdown-item">Link 3</a>
            </div>
            </li>
            <li class="nav-item mx-md-2">
            <a href="#" class="nav-link"> Testimonial </a>
            </li>
        </ul>
        <!-- Mobile Button -->
        {{-- <div class="form-inline d-sm-block d-md-none">
            <a href="/login" class="btn btn-login my-2 my-sm-0">Masuk</a>
        </div> --}}
        
        <form class="form-inline d-sm-block d-md-none" action="" method="POST">
            <button class="btn btn-login my-2 my-sm-0"></button>
        </form>

        <!-- Dekstop Button -->

        {{-- <div class="form-inline my-1 my-lg-0 d-none d-md-block">
            <a href="/login" class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">Masuk</a>
        </div> --}}
        @auth
        <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ route('logout')}}" method="POST">
            @csrf
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" onclick="alert('Yakin anda mau keluar?')">Keluar</button>
        </form>

        @else
        <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ route('login')}}" method="GET">
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" >Masuk</button>
        </form>
        @endauth
        </div>
    </nav>
</div>