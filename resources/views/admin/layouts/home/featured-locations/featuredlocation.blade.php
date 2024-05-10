@extends('admin.base')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Location</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.index') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Location</li>
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
                        <h4 class="card-title">All Location</h4>
                        
                    <div class=" text-right">
                        <a href="{{ route('FeaturedLocation.create') }}" class="btn btn-primary ">Add Location</a>
                    </div>
                    </div>
                    <div class="table-responsive m-t-20 p-2">
                        <table id="" class="table table-bordered table-responsive-lg">
                            <thead>
                                <tr>

                                    <th scope="col">#</th>
                                    <th scope="col">image</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($locations as $key => $location)
                                    
                                <tr>
                                    <th scope="row">{{++$key}}</th>
                                    <td scope="row">{{$location->location}}</td>
                                    <td scope="row"><img src="{{ url('assets/uploads/location/'.$location->image) }}" class="img-thumbnail" width="50" ></td>
                                    <td>
                                        <a href="{{route('FeaturedLocation.edit',$location->id)}}"><span class="btn btn-sm btn-rounded btn-success">Edit</span></a>
                                        <a href="{{route('FeaturedLocation.delete',$location->id)}}" class="btn btn-sm btn-rounded btn-danger">Delete</a>

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
