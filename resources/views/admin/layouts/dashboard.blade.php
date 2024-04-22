@extends('admin.base')
<style>
    img{
        max-width:100%;
        height:auto;
    }
    .dahsboard-inner h2 {
text-align:center;
font-size:40px;
font-weight:bold;
color:black;
}
.dahsboard-gird{
    display:grid;
    grid-template-columns:1fr 1fr 1fr 1fr;
    gap:20px;
    padding:30px;
}
.Revenue{
    border: 1px solid black;
    padding: 20px 10px;
    border-radius:5px;
}
.dash-title svg{
   font-size:25px;
    stroke: transparent;
    color: #6c6969;
}
.dash-title span{
    font-size:20px;
    color:black;
}
.dahsboard-inner img{
    max-width:50px;
    width:100%;
}
.dahsboard-inner{
    gap:20px;
}
</style>
@section('content')
<div class="container-fluid">

<div class="dahsboard-inner col-6 mx-auto d-flex">
<h2>Dashboard</h2>
<img src="{{ asset('assets/img/dashboard.png' ) }}">
</div>
<div class="dash-title d-flex col-6 mx-auto justify-content-between">
<span>Last 30 days metrics</span>
<i class="fa-solid fa-chart-bar"></i>
</div>

<div class="col-6 mx-auto dahsboard-gird">

<div class="Revenue">
    <div class=" d-flex justify-content-between">
         <h4>Revenue</h4>
         <i class="fa-solid fa-circle-exclamation"></i>
    </div>
        <div class="d-flex justify-content-between">
            <h4>$24.00</h4>
            <h5>20%</h5>
         </div>
</div>
<div class="Revenue">
    <div class=" d-flex justify-content-between">
         <h4>Occupancy rate</h4>
         <i class="fa-solid fa-circle-exclamation"></i>
    </div>
        <div class="d-flex justify-content-between">
            <h4>$24.00</h4>
            <h5>20%</h5>
         </div>
</div>
<div class="Revenue">
    <div class=" d-flex justify-content-between">
         <h4>Avg. reservation pr</h4>
         <i class="fa-solid fa-circle-exclamation"></i>
    </div>
        <div class="d-flex justify-content-between">
            <h4>$24.00</h4>
            <h5>20%</h5>
         </div>
</div>
<div class="Revenue">
    <div class=" d-flex justify-content-between">
         <h4>Avg. price per night</h4>
         <i class="fa-solid fa-circle-exclamation"></i>
    </div>
        <div class="d-flex justify-content-between">
            <h4>$24.00</h4>
            <h5>20%</h5>
         </div>
</div>

</div>
    <div class="row justify-content-center">
        <!-- Modified to center the content -->
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