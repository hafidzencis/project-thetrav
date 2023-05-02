<!-- navbar -->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a href="{{ route('home')}}" class="navbar-brand">
        <img src=" {{ url('frontend/images/logothetrav.png')}}" alt="" srcset="" />
        </a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto mr-3">

            @if (Auth::guest() || Auth::user()->roles != 'ADMIN' )

            @else
            <li class="nav-item mx-md-2">
                <a href=" {{ route('dashboard')}} " class="nav-link "> Kelola Admin </a>
            </li>
            @endif

            <li class="nav-item mx-md-2">
                <a href=" {{ route('home')}} " class="nav-link {{ Route::is('home') ? 'active' : ' '  }}"> Home </a>
            </li>

            <li class="nav-item dropdown mx-md-2">
                <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown"> Type Paket Travel </a>
            <div class="dropdown-menu">
            @foreach ($item_pt as $nav)
                <a href="{{ route('type-package-user',$nav->id)}}" class="dropdown-item">{{ $nav->name}}</a>
            @endforeach
                </div>  
            </li>

            <li class="nav-item dropdown mx-md-2">
                <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown"> Place Travel </a>
            <div class="dropdown-menu">
            @foreach ($item as $nav)
                <a href="{{ route('detail',$nav->slug)}}" class="dropdown-item">{{ $nav->title}}</a>
            @endforeach
                </div>  
            </li>
        
            <li class="nav-item mx-md-2">
                @if (Route::is('home'))
                <a href="#testimonialsContent" class="nav-link"> Testimonial </a>
                @else
                <a href="{{ route('home')}}" class="nav-link"> Testimonial </a>
                @endif
                
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