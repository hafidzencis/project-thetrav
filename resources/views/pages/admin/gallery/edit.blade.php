@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Galleryl {{$item->title}}</h1>
            </a>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{route('gallery.update',$item->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="travel_package_id">Paket Travel</label>
                        <select name="travel_package_id" id="travel_package_id" class="form-control">
                            <option value="{{ $item->travel_package_id }}"> Jangan Diubah</option>
                        @foreach ( $travel_packages as $travel_package)
                            <option value="{{ $travel_package->id }}"> {{$travel_package->title}}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                        <label for="image" class="mt-3">Image Previously</label> <br>

                        <img src="{{ asset('storage/'. $item->image )}}" width="300px">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"> Ubah </button>

                </form>
            </div>
        </div>
        
    </div>    
@endsection