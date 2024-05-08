@extends('admin.base')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Contact</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.index') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
                        <h4 class="card-title">All Contact Us</h4>
                    </div>
                    <div class="table-responsive m-t-20 p-2">
                        <table id="" class="table table-bordered table-responsive-lg">
                            <thead>
                                <tr>

                                    <th scope="col">#</th>
                                    <th scope="col">FullName</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $key => $contact)
                                    <tr>
                                        <th scope="row">{{++$key}}</th>
                                        <td scope="row">
                                        {{$contact->full_name}}
                                        </td>
                                        <td>
                                            {{$contact->email}}

                                        </td>
                                        <td>
                                            {{$contact->subject}}

                                        </td>
                                        <td>
                                            {{$contact->message}}

                                        </td>
                                        <td>
                                            <a href="{{route('contact.delete',$contact->id)}}" class="btn btn-sm btn-rounded btn-danger">Delete</a>

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
