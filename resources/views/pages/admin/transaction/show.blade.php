@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Transaksi Details {{$items->user->name}}</h1>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <tr>
                            <th> ID </th>
                            <td>{{ $items->uuid_generate}}</td>
                        </tr>
                        <tr>
                            <th> Paket Travel</th>
                            <td> {{ $items->travel_packages->title }}</td>
                        </tr>
                        <tr>
                            <th> Pembeli </th>
                            <td> {{ $items->user->name}}</td>
                        </tr>
                        <tr>
                            <th>Additional Visa</th>
                            <td>@currency($items->additional_visa) </td>
                        </tr>
                        <tr>
                            <th> Total Transaksi </th>
                            <td>@currency($items->transaction_total) </td>
                        </tr>
                        <tr>
                            <th> Status Transaksi </th>
                            <td> {{ $items->transaction_status }}</td>
                        </tr>
                        <tr>
                            <th> Pembelian </th>
                            <td>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th> Nationality </th>
                                        <th>Visa</th>
                                        <th>DOE Passport</th>
                                    </tr>
                                    <tr>
                                        @foreach ($items->details as $detail)
                                            <tr>
                                                <td> {{ $loop->iteration}}</td>
                                                <td> {{ $detail->username}}</td>
                                                <td> {{ $detail->nationality}}</td>
                                                <td> {{ $detail->is_visa ? '30 Days':'N/A'}}</td>
                                                <td> {{ $detail->doe_passport}}</td>
                                            </tr>
                                        @endforeach
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>


        
    </div>    
@endsection