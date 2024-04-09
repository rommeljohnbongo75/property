@extends('admin.base')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center"> <!-- Modified to center the content -->
        <div class="col-md-6 col-sm-6 col-lg-3">
            <a href="#">
                <div class="mini-stat clearfix bx-shadow">
                    <span class="mini-stat-icon bg-info"><i class="ion-social-usd"></i></span>
                    <div class="mini-stat-info text-right text-muted">
                        <span class="counter">10</span>
                        Total Users
                    </div>
                    <div class="tiles-progress">
                        <div class="m-t-20">
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3">
            <a href="#">
                <div class="mini-stat clearfix bx-shadow">
                    <span class="mini-stat-icon bg-purple"><i class="ion-ios7-cart"></i></span>
                    <div class="mini-stat-info text-right text-muted">
                        <span class="counter">0</span>
                        Total Listings
                    </div>
                    <div class="tiles-progress">
                        <div class="m-t-20">
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
    </div> <!-- end row -->
</div> <!-- end container-fluid -->
@endsection