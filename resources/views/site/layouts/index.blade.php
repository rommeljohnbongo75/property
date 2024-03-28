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
.location{
    border-right:2px solid #9da6a4;
    display:flex;
    align-items:center;
    padding:0 20px;
}
.location-icon i{
    font-size:30px;
    color:#23b0ff;
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
    color:#23b0ff;
    padding-right:10px;
}
.guests-data{
    display:flex;
    align-items:center;
    padding:0px;
}
.guest-icon i{
    font-size:30px;
    color:#23b0ff;
    padding-right:10px;
}
.form-btn button{
    background-color:#23b0ff;
    padding: 15px 40px;
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
    text-align:right;
   
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
   section.show-section {
    background-image: url("/assets/img/showcase.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    height: 85vh; 
}


</style>
@section('content')
    <!-- Showcase -->
    <section class="show-section">
        <div class="container text-center">
            <div class="home-search p-5">
                <h1>Your Home Away from Home</h1>
                <h4>Experience the Beauty of Israel with Kosher Comfort</h4>
                <button id="myButton" class="btn btn-primary" style="background-color: blue; color: white;">See All Property</button>
            </div>
        </div>
    </section>
    <section id="" class="search-home">
        <div class="container">
        <form method="GET" action="{{ route('search') }}">
            <div class="search-start ">
               <div class="location">
                    <div class="location-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                <div class="loaction-lable">
                    <label for="location">Location:</label>
                    <input type="text"  placeholder="Search Destination" class="input-box" value="">
                </div>
             </div>
    <div class="check-in">
        <div class="check-date">
                    <div class="check-icon">
                        <i class="fa-solid fa-calendar-days"></i>
                        </div>
                        <div class="check-in-text" id="cal">
                        <label for="check_in">Check-In:</label>
                        <input type="text"  id='ranges' name="checkin" value="Add Dates" placeholder="Add Dates">
                        <!-- <input type="" name="check_out" class="input-box"  placeholder="Add Dates"> -->
                        </div>
                  </div> 
                  <div class="date-icon">
                         <i class="fa-solid fa-arrow-right"></i>
                  </div>
                <div class="check-date-two" id="cal">    
                        <label for="check_out">Check-Out:</label>
                        <input type="text"  id='rangesend' name="check_out" value="Add Dates" placeholder="Add Dates">
                </div>
                </div>
                <div class="guests-data"  id="sec-menu">
                    <div class="guest-icon">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <div class="guests-dec">
                    <span>Guest</span>
                    <h5>0 Guests</h5>
                    </div>
                </div>
                <!-- <button type="submit">Search</button> -->
                <div class="form-btn">
                 <button><i class="fa-solid fa-magnifying-glass"></i>Search</button>
            </div>
            </div>
        </form>
        </div>
    
    </section>
    <!-- Listings -->
    <section id="listings" class="py-5">
        <div class="container">
            <h3 class="mb-3">Featured Listings</h3>
            <div class="row">
                <!-- Listings -->
                <!-- for listing in listings -->

                @foreach ($latest_listings as $listing)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card listing-preview">
                      <img class="card-img-top" src="{{ url($listing -> thumbnail_0) }}" alt="">
                      <div class="card-img-overlay">
                        <!-- <h2>
                          <span class="badge badge-secondary text-white">{{ $listing -> price }}</span>
                        </h2> -->
                      </div>
                      <div class="card-body">
                        <div class="listing-heading text-center">
                          <h4 class="text-primary">{{ $listing -> title }}</h4>
                          <p>
                            <i class="fas fa-map-marker text-secondary"></i>
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
                        <a href="{{ route('single.listing', $listing->id) }}" class="btn btn-primary btn-block">Deatils</a>
                      </div>
                    </div>
                  </div>
                @endforeach
 

            </div>
        </div>
    </section>

       <!-- Listings -->
       <section id="listings" class="py-5">
        <div class="container">
            <!-- <h3 class="text-center mb-3">Sell Property</h3> -->
            <div class="row">
                <!-- Listings -->
                <!-- for listing in listings -->
                <!-- @foreach ($latest_listings as $listing)
                    @if($listing->status == 2)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card listing-preview">
                        <img class="card-img-top" src="{{ url($listing -> thumbnail_0) }}" alt="">
                        <div class="card-img-overlay">
                            <h2>
                            <span class="badge badge-secondary text-white">{{ $listing -> price }}</span>
                            </h2>
                        </div>
                        <div class="card-body">
                            <div class="listing-heading text-center">
                            <h4 class="text-primary">{{ $listing -> title }}</h4>
                            <p>
                                <i class="fas fa-map-marker text-secondary"></i>
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
                            <a href="{{ route('single.listing', $listing->id) }}" class="btn btn-primary btn-block">More Info</a>
                        </div>
                        </div>
                    </div>
                    @endif
                @endforeach -->
            </div>
        </div>
    </section>

    <section id="services" class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="fas fa-comment fa-4x mr-4"></i>
                    <hr>
                    <h3>Consulting Services</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, debitis nam! Repudiandae,
                        provident iste consequatur
                        hic dignissimos ratione ea quae.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-home fa-4x mr-4"></i>
                    <hr>
                    <h3>Propery Selling</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, debitis nam! Repudiandae,
                        provident iste consequatur
                        hic dignissimos ratione ea quae.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-suitcase fa-4x mr-4"></i>
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