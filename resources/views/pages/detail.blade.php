@extends('layouts.app')

@section('title')
    Detail
@endsection


@push('prepend-style')

    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css')}}" />
@endpush

@section('content')
<main>
    <!-- paket/travel -->
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
            <div class="col p-0">
                <nav>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">PAKET TRAVEL</li>
                    <li class="breadcrumb-item active">Details</li>
                </ul>
                </nav>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-8 pl-lg-0">
                <div class="card card-details">
                <h1>{{ $items->title}}</h1>
                <p>{{ $items->location }}</p>

                @if ( $items->galleries->count())
                    <div class="gallery">
                        <!-- thumbnail besar-->
                        <div class="xzoom-container">
                        <img src="{{ Storage::url($items->galleries->first()->image)}}" class="xzoom" id="xzoom-default" xoriginal="{{ Storage::url($items->galleries->first()->image)}}" />
                        </div>
                        <!-- thumbnail kecil -->
                            <div class="xzoom-thumbs">
                            @foreach ($items->galleries as $gallery)
                                <a href="{{ Storage::url($gallery->image)}}">
                                    <img src="{{ Storage::url($gallery->image)}}" class="xzoom-gallery" width="128" xpreview="{{ Storage::url($gallery->image)}}" />
                                </a>
                            @endforeach
                            </div>   
                    </div>
                @endif

                <h2>Tentang Kami</h2>
                <p>
                    {!! $items->about!!}
                </p>
                
                <div class="features row">
                    <div class="col-md-4">
                    <div class="description">
                        <img src="{{ url('frontend/images/ic_event.png')}} " alt="" class="features-image" />
                        <div class="description">
                        <h3>Event</h3>
                        <p>{{ $items->featured_event}}</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4 border-left">
                    <div class="description">
                        <img src=" {{ url('frontend/images/ic_lang.png')}} " alt="" class="features-image" />
                        <div class="description">
                        <h3>Language</h3>
                        <p>{{ $items->language}}</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4 border-left">
                    <div class="description">
                        <img src="{{ url('frontend/images/ic_food.png')}}  " alt="" class="features-image" />
                        <div class="description">
                        <h3>Food</h3>
                        <p>{{ $items->foods}}</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-details card-right">
                <h2>Members are going</h2>
                <div class="members my-2">
                    <!-- using image png width and height2x -->
                    <img src="{{ url('frontend/images/pict-triper-1.png')}}  " class="image-member" />
                    <img src="{{ url('frontend/images/pict-triper-2.png')}} " class="image-member" />
                    <img src="{{ url('frontend/images/pict-triper-3.png')}} " class="image-member" />
                    <img src="{{ url('frontend/images/pict-triper-4.png')}} " class="image-member" />
                    <img src="{{ url('frontend/images/pict-triper-5.png')}} " class="image-member" />
                    <img src="{{ url('frontend/images/pict-triper-6.png')}} " class="image-member" />
                </div>
                <hr />
                <h2>Trip Informations</h2>
                <table class="trip-information">
                    <tr>
                    <th width="50%">Date of Departure</th>
                    <td width="50%" class="text-right">{{ \Carbon\Carbon::parse($items->departure_date)->diffForHumans()}}</td>
                    </tr>
                    <tr>
                    <th width="50%">Duration</th>
                    <td width="50%" class="text-right">{{ $items->duration}}</td>
                    </tr>
                    <tr>
                    <th width="50%">Type of Trip</th>
                    <td width="50%" class="text-right">{{ $items->type_packages->name}}</td>
                    </tr>
                    <tr>
                    <th width="50%">Price</th>
                    <td width="50%" class="text-right">@currency($items->price) <br> / Person</td>
                    </tr>
                </table>
                </div>
                <div class="join-container">
                    @auth
                        <form action="{{ route('checkout-process', $items->id) }}" method="post">
                            @csrf
                            <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                                Join Now
                            </button>
                        </form>
                    @endauth
                    @guest
                        <a href="{{route('login')}}" class="btn btn-block btn-join-now mt-3 py-2">Login Now </a>
                    @endguest
                        
                
                </div>
            </div>
            </div>
        </div>
    </section>
</main>
@endsection



@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js')}}   "></script>
<script>
    $(document).ready(function () {
        $(".xzoom, .xzoom-gallery").xzoom({
        zoomWidth: 500,
        title: false,
        tint: "#333",
        Xoffset: 15,
        });
    });
</script>
</body>
</html>
@endpush