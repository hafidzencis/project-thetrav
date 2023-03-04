@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Paket Travel</h1>
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
                <form action="{{route('travel-package.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title"> Title </label>
                        <input type="text"  class="form-control" name="title" id="title" value="{{ old('title')}}" placeholder="title">
                    </div>
                    <div class="form-group">
                        <label for="location"> Location </label>
                        <input type="text" class="form-control" name="location" id="location" value="{{ old('location')}}" placeholder="location">
                    </div>
                    <div class="form-group">
                        <label for="about"> About </label>
                        
                        <textarea name="about" id="about" class="d-block w-100 form-control" 
                        rows="10" placeholder="about">{{{ old('about') }}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="featured_event"> Featured Event </label>
                        <input type="text" class="form-control" name="featured_event" id="featured_event" value="{{old('featuared_event')}}"  placeholder="featured event">
                    </div>
                    <div class="form-group">
                        <label for="language"> Language </label>
                        <input type="text" class="form-control" name="language" id="language" value="{{ old('language')}}"  placeholder="language">
                    </div>
                    <div class="form-group">
                        <label for="foods"> Foods </label>
                        <input type="text" class="form-control" name="foods" id="foods" value="{{ old('foods')}}" placeholder="foods">
                    </div>
                    <div class="form-group">
                        <label for="departure_date">Departure Date </label>
                        <input type="date" class="form-control" name="departure_date" id="departure_date" value="{{ old('departure_date')}}"  placeholder="departure date">
                    </div>
                    <div class="form-group">
                        <label for="duration"> Duration </label>
                        <input type="text" class="form-control" name="duration" id="duration" value="{{ old('duration')}}"  placeholder="duration">
                    </div>
                    <div class="form-group">
                        <label for="type"> Type </label>
                        <input type="text" class="form-control" name="type" id="type" value="{{ old('type')}}"  placeholder="type">
                    </div>
                    <div class="form-group">
                        <label for="price"> Price </label>
                        <input type="number" class="form-control" name="price" id="price" value="{{ old('price')}}" placeholder="price">
                    </div>
                
                    <button type="submit" class="btn btn-primary btn-block"> Simpan </button>

                </form>
            </div>
        </div>
        
    </div>    
@endsection