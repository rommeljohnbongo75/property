@extends('admin.base')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Banner</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.index') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Banner</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid test">
        <div class="row">
            <div class="col-12 test23">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Banner</h4> 
                    <div class=" text-right">
                        <a href="{{ route('banner.create') }}" class="btn btn-primary " style="background-color:#FFA920;border:#333">Add Banner</a>
                    </div>
                    </div>
                    <div class="table-responsive m-t-20 p-2">
                        <table id="" class="table table-bordered table-responsive-lg">
                            <thead>
                                <tr>

                                    <th scope="col">#</th>
                                    <th scope="col">image</th>
                                    <th scope="col">status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($banners as $key => $value)
                                <tr>
                                    <tr>
                                        <th scope="row">{{++$key}}</th>
                                        <td scope="row"><img src="{{ url('assets/uploads/home_banner/'.$value->image) }}" class="img-thumbnail" width="50" ></td>
                                        <td>
                                            <input data-id="{{$value->id}}" class="toggle-class btn-sm" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $value->status ? 'checked' : '' }}>
                                        </td>
    
                                        <td>
                                            <a href="{{route('banner.edit',$value->id)}}"><span class="btn btn-sm btn-rounded btn-success">Edit</span></a>
                                            <a href="{{route('banner.delete',$value->id)}}" class="btn btn-sm btn-rounded btn-danger">Delete</a>
    
                                        </td>
                                    </tr>
    
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
       $(function() { 
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
           $('.toggle-class').change(function() { 
           var status = $(this).prop('checked') == true ? 1 : 0;  
           var id = $(this).data('id');  
           $.ajax({ 
               type: "POST", 
               dataType: "json", 
               url: 'banner/chengestatus', 
               data: {'status': status, 'id': id}, 
               success: function(data){ 
               location.reload();
            } 
         }); 
      }) 
   }); 
    </script>
@endsection
