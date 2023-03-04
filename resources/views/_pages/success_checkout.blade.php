@extends('layouts.nofooter')

@section('title')
    Success Checkout
@endsection


@section('content')
<main>
    <div class="section-success d-flex align-item-center">
        <div class="col text-center">
        <img src=" {{url('frontend/images/ic_successcheckout.png')}}" alt="" class="img-successcheckout">
        <h3>YAY ! YOU ARE GOING TRIP</h3>
        <p>
            We've sent you email for trip
            <br />
            instruction please read it as well
        </p>
        <a href="{{url('/')}}" class="btn btn-to-homepage mt-3 px-4"> HOME PAGE </a>
        </div>
    </div>
</main>
@endsection