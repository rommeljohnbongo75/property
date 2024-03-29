@extends('site.base')
<style>
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
#main-footer{
    background-color:#718096;
}

.slick-slide {
    height:unset !important;  
 }
 .card-body a{
    background-color: #e5974f;
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
.check-icon i{
    font-size:30px;
    color:#e5974f;
    padding-right:10px;
}
.guests-data{
    display:flex;
    align-items:center;
    padding:0px;
}
.guest-icon i{
    font-size:30px;
    color:#e5974f;
    padding-right:10px;
}
.form-btn button{
    background-color:#e5974f;
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
..guests-dec span{
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
.home-search.p-5 h4 {
    color: #000;
    margin-bottom: 20px;
    font-size: 27px;
}
input#ranges {
    border: none;
}
input#rangesend {
    border: none;
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
    color: #e5974f;
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
    height:810px;
}

#listings{
    padding-top:190px;
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
    gap:30px;
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
.slick-dots li.slick-active button:before {
    opacity: .75;
    color: #000;
    font-size: 12px;
}
.slick-dots li.slick-active button:before {
    opacity: .75;
    color: #000;
    font-size: 12px;
}
</style>
@section('content')
    <!-- Showcase -->
<section class="show-section">
    <div class="single-item">
    <div class="banner">
            <div class="banner-image">
                <img src="/assets/img/showcase.jpg">
            </div>
        <div class="container-form">
                    <h1>Booking Request Deatils</h1>
                <form>
                    <div class="serach-group">
                                <div class="form-icon">
                                    <i class="fa-regular fa-calendar-days" ></i>
                                </div>
                               <div class="form-group" id="cal">  
                                   <input type="text"  id='ranges' name="checkin" value="Check In" placeholder="Location">
                               </div>
                                <div class="form-group" id="cal">
                                    <input type="text" id='rangesend' name="checkout" value="Check-Out" placeholder="Check-Out">
                                </div>
                    </div>
                         <div class="form-group-one d-flex align-items-center" id="sec-menu">
                              <div class="guest-icon">
                                    <i class="fa-regular fa-user"></i>
                              </div>
                                  <div class="data-lable-one">
                                     <input type="text" class="adults-adults" style="font-size:18px"  value="Guest" placeholder="1 Adults">
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
                <img src="/assets/img/showcase.jpg">
            </div>
        <div class="container-form">
                    <h1>Booking Request Deatils</h1>
                <form>
                    <div class="serach-group">
                                <div class="form-icon">
                                    <i class="fa-regular fa-calendar-days" ></i>
                                </div>
                               <div class="form-group" id="cal">  
                                   <input type="text"  id='ranges' name="checkin" value="Check In" placeholder="Location">
                               </div>
                                <div class="form-group" id="cal">
                                    <input type="text" id='rangesend' name="checkout" value="Check-Out" placeholder="Check-Out">
                                </div>
                    </div>
                         <div class="form-group-one d-flex align-items-center" id="sec-menu">
                              <div class="guest-icon">
                                    <i class="fa-regular fa-user"></i>
                              </div>
                                  <div class="data-lable-one">
                                     <input type="text" class="adults-adults" style="font-size:18px"  value="Guest" placeholder="1 Adults">
                                  </div>
                        </div>
                       <div class="form-btn">
                            <button><i class="fa-solid fa-magnifying-glass"></i>Search</button>
                      </div>
            
                </form>
          </div>
    </div>
    </div>
    
</section>
                
    <!-- Listings -->
    <section id="listings"  >
        <div class="container">
            <h3 class="mb-3">Featured Listings</h3>
            <div class="row">
                <!-- Listings -->
                <!-- for listing in listings -->

                @foreach ($latest_listings as $listing)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card listing-preview">
                      <a href="{{ route('single.listing', $listing->id) }}">
                            <img  class="card-img-top" src="{{ url($listing -> thumbnail_0) }}" alt="">
                      <div class="card-img-overlay">
                        <!-- <h2>
                          <span class="badge badge-secondary text-white">{{ $listing -> price }}</span>
                        </h2> -->
                      </div>
                      <div class="card-body">
                        <div class="listing-heading text-center">
                          <h4 class="text-primary">{{ $listing -> title }}</h4>
                          <p>
                            <i class="fas fa-map-marker text-secondary" ></i>
                            {{ $listing -> city }} {{ $listing -> country }}
                        
                        </p>
                        </div>
                        <hr>
                        <div class="row py-2 text-secondary">
                          <div class="col-6">
                            <i class="fas fa-th-large"></i> Sqft: 2500</div>
                          <div class="col-6">
                            <i class="fas fa-car"></i> Garage: {{ $listing -> garage }}</div>
                        </div>
                        <div class="row py-2 text-secondary">
                          <div class="col-6">
                            <i class="fas fa-bed"></i> Bedrooms: {{ $listing -> bedroom }}</div>
                          <div class="col-6">
                            <i class="fas fa-bath"></i> Bathrooms: {{ $listing -> bathroom }}</div>
                        </div>
                        <hr>
                        <div class="row py-2 text-secondary">
                          <div class="col-12">
                            <i class="fas fa-user"></i> {{ $listing -> realtor-> name }}</div>
                        </div>
                        <div class="row text-secondary pb-2">
                          <div class="col-6">
                            <i class="fas fa-clock"></i> {{ $listing -> created_at->diffForHumans() }} 
                        </div>
                        </div>
                        <hr>
                        <a href="{{ route('single.listing', $listing->id) }}" class="btn  btn-block" >Deatils</a>
                      </div>
                      </a>
                    </div>
                  </div>
                @endforeach
 

            </div>
        </div>
    </section>

<!--image-slider-section-start -->
<section class="image-slider">
    <div class="container">
        <div class="multiple-items">
                <div class="image-slider-inner">
                    <div class="image-card">
                         <img src="/assets/img/showcase.jpg">
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
                    <img src="/assets/img/showcase.jpg">
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
                        <img src="/assets/img/showcase.jpg">
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
                        <img src="/assets/img/showcase.jpg">
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
                        <img src="/assets/img/showcase.jpg">
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






<!--image-slider-section-end-->  

    <section id="services" class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="fas fa-comment fa-4x mr-4" style="color:#e5974f"></i>
                    <hr>
                    <h3>Consulting Services</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, debitis nam! Repudiandae,
                        provident iste consequatur
                        hic dignissimos ratione ea quae.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-home fa-4x mr-4" style="color:#e5974f"></i>
                    <hr>
                    <h3>Propery Selling</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, debitis nam! Repudiandae,
                        provident iste consequatur
                        hic dignissimos ratione ea quae.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-suitcase fa-4x mr-4" style="color:#e5974f"></i>
                    <hr>
                    <h3>Renting & Selling</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, debitis nam! Repudiandae,
                        provident iste consequatur
                        hic dignissimos ratione ea quae.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

