@extends('admin.base')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Add Agent</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Add Agent</li>
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
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif
                    <form action="{{ route('realtors.store') }}" method="POST" class="form-horizontal m-t-30" enctype="multipart/form-data"> 
                        @csrf
                        
                        <div class="form-group">
                            <label>Realtor Name :</label>
                            <input type="text" name="name" class="form-control" placeholder="Realtor Name">
                        </div>
                        <div class="form-group">
                            <label>Email :</label>
                            <input type="email" id="example-email" name="email" class="form-control" placeholder="Email">
                        </div>
  
                        <div class="form-group">
                            <label>Address :</label>
                            <input type="text" id="example-email" name="address" class="form-control" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label>Contact Number :</label>
                            <input type="number" name="contact_number" class="form-control" placeholder="Contact Number">
                            <!-- <textarea class="form-control" rows="5"></textarea> -->
                        </div>

                        <div class="form-group">
                            <label>Upload Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image">
                                    <!-- <input type="file" name="image" class="custom-file-input">
                                    <label for="image" class="custom-file-label"> Choose Image sadsadad -->
                                </label>                              
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success" style="background-color:#FFA920;border:#333">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection