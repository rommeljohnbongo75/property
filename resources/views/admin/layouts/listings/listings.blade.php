@extends('admin.base')
@section('content')
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Property</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('admin.index') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Property</li>
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
                                <h4 class="card-title">All Property</h4>
                                <a href="{{ route('listings.create') }}">Add Property</a>
                            </div>
                            <div class="table-responsive m-t-20">
                                <table id="" class="table table-bordered table-responsive-lg">
                                    <thead>
                                        <tr>

                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Realtor</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($published_listings as $listing)
                                        <tr id="row_{{$listing->id}}">
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $listing -> title }}</td>
                                            <td>{{ $listing -> price }}</td>
                                            <td>{{ $listing -> realtor-> name }}</td>
                                            <td><img src="{{ url($listing -> thumbnail_0) }}" alt="" srcset="" style="width:70px;height:50px"></td>
                                            <td>@if ( $listing -> is_published == '1' )
                                                    Published
                                                @else
                                                    Un Publish
                                                @endif
                                            </td>
                                            <td>{{ $listing -> created_at->diffForHumans() }}</td>
                                            
                                            <td>
                                            <a href="{{ route('listings.show', $listing -> id ) }}"><span class="btn btn-sm btn-rounded btn-success">View</span></a>

                                            {{-- <form style="display:inline-block" method="POST" action="{{ route('listings.destroy', $listing -> id) }}">
                                            @csrf
                                            @method('DELETE')
                                            
                                            <button  type="submit" class="btn btn-sm btn-rounded btn-danger">Delete</button>
                                            </form> --}}
                                            <button onclick="deleteData('{{ route('listings.destroy', $listing -> id) }}','{{ $listing -> id }}')" type="submit" class="btn btn-sm btn-rounded btn-danger">Delete</button>

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