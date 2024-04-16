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
.payment-sche {
    padding: 30px 0;
    border-top: 1px solid black;
    border-bottom: 1px solid black;
}
.booking-payments h3{
    margin:0;
    padding:10px 0;
}
.sche-heading {
    padding: 10px 0;
}
.sche-heading h4{
    font-size:16px;
}
.payment-sche span{
    color:#f5a623;
    padding:0 10px;
}
.schedule {
    color: black;
    font-weight: bold;
    padding:10px 0;
}
.booking-payments{
    box-shadow:0px 15px 30px rgba(0,0,0,0.10);
    padding:40px 20px;
    margin-top:20px;
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
.transaction h3{
    color:black;
    padding:30px 0;
    font-size:20px;
}
.total-transaction h4,.total-transaction h5{
    color:black;
    font-weight:bold;
}
.total-transaction{
    border-bottom:1px solid black;
}
.total-amount{
    padding-top:20px;
}
.total-amount h4,.total-amount h5{
    font-size:14px;
}
.toatal-amount-one h4,.toatal-amount-one h5{
color:black;
font-weight:bold;
}
.balance {
    border-top:1px solid black;
    padding:20px 0;
}
.trash{
    gap:20px;
    padding:20px 0;
}
.trash h4 i{
   padding:0 10px;
    margin:0;
}
.booking-request-two{
    display:flex;
    gap:30px;
}
.guest-form {
   
    
    margin-top:20px;
}
.guest{
    box-shadow:0px 15px 30px rgba(0,0,0,0.10);
    padding:40px 20px;
}
.guest-name{
    padding:10px 0;
    border-bottom:1px solid black;
}
.guest-email, .guest-phone,.guest-location,.guest-Language{
    padding:10px 0;
    border-bottom:1px solid black;
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
 <div class="booking-request-one">
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
 <div class="booking-request-two">
        <div class="col-6">
        <div class="qutoes-form ">
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
<div class="booking-payments ">
           <div class="d-flex justify-content-between">
                 <h3>Payment collection</h3>
                 <h4><a href=""><i class="fa-solid fa-ellipsis"></i></a></h4>
           </div> 
        <div class="schedule">Schedule </div>
            <div class="payment-sche">
                <h4>Payment schedule</h4>
                    <div class="sche-heading d-flex justify-content-between ">
                         <h5>On agreement date<span>Scheduled</span></h5>
                         <h4>$ 5400.00</h4>
                    </div>
                    <div class="sche-heading d-flex justify-content-between ">
                        <h5>Total scheduled payments</h5>
                        <h4>$ 5400.00</h4>
                    </div>
           </div>
        <div class="transaction">
                <h3>transaction</h3>
                 <div class="total-transaction d-flex justify-content-between">
                    <h4>Total transactions</h4>
                    <h5>$ 0.00</h5>
                 </div>
            <div class="total-amount d-flex justify-content-between">
                <h4>Quote #7516035</h4>
                <h5>$ 5400.00</h5>
            </div>
            <div class="toatal-amount-one d-flex justify-content-between">
                <h4>Total amount</h4>
                <h5>$ 5400.00</h5>
            </div>
            <div class="balance d-flex justify-content-between">
                <h4>Balance due</h4>
                <h5>$ 5400.00</h5>
            </div>
       </div>
      
</div>
<div class="trash d-flex">
        <h4><i class="fa-regular fa-trash-can"></i>Move this booking to trash</h4>
        <span><i class="fa-solid fa-print"></i>Print</span>
       </div>
</div>
     <div class="guest-form col-5">
        <div class="guest">
            <div class="guest-form-inner d-flex justify-content-between ">
                <h4>Guest</h4>
                <i class="fa-solid fa-pen"></i>
            </div>
            <div class="guest-from-inner">
                <div class="guest-name">
                <h4>Name</h4>
                <h5>Asdsa Asdsa</h5>
                </div>
                <div class="guest-email">
                <h4>Email</h4>
                <h5>asdasd@asdasd.com</h5>
                </div>
                <div class="guest-phone">
                <h4>Phone</h4>
                <h5>+9875462456</h5>
                </div>
                <div class="guest-location">
                <h4>Location</h4>
                <h5>India</h5>
                </div>
                <div class="guest-Language">
                <h4>Language</h4>
                <h5>English</h5>
                </div>
                <div class="Tcp-ip">
                <h4>TCP-IP</h4>
                <h5>::ffff:10.103.19.11 / -</h5>
                </div>
                
                
            </div>
        </div>
        <div class="nots col-5  d-flex justify-content-between ">
     <h4>Notes</h4>
     <i class="fa-solid fa-plus"></i>
    </div>
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
            <!-- <div class="container-fluid">
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
            </div> -->
@endsection