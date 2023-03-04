@extends('layouts.alternate')

@section('title')
    Sign Up
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
                                    <h1>HELLO, REGISTRANT !</h1>
                                    <h3 class="pb-4">I know you want to little escape from stressful job? </h3>

                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    <form action="/register" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name"><h4>Name</h4></label>
                                            <input type="text" class="form-control input-type" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Name" />
                                        </div>
                                        <div class="form-group">
                                            <label for="email"><h4>Email address</h4></label>
                                            <input type="email" class="form-control input-type" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" />
                                        </div>
                                        <div class="form-group">
                                            <label for="password"><h4>Password</h4></label>
                                            <input type="password" class="form-control input-type" name="password" id="password" placeholder="Password" />
                                        </div>
                                        <div class="form-group">
                                            <label for="password_confirmation"><h4>Confirm Password</h4></label>
                                            <input type="password" class="form-control input-type" name="password_confirmation" id="password_confirmation" placeholder="Password" />
                                        </div>
                                        <button type="submit" class="btn btn-sign-up mt-3 ml-5 px-5 py-2">SIGN UP</button>
    
                                    </form>
                                    <div class="ml-5 mt-2">
                                    <p>
                                        Already have account?
                                        <a href="{{ route('login')}}"><span> Sign In </span></a>
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