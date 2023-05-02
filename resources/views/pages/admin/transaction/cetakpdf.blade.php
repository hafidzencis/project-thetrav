<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table, th, td {
        border:1px solid black;
        }   
    </style>
    <title>Generate PDF Transaction</title>

    <table  width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Username</th>
                <th>Additional Visa</th>
                <th>Transaction Total</th>
                <th>Transaction Status</th>
            </tr>
        </thead>
        <tbody>
                @forelse ($items as $item)
                <tr>
                    <td>{{ $item->uuid_generate}}</td>
                    <td>{{ $item->travel_packages->title}}</td>
                    <td>{{ $item->user->username}}</td>
                    <td>@currency($item->additional_visa) </td>
                    <td>@currency($item->transaction_total)</td>
                    <td>{{ $item->transaction_status}}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">
                        Data Kosong
                    </td>
                </tr>
                @endforelse
        </tbody>
    </table>
</head>
<body>
    
</body>
</html>
    {{-- <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Username</th>
                                <th>Additional Visa</th>
                                <th>Transaction Total</th>
                                <th>Transaction Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->uuid_generate}}</td>
                                    <td>{{ $item->travel_packages->title}}</td>
                                    <td>{{ $item->user->username}}</td>
                                    <td>@currency($item->additional_visa) </td>
                                    <td>@currency($item->transaction_total)</td>
                                    <td>{{ $item->transaction_status}}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center">
                                        Data Kosong
                                    </td>
                                </tr>
                                @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        
    </div>     --}}