@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
            <a href="{{ route('gallery.create')}}"  class="btn btn-primary">

                <i class="fas fa-plus fa-sm text-white-S0"></i> Tambah Gallery
            </a>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Travel</th>
                                <th>Gambar</th>
                                <th>ACtion</th>
                            </tr>
                        </thead>
                        <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item -> id}}</td>
                                    <td>{{ $item->travel_packages->title}}</td>
                                    <td>
                                        <img src="{{ Storage::url($item->image)}}" 
                                            style="width: 150px;" class="img-thumbnail"
                                        alt="{{ $item ->travel_packages ->title}}">
                                    </td>
                                    <td>
                                        <a href="{{ route('gallery.edit',$item->id) }} " class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('gallery.destroy',$item->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" onclick="confirm('are you sure?')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
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


        
    </div>    
@endsection