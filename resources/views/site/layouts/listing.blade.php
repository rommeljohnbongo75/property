@extends('site.base')
@section('title'){{ $listing ->title }} | @endsection
<style>
   @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');

   :root{
   --font-family: "DM Sans", sans-serif;
  }

  *{
   .container-form {
   max-width: 800px;
   padding: 20px;
   width:100%;
   background-color: #fff;
   border-radius: 5px;
   box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
   }
   
   h1 {
   text-align: center;
   }
   .container-form h1{
   font-size:30px;
   color:black;
   font-Family:var(--font-family);
   }
   .form-group label {
   display: block;
   }
   .form-group{
   margin: 0 !important;
   }
   input[type="text"] {
   width: calc(100% - 40px);
   padding: 10px;
   border: none;
   border-radius: 5px;
   display: inline-block;
   vertical-align: middle;
   background-color: #efe9e2;
   margin-left: 12px;
   font-size: 18px;
   color: #000 !important;
   }
   input[type="date"]
   {
   width: calc(100% - 40px);
   padding: 10px;
   border: 1px solid #ccc;
   border-radius: 5px;
   display: inline-block;
   vertical-align: middle;
   }
   .counter {
   display: inline-block;
   }
   .counter span {
   cursor: pointer;
   display: inline-block;
   width: 30px;
   height: 30px;
   line-height: 30px;
   text-align: center;
   background-color: #007bff;
   color: #fff;
   border-radius: 5px;
   }
   .counter span:hover {
   background-color: #0056b3;
   }
   .submit-request {
   display: block;
   width: 100%;
   padding: 10px;
   background-color: #007bff;
   color: #fff;
   border: none;
   border-radius: 5px;
   cursor: pointer;
   margin-top: 20px;
   }
   .submit-request:hover {
   background-color: #0056b3;
   }
   .form-icon i{
   font-size:25px;
   }
   .form-group-icon i{
   font-size:25px;
   padding-right:5px;
   margin-left:10px;
   }
   .form-img i{
   font-size:25px;
   }
   .form-group-one{
   background-color: #efe9e2;
   padding:15px;
   border-radius:10px;
   gap:20px;
   }
   .from-data {
   background-color: #efe9e2;
   border-radius:10px;
   padding:15px;
   }
   .form-group .form-control{
   background-color: #efe9e2;
   border-radius: 10px;
   height:20%;
   }
   .btn{
   margin-top:20px;
   }
   .adults-children.sec-menu-div.active{
   display: block !important;
   }
   .counter input[type="text"] {
   width: calc(35% - 40px);
   padding: 10px;
   border: 1px solid #ccc;
   border-radius: 5px;
   display: inline-block;
   vertical-align: middle;
   }
   .calendar-main {
   display: flex;
   }
   div#map {
   width: 100%;
   height: 65%;
   }
   .list-group {
   list-style: none;
   padding: 0;
   }
   .list-group-item {
   display:flex;
   gap:20px;
  
   }
   .asking-price {
   order: 1; 
   }
   .list-group{
      font-size: 23px !important;
   }
   .list-group .text-secondary {
      color: #10284e !important;
  }
  li.list-group-item.text-secondary {
      margin-bottom: 15px;
  }
  .list-group-item{
      border: none !important;
  }
  i.fa-solid.fa-bed {
    padding-left: 16px;
    font-size: 20px;
}
i.fa-solid.fa-location-dot{
  font-size: 20px;
}
i.fa-solid.fa-dollar-sign {
    margin-left: 12px;
    font-size: 20px;
}
input.btn.btn-block.btn-secondary {
    background-color: #FFA920;
}
.datepicker-days table.table-condensed {
    width: 530px !important;
    height: 530px;
    padding: 15px;
}
.date-pixel{
   display: flex;
}
input.adults-adults:focus-visible, input#ranges:focus-visible, input#rangesend, input.children-children {
   border: none; 
   outline: none; 
}
.option-tab ul li{
   list-style:none;
}
.option-tab ul{
   gap:40px;
   padding:0;
}
.option-tab ul li a{
   text-decoration:none;
   color:black;
   font-size:20px;
   font-family:var(--font-family);
   position:relative;
}
.option-tab ul li a::after {
    content: '';
    position: absolute;
    top: 32px;
    width: 100%;
    height: 3px;
    left: 0px;
    background-color: #e5974f;
    transition:all 0.3s ease-in;
   }
 li:hover .option-tab ul li a::after{
   visibility:visible;
}
.review-inner {
  justify-content: space-between;
}
.property-dec{
   font-family:var(--font-family);
   font-size:16px;
}
.review-btn button{
   padding:10px 20px;
   background-color: #FFA920;
   color:black;
   border:none;
   border-radius:50px;
   outline-offset:none;
}
.review-title h3{
   padding-bottom:20px;
}
.tab{
   padding-bottom:30px;
}
.author-name{
   padding:30px;
   background-color:lightgray;
   border-radius:50px;
}
.about-host-inner{
   align-items:center;
   gap:20px;
   padding:20px 0;
}
.about-host-inner span{
   font-weight:bold;
}
.about-host{
   padding:20px 0;
}
.about-host-title h3{
   padding:10px 0;
}
.contact-details h4{
   font-size:20px;
}
.contact-details h5{
   margin:0;
   font-size:16px;
   padding:10px 0;
}
#listing{
   padding:100px 0;
}
#Booking-details{
   padding:40px 0;
}
#sticky{
   position:sticky;
   z-index:999;
   top:20%;
   background-color: #fff;
    box-shadow: 0 1px 0 0 #d8d8d8;
    width:100%;
}
.listing{
   position: relative;
}
.list-group-item i {
   color:#FFA920;
}
.page-title{
   font-family:var(--font-family);
}
.list-group-item{
   color:black;
   font-size:18px;
   font-family:var(--font-family);
}
/* .option-tab ul li a:hover{
 underline:dotted;
} */

</style>
@section('content')
<!-- Breadcrumb -->
<!-- <section id="bc" class="mt-3">
   <div class="container">
      <nav>
         <ol class="breadcrumb">
            <li class="breadcrumb-item">
               <a href="{{ route('index') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
               <a href="{{ route('listings')}}">Listings</a>
            </li>
            <li class="breadcrumb-item active">{{ $listing ->title }}</li>
         </ol>
      </nav>
   </div>
</section> -->
<!-- Listing -->
<section id="listing">
   <div class="container">
      <!-- <a href="{{'listings'}}" class="btn btn-light mb-4">Back To Listings</a> -->
      <div class="row">
         <div class="col-md-12 ">
            <!-- Home Main Image -->
            <h2 class="page-title">{{$listing ->title}}</h2>
            <p><i class="fa-solid fa-location-dot"></i> {{$listing ->city}}, {{$listing ->country}}   <i class="fa-solid fa-bed"></i>  {{ $listing ->bedroom }} Bedroom  <i class="fa-solid fa-dollar-sign"></i>  {{$listing ->price}} Price</p>
            <img src="{{ url($listing -> thumbnail_0) }}" alt="" class="img-main img-fluid mb-3">
            <!-- Thumbnails -->
            <div class="row mb-5 thumbs">
               @if ($listing ->thumbnail_1)
               <div class="col-md-2">
                  <a href="{{ url($listing ->thumbnail_1) }}" data-lightbox="home-images">
                  <img src="{{ url($listing ->thumbnail_1) }}" alt="" class="img-fluid" data-fancybox="gallery">
                  </a>
               </div>
               @endif
               @if ($listing ->thumbnail_2)
               <div class="col-md-2">
                  <a href="{{ url($listing ->thumbnail_2) }}" data-lightbox="home-images">
                  <img src="{{ url($listing ->thumbnail_2) }}" alt="" class="img-fluid" data-fancybox="gallery">
                  </a>
               </div>
               @endif
               @if ($listing ->thumbnail_3)
               <div class="col-md-2">
                  <a href="{{ url($listing ->thumbnail_3) }}" data-lightbox="home-images">
                  <img src="{{ url($listing ->thumbnail_3) }}" alt="" class="img-fluid" data-fancybox="gallery">
                  </a>
               </div>
               @endif
               @if ($listing ->thumbnail_4)
               <div class="col-md-2">
                  <a href="{{ url($listing ->thumbnail_4) }}" data-lightbox="home-images">
                  <img src="{{ url($listing ->thumbnail_4) }}" alt="" class="img-fluid" data-fancybox="gallery">
                  </a>
               </div>
               @endif
               @if ($listing ->thumbnail_5)
               <div class="col-md-2">
                  <a href="{{ url($listing ->thumbnail_5) }}" data-lightbox="home-images">
                  <img src="{{ url($listing ->thumbnail_5) }}" alt="" class="img-fluid" data-fancybox="gallery">
                  </a>
               </div>
               @endif
               @if ($listing ->thumbnail_6)
               <div class="col-md-2">
                  <a href="{{ url($listing ->thumbnail_6) }}" data-lightbox="home-images">
                  <img src="{{ url($listing ->thumbnail_6) }}" alt="" class="img-fluid" data-fancybox="gallery">
                  </a>
               </div>
               @endif
            </div>
         </div>
  
      </div>
<!-------------Tab-section--------------->
<section class="tab">
      <div class="container">
         <div class="option-tab">
            <ul class="d-flex">
               <li><a href="#Booking-details">Booking-details</a></li>
               <li><a href="#Property Description">Property Description</a></li>
               <li><a href="#Property Location">Property Location</a></li>
               <li><a href="#Dates & Reservations">Dates & Reservations</a></li>
               <li><a href="#review-one">Reviews</a></li>
            </ul>
         </div>
      </div>
   </section>

      <!-- Fields -->
      <div class="col-md-12" id="Booking-details">
         <div class="col-md-12">
            <div class="row mb-5 fields gap-5">
               <div class="col-md-7 d-flex gap-5 justify-content-between">
                  <div class="page-inner">
                     <ul class="list-group list-group-flush">
                        <li class="list-group-item ">
                           <i class="fas fa-money-bill-alt"></i> Asking Price:
                           <span class="  ">${{ $listing ->price }}</span>
                        </li>
                        <li class="list-group-item ">
                           <i class="fas fa-bed"></i> Bedrooms:
                           <span class="">{{ $listing ->bedroom }}</span>
                        </li>
                        <li class="list-group-item ">
                           <i class="fas fa-bath"></i> Bathrooms:
                           <span class="float-right">{{ $listing ->bathroom }}</span>
                        </li>
                        <li class="list-group-item ">
                           <i class="fas fa-car"></i> Garage:
                           <span class="float-right">{{ $listing ->garage }}
                           </span>
                        </li>
                     </ul>
                  </div>
                  <div class="">
                     <ul class="list-group list-group-flush">
                        <li class="list-group-item ">
                           <i class="fas fa-th-large"></i> Square Feet:
                           <span class="float-right">{{ $listing ->square_feet }}</span>
                        </li>
                        <li class="list-group-item ">
                           <i class="fas fa-square"></i> Lot Size:
                           <span class="float-right">{{ $listing ->lot_size }} Acres
                           </span>
                        </li>
                        <li class="list-group-item ">
                           <i class="fas fa-calendar"></i> Listing Date:
                           <span class="float-right">{{ $listing -> created_at->diffForHumans() }}</span>
                        </li>
                        <li class="list-group-item">
                           <i class="fas fa-bed"></i> Realtor:
                           <span class="float-right">{{ $listing -> realtor-> name }}
                           </span>
                        </li>
                     </ul>
                  </div>
               </div>
               
               <div class="col-md-5">
                  <div class="cards">
                     <div class="container-form">
                        <h1>Booking Request Deatils</h1>
                        <form action="{{ url('contact') }}" method="POST">
                           @csrf 
                           <input type="hidden" name="listing_id" value="{{ $listing ->id }}">
                           <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                           <input type="hidden" name="name"  @auth value="{{ Auth::user()->get_full_name() }}"@endif>
                           <input type="hidden" name="email" @auth value="{{ Auth::user()->email }}" @endif >
                           <div class="from-data d-flex justify-content-around align-items-center">
                              <div class="form-icon">
                                 <i class="fa-regular fa-calendar-days" style="color:#10284e"></i>
                              </div>
                              
                              <div class="date-pixel" id="cal">
                                 <div class="form-group">  
                                    <input type="text"  id='ranges' name="checkin" value="Check In" placeholder="Check In">
                                 </div>
                                 <div class="form-group">
                                    <input type="text" id='rangesend' name="checkout" value="Check-Out" placeholder="Check-Out">
                                 </div>
                              </div>

                           </div>
                           <div class="alert-text">
                              <p class="text-danger text-center py-4"></p>
                           </div>

                           <div class="form-group-one d-flex align-items-center" id="sec-menu">
                              <div class="form-group-icon">
                                 <i class="fa-regular fa-user" style="color:#10284e"></i>
                              </div>
                              <div class="data-lable-one">
                                 <input type="text" class="adults-adults" style="font-size:18px"  value="1 Adults" placeholder="1 Adults">
                              </div>
                              <div class="form-lable-two">
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
                           <div class="form-group">
                              <label for="message" class="col-form-label">Message:</label>
                              <textarea name="message"  class="form-control" style=" background-color: #efe9e2;"></textarea>
                           </div>
                           <input type="submit" value="Request To Book" class="btn btn-block btn-secondary">
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Description -->
         <h3 class="" style="margin-top: 45px;" id="Property Description">Property Description</h3>
         <div class="row mb-5">
            <div class="col-md-12 property-dec">
               {{ $listing ->description }}
            </div>
         </div>
         <div class="map-map" id="Property Location">
            <h3 class="">Property Location</h3>
            <div id="map"></div>
         </div>
         <h3 class="" style="margin-top: 45px;" id="Dates & Reservations">Dates & Reservations</h3>
         <div class="calendar-main">
            <div class="calendar" id="calendar-calendar"></div>
            <div class="calendar" id="calendar-calendar"></div>
         </div>
      </div>
   </div>
</section>
<!---------review-section-start------->
<section class="review" id="review-one">
   <div class="container">
      <div class="review-inner d-flex ">
        <div class="review-title">
         <h3>Reviews</h3>
         <span>This property has no reviews yet</span>
        </div>
        <div class="review-btn">
         <button>Add Review</button>
        </div>
      </div>
      <div class="about-host-title">
          <h3>About Host</h3>
      </div>
      <div class="about-host-inner d-flex">
       <h4 class="author-name">FS</h4>
       <span>Max MArtin</span>
      </div>
      <div class="contact-details">
         <h4>Contact Us</h4>
         <h5>Email:abc@yahoo.com</h5>
         <sapn>Phone:<a href="">+91919652356</a></sapn>

      </div>
   </div>
</section>
<!---------review-section-end------->

<!---------About-host-end------------>
<!-- Inquiry Modal -->
<!-- Inquiry Modal -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBD-W2RjTGgl0IF9ijvUlWHTnN04Sy0wFo&callback=initMap" defer></script>
<script>
   let map, activeInfoWindow, markers = [];

   function initMap() {
       map = new google.maps.Map(document.getElementById("map"), {
         
           center: {
               lat: 31.771959,
               lng: 35.217018,
           },
           zoom: 5
       });
   
       map.addListener("click", function(event) {
           mapClicked(event);
       });
   
       initMarkers();
   }
   
   /* --------------------------- Initialize Markers --------------------------- */
   function initMarkers() {
       const initialMarkers = <?php echo json_encode($initialMarkers); ?>;
   
       for (let index = 0; index < initialMarkers.length; index++) {
   
           const markerData = initialMarkers[index];
           const marker = new google.maps.Marker({
               position: markerData.position,
               label: markerData.label,
               draggable: markerData.draggable,
               map
           });
           markers.push(marker);
   
           const infowindow = new google.maps.InfoWindow({
               content: `<b>${markerData.position.lat}, ${markerData.position.lng}</b>`,
           });
           marker.addListener("click", (event) => {
               if(activeInfoWindow) {
                   activeInfoWindow.close();
               }
               infowindow.open({
                   anchor: marker,
                   shouldFocus: false,
                   map
               });
               activeInfoWindow = infowindow;
               markerClicked(marker, index);
           });
   
           marker.addListener("dragend", (event) => {
               markerDragEnd(event, index);
           });
       }
   }
   
   /* ------------------------- Handle Map Click Event ------------------------- */
   function mapClicked(event) {
       console.log(map);
       console.log(event.latLng.lat(), event.latLng.lng());
   }
   
   /* ------------------------ Handle Marker Click Event ----------------------- */
   function markerClicked(marker, index) {
       console.log(map);
       console.log('marker-position', marker);
       console.log('marker-position-one', marker.position);
       console.log(marker.position.lat());
       console.log(marker.position.lng());
   }
   
   /* ----------------------- Handle Marker DragEnd Event ---------------------- */
   function markerDragEnd(event, index) {
       console.log(map);
       console.log(event.latLng.lat());
       console.log(event.latLng.lng());
   }
   
</script>
@endsection