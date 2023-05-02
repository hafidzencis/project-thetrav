@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Tipe Travel {{$pieces->name}}</h1>
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
                <form action="{{route('type-package.update',$pieces->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name"> Tipe Nama </label>
                        <input type="text"  class="form-control" name="name" id="name" value="{{ $pieces->name }}" placeholder="name">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"> Ubah </button>

                </form>
            </div>
        </div>
        
    </div>    
@endsection