@extends('admin.base')
<style>
    span.fc-title {
        color: #fff;
    }
    .modal.right .modal-dialog {
        position: fixed;
        right: 0;
        margin: auto;
        width: 320px;
    }

    .modal.right .modal-content {
        border-radius: 0;
    }
    .modal.right .modal-backdrop {
        background-color: rgba(0, 0, 0, 0.5);
    }
</style>
@section('content')
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Calendar</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Calendar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div id='calendar'></div>
                </div>
            </div>
            
            <div id="myModal" class="modal fade right" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Property</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Proprty Name :-</p>
                            <p id="proprty-title"></p>
                            <p>Price :- </p>
                            <p id="proprty-price"></p>
                            <p>Bedroom :- </p>
                            <p id="proprty-bedroom"></p>
                            <p>Bathroom :- </p>
                            <p id="proprty-bathroom"></p>
                            <p>City :- </p>
                            <p id="proprty-city"></p>
                            <p>Country :- </p>
                            <p id="proprty-country"></p>
                            <p>Proprty Image :-</p>
                            <img  id="proprty-image" src="{{URL::asset('/image/propic.png')}}" alt="profile Pic" height="200" width="200">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
@endsection