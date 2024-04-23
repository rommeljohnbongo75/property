@extends('site.base')
<style>
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');
  *{
   padding:0;
   margin:0;
   box-sizing:border-box;
   list-style:none;
   text-decoration:none;
  }
  :root{
   --font-family: "DM Sans", sans-serif;
  }
  body{
   h1,h2,h3,h4,h5,h6,span,p label{
      font-family:var(--font-family);
   }
  
  }
  image{
   max-width:100%;
   height:auto;
  }
   .container{
   max-width:1440px;
   margin:0 auto;
   }
   section.search-home {
   /* display: flex;
   align-content: space-around;
   justify-content: space-around; */
   margin-top: 4%;
   }
   input.input-box {
   border: none;
   }
   .navbar-toggler {
    background-color:#FFA920 !important;
    /* border: 1px solid transparent; */
}
   .search-start {
   display:grid;
   grid-template-columns:1fr 1fr 1fr 1fr;
   gap:40px;
   border: 1px solid #9da6a4;
   box-shadow:22px;
   border-radius: 45px;
   width: 113%;
   padding: 10px 20px;
   }
   .navbar-collapse.collapse.in {
    display: block !important;
}
   .slick-slide{
   width:600px% !important;
   }
   .image-card img{
   width:100%;
   max-width:500px;
   }
   .image-card{
   position: relative;
   }
   .image-card::before{
   content:'';
   position: absolute;
   top:0;
   height:100%;
   width:100%;
   left:0;
   background-color:black;
   opacity: 0.4;
   }
   .image-slider-inner{
   padding:0 10px;
   }
   section.image-slider {
    padding-bottom: 70px;
}
.listing-heading a{
   fon-family:var(--font-family);
}
   #main-footer{
   background-color:#718096;
   }
   .slick-slide {
   height:unset !important;  
   }
   .card-body a{
   background-color: #FFA920;
   }
   .card-1 h3{
      font-size:28px;
      color:black;
      margin:0;
      padding:10px 0;
      transition:all 0.1s linear;
      
   }
   .card-1 h3:hover{
      color:#FFA920;
   }
   .card-1 img {
    width: 100%;
    max-width: 60px;
    transition: all 0.2s linear;
    padding-bottom: 20px;
    padding:20px 0;
}
   .location{
   border-right:2px solid #9da6a4;
   display:flex;
   align-items:center;
   padding:0 20px;
   }
   .location-icon i{
   font-size:30px;
   color:#e5974f;
   padding-right:10px;
   }
   .check-in{
   display:flex;
   border-right:2px solid #9da6a4;
   gap:20px;
   align-items:center;
   padding-left:20px;
   padding-right:40px;
   }
   #listings .slick-prev {
    font-size: 0;
    height: 16px;
    width: 16px;
    background-color: transparent;
    border: 3px solid #8E8E93;
    border-bottom: 0;
    /* border-left: 0; */
    border-right: 0;
    position: absolute;
    top: 40%;
    right: 20px;
    color:#8E8E93;
    transform: rotate(-42deg);
    cursor: pointer;
}

.slick-dots li button:before {
    font-size: 14px !important;
 
}
.slick-prev {
    left:-35px !important;
}
.slick-prev:before {
    content: '' !important;
}
.slick-next:before {
    content: '' !important;
}
#listings .slick-next {
    font-size: 0;
    height: 16px;
    width: 16px;
    background-color: transparent;
    border: 3px solid #8E8E93;
    border-bottom: 0;
    border-left: 0;
    position: absolute;
    top: 40%;
    right: -26px;
    transform: rotate(47deg);
    cursor: pointer;
}
   .card-body-inner a{
      background-color:#FFA920;
   }
   .check-icon i{
   font-size:30px;
   color:#FFA920;
   padding-right:10px;
   }
   .guests-data{
   display:flex;
   align-items:center;
   padding:0px;
   }
   .guest-icon i{
   font-size:30px;
   color:#FFA920;
   padding-right:10px;
   }
   .form-btn button{
   background-color:#FFA920;
   width:90%;
   padding:15px 0;
   border-radius: 40px;
   border:none;
   color:white;
   font-size:18px;
   }
   .form-btn button i{
   font-size: 18px;
   padding-right:10px;
   }
   .form-btn{
   text-align:center;
   padding-top:20px;
   }
   .check-date{
   display:flex;
   align-items:center;
   }
   .card-icon-one{
      color:black;
   }
   .card-icon .icon{
      color:white;
   }
   span.ed {
   margin-right: 91px;
   }
   .text-secondary {
   color: #000000 !important;
   }
   .guests-data input[type="number"]{
   width:50%;
   }
   label{
   padding-bottom:5px;
   margin: 0 !important;
   font-size:18px;
   }
   .check-date-two lable{
   font-size:16px;
   }
   .check-in-text{
   position: relative;
   }
   .check-in-text::after{
   content:'';
   position:absolute;
   background-image:url('arrow-right-solid.svg');
   }
   .date-icon i {
   font-size:0px;
   color:#23b0ff;
   }
   .check-in-text input[type=""]{
   width:90px;
   }
   .check-date-two input[type=""]{
   width:90px;
   }
   .guests-dec h5{
   font-size:22px;
   display:block;
   color:#9da6a4;
   }
   #listings h3{
      font-size:46px;
      color:black;
      text-align:center;
      font-weight:bold;
      padding:20px 0;
      position: relative;
   }
   #listings h3::before {
    content: '';
    /* top: 45px; */
    position: absolute;
    background-color: black;
    height: 2px;
    width: 49px;
    /* left: 27%; */
    transform: translate(-72px, 27px);
}
#listings h3::after {
    content: '';
    /* top: 49px; */
    position: absolute;
    background-color: black;
    height: 2px;
    width: 49px;
    /* right: 27%; */
    transform: translate(17px, 29px);
}
   .listing-heading h4{
      color:black;
      font-size:21px;
      padding-top:10px;
      margin:0;
   } 
   .listing-heading i{
      color:#FFA920;
   }
   .listing-heading p {
    color: #8E8E93;
    padding-top: 5px;
}
   .featured-properties{
      padding:20px 0;
   }
   .featured-properties h3{
      font-size:45px;
      font-weight:bold;
      text-align:center;
      color:black;
      position: relative;
   }
   .featured-properties h3::after {
    content: '';
    /* top: 28px; */
    position: absolute;
    background-color: black;
    height: 2px;
    width: 49px;
    /* right: 27%; */
    transform: translate(10px, 27px);
}
.featured-properties h3::before {
    content: '';
    /* top: 28px; */
    position: absolute;
    background-color: black;
    height: 2px;
    width: 49px;
    /* left: 27%; */
    transform: translate(-66px, 24px);
}
   .guests-dec span{
   font-size:18px;
   }
   ::placeholder{
   color:#9da6a4;
   font-size:16px;
   }
   .home-search.p-5 h1 {
   color: #000;
   margin-bottom: 20px;
   font-size: 60px;
   }
   .form-group-one{
   padding:10px;
   }
   .card-icon{
      font-family:var(--font-family);
      color:black;
   }
   .home-search.p-5 h4 {
   color: #000;
   margin-bottom: 20px;
   font-size: 27px;
   }
   input#ranges, input#rangesend {
   border: none;
   padding-left: 11px;
   }
   .adults-children.sec-menu-div.active{
   display: block !important;
   }
   .banner{
   position: relative;
   }
   .serach-group{
   display:flex;  
   padding:10px; 
   }
   .form-icon {
   font-size: 30px;
   color: #FFA920;
   }
   .container-form {
   border: 1px solid black;
   padding: 40px 20px;
   box-shadow: #00000024 2px 7px 20px 0px !important;
   border-radius:20px;
   background-image: linear-gradient(180deg, white 60%, #ffffff00);
   width: 450px;
   z-index: 1 !important;
   position: absolute;
   top: 0;
   border: none;
   top: 30%;
   left: 40%;
   }
   .banner-image img{
   height:100%;
   position: relative;
   }
   .card-cion i{
      color:black;
   }
   #listings{
  padding:70px 0;
   }
   .container-form h1{
   font-size:35px;
   }
   .card-price{
   display:flex;
   align-items:center;
   gap:10px;
   }
   .card-dec{
   position:absolute;
   top:90px;
   left:20px;
   color:white;
   font-weight:bold;
   }
   .card-icon{
   display:flex;
   gap:10px;
   align-items:center;
   }
   .icon{
   display:flex;
   align-items:center;
   gap:5px;
   }
   .icon h5{
   font-size:15px;
   margin:0;
   }
   .card-1{
      box-shadow:0 16px 32px 0 rgba(7, 28, 31, 0.1);
      border:1px solid #f6f6f6;
       flex-wrap:no-wrap;
       padding:20px;
   }
   .card-1 img:hover{
      transform:scale(1.3);
   }
   #services{
      padding:70px 0;
   }
   .services-title span{
      color:#FFA920;
      font-weight:bold;
      font-size:25px;
     
   }
   .services-title h2{
      font-size:45px;
      font-weight:bold;
      color:black;
      padding-top:10px;
      position:relative;
   }
   .services-title h2::before {
    content: '';
    /* top: 42px; */
    position: absolute;
    background-color: black;
    height: 2px;
    width: 49px;
    /* left: 29%; */
    transform: translate(-77px, 26px);
}
.services-title h2::after {
    content: '';
    /* top: 42px; */
    position: absolute;
    background-color: black;
    height: 2px;
    width: 49px;
    /* right: 29%; */
    transform: translate(30px, 26px);
}
   .services-card{
      display:flex;
      gap:20px;
    }

   .card-body-inner{
      padding:0 30px;
   }
   .services-title{
    text-align: center;
    font-family:var(--font-family);
   }
.image-slider .slick-dots li.slick-active button:before {
   opacity: .75;
   color: #000;
   font-size: 12px;  
   }
  .image-slider .slick-dots li.slick-active button:before {
   opacity: .75;
   color: #000;
   font-size: 12px;
   }
   input.adults-adults, input.children-children {
   border: none;
   }
   input.adults-adults:focus-visible, input#ranges:focus-visible, input#rangesend, input.children-children {
   border: none; 
   outline: none; 
   } 
   .overlay {
    background-color: rgb(0, 0, 0);
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    height: 100%;
    opacity: 0.3;
    width: 100%;
}
   .date-pixel{
   display: flex;
   }
   .children-children{
    display: none;
   }
   input.children-children.active{
    display: block !important;
   }
   .team-inner{
      display:grid;
      grid-template-columns:1fr 1fr 1fr;
      gap:30px;
      padding-bottom:40px;
   }
   .our-team{
      text-align:center;
   }
   .our-team h2 {
    font-size: 45px;
    font-weight: bold;
    color: black;
    padding-top: 10px;
    position: relative;
    margin:0;
    padding:10px 0;
}
.daterangepicker td.active, .daterangepicker td.active:hover {
    background-color: #FFA920 !important;
    border-color: transparent;
    color: #fff;
}
.our-team p{
   margin:0;
   color:#8E8E93;
   padding-bottom:30px;
}
.team-dec h4{
   color:black;
   font-size:22px;
   font-weight:bold;
}
.team-dec span{
   color:#8E8E93;
}
.team-image{
   overflow:hidden;
   border-radius:20px;
  
}
   .team-image img{
      transition:all 0.5s linear;
      object-fit:cover;
      overflow:hidden;
}
section.show-section {
    overflow: hidden;
}
   .team-image img:hover {
    transform: scale(1.2);
}
.team-name {
    padding: 30px 0;
    position: absolute;
    /* top: 79%; */
    /* left: 35px; */
    background-color: white;
    width: 80%;
    transform: translate(34px, -44px);
    padding: 20px;
    box-shadow:0px 15px 30px rgba(0,0,0,0.10);
    border-radius: 10px;
}
   .team-card{
      position: relative;
   }
   .team-cont{
      gap:30px;
   }
   .team-cont i{
    width: 38px;
    height: 38px;
    border: 1px solid #EFEFEF;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-size: 13px;
    transition:all 0.3s ease;
}
.team-cont i:hover{
   background-color:#FFA920;
   color:white;
}
   
.team {
  
    padding-top:70px;
    padding-bottom:120px;
    /* background-color: #F7F7F7; */
}
.our-team h2::after{
   content: '';
    /* top: 42px; */
    position: absolute;
    background-color: black;
    height: 2px;
    width: 49px;
    /* right: 29%; */
    transform: translate(30px, 26px);
}
.our-team h2::before{
   content: '';
    /* top: 42px; */
    position: absolute;
    background-color: black;
    height: 2px;
    width: 49px;
    /* left: 29%; */
    transform: translate(-77px, 26px);
}
.show-section .slick-prev{
   font-size:30px;
}
.show-section .slick-dots {
    position: absolute;
    bottom: 14px;
    font-size: 30px;

}
.responsive .slick-dots{
   bottom:-14px;
}
.multiple-items .slick-dots {
    position: absolute;
    bottom: -41px;
}
#services {
    padding: 70px 0;
}

   @media only screen and (max-width:1024px) {
   #listings h3 {
    font-size: 40px;
   }
   .listing-heading h4 {
    font-size: 17px;
    }
    #listings {
    padding: 42px 0;
}
.services-title h2 {
    font-size: 35px;
}
.card-1 h3 {
    font-size: 23px;
}

#services p {
    font-size: 16px;
}
}
   @media only screen and (max-width: 768px) {
   #services h3{
      font-size:23px !important;
   }
   #services i{
      font-size:50px;
   }
   #services p{
      font-size:16px !important;
      margin:0;
   }
   #listings h3 {
    font-size: 30px;
}
#listings h3::before {
    transform: translate(-70px, 21px);
}
#listings h3::after {   
    transform: translate(21px, 21px);
}
.services-card {
    flex-wrap: wrap;
    gap:20px;
    justify-content:center;
    
}
.our-team h2 {
    font-size: 30px;
}
.image-slider {
    padding: 30px 0;
}
.featured-properties h3 {
    font-size: 30px;
}
#listings {
    padding-top: 30px !important;
}
.services-title h2 {
    font-size: 30px;
}
.services-title span {
    font-size: 19px;
}
.card-dec {
    top: 71px;
}
.team-inner{
   grid-template-columns:1fr 1fr;
   gap:20px;
}
.team-card{
   margin-bottom:60px;
}
.container-form {
    left: 31% !important;
    top:27%;
}
.team {
    padding-top: 30px;
    padding-bottom: 30px;

}

   }
@media only screen and (max-width:425px) { 
   #listings{
      padding-top:35px;
   }
.container-form {
    width: 331px;
}
.services-card .col-md-6 {
    flex-wrap: wrap;
}
.container-form h1 {
    font-size: 20px !important;
}
.container-form {
    padding: 20px 15px;
    top: 30%;
    left: 9% !important;
}
.services-card {
   gap:20px;
}
.services-title h2::after {
    transform: translate(28px, 19px);
}
.services-title h2::before {
    transform: translate(-72px, 20px);
}
.featured-properties h3 {
    font-size: 30px;
}
.image-slider {
    padding: 30px 0;
}
.team-inner{
   grid-template-columns:1fr;
   gap:20px;
}
.our-team h2 {
    font-size: 30px;
}
.team {
    padding: 40px 0;
}
.our-team p {
    font-size: 15px;
}
.team-name {
    padding: 10px;
}
}
</style>
@section('content')
<!-- Showcase -->
<section class="show-section">
   <div class="single-item">
      <div class="banner">
         <div class="banner-image">
            <img src="{{ asset('assets/img/showcase.jpg' ) }}">
            <div class="overlay"></div>
         </div>
        <div class="container-form">
            <h1>Booking Request Deatils</h1>
            <form>
               <div class="serach-group">
                  <div class="form-icon">
                     <i class="fa-regular fa-calendar-days" ></i>
                  </div>
                  <div class="date-pixel" id="cal">
                     <div class="form-group">  
                        <input type="text"  id='ranges' name="checkin" value="Check In" placeholder="Location">
                     </div>
                     <div class="form-group">
                        <input type="text" id='rangesend' name="checkout" value="Check-Out" placeholder="Check-Out">
                     </div>
                  </div>
               </div>

               <div class="form-group-one d-flex align-items-center" id="sec-menu">
                  <div class="guest-icon">
                     <i class="fa-regular fa-user"></i>
                  </div>
                  <div class="data-lable-one">
                     <input type="text" class="adults-adults" style="font-size:18px"  value="Guest" placeholder="1 Adults">
                  </div>
                  <div class="data-lable-one">
                     <input type="text" class="children-children" style="font-size:18px"  value="1 Children" placeholder="1 Children">
                  </div>
               </div>

               <div class="adults-children sec-menu-div" >
                  <div class="form-group">
                     <label for="adults">Adults:</label>
                     <div class="counter">
                        <span class="adults-minus">-</span>
                        <input type="text" id="adults" name="adults" value="1" readonly>
                        <span class="adults-plus">+</span>
                     </div>
                  </div>
                  
                  <div class="form-group">
                     <label for="children">Children:</label>
                     <div class="counter">
                        <span class="minus">-</span>
                        <input type="text" class="children"  id="children" name="children" value="1" readonly>
                        <span class="plus">+</span>
                     </div>
                  </div>
               </div>

               <div class="form-btn">
                  <button><i class="fa-solid fa-magnifying-glass"></i>Search</button>
               </div>
            </form>
         </div>
      </div>
      <div class="banner">
         <div class="banner-image">
            <img src="{{asset('assets/img/showcase.jpg' )}}">
            <div class="overlay">

            </div>
         </div>
         <!-- <div class="container-form">
            <h1>Booking Request Deatils</h1>
            <form>
               <div class="serach-group">
                  <div class="form-icon">
                     <i class="fa-regular fa-calendar-days" ></i>
                  </div>
                  <div class="date-pixel" id="cal">
                     <div class="form-group">  
                        <input type="text"  id='ranges' name="checkin" value="Check In" placeholder="Location">
                     </div>
                     <div class="form-group">
                        <input type="text" id='rangesend' name="checkout" value="Check-Out" placeholder="Check-Out">
                     </div>
                  </div>
               </div>

               <div class="form-group-one d-flex align-items-center" id="sec-menu">
                  <div class="guest-icon">
                     <i class="fa-regular fa-user"></i>
                  </div>
                  <div class="data-lable-one">
                     <input type="text" class="adults-adults" style="font-size:18px"  value="Guest" placeholder="1 Adults">
                  </div>
                  <div class="data-lable-one">
                     <input type="text" class="children-children" style="font-size:18px"  value="1 Children" placeholder="1 Children">
                  </div>
               </div>

               <div class="adults-children sec-menu-div" >
                  <div class="form-group">
                     <label for="adults">Adults:</label>
                     <div class="counter">
                        <span class="adults-minus">-</span>
                        <input type="text" id="adults" name="adults" value="1" readonly>
                        <span class="adults-plus">+</span>
                     </div>
                  </div>
                  
                  <div class="form-group">
                     <label for="children">Children:</label>
                     <div class="counter">
                        <span class="minus">-</span>
                        <input type="text" class="children"  id="children" name="children" value="1" readonly>
                        <span class="plus">+</span>
                     </div>
                  </div>
               </div>

               <div class="form-btn">
                  <button><i class="fa-solid fa-magnifying-glass"></i>Search</button>
               </div>
            </form>
         </div> -->
      </div>
   </div>
</section>
<!------------------Listings------------------->
<section id="listings"  >
   <div class="container">
      <h3>Featured Listings</h3>
     
      <!-- <div class="row"> -->
         <!-- Listings -->
         <!-- for listing in listings -->
         <div class="responsive">
            
         </div>
         <!-- @foreach ($latest_listings as $listing) -->
         <div class="responsive">
         <div class="px-2 mb-4">
            <div class="card listing-preview">
               <a href="{{ route('single.listing', $listing->id) }}">
                  <img  class="card-img-top" src="{{ url($listing -> thumbnail_0) }}" alt="">
                  <div class="card-img-overlay">
                     <!-- <h2>
                        <span class="badge badge-secondary text-white">{{ $listing -> price }}</span>
                        </h2> -->
                  </div>
                  <div class="card-body-inner">
                     <div class="listing-heading text-center">
                        <h4 class="">{{ $listing -> title }}</h4>
                        <p>
                           <i class="fas fa-map-marker" ></i>
                           {{ $listing -> city }} {{ $listing -> country }}
                        </p>
                     </div>
                     <hr>
                     <div class="row py-2 text-secondary justify-content-between">
                        <div class="card-icon">
                           <i class="fas fa-th-large"></i> Sqft: 2500
                        </div>
                        <div class="card-icon">
                           <i class="fas fa-car"></i> Garage: {{ $listing -> garage }}
                        </div>
                     </div>
                     <div class="row py-2 text-secondary justify-content-between">
                        <div class="card-icon-one">
                           <i class="fas fa-bed"></i> Bedrooms: {{ $listing -> bedroom }}
                        </div>
                        <div class="card-icon-one  ">
                           <i class="fas fa-bath"></i> Bathrooms: {{ $listing -> bathroom }}
                        </div>
                     </div>
                     <hr>
                     <div class="row py-2 text-secondary justify-content-between">
                        <div class="card-icon">
                           <i class="fas fa-user"></i> {{ $listing -> realtor-> name }}
                        </div>
                        <div class="card-icon">
                           <i class="fas fa-clock"></i> {{ $listing -> created_at->diffForHumans() }} 
                        </div>
                     </div>
                     <div class="row text-secondary pb-2">
                        
                     </div>
                     <hr>
               <a href="{{ route('single.listing', $listing->id) }}" class="btn  btn-block mb-4" >Deatils</a>
               </div>
               </a>
            </div>
         </div>
         <div class="px-2 mb-4">
            <div class="card listing-preview">
               <a href="{{ route('single.listing', $listing->id) }}">
                  <img  class="card-img-top" src="{{ url($listing -> thumbnail_0) }}" alt="">
                  <div class="card-img-overlay">
                     <!-- <h2>
                        <span class="badge badge-secondary text-white">{{ $listing -> price }}</span>
                        </h2> -->
                  </div>
                  <div class="card-body-inner">
                     <div class="listing-heading text-center">
                        <h4 class="">{{ $listing -> title }}</h4>
                        <p>
                           <i class="fas fa-map-marker" ></i>
                           {{ $listing -> city }} {{ $listing -> country }}
                        </p>
                     </div>
                     <hr>
                     <div class="row py-2 text-secondary justify-content-between">
                        <div class="card-icon">
                           <i class="fas fa-th-large"></i> Sqft: 2500
                        </div>
                        <div class="card-icon">
                           <i class="fas fa-car"></i> Garage: {{ $listing -> garage }}
                        </div>
                     </div>
                     <div class="row py-2 text-secondary justify-content-between">
                        <div class="card-icon-one">
                           <i class="fas fa-bed"></i> Bedrooms: {{ $listing -> bedroom }}
                        </div>
                        <div class="card-icon-one  ">
                           <i class="fas fa-bath"></i> Bathrooms: {{ $listing -> bathroom }}
                        </div>
                     </div>
                     <hr>
                     <div class="row py-2 text-secondary justify-content-between">
                        <div class="card-icon">
                           <i class="fas fa-user"></i> {{ $listing -> realtor-> name }}
                        </div>
                        <div class="card-icon">
                           <i class="fas fa-clock"></i> {{ $listing -> created_at->diffForHumans() }} 
                        </div>
                     </div>
                     <div class="row text-secondary pb-2">
                        
                     </div>
                     <hr>
               <a href="{{ route('single.listing', $listing->id) }}" class="btn  btn-block mb-4" >Deatils</a>
               </div>
               </a>
            </div>
         </div>
         <div class="px-2 mb-4">
            <div class="card listing-preview">
               <a href="{{ route('single.listing', $listing->id) }}">
                  <img  class="card-img-top" src="{{ url($listing -> thumbnail_0) }}" alt="">
                  <div class="card-img-overlay">
                     <!-- <h2>
                        <span class="badge badge-secondary text-white">{{ $listing -> price }}</span>
                        </h2> -->
                  </div>
                  <div class="card-body-inner">
                     <div class="listing-heading text-center">
                        <h4 class="">{{ $listing -> title }}</h4>
                        <p>
                           <i class="fas fa-map-marker" ></i>
                           {{ $listing -> city }} {{ $listing -> country }}
                        </p>
                     </div>
                     <hr>
                     <div class="row py-2 text-secondary justify-content-between">
                        <div class="card-icon">
                           <i class="fas fa-th-large"></i> Sqft: 2500
                        </div>
                        <div class="card-icon">
                           <i class="fas fa-car"></i> Garage: {{ $listing -> garage }}
                        </div>
                     </div>
                     <div class="row py-2 text-secondary justify-content-between">
                        <div class="card-icon-one">
                           <i class="fas fa-bed"></i> Bedrooms: {{ $listing -> bedroom }}
                        </div>
                        <div class="card-icon-one  ">
                           <i class="fas fa-bath"></i> Bathrooms: {{ $listing -> bathroom }}
                        </div>
                     </div>
                     <hr>
                     <div class="row py-2 text-secondary justify-content-between">
                        <div class="card-icon">
                           <i class="fas fa-user"></i> {{ $listing -> realtor-> name }}
                        </div>
                        <div class="card-icon">
                           <i class="fas fa-clock"></i> {{ $listing -> created_at->diffForHumans() }} 
                        </div>
                     </div>
                     <div class="row text-secondary pb-2">
                        
                     </div>
                     <hr>
               <a href="{{ route('single.listing', $listing->id) }}" class="btn  btn-block mb-4" >Deatils</a>
               </div>
               </a>
            </div>
         </div>
         <div class="px-2 mb-4">
            <div class="card listing-preview">
               <a href="{{ route('single.listing', $listing->id) }}">
                  <img  class="card-img-top" src="{{ url($listing -> thumbnail_0) }}" alt="">
                  <div class="card-img-overlay">
                     <!-- <h2>
                        <span class="badge badge-secondary text-white">{{ $listing -> price }}</span>
                        </h2> -->
                  </div>
                  <div class="card-body-inner">
                     <div class="listing-heading text-center">
                        <h4 class="">{{ $listing -> title }}</h4>
                        <p>
                           <i class="fas fa-map-marker" ></i>
                           {{ $listing -> city }} {{ $listing -> country }}
                        </p>
                     </div>
                     <hr>
                     <div class="row py-2 text-secondary justify-content-between">
                        <div class="card-icon">
                           <i class="fas fa-th-large"></i> Sqft: 2500
                        </div>
                        <div class="card-icon">
                           <i class="fas fa-car"></i> Garage: {{ $listing -> garage }}
                        </div>
                     </div>
                     <div class="row py-2 text-secondary justify-content-between">
                        <div class="card-icon-one">
                           <i class="fas fa-bed"></i> Bedrooms: {{ $listing -> bedroom }}
                        </div>
                        <div class="card-icon-one  ">
                           <i class="fas fa-bath"></i> Bathrooms: {{ $listing -> bathroom }}
                        </div>
                     </div>
                     <hr>
                     <div class="row py-2 text-secondary justify-content-between">
                        <div class="card-icon">
                           <i class="fas fa-user"></i> {{ $listing -> realtor-> name }}
                        </div>
                        <div class="card-icon">
                           <i class="fas fa-clock"></i> {{ $listing -> created_at->diffForHumans() }} 
                        </div>
                     </div>
                     <div class="row text-secondary pb-2">
                        
                     </div>
                     <hr>
               <a href="{{ route('single.listing', $listing->id) }}" class="btn  btn-block mb-4" >Deatils</a>
               </div>
               </a>
            </div>
         </div>
         <div class="px-2 mb-4">
            <div class="card listing-preview">
               <a href="{{ route('single.listing', $listing->id) }}">
                  <img  class="card-img-top" src="{{ url($listing -> thumbnail_0) }}" alt="">
                  <div class="card-img-overlay">
                     <!-- <h2>
                        <span class="badge badge-secondary text-white">{{ $listing -> price }}</span>
                        </h2> -->
                  </div>
                  <div class="card-body-inner">
                     <div class="listing-heading text-center">
                        <h4 class="">{{ $listing -> title }}</h4>
                        <p>
                           <i class="fas fa-map-marker" ></i>
                           {{ $listing -> city }} {{ $listing -> country }}
                        </p>
                     </div>
                     <hr>
                     <div class="row py-2 text-secondary justify-content-between">
                        <div class="card-icon">
                           <i class="fas fa-th-large"></i> Sqft: 2500
                        </div>
                        <div class="card-icon">
                           <i class="fas fa-car"></i> Garage: {{ $listing -> garage }}
                        </div>
                     </div>
                     <div class="row py-2 text-secondary justify-content-between">
                        <div class="card-icon-one">
                           <i class="fas fa-bed"></i> Bedrooms: {{ $listing -> bedroom }}
                        </div>
                        <div class="card-icon-one  ">
                           <i class="fas fa-bath"></i> Bathrooms: {{ $listing -> bathroom }}
                        </div>
                     </div>
                     <hr>
                     <div class="row py-2 text-secondary justify-content-between">
                        <div class="card-icon">
                           <i class="fas fa-user"></i> {{ $listing -> realtor-> name }}
                        </div>
                        <div class="card-icon">
                           <i class="fas fa-clock"></i> {{ $listing -> created_at->diffForHumans() }} 
                        </div>
                     </div>
                     <div class="row text-secondary pb-2">
                        
                     </div>
                     <hr>
               <a href="{{ route('single.listing', $listing->id) }}" class="btn  btn-block mb-4" >Deatils</a>
               </div>
               </a>
            </div>
         </div>
     
         </div>
         
         <!-- @endforeach -->
      <!-- </div> -->
   </div>
   </div>
</section>

<!--image-slider-section-start -->
<section class="image-slider">
   <div class="container">
      <div class="featured-properties">
         <h3>Featured Property</h3>
      </div>
      <div class="multiple-items">
         <div class="image-slider-inner">
            <div class="image-card">
               <img src="{{asset('assets/img/showcase.jpg' )}}">
               <div class="card-dec">
                  <div class="card-price">
                     <h4>From:</h4>
                     <span>$550.00/night</span>
                  </div>
                  <div class="dec-title">
                     <p>T36 - Tnuva Stunning 3-Bedroom Apartment</p>
                  </div>
                  <div class="card-icon">
                     <div class="icon">
                        <i class="fa-solid fa-bed"></i>
                        <h5>6</h5>
                     </div>
                     <div class="icon">
                        <i class="fa-solid fa-shower"></i>
                        <h5>2.5</h5>
                     </div>
                     <div class="icon">
                        <i class="fa-solid fa-user"></i>
                        <h5>5</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="image-slider-inner">
            <div class="image-card">
               <img src="{{asset('assets/img/showcase.jpg' )}}">
               <div class="card-dec">
                  <div class="card-price">
                     <h4>From:</h4>
                     <span>$550.00/night</span>
                  </div>
                  <div class="dec-title">
                     <p>T36 - Tnuva Stunning 3-Bedroom Apartment</p>
                  </div>
                  <div class="card-icon">
                     <div class="icon">
                        <i class="fa-solid fa-bed"></i>
                        <h5>6</h5>
                     </div>
                     <div class="icon">
                        <i class="fa-solid fa-shower"></i>
                        <h5>2.5</h5>
                     </div>
                     <div class="icon">
                        <i class="fa-solid fa-user"></i>
                        <h5>5</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="image-slider-inner">
            <div class="image-card">
               <img src="{{asset('assets/img/showcase.jpg' )}}">
               <div class="card-dec">
                  <div class="card-price">
                     <h4>From:</h4>
                     <span>$550.00/night</span>
                  </div>
                  <div class="dec-title">
                     <p>T36 - Tnuva Stunning 3-Bedroom Apartment</p>
                  </div>
                  <div class="card-icon">
                     <div class="icon">
                        <i class="fa-solid fa-bed"></i>
                        <h5>6</h5>
                     </div>
                     <div class="icon">
                        <i class="fa-solid fa-shower"></i>
                        <h5>2.5</h5>
                     </div>
                     <div class="icon">
                        <i class="fa-solid fa-user"></i>
                        <h5>5</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="image-slider-inner">
            <div class="image-card">
               <img src="{{asset('assets/img/showcase.jpg' )}}">
               <div class="card-dec">
                  <div class="card-price">
                     <h4>From:</h4>
                     <span>$550.00/night</span>
                  </div>
                  <div class="dec-title">
                     <p>T36 - Tnuva Stunning 3-Bedroom Apartment</p>
                  </div>
                  <div class="card-icon">
                     <div class="icon">
                        <i class="fa-solid fa-bed"></i>
                        <h5>6</h5>
                     </div>
                     <div class="icon">
                        <i class="fa-solid fa-shower"></i>
                        <h5>2.5</h5>
                     </div>
                     <div class="icon">
                        <i class="fa-solid fa-user"></i>
                        <h5>5</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="image-slider-inner">
            <div class="image-card">
               <img src="{{asset('assets/img/showcase.jpg' )}}">
               <div class="card-dec">
                  <div class="card-price">
                     <h4>From:</h4>
                     <span>$550.00/night</span>
                  </div>
                  <div class="dec-title">
                     <p>T36 - Tnuva Stunning 3-Bedroom Apartment</p>
                  </div>
                  <div class="card-icon">
                     <div class="icon">
                        <i class="fa-solid fa-bed"></i>
                        <h5>6</h5>
                     </div>
                     <div class="icon">
                        <i class="fa-solid fa-shower"></i>
                        <h5>2.5</h5>
                     </div>
                     <div class="icon">
                        <i class="fa-solid fa-user"></i>
                        <h5>5</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section id="services">
   <div class="container">
      <div class="services-title">
      <h2>Our Main Foucs</h2>
         <span>Our Services</span>
         
      </div>
      <div class="services-card text-center pt-4">
         <div class=" col-md-12 col-lg-4  card-1">
            <img src="{{asset('assets/img/customer-agent.png')}}">
            <!-- <i class="fas fa-comment fa-4x mr-4" style="color:#e5974f"></i> -->
           
            <h3>Consulting Services</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, debitis nam! Repudiandae,
               provident iste consequatur
               hic dignissimos ratione ea quae.
            </p>
         </div>
         <div class=" col-md-12 col-lg-4  card-1">
         <img src="{{asset('assets/img/new-house.png')}}">
            
            <h3>Propery Selling</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, debitis nam! Repudiandae,
               provident iste consequatur
               hic dignissimos ratione ea quae.
            </p>
         </div>
         <div class=" col-md-12 col-lg-4 card-1">
         <img src="{{asset('assets/img/rent.png')}}">
            <h3>Renting & Selling</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, debitis nam! Repudiandae,
               provident iste consequatur
               hic dignissimos ratione ea quae.
            </p>
         </div>
      </div>
</section>
<!--team-section-start -->
<section class="team">
   <div class="container">
      <div class="our-team">
         <h2>Meet the Agents</h2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, magnam.</p>
         <div class="team-inner">
            <div class="team-card">
               <div class="team-image">
               <img src="{{asset('assets/img/realtors\jenny.jpg')}}">
               </div>
               <div class="team-name d-flex justify-content-between">
                  <div class="team-dec">
                  <h4>Jenny</h4>
                  <span>Realtor</span>
                  </div>
                  <div class="team-cont d-flex">
                  <i class="fa-solid fa-phone"></i>
                  <i class="fa-solid fa-message"></i>
                  </div>
                 
               </div>
           
            </div>
            <div class="team-card">
               <div class="team-image">
               <img src="{{asset('assets/img/realtors\kyle.jpg')}}">
               </div>
               <div class="team-name d-flex justify-content-between">
                  <div class="team-dec">
                  <h4>Kyle</h4>
                  <span>Realtor</span>
                  </div>
                  <div class="team-cont d-flex">
                  <i class="fa-solid fa-phone"></i>
                  <i class="fa-solid fa-message"></i>
                  </div>
                 
               </div>
           
            </div>
            <div class="team-card">
               <div class="team-image">
               <img src="{{asset('assets/img/realtors\mark.jpg')}}">
               </div>
               <div class="team-name d-flex justify-content-between">
                  <div class="team-dec">
                  <h4>Mark</h4>
                  <span>Realtor</span>
                  </div>
                  <div class="team-cont d-flex">
                  <i class="fa-solid fa-phone"></i>
                  <i class="fa-solid fa-message"></i>
                  </div>
                 
               </div>
           
            </div>

            
         </div>
      </div>
   </div>
   </section>

<!--image-slider-section-end-->  
@endsection
