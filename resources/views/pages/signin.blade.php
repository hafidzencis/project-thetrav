@extends('layouts.alternate')

@section('title')
    Sign In
@endsection

@section('content')
    <main>
    <!-- paket/travel -->
    <section class="section-sign-header"></section>
    <section class="section-sign-content">
    <div class="container">
        <div class="row">
        <div class="col-lg-10 justify-content-center ml-auto mr-auto mt-3">
            <div class="card card-details">
            <div class="sign-item">
                <img src="frontend/images/sign.png" alt="" class="img-sign d-none d-lg-block" />
                <div class="sign-user ml-5 mt-5">
                <h1>WELCOME BACK!</h1>
                <h3 class="pb-4">I know you want to little escape from stressful job? </h3>

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email"><h4>Email</h4></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror input-type" id="email"  name="email" aria-describedby="emailHelp" placeholder="Enter Email" />
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="invalid-feedback">
                                    {{ $error }}
                                </div> 
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group mt-4">
                        <label for="password"><h4>Password</h4></label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror input-type" name="password" id="password" placeholder="Password" />
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="invalid-feedback">
                                    {{ $error }}
                                </div> 
                            @endforeach
                        @endif
                    </div>

                    <button type="submit" class="btn btn-sign-up mt-3 ml-5 px-5 py-2"> SIGN IN </button>
                    
                </form>

                <div class="ml-4 mt-2 text-decoration-none">
                    <p>
                    Don't have an account?
                    <a href="{{ route('register')}}" class="text-decoration-none"> <span> Sign Up </span></a>
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>

        </div>
    </div>
    </section>
    </main>
@endsection