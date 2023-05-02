@extends('layouts.alternate')

@section('title')
    Checkout    
@endsection

@section('content')
    <!-- main content -->
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
                <li class="breadcrumb-item">Details</li>
                <li class="breadcrumb-item active">Checkout</li>
                </ul>
            </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h2>Who's going ?</h2>
                <p>Trip to {{ $item->travel_packages->title}}, {{ $item->travel_packages->location}}</p>
                <div class="attendee">
                <table class="table table-responsive-sm text-center">
                    <thead>
                    <tr>
                        <td>Picture</td>
                        <td>Name</td>
                        <td>Nationality</td>
                        <td>VISA</td>
                        <td>Passport</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse ($item->details as $detail)
                            <tr>
                                <td><img src=" https://ui-avatars.com/api/?name={{ $detail->username}} " width="60" class="rounded-circle" /></td>
                                <td class="align-middle">{{ $detail->username}}</td>
                                <td class="align-middle">{{ $detail->nationality}}</td>
                                <td class="align-middle">{{ $detail->is_visa ? '30 Days' : 'N/A'}}</td>
                                <td class="align-middle">{{ \Carbon\Carbon::createFromDate($detail->doe_passport) >
                                                            \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}</td>
                                <td class="align-middle">
                                <a href="{{ route('checkout-remove', $detail->id) }}">
                                    <img src="{{url('frontend/images/ic_remove.png')}}  " alt="" width="15" />
                                </a>
                                </td>
                            </tr>
                        @empty
                            
                        
                            <tr>
                                <td colspan="6" class="text-center">
                                    No visitor
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
                </div>
                <div class="member mt-3">
                <h2>Add Member</h2>
                <form action="{{ route('checkout-create',$item->id)}}" class="form-inline" method="POST">
                    <!-- this label using for disability because sr-only have
                    function text speech  -->
                    @csrf
                        {{-- username --}}
                        <label for="username" class="sr-only">Name</label>
                        <input type="text" name="username" class="form-control input-cus mb-2 mr-sm-2" id="username" placeholder="Username" />

                        <label for="nationality" class="sr-only">Nationality</label>
                        <input type="text" name="nationality" class="form-control mb-2 mr-sm-2"
                        style="width: 60px" id="nationality" placeholder="NAT" />

                        <!-- Visa -->
                        <label for="is_visa" class="sr-only"> Visa </label>
                        <select name="is_visa" class="custom-select mb-2 mr-sm-2" id="is_visa">
                            <option value="VISA" selected>VISA</option>
                            <option value="1">30 Days</option>
                            <option value="0">N/A</option>
                        </select>

                        <!-- Passport Doe-->
                        <label for="doe_passport" class="sr-only">DOE Pasport</label>
                        <div class="input-group mb-2 mr-sm-2">
                        <input type="text"  class="form-control input-cus datepicker" id="doe_passport" name="doe_passport" placeholder="DOE Pasport" />
                        </div>

                        <!-- button -->
                        <button class="btn btn-add-member mb-2 mr-sm-2 px-4" type="submit">Add Now</button>
                </form>
                <!--  -->
                <h3 class="mt-4 mb-0" font-size="2">Note</h3>
                <p class="disclaimer mb-3">You are only able to invite member that has registered in thetrav</p>
                </div>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="card card-details card-right">
                <h2>Checkout Informations</h2>
                <table class="trip-informations">
                <tr>
                    <th width="50%">Members</th>
                    <td width="50%" class="text-right">{{ $item->details->count()}}</td>
                </tr>
                <tr>
                    <th width="50%">Additional VISA</th>
                    <td width="50%" class="text-right"> @currency($item->additional_visa) </td>
                </tr>
                <tr>
                    <th width="50%">Trip Price</th>
                    <td width="50%" class="text-right"> @currency($item->travel_packages->price )  / Person</td>
                </tr>
                <tr>
                    <th width="50%">Sub Total</th>
                    <td width="50%" class="text-right">@currency($item->transaction_total)</td>
                </tr>
                <tr>
                    <th width="50%">Total (+ Promo)</th>
                    <td width="50%" class="text-right">
                    <span class="text-blue"> @currency($item->transaction_total)</span>
                    </td>
                </tr>
                </table>
                <hr />
                <h2>Payment Instructions</h2>
                <p class="disclaimer=payment">Please complete the payment before you continue the trip</p>
                <div class="type-bank">
                <div class="bank-item pb-4">
                    <img src="{{url('frontend/images/ic_atm.png')}}  " alt="" class="bank-image" srcset="" />
                    <div class="description">
                    <h3>PT Thetrav ID</h3>
                    <h3>Bank Negara Indonesia</h3>
                    <h3>0992 7256 8901</h3>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="bank-item pb-4">
                    <img src=" {{url('frontend/images/ic_atm.png')}} " alt="" class="bank-image" srcset="" />
                    <div class="description">
                    <h3>PT Thetrav ID</h3>
                    <h3>Bank Central Asia</h3>
                    <h3>2342 7543 8903</h3>
                    </div>
                </div>
                </div>
            </div>

            <div class="join-container">
                <a href="{{ route('checkout-success' , $item->id )}}" class="btn btn-block btn-join-now mt-3 py-2"> I HAVE MADE PAYMENT </a>

            </div>
            <div class="text-center mt-3">
                <a href="{{ route('detail', $item->travel_packages->slug)}}" class="text-muted">
                CANCEL BOOKING
                </a>
            </div>
            </div>
        </div>
        </div>
    </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }} " />
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
        $(document).ready(function() {
        $(".datepicker").datepicker({
        format : 'yyyy-mm-dd',
        uiLibrary: "bootstrap4",
        icons: {
        rightIcon: '<img src="{{ url('frontend/images/ic_calender2x.png') }}" width="15" />',
            }
        });
    });
    </script>
@endpush

