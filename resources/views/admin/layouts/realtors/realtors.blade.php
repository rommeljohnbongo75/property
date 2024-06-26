@extends('admin.base')

@section('content')
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        {{-- <h4 class="page-title">Basic Table</h4> --}}
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Realtors</li>
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

                                <h4 class="card-title">All Agent</h4>
                                 <div class=" text-right">
                                    <a href="{{ route('realtors.create') }}"><span class="btn btn-primary" style="background-color:#FFA920;border:#333">Add Agent</span></a>
                                </div>
                            </div>
                            <div class="table-responsive m-t-20">
                                <table class="table table-bordered table-responsive-lg">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($realtors as $realtor)
                                        <tr id="row_{{$realtor->id}}">
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $realtor -> name }}</td>
                                            <td>{{ $realtor -> email }}</td>
                                            <td>{{ $realtor -> contact_number }}</td>
                                            <td>{{ $realtor -> address }}</td>
                                            <td><img src="{{ url($realtor->image) }}" class="img-thumbnail" width="50" ></td>
                                            <td>
                                            <a href="{{ route('realtors.show', $realtor -> id ) }}"><span class="btn btn-sm btn-rounded btn-success">View</span></a>

                                            <form style="display:inline-block" method="POST" action="{{ route('realtors.destroy', $realtor -> id) }}">
                                            @csrf
                                            @method('DELETE')
                                            
                                        </form>
                                        <button onclick="deleteData('{{ route('realtors.destroy', $realtor -> id) }}','{{ $realtor -> id }}')" type="submit" class="btn btn-sm btn-rounded btn-danger">Delete</button>
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