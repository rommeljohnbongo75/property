@extends('admin.base')
<style>
    
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');

:root{
   --font-family: "DM Sans", sans-serif;
  }
  body{
   h1,h2,h3,h4,h5,h6,span,p,a, label{
      font-family:var(--font-family);
   }
   image{
    max-width:100%;
    height:auto;
   }
  .container{
    max-width:1440px;
    margin:0 auto;
  }
  #navbarSupportedContent {
    position: fixed;
    width: 100%;
    opacity: 1;
}
.navbar-img{
   gap:20px;
}
  .navbar-default-one {
  background-color: #FFF;
  
}
.rental-option{
   margin:0;
   padding:0;
}
.rental{
   background-color:white;
}
.rental-option li{
   padding:10px 0;
}
.rental-option li a{
   font-size:16px;
}
.rental-option li a svg{
  padding:0 20px;
}
.overview-lang h4{
   font-size:12px;
   color:black;
   font-weight:bold;
}
.overview-lang h4 span{
   font-size:16px;
   color:black;
   font-weight:bold;
   padding-left:5px;
}
.rental-details h3{
   padding-top:20px;
  }
.overview-lang-icon h4 svg{
   padding-right:5px;
}
  .rental {
  width: 500px;
  position: fixed;
  left: 0;
  top: 0;
  right: auto;
  min-height: 100%;
  overflow-y: auto;
  white-space: nowrap;
  height: 100%;
  z-index: 1;
  /* border-right: 1px solid #ddd; */
  padding-top:40px;
  display:grid;
  padding-left: 10px;
  padding-right:10px;
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
  .booking-data{
    margin-left:200px;
  }
  .nav-img-inner img{
   max-width:100px;
  }
  .rental-form{
   border-bottom:1px solid black;
   padding:20px 0;
  }
 .navbar-img{
   padding:30px 0;
 }

  .nav-btn a{
    color:white;
    padding:10px 50px;
    border-radius:10px;
    background-color:#f5a623; 
  }
  .nav-btn{
    text-align:center;
    padding-top:10px;
    margin-bottom:20px;
}
select.form-select {
    width: 30%;
    height: 7%;
}
.rental-type h3{
   margin:0;
   padding:20px 0;
   color:black;
}
.sleeping-arrang h3{
   margin:0;
   padding:20px 0;
   color:black;
}
.Rental-rooms h3{
   margin:0;
   padding:20px 0;
   color:black;
}
.Rental-rooms{
   padding:70px 0;
   border-bottom:1px solid black;
}
.sleeping-btn{
   padding:20px 0;
   border-radius:4px;
}
.sleeping-btn a{
   background-color:black;
   color:white;
   padding:10px 30px;
   border-radius:4px;
}
.room-btn{
   padding:30px 0;
}
.room-btn a{
   background-color:black;
   color:white;
   padding:10px 30px;
   border-radius:4px;
}
.room-list li {
   list-style:none;
}
.room-list li a {
   color:#666;
}
.room-list{
   margin:0;
   padding:0;
}
.sleeping-btn span{
   padding:10px 30px;
}
.rental-info h3{
   color:black;
}
.Rental-amenities{
   padding: 70px 0;
    border-bottom:1px solid black;
}
.rental-info {
    padding: 70px 0;
    border-bottom:1px solid black;
}
.rental-size ul li a{
   color:#666;
}
.rental-type{
   border-bottom:1px solid black;
   padding:70px 0;
}
.rental-size ul li{
   list-style:none;
}
.sleeping-arrang {
    padding: 70px 0;
    border-bottom:1px solid black;
}
.rental-size ul{
   margin:0;
   padding:0;
}
.rental-info-btn{
   padding:20px 0;
}
.Rental-amenities h3{
   color:black;
}
.rental-info-btn a {
    background-color: black;
    color: white;
    padding: 10px;
    border-radius:4px;
}
.amities-list li a {
   color:#666;
   font-size:16px;
}
.amenities-btn{
   padding:20px 0;
}
.amenities-btn a{
   background-color: black;
    color: white;
    padding: 10px;
    border-radius:4px;

}
.overview-heading{
   margin-left:300px;
   margin-top:40px;
}
.overview-form{
   margin-left:300px;
}
.form-check{
   margin:0;
   padding:0;
}
.overview{
   background-color:white;
   margin-left:340px;
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
  }

  </style>
@section('content')
 
<section class="rental-section">
<div class="rental" id="msb">
		<nav class="nav-navbar-rental navbar-default-one" role="navigation">
			<div class="navbar-header">
				<div class="brand-wrapper">
					<!-- Brand -->
				
                    <span>1 Unread Message</span>
                </div>
         </div>
</nav>
  <!-- Main Menu -->
	<div class="side-menu-container">
        <div class="nav navbar-img d-flex align-items-center">
		           <div class="nav-img-inner">
                     <img src="{{ asset('assets/img/showcase-old.jpg' ) }}">
                 </div>
                 <div class="login-name">
                     <h4>MAX</h4>
                     <h5>abhdhd</h5>
                 </div>
          </div>
          <div classs="rental-details">
            <h3>Rental Details</h3>
            <ul class="rental-option">
               <li><a href=""><i class="fa-solid fa-house"></i>OverView</a></li>
               <li><a href=""><i class="fa-regular fa-image"></i>Photos</a></li>
               <li><a href=""><i class="fa-solid fa-location-dot"></i>Location</a></li>
               <li><a href=""><i class="fa-regular fa-clock"></i>Booking Settings</a></li>
               <li><a href=""><i class="fa-regular fa-id-badge"></i>Contact</a></li>
               <li><a href=""><i class="fa-regular fa-comments"></i>Messaging placeholders</a></li>
            </ul>
          </div>
       </div>
       <!-- <div class="reserv-inbox d-flex justify-content-between align-items-center">
        <div class="reserv-one">Select</div>
        <div class="reserv-1"><i class="fa-solid fa-download"></i></div>
        <div class="reserv-one"><i class="fa-solid fa-rotate"></i></div>
   </div> -->
</div>
</section>

<section class="overview">
   <div class="overview-inner">
      <div class="overview-heading">
         <h3>Overview</h3>
      </div>
      <div class="overview-form col-8">
         <div class="d-flex justify-content-between">
            <div class="overview-lang">
               <h4>GB<span>English</span></h4>
            </div>
            <div class="overview-lang-icon">
               <h4><i class="fa-solid fa-gear"></i>Languages</h4>
            </div>
         </div>
         <form class="rental-form">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="name" class="form-control" id="exampleInputEmail1"  placeholder="Name" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Internal name</label>
    <input type="Internal name" class="form-control" placeholder="Internal name" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="rental-type">
   <h3>Rental Type</h3>
<select class="form-select" aria-label="Default select example">
  <option selected>House</option>
  <option value="1">Room</option>
  <option value="2">Villa</option>
  <option value="3">Resort</option>
  <option value="4">Motel</option>
  <option value="5">Inn</option>
  <option value="6">Hostel</option>
  <option value="7">Boat</option>
</select>
</div>

<div class="rental-info">
   <h3>Rental info</h3>
   <p>What are the key facts about your place?</p>
   <div class="rental-size">
      <ul>
         <li><a href="">1 Sq ft Rental size</a></li>
         <li><a href="">One guest</a></li>
         <li><a href="">One unit</a></li>
      </ul>
      <div class="rental-info-btn">
         <a href="">Edit Rental Info</a>
      </div>
   </div>
</div>

<div class="sleeping-arrang">
   <h3>Sleeping arrangements</h3>
   <p>What are the sleeping arrangements for your rental?</p>
   <div class="sleeping-btn">
    <a href="">Edit sleeping arrangements</a>
   </div>

</div>

<div class="Rental-rooms">
      <h3>Rooms</h3>
      <p>List other rooms that are available in your rental.</p>
      <ul class="room-list">
         <li><a href="">Bathroom (private)</a></li>
         <li><a href="">Bedroom (private)</a></li>
      </ul>
   <div class="room-btn">
      <a href="">Edit Rooms</a>
   </div>
</div>
<div class="Rental-amenities">
   <h3>Rental amenities</h3>
   <p>elect amenities that your rental offers.</p>
   <ul class="amities-list">
      <li><a href="">Air conditioning</a></li>
      <li><a href="">Essentials</a></li>
      <li><a href="">General heating</a></li>
      <li><a href="">Kitchen stove</a></li>
      <li><a href="">Parking</a></li>
      <li><a href="">Pets allowed</a></li>
      <li><a href="">Washing machine</a></li>
      <li><a href="">Internet wireless</a></li>
   </ul>
   <div class="amenities-btn">
      <a href="">Edit amenities</a>
   </div>
</div>
      </div>
   </div>

</section>

@endsection