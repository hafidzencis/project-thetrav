@extends('layouts.app')

@section('title')
    THETRAV
@endsection

@section('content')

        <!-- header -->
        <header class="text-center">
            <h1 class="mt-3">
                Easily Explore The Beautiful World
                <br />
                With ONE - CLICK
            </h1>

            <p class="mt-3">
                You will see beautiful
                <br />
                moment you never see before
            </p>

            <a href="#popular" class="btn btn-get-started px-4 mt-4"> Get started </a>
        </header>

        <!-- content -->
        <main>
            <!-- statistic -->
            <div class="container">
                <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>7</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3K</h2>
                    <p>Destination</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>7</h2>
                    <p>Partners</p>
                </div>
                </section>
            </div>

            <!-- wisata popular -->
            <section class="section-popular" id="popular">
                <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                    <h2>Popular Vacation</h2>
                    <br />
                    <p>good memories make you feel happy</p>
                    </div>
                </div>
                </div>
            </section>

            <!-- card vacation -->
            <section class="section-popular-content" id="popularContent">
                <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <!-- card 1 -->
                    @foreach ($item as $pcs)
                        
                    <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: 
                        url('{{ $pcs->galleries->count() ? Storage::url($pcs->galleries->first()->image) : ' ' }}')">
                        <div class="travel-name">{{ $pcs->title}}</div>
                        <div class="travel-province">{{ $pcs->location}}</div>
                        <div class="travel-button mt-auto">
                        <a href=" {{ route('detail', $pcs->slug)}} " class="btn btn-travel-details px-3"> View Details </a>
                        </div>
                    </div>
                    </div>
                    @endforeach

                </div>
                </div>
            </section>

            <!-- network team -->
            <section class="section-networks" id="networks">
                <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    <h2>NETWORKS</h2>
                    <br />
                    <p>Compaines not just bussines but family</p>
                    </div>
                    <div class="col-md-8 text-center">
                    <img src="frontend/images/networks.jpg" alt="networks-image" class="img-partner" />
                    </div>
                </div>
                </div>
            </section>

            <!-- testimonials heading -->
            <section class="section-testimonials-heading" id="testimonialsHeading">
                <div class="container">
                <div class="row">
                    <div class="col text-center">
                    <h2>MAKE MOMENTS WITH YOUR LOVE</h2>
                    <br />
                    <p>
                        every moments cannot be
                        <br />
                        repeated just let it go
                    </p>
                    </div>
                </div>
                </div>
            </section>

            <!-- testimonial-person and button -->
            <div class="section section-testimonials-content" id="testimonialsContent">
                <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial-person d-flex flex-column text-center">
                        <div class="testimonial-content">
                        <img src="frontend/images/foto-testi-1.jpg" alt="foto-testi-1" class="mb-4 rounded-circle" />
                        <h3 class="mb-4">Hafidz Febrian</h3>
                        <p class="testimonial">"the moments in every vacation cannot forget,like playing together, eat together"</p>
                        </div>
                        <hr />
                        <p class="trip mt-2">Trip to Garuda Wisnu Kencana</p>
                        <br />
                        <p class="trip trip-down">Bali</p>
                    </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial-person text-center d-flex flex-column">
                        <div class="testimonial-content">
                        <img src="frontend/images/foto-testi-2.jpg" alt="foto-testi-1" class="mb-4 rounded-circle" />
                        <h3 class="mb-4">Zaskia Gotik</h3>
                        <p class="testimonial">"the trip was amazing and I saw something beautiful in that island"</p>
                        </div>
                        <hr />
                        <p class="trip mt-2">Trip to Labuan Bajo</p>
                        <br />
                        <p class="trip trip-down">NTT</p>
                    </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial-person text-center d-flex flex-column">
                        <div class="testimonial-content">
                        <img src="frontend/images/foto-testi-3.jpg" alt="foto-testi-1" class="mb-4 rounded-circle" />
                        <h3 class="mb-4">Indra Kenz</h3>
                        <p class="testimonial">"I loved it when the view of between samosir and toba "</p>
                        </div>
                        <hr />
                        <p class="trip mt-2">Trip to Toba Lake</p>
                        <br />
                        <p class="trip trip-down">Sumatera Utara</p>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                    <a href="#" class="btn btn-need-help px-4 mx-4 mt-4">I Need Help</a>
                    <a href="{{ route('register')}}" class="btn btn-get-started px-4 mx-4 mt-4">Get Started</a>
                    </div>
                </div>
                </div>
            </div>
        </main>
    
@endsection