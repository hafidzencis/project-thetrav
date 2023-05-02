@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Tipe Travel</h1>
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
                <form action="{{route('type-package.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name"> Tipe Name </label>
                        <input type="text"  class="form-control" name="name" id="name" value="{{ old('name')}}" placeholder="name">
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block"> Simpan </button>

                </form>
            </div>
        </div>
        
    </div>    
@endsection