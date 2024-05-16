@extends('admin.base')
<style>
    .container-fluid {
        background: #fff;
    }

    .page-breadcrumb {
        background: #fff;
    }
</style>
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Add Banner</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Add Banner</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-8">
                <div class="card card-body">
                    <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Banner Image :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                </div>
                            </div>
                            
                            <span class="text-danger">
                                @error('image')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <button type="submit" class="btn btn-success" style="background-color:#FFA920;border:#333">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection
