@extends('admin.base')

@section('content')
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Inquiries</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Inquiries</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">All Inquiries</h4>
                            </div>
                            <div class="table-responsive m-t-20">
                                <table class="table table-bordered table-responsive-lg">
                                    <thead>
                                        <tr>

                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Contact Number</th>
                                            <th scope="col">Listing</th>
                                            <th scope="col">User</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($inquiries as $inquiry)
                                        <tr id="row_{{$inquiry->id}}">
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $inquiry -> name }}</td>
                                            <td>{{ $inquiry -> email }}</td>
                                            <td>{{ $inquiry -> contact_number }}</td>
                                            <td>{{ $inquiry -> listing-> title }}</td>
                                            <td>{{ $inquiry -> user-> username }}</td>
                                            <td>
                                                <a href="{{ route('inquiries.show', $inquiry -> id ) }}"><span class="btn btn-sm btn-rounded btn-success">View</span></a>
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
@endsection