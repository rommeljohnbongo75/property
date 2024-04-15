@extends('admin.base')
<style>
    
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');
#register{
  padding-top:130px;
  padding-bottom:40px;
}
:root{
   --font-family: "DM Sans", sans-serif;
  }
  body{
   h1,h2,h3,h4,h5,h6,span,p label{
      font-family:var(--font-family);
   }
  .contaainer{
    max-width:1440px;
    margin:0 auto;
  }
  .user-name p{
    margin:0;
  }
  .user-name h5{
    font-size:25px;
    color:black;
    font-weight:bold;
  }
  .reg-booking-details h4{
    color:black;
    font-size:18px;
  }
  .reservation{
    padding:50px 0;
  }
.user-msg-box a{
    color:black;
}
 .main-popup:hover .pop-up{
    visibility:visible;
}
.user-name p,.user-name span {
    margin: 0;
    font-style: italic;
}
.reg-booking-details span{
    color:black;
}
.reg-booking-details span i{
color:#8E8E93;
}
.payments, .payments-due, .total {
    min-width: 100px;
    border: 1px solid #ccc;
    height: 55px;
    text-align: center;
}
.reg-booking{
    border-bottom:1px solid black;
    padding-bottom:20px;
}
.booking-button{
    gap:5px;
    align-items:center
}
.booking-inner {
    background-color: #dbeaef;
    padding:10px 20px;
}
.booking1{
    border:1px solid black;
    padding:15px;
    border-radius:4px;
    font-size:14px;
}
.booking-request{
    padding-bottom:20px;
   
}
.booking-status h5 a{
    color: #2962FF;
    border: 1px solid black;
    border-radius: 40px;
    padding: 5px 8px;
    font-size:14px;
}
.booking-status h5 a i{
    padding-left:3px;
    font-size:12px;
}
.booking-inner{
    border:1px solid rgba(67, 84, 127, .3);
}
.qutoes-form{
    box-shadow:0px 15px 30px rgba(0,0,0,0.10);
    padding:40px 20px;
}
.booking-details p{
    font-style:italic;
}
.booking-heading h3{
    font-size:16px;
    color:black;
}
.total-final{
    border-bottom:1px solid black;  
}
.p-policy h4{
    color:black;
    font-weight:bold;
}
.total-final  h4,.total-final  h5 {
    color:black;
    font-weight:bold;
}
</style>


@section('content')
<!-- offcanvas -->
<section class="reservation">
 <div class="reservation-inner">
    <div class="container">
        <div class="user-details d-flex justify-content-between">
            <div class="user-name">
                <h5>Max</h5>
                <p>#9455001 created on 15 Apr 2024</p>
                <span>from asdasd-asdasd-d9d355.lodgify.com</span>
            </div>
            <div class="user-msg-box">
                <h4><a href=""><i class="fa-regular fa-comments"></i>Message</a></h4>
            </div>
           
        </div>
         <div class="pop-up position-relative">
                <li class=" main-popup"><a href="">Open</a></li>
                 <ul>
                    <li class=" pop-up"><a href="">Set as Tentacive</a></li>
                 </ul>
         </div>
<div class="reg-booking d-flex justify-content-between"> 
        <div class="reg-booking-details">
            <h4>Max<span>- 1 Adults</span></h4>
            <h5>Max</h5>
            <span>15 Apr 2024<i class="fa-solid fa-arrow-right"></i> 12 may 2024 (27 nights)</span>
         </div>
         <div class="payments-data d-flex">
             <div class="payments">
               <div class="payment-value">paid</div>
               <div class="payments-value">0</div>
              </div>
          <div class="payments-due">
              <h5>Due</h5>
              <span>US$5,400.00</span>
          </div>
         <div class="total">
             <h5>Total</h5>
             <span>US$5,400.00</span>
         </div>
        </div>
    </div>
    </div>
</div>
</section>
<!--  -->
<!--booking-requet-start-->
<section>
    <div class="container">
        <div class="booking-request">
            <div class="booking-inner d-flex justify-content-between bg-seconary">
                <div class="booking-heading">
                    <h4>Booking request</h4>
                    <p>You received a new booking request. Please approve or reject it.</p>
                 </div>
            <div class="booking-button d-flex">
                <h4 class="booking1"><a href="">Reject</a></h4>
                <h5 class="booking1"><a href="">Accept</a></h5>
            </div>
        </div>
    </div>
 <div class="booking-request">
        <div class="booking-inner d-flex justify-content-between bg-seconary">
            <div class="booking-heading">
                <h4>Booking request</h4>
                <p>You received a new booking request. Please approve or reject it.</p>
            </div>
            <div class="booking-button d-flex">
                <h4 class="booking1"><a href="">Open Message</a></h4>
           </div>
        </div>
      </div>
 </div>
</section>
<!--booking-request-end-->
<!-- booking-card-start---->
<section>
    <div class="container">
    <div class="booking-request">
        <div class="qutoes-form col-6">
            <div class="booking-heading d-flex justify-content-between">
                 <h3>Quote (#7516035)</h3>
                 <h4><a href=""><i class="fa-solid fa-ellipsis"></i></a></h4>
            </div>
            <div class="booking-details">
                <p>The quote expires on 22 Apr 2024 16:38:34</p>
            </div>
            <div class="booking-status d-flex justify-content-between">
                <h4>Status</h4>
                <h5><a href="">Pending For Owner<i class="fa-solid fa-chevron-down"></i></a></h5>
            </div>
            <div class="txt1">Max</div>
            <div class="room-rate d-flex justify-content-between">
                <h4>Room Rate</h4>
                <h5>$5400.00</h5>
            </div>
            <div class="subtotal d-flex justify-content-between">
                <h4>Subtotal</h4>
                <h5>$5400.00</h5>
            </div>
            <div class="total-final d-flex justify-content-between">
                <h4>Total</h4>
                <h5>$ 5400.00</h5>
            </div>
            <div class="privacy d-flex justify-content-between pt-4">
                <h4>Policy</h4>
                <h5>Primary policy</h5>
            </div>
            <div class="p-policy">
                <h4>Payment policy</h4>
                <p>50% due at time of booking. Remaining balance due 7 days before arrival.</p>
            </div>
            <div class="p-policy">
                <h4>Cancellation policy</h4>
                <p>All paid prepayments are non-refundable.</p>
            </div>
            <div class="p-policy">
                <h4>Security deposit</h4>
                <p>No security deposit is due.</p>
            </div>
            <div class="rentalment d-flex justify-content-between ">
                <h4>Rental agreement</h4>
                <h5>None</h5>
            </div>

        </div>
        <div class="guest-form col-4 ">

        </div>

    </div>
    </div>
    
</section>

<!-- booking-card-end---->
            <!-- <div class="page-breadcrumb"> -->
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