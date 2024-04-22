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
  .container{
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
  .booking-details{
    padding:30px 0;
  }
  .reg-booking-details span svg{
    font-size:12px;
    padding:0 10px;
  }
  .reservation{
    padding:50px 0;
    margin-left:300px;
  }
.user-msg-box a{
    color:black;
}
.user-msg-box a svg{
    padding-right:7px;
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
    min-width: 106px;
    border: 1px solid #ccc;
    height: 55px;
    text-align: center;
}
.reg-booking{
    border-bottom:1px solid  #ccc;
    padding-bottom:20px;
    display:flex;
}
.booking-button{
    gap:5px;
    display:flex;
    align-items:center
}
.booking-inner {
    
}
.booking1{
    border:1px solid  #ccc;
    padding:15px;
    border-radius:4px;
    font-size:14px;
}
.booking-request{
    padding-bottom:20px;
}
.booking-icon {
    top: 28px;
    padding: 0;
    left: 61%;
    background-color: #b5b0b0;
    z-index: 9999;
    visibility:hidden;
    transition:all 0.2s linear;
}
.booking-heading h4:hover .booking-icon{
    visibility:visible;
}
.booking-icon li{
    padding:10px 30px;
    list-style:none;
}
.booking-icon li a{
    border:none !important;
    color: white !important;
}
.booking-dropdwon {
    top: 28px;
    width: 100%;
    padding: 0;
    background-color: #b5b0b0;
    visibility:hidden;
    transition:all 0.2s linear;
 }
 .booking-dropdwon li {
    padding:10px 0;
 }
.booking-dropdwon li a{
    border:none !important;
    color: white !important;
}
.booking-dropdwon li:hover{
    background-color:black;
}
.booking-status h5 ul li{
    list-style :none;
}
.booking-status h5:hover .booking-dropdwon{
    visibility:visible;
}
.booking-status h5 a{
    color: #2962FF;
    border: 1px solid #ccc;
    border-radius: 40px;
    padding: 5px 12px;
    font-size:14px;
}
.booking-status h5 a svg{
    padding-left:5px;
    font-size:12px;
}
.booking-inner{
    border:1px solid rgba(67, 84, 127, .3);
    display:flex;
    flex-wrap:wrap;
    background-color: #dbeaef;
    padding:10px 20px;
}
.qutoes-form{
    box-shadow:0px 15px 30px rgba(0,0,0,0.10);
    padding:40px 20px;
}
.payment-sche {
    padding: 30px 0;
    border-top: 1px solid  #ccc;
    border-bottom: 1px solid  #ccc;
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
    border-bottom:1px solid  #ccc;  
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
    border-bottom:1px solid  #ccc;
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
    border-top:1px solid #ccc;
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
.booking-request-two {
    display: flex;
    gap: 30px;
    padding: 30px 0;
}
.guest-form {
   margin-top:20px;
}
.nots{
    box-shadow:0px 15px 30px rgba(0,0,0,0.10);
    padding:40px 20px; 
    margin:20px 0
}
.Tcp-ip{
    padding:10px 0;
}
.guest{
    box-shadow:0px 15px 30px rgba(0,0,0,0.10);
    padding:40px 20px;
}
.guest-name{
    padding:10px 0;
    border-bottom:1px solid  #ccc;
}
.guest-email, .guest-phone,.guest-location,.guest-Language{
    padding:10px 0;
    border-bottom:1px solid  #ccc;
}
.trash svg{
    padding-right:10px;
}
#navbarSupportedContent {
    position: fixed;
    width: 100%;
    opacity: 1;
}
.trash span{
    font-size:18px;
}
.navbar-default {
  background-color: #FFF;
  /* margin-left: 200px; */
}
.nav-navbar {
    border: none;
    margin-left: 0;
    padding-top: 45px;
    background-color: inherit;
}
.brand-name-wrapper a svg{
    color:#857c7c;
    font-size:16px;
}
.nav-img img{
    max-width:80px;
}
.nav-price h4, .nav-price h5{
    font-size:14px;
}
.nav-option h4, .nav-option h5{
    font-size:14px;
}
.custom-login ul li{
    list-style:none;
}
.custom-login ul li a{
    color:#857c7c;
}
.brand-wrapper {
    padding: 0 10px;
}
.custom-login ul{
    padding:0;
    margin:0;
    gap:20px;
}
.custom-login ul li a svg{
    padding-right:5px;
    font-size:15px;
}
.custom-login {
    padding-top:15px;
}
.navbar-brand{
    color:black;
}
.navbar-nav-one{
    border: 1px solid black;
    border-radius: 10px;
    padding:10px;
}
.side-menu-container {
    padding: 10px;
    width:100%;
}
.nav-inner{
    gap:20px;
}
.reserv-inbox{
    padding:10px;
    border-top:1px solid black;
    border-bottom:1px solid black;
    margin:10px 0;
}
.reserv-1, .reserv-one{
    font-size:18px;
}
.reserv-1{
    color:#245abc;
}
.booking-data{
    margin-left:300px;
}
.booking-req{
  margin-left:300px;
}
.reserv-one{
    color:black;
    font-family:var(--font-family);
}
.msb {
  width: 300px;
  background-color: #F5F7F9;
  position: fixed;
  left: 0;
  top: 0;
  right: auto;
  min-height: 100%;
  overflow-y: auto;
  white-space: nowrap;
  height: 100%;
  z-index: 1;
  border-right: 1px solid #ddd;
  padding-top:40px;
  display:grid;
    grid-template-rows: 1fr 20fr 2fr;
}
  .navbar {
    border: none;
    margin-left: 0;
    background-color: inherit;
  }
  .navbar-header {
    width: 100%;
    border-bottom: 1px solid #e7e7e7;
    margin-bottom: 20px;
    background: #fff;
  }
  
  .nav-btn a{
    color:white;
    padding:10px 50px;
    border-radius:10px;
    background-color:#f5a623; 
  }
  .navbar-toggle{
    margin-left:150px;
  }
  .nav-btn{
    text-align:center;
    padding-top:10px;
    margin-bottom:20px;
   
  }
  .payments-data{
    display:flex;
    flex-wrap:wrap;
  }
  #msbo {
    margin-left: 47px;
    font-size: 30px;
    color: black;
    display:none;
}
  .navbar-nav {
    .panel {
      border: 0 none;
      box-shadow: none;
      margin: 0;
      background: inherit;
    }
    li {
      display: block;
      width: 100%;
      a {
        padding: 15px;
        color: #5f5f5f;
        .glyphicon, .fa {
          margin-right: 8px;
        }
      }
    }
  }
  .nb {
    padding-top: 5px;
    padding-left: 10px;
    margin-bottom: 30px;
    overflow: hidden;
    
  }
}
ul.nv,
ul.ns {
  position: relative;
  padding: 0;
  list-style: none;  
}
.msb, .mnb {
    -moz-animation: slidein 300ms forwards;
    -o-animation: slidein 300ms forwards;
    -webkit-animation: slidein 300ms forwards;
    animation: slidein 300ms forwards;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;  
}
.mcw {
    -moz-animation: bodyslidein 300ms forwards;
    -o-animation: bodyslidein 300ms forwards;
    -webkit-animation: bodyslidein 300ms forwards;
    animation: bodyslidein 300ms forwards;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;  
}
body.msb-x {

  .mcw, .mnb {
    margin-left: 0;
-moz-animation: bodyslideout 300ms forwards;
    -o-animation: bodyslideout 300ms forwards;
    -webkit-animation: bodyslideout 300ms forwards;
    animation: bodyslideout 300ms forwards;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }
  .msb {
    -moz-animation: slideout 300ms forwards;
    -o-animation: slideout 300ms forwards;
    -webkit-animation: slideout 300ms forwards;
    animation: slideout 300ms forwards;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }
}
.btn-close{
    float: inline-end;
}

  /* Slide in animation */
  @-moz-keyframes slidein {
    0% {
      left: -200px;
    }
    100% {
      left: 0;
    }
  }
  @-webkit-keyframes slidein {
    0% {
      left: -200px;
    }
    100% {
      left: 0;
    }
  }
  @keyframes slidein {
    0% {
      left: -200px;
    }
    100% {
      left: 0;
    }
  }
  @-moz-keyframes slideout {
    0% {
      left: 0;
    }
    100% {
      left: -300px;
    }
  }
  @-webkit-keyframes slideout {
    0% {
      left: 0;
    }
    100% {
      left: -300px;
    }
  }
  @keyframes slideout {
    0% {
      left: 0;
    }
    100% {
      left: -300px;
    }
  }

  @-moz-keyframes bodyslidein {
    0% {
      left: 0;
    }
    100% {
      margin-left: 200px;
    }
  }
  @-webkit-keyframes bodyslidein {
    0% {
      left: 0;
    }
    100% {
      left:0
    }
  }
  @keyframes bodyslidein {
    0% {
      margin-left: 0;
    }
    100% {
      margin-left: 200px;
    }
  }
  @-moz-keyframes bodyslideout {
    0% {
      margin-left: 200px;
    }
    100% {
      margin-right: 0;
    }
  }
  @-webkit-keyframes bodyslideout {
    0% {
      margin-left: 200px;
    }
    100% {
      margin-left: 0;
    }
  }
  @keyframes bodyslideout {
    0% {
      margin-left: 200px;
    }
    100% {
      margin-left: 0;
    }
  }
/* media-query */
@media only screen and (max-width:1440px) {
 
}
@media only screen and (max-width:1024px) {
    .reservation {
    margin-left: unset !important;
}
#msbo{
    margin-left:300px !important;
    display: block!important;
    
}
.booking-data ,.booking-req{
    margin-left: unset !important;
}

}
@media only screen and (max-width:768px) {
    .booking-request-two {
     flex-wrap:wrap;
}
.reg-booking{
  display:block !important;
}
.reg-booking-details{
    padding-bottom:10px;
}
#main-wrapper[data-layout="vertical"][data-sidebartype="mini-sidebar"] .page-wrapper {
    margin-left:0 !important;
}
}
@media only screen and (max-width:425px) {
.payments-data{
    display:block !important;
}
.booking-button{
    display:block !important;
}
.booking-inner{
    display:block !important;;
}
.msb {
    width: 100% !important;
}
}


</style>


@section('content')
<!-- sidebar -->
<div class="msb" id="msb">
		<nav class="nav-navbar navbar-default" role="navigation">
        <button type="button" class="btn-close" data-bs-dismiss="#msb">close</button>
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
          
				<div class="brand-wrapper">
                
					<!-- Brand -->
					<div class="brand-name-wrapper d-flex justify-content-between align-items-center">
						<a class="navbar-brand" href="#">
						Reservations
						</a>
                        <a href=""><i class="fa-solid fa-filter"></i></a>
                        <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
					</div>
                    <span>1 Unread Message</span>
                </div>
         </div>
</nav>
  <!-- Main Menu -->
	<div class="side-menu-container">
        <div class="nav navbar-nav-one ">
        
		<div class="nav-inner d-flex">
				 <div class="nav-img">
                     <img src="{{ asset('assets/img/showcase-old.jpg' ) }}">
                 </div>
                    <div class="nav-option">
                        <h4>Open</h4>
                        <h5>Max</h5>
                    </div>
                    <div class="nav-price">
                        <h4>15 Apr 2024</h4>
                        <h5>US$54.00</h5>
                    </div>
				</div>
                <div class="custom-login ">
                    <ul class="d-flex justify-content-between align-items-center">
                        <li><a href="">15 Apr 2024</a></li>
                        <li><a href=""><i class="fa-regular fa-moon"></i>27</a></li>
                        <li><a href=""><i class="fa-solid fa-user-group"></i>1</a></li>
                    </ul>
               </div>
	   </div>
       </div>
       <div class="reserv-inbox d-flex justify-content-between align-items-center">
        <div class="reserv-one">Select</div>
        <div class="reserv-1"><i class="fa-solid fa-download"></i></div>
        <div class="reserv-one"><i class="fa-solid fa-rotate"></i></div>
   </div>
   <div class="nav-btn">
    <a href="">Create Booking</a> 
   </div>
   </div>
   
<!-- sidebar-end-->

<!-- offcanvas -->
<section class="reservation">
 <div class="reservation-inner">
      <div style="bar-reserv">
         <a href="#" id="msbo"><i class="ic fa fa-bars"></i></a>
      </div>
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
<div class="reg-booking  justify-content-between"> 
        <div class="reg-booking-details">
            <h4>Max<span>- 1 Adults</span></h4>
            <h5>Max</h5>
            <span>15 Apr 2024<i class="fa-solid fa-arrow-right"></i> 12 may 2024 (27 nights)</span>
         </div>
         <div class="payments-data">
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
<section class="booking-data">
    <div class="container">
        <div class="booking-request">
            <div class="booking-inner  justify-content-between bg-seconary">
                <div class="booking-heading">
                    <h4>Booking request</h4>
                    <p>You received a new booking request. Please approve or reject it.</p>
                 </div>
            <div class="booking-button">
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
<section class="booking-req">
    <div class="container">
 <div class="booking-request-two">
        <div class="col-sm-12 col-lg-6">
        <div class="qutoes-form ">
            <div class="booking-heading d-flex justify-content-between position-relative">
                 <h3>Quote (#7516035)</h3>
                 <h4 class=""><a href=""><i class="fa-solid fa-ellipsis"></i></a>
                 <ul class="booking-icon position-absolute">
                    <li><a href="">Edit prices</a></li>
                    <li><a href="">Edit prices</a></li>
                    <li><a href="">Add New Quote</a></li>
                 </ul>
                </h4>
            </div>
            <div class="booking-details">
                <p>The quote expires on 22 Apr 2024 16:38:34</p>
            </div>
            <div class="booking-status d-flex justify-content-between">
                <h4>Status</h4>
                <h5 class="position-relative"><a href="">Pending For Owner<i class="fa-solid fa-chevron-down"></i> </a>
                <ul class="booking-dropdwon position-absolute">
                    <li><a href="">Agree after Payment</a></li>
                    <li><a href="">OwnerAgrees</a></li>
                    <li><a href="">Reject</a></li>
                </ul>
           </h5>
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

</div>
     <div class="guest-form col-sm-12 col-lg-5">
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

        <div class="nots  d-flex justify-content-between ">
             <h4>Notes</h4>
            <h5><i class="fa-solid fa-plus"></i></h5>
        </div>
    
    </div>
    
        </div>
  </div>

  <div class="trash d-flex justify-content-center ">
        <h4><i class="fa-regular fa-trash-can"></i>Move this booking to trash</h4>
        <span><i class="fa-solid fa-print"></i>Print</span>
       </div>
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
        
            </section>
        
@endsection