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
                <h1>Labuan Bajo</h1>
                <p>This island is one of the best islands in the Komodo National Park area, which is increasingly popular.</p>
                <div class="gallery">
                    <!-- thumbnail besar-->
                    <div class="xzoom-container">
                    <img src="frontend/images/pict-1.jpg" class="xzoom" id="xzoom-default" xoriginal="frontend/images/pict-1.jpg" />
                    </div>
                    <!-- thumbnail kecil -->
                    <div class="xzoom-thumbs">
                    <a href="frontend/images/pict-1.jpg">
                        <img src="frontend/images/pict-1.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/pict-1.jpg" />
                    </a>
                    <a href="frontend/images/pict-2.jpg">
                        <img src="frontend/images/pict-2.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/pict-2.jpg" />
                    </a>
                    <a href="frontend/images/pict-3.jpg">
                        <img src="frontend/images/pict-3.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/pict-3.jpg" />
                    </a>
                    <a href="frontend/images/pict-4.jpg">
                        <img src="frontend/images/pict-4.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/pict-4.jpg" />
                    </a>
                    <a href="frontend/images/pict-5.jpg">
                        <img src="frontend/images/pict-5.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/pict-5.jpg" />
                    </a>
                    </div>
                </div>
                <h2>Tentang Kami</h2>
                <p>
                    Padar Labuan Bajo Island is indeed one of the best islands in Indonesia with stunning natural scenery.Talking about the beauty of the island of Flores is endless. This island is one of the best tourist destinations when
                    sailing on a Komodo tour with its stunning natural scenery. One of the beauties of Flores Komodo is Padar Island Labuan Bajo.
                </p>
                <p>This island is one of the best islands in the Komodo National Park area, which is increasingly popular.</p>
                <div class="features row">
                    <div class="col-md-4">
                    <div class="description">
                        <img src="frontend/images/ic_event.png" alt="" class="features-image" />
                        <div class="description">
                        <h3>Event</h3>
                        <p>Komodo Trip</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4 border-left">
                    <div class="description">
                        <img src="frontend/images/ic_lang.png" alt="" class="features-image" />
                        <div class="description">
                        <h3>Language</h3>
                        <p>Bahasa Indonesia</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4 border-left">
                    <div class="description">
                        <img src="frontend/images/ic_food.png" alt="" class="features-image" />
                        <div class="description">
                        <h3>Food</h3>
                        <p>Jagung Bose</p>
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
                    <img src="frontend/images/pict-triper-1.png" class="image-member" />
                    <img src="frontend/images/pict-triper-2.png" class="image-member" />
                    <img src="frontend/images/pict-triper-3.png" class="image-member" />
                    <img src="frontend/images/pict-triper-4.png" class="image-member" />
                    <img src="frontend/images/pict-triper-5.png" class="image-member" />
                    <img src="frontend/images/pict-triper-6.png" class="image-member" />
                </div>
                <hr />
                <h2>Trip Informations</h2>
                <table class="trip-information">
                    <tr>
                    <th width="50%">Date of Departure</th>
                    <td width="50%" class="text-right">22 Feb 2022</td>
                    </tr>
                    <tr>
                    <th width="50%">Duration</th>
                    <td width="50%" class="text-right">4D 3N</td>
                    </tr>
                    <tr>
                    <th width="50%">Type of Trip</th>
                    <td width="50%" class="text-right">Open Public</td>
                    </tr>
                    <tr>
                    <th width="50%">Price</th>
                    <td width="50%" class="text-right">$100,00/Person</td>
                    </tr>
                </table>
                </div>
                <div class="join-container">
                <a href="{{url('checkout')}}" class="btn btn-block btn-join-now mt-3 py-2"> Join Now </a>
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