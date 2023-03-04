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
                <div class="form-group">
                    <label for="inputName"><h4>Email</h4></label>
                    <input type="" class="form-control input-type" id="inputName" aria-describedby="emailHelp" placeholder="Enter Name" />
                </div>
                <div class="form-group mt-4">
                    <label for="exampleInputPassword"><h4>Password</h4></label>
                    <input type="password" class="form-control input-type" id="exampleInputPassword" placeholder="Password" />
                </div>
                <a href="signup.html" class="btn btn-sign-up mt-3 ml-5 px-5 py-2"> SIGN IN</a>
                <div class="ml-4 mt-2">
                    <p>
                    Don't have an account?
                    <a href="signup.html"> <span> Sign Up </span></a>
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