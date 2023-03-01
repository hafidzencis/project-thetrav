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
                <h2>Who's going ?</h2>
                <p>Trip to Labuan Bajo, NTT</p>
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
                    <tr>
                        <td><img src=" {{url('frontend/images/pict-triper-1.png')}} " width="60" /></td>
                        <td class="align-middle">Anggita Devi</td>
                        <td class="align-middle">USA</td>
                        <td class="align-middle">N/A</td>
                        <td class="align-middle">Active</td>
                        <td class="align-middle">
                        <a href="#">
                            <img src="{{url('frontend/images/ic_remove.png')}}  " alt="" width="15" />
                        </a>
                        </td>
                    </tr>

                    <tr>
                        <td><img src="{{url('frontend/images/pict-triper-2.png')}}  " width="60" /></td>
                        <td class="align-middle">Hafidz Febrian</td>
                        <td class="align-middle">CN</td>
                        <td class="align-middle">30 Days</td>
                        <td class="align-middle">Active</td>
                        <td class="align-middle">
                        <a href="#">
                            <img src="{{url('frontend/images/ic_remove.png')}}  " alt="" width="15" />
                        </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
                <div class="member mt-3">
                <h2>Add Member</h2>
                <form action="" class="form-inline">
                    <!-- this label using for disability because sr-only have
                    function text speech  -->
                    <label for="inputUsername" class="sr-only">Name</label>
                    <input type="text" name="username" class="form-control input-cus mb-2 mr-sm-2" id="inputUsername" placeholder="Username" />
                    <!-- Visa -->
                    <label for="inputVisa" class="sr-only"> Visa </label>
                    <select name="inputVisa" class="custom-select mb-2 mr-sm-2" id="inputVisa">
                    <option value="VISA" selected>VISA</option>
                    <option value="30 Days">30 Days</option>
                    <option value="N/A">N/A</option>
                    </select>
                    <!-- Passport Doe-->
                    <label for="inputDOEPasport" class="sr-only">DOE Pasport</label>
                    <div class="input-group mb-2 mr-sm-2">
                    <input type="text" class="form-control input-cus datepicker" id="DOEPasport" name="DOEPasport" placeholder="DOE Pasport" />
                    </div>
                    <!-- button -->
                    <button class="btn btn-add-member mb-2 mr-sm-2 px-4">Add Now</button>
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
                    <td width="50%" class="text-right">2 Person</td>
                </tr>
                <tr>
                    <th width="50%">Additional VISA</th>
                    <td width="50%" class="text-right">$180,00</td>
                </tr>
                <tr>
                    <th width="50%">Trip Price</th>
                    <td width="50%" class="text-right">$70,00 / Person</td>
                </tr>
                <tr>
                    <th width="50%">Sub Total</th>
                    <td width="50%" class="text-right">$340,00</td>
                </tr>
                <tr>
                    <th width="50%">Total (+ Promo)</th>
                    <td width="50%" class="text-right">
                    <span class="text-blue"> $320,00 </span>
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
                <a href="{{ route('success-checkout')}}" class="btn btn-block btn-join-now mt-3 py-2"> I HAVE MADE PAYMENT </a>
            </div>
            <div class="text-center mt-3">
                <a href="{{url('detail')}}" class="text-muted">
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
    <link rel="stylesheet" href="  {{ url('frontend/libraries/gijgo/css/gijgo.min.css')}} " />
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js')}}"></script>
    <script>
        $(".datepicker").datepicker({
    uiLibrary: "bootstrap4",
    icons: {
        rightIcon: '<img src="frontend/images/ic_calender2x.png" width="15" />',
        },
    });
    </script>
@endpush