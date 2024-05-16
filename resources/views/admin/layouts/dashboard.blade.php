@extends('admin.base')
<style>
    img {
        max-width: 100%;
        height: auto;
    }

    .dahsboard-inner h2 {
        text-align: center;
        font-size: 40px;
        font-weight: bold;
        color: black;
    }

    .dahsboard-gird {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 20px;
        padding: 30px;
    }

    .Revenue {
        border: 1px solid black;
        padding: 20px 10px;
        border-radius: 5px;
    }

    .dash-title svg {
        font-size: 25px;
        stroke: transparent;
        color: #6c6969;
    }

    .dash-title span {
        font-size: 20px;
        color: black;
    }

    .sidebar-item i {
        font-size: 20px;
    }

    .dahsboard-inner img {
        max-width: 50px;
        width: 100%;
    }

    .dahsboard-inner {
        gap: 20px;
    }

    .dahsboard-gird {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 20px;
        padding: 30px;
    }

    @media only screen and (max-width:1024px) {
        .dahsboard-gird {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media only screen and (max-width:425px) {
        .dahsboard-gird {
            grid-template-columns: 1fr;
        }
    }
</style>
@section('content')
    <div class="container-fluid">

        <div class="dahsboard-inner col-sm-12 col-lg-6 mx-auto d-flex">
            <h2>Dashboard</h2>
            <img src="{{ asset('assets/img/dashboard.png') }}">
        </div>
        <div class="dash-title d-flex  col-sm-12 col-lg-6 mx-auto justify-content-between">
            <span>Last 30 days metrics</span>
            <i class="fa-solid fa-chart-bar"></i>
        </div>

        <div class="col-sm-12 col-lg-6 mx-auto dahsboard-gird">

            <div class="Revenue">
                <div class=" d-flex justify-content-between">
                    <h4>Total Users</h4>
                    <i class="mdi mdi-account-circle" style="font-size: 20px;"></i>
                </div>
                <div class="d-flex justify-content-between">
                    <h4>{{$total_users}}</h4>
                </div>
            </div>
            <div class="Revenue">
                <div class=" d-flex justify-content-between">
                    <h4>Total Agent</h4>
                    <i class="mdi mdi-human" style="font-size: 20px;"></i>
                </div>
                <div class="d-flex justify-content-between">
                    <h4>{{$total_realtors}}</h4>
                </div>
            </div>
            <div class="Revenue">
                <div class=" d-flex justify-content-between">
                    <h4>Property</h4>
                    <i class="mdi mdi-home" style="font-size: 20px;"></i>
                </div>
                <div class="d-flex justify-content-between">
                    <h4>{{$listing}}</h4>
                </div>
            </div>
            <div class="Revenue">
                <div class=" d-flex justify-content-between">
                    <h4>Featured Location</h4>
                    <i class="mdi mdi-map-marker-radius" style="font-size: 20px;"></i>
                </div>
                <div class="d-flex justify-content-between">
                    <h4>{{$featuredlocation}}</h4>
                </div>
            </div>

        </div>
    </div> <!-- end container-fluid -->
@endsection
