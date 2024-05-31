@extends('admin.base')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Review</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.index') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Review</li>
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
                        <h4 class="card-title">All Review</h4>
                    </div>
                    <div class="table-responsive m-t-20 p-2">
                        <table id="" class="table table-bordered table-responsive-lg">
                            <thead>
                                <tr>

                                    <th scope="col">#</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($review as  $key => $reviews)
                                
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td scope="row">
                                    {{$reviews->email}}
                                </td>
                                <td style="width: 60%">
                                    {{$reviews->description}}
                                </td>
                                <th>
                                    <input data-id="{{ $reviews->id }}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $reviews->status ? 'checked' : '' }}>
                                </th>
                                <td>
                                    <a href=""><span class="btn btn-sm btn-rounded btn-success">Edit</span></a>
                                    <a href="" class="btn btn-sm btn-rounded btn-danger">Delete</a>

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
               var user_id = $(this).data('id'); // Correctly get the user_id
    
               $.ajax({ 
                   type: "POST", 
                   dataType: "json", 
                   url: '/changestatus',  // Ensure the URL matches your route
                   data: {'status': status, 'user_id': user_id}, 
                   success: function(data){ 
                       console.log(data.success);
                   },
                   error: function(xhr, status, error) {
                       console.error('Error:', error);
                   }
               }); 
           });
       }); 
    </script>
@endsection
