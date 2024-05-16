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
                <h4 class="page-title">Edit Banner</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Banner</li>
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
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif
                    <form action="{{route('banner.update',$banner->id)}}" method="POST"  enctype="multipart/form-data"> 
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Banner Image :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image" class="form-control"><br>
                                </div>
                            </div>
                            <td><img src="{{ url('assets/uploads/home_banner/' . $banner->image) }}" class="img-thumbnail" width="100"></td>

                        </div>
                        <button type="submit" class="btn btn-success" style="background-color:#FFA920;border:#333">update</button>
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