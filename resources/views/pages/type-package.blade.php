@extends('layouts.app')

@section('title')
    Type Package
@endsection

@section('content')

        <main>
            <!-- card vacation -->
            <section class="section-popular-content" id="popularContent">
                <div class="container">
                        <div class="justify-content-center text-center">
                            <h2>{{ $items->name}}</h3>
                        </div>
                    <div class="section-popular-travel row justify-content-center mt-5" >
                        <!-- card 1 -->
                        @if($items->travel_packages != null)
                            @foreach ($items->travel_packages as $pcs)
                                <div class="col-sm-6 col-md-4 col-lg-3  mt-3" >
                                    {{-- @dd($item) --}}
                                        <div class="card-travel text-center d-flex flex-column" style="background-image: 
                                            url('https://source.unsplash.com/1200x400?{{$items->name}}')">
                                            <div class="travel-name">{{ $pcs->title}}</div>
                                            <div class="travel-province">{{ $pcs->location}}</div>
                                            <div class="travel-button mt-auto">
                                            <a href=" {{ route('detail', $pcs->slug)}} " class="btn btn-travel-details px-3"> View Details </a>
                                        </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <h3> Data Not Found</h3>        
                        @endif
                    </div>
                </div>
            </section>
        </main>
    
@endsection