@extends('admin.base')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Add Location</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Add Location</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <form action="{{ route('FeaturedLocation.store') }}" method="POST" class="form-horizontal m-t-30"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Location Name :</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                placeholder="Location Name">
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Upload Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image"
                                        class="form-control @error('image') is-invalid @enderror">
                                    <span class="text-danger">
                                        @error('image')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success"
                            style="background-color:#FFA920;border:#333">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
