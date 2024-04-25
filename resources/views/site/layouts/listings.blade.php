@extends('site.base')
@section('title')All Properties | @endsection
<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');
    :root{
   --font-family: "DM Sans", sans-serif;
  }
  body{
   h1,h2,h3,h4,h5,h6,span,p, label{
      font-family:var(--font-family);
   }
 
  }
  image{
    max-width:100%;
    height:auto;
  }
    .map-section {
        display: flex;
        gap: 60px;
    }

    .property {
        width:100%; /* Change width to full width */
        display:grid;
        grid-template-columns:1fr 1fr;
        flex-wrap: wrap; /* Ensure properties wrap to new line */
        gap:30px;
        justify-content: space-between; /* Evenly distribute properties */
        
    }

    .property-inner {
        /* width: calc(50% - 10px); Adjust width to fit 3 properties in a row */
        border: 1px solid rgba(0, 0, 0, 0.1);
        position: relative;
        /* margin:20px 0; */
        display:flex;
        transition: all 0.4s linear;
        overflow:hidden;
       
    }
    .property-inner:hover {
 box-shadow: 0px 15px 30px rgba(0,0,0,0.10);
  transform: scale(1);
}
    .property:nth-child(3n+1) {
        clear: both; /* Clear float every third property */
    }

    #listings {
        padding: 90px 0;
    }
    .property-box a{
        font-size:14px;
        padding:0;
    }
    .property-box h5{
        font-size:16px;
    }
    .property-box {
    position: absolute;
    top: 10px;
    left: 10px;
    box-shadow: 0px 15px 30px rgba(0,0,0,0.10);
    /* background-color: #e5974f; */
    padding: 5px;
    background-color: white;
    border-radius: 8px;
}
.property-box a:hover {
        text-decoration: none;
    }
    .property-inner a{
        overflow:hidden;
     }
     .property-inner a img {
    transition: all 0.4s linear;
}
.property-inner a img:hover{
    transform:scale(1.2);
}

    .property-dec span {
    font-size: 16px;
    color: #8E8E93;
    
}
.property-dec p {
        font-size: 16px;
    }
    .property-dec h5:hover{
        color:#FFA920;
        transition: all 0.2s linear;
    }
    .property-dec h5 {
    font-size: 16px;
    margin: 0;
    color: #868686;
    padding: 5px 15px 0 0;
    cursor:pointer;
}
    .option-option {
    display: inline-flex;
    background-color: #f7f7f7;
    justify-content: space-between;
    padding: 15px 0;
    margin:10px 0;
}
    .property-dec {
     padding:0 10px;
    }
.map-heading h3{
    font-size:40px;
    padding-bottom:20px;
}
.option-option h5{
    width
}
    .property-inner h2 {
    font-size: 21px;
    margin: 0;
    color: black;
    padding: 5px 0;
  padding: 10px 0;
    }
    .map {
        width: 80%;
    }
    .property img {
       max-width:500px;
       height:100%;
    }
    .listing-title{
        padding:40px 0;
    }
    div#map_canvas {
        width: 100%;
        height: 735px;
    }
    .agent-widget-inner {
    width: 100%;
    gap: 30px;
    margin: 80px 0;
    box-shadow: 0px 15px 30px rgba(0,0,0,0.10);
    }
    .agent-widget {
    display: flex;
    gap: 20px;
    padding-top: 20px;
    align-items: center;
    justify-content: center;
}
    .agent-widget img{
        max-width:100px;
        border-radius:105px;
        height:100px;
    }
    .agent-form input[type="text"]{
       margin:10px 0;
     }
     .agent-form{
        padding:30px;
     }
     .agent-name h3{
        color:#FFA920;
        font-size:30px;
     }
     .agent-btn{
        text-align:center;
        padding:20px 0;
     }
     .agent-btn button{
        background-color:#FFA920;
        color:white;
        border:none;
        padding:10px 15px;
     }
    @media only screen and (max-width:1024px){
        .map-section {
       display:block;
}
.property{
        width:100%;
        padding-bottom:40px;
    }
    .map {
    width: 100%;
    /* margin: auto; */
}
    .map-heading h3 {
    padding-top:30px;
    }
    }
    
    @media only screen and (max-width:768px){
    .property{
        width:100%;
        grid-template-columns:1fr;
        
    }
    .map-heading h3 {
    padding-top:30px;
    font-size:25px;
}
.agent-widget-inner {
    width:100%;
}
    }
@media only screen and (max-width:425px){
    .property-inner{
        display:block;
    }

    .agent-widget-inner {
    margin: 40px 0;
}
#listings {
    padding:unset;
}
.property img {
    max-width:unset!important;
    max-width: 500px;
    height: unset !important;
} 
.logo-text {
    color: black;
    font-size: 16px;
    font-style: italic;
}
.navbar {
  padding:unset !important;
}
    }
</style>
@section('content')
    <!-- Breadcrumb -->
    <section id="bc" class="mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{% url 'listing:home' %}">
                            <i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item active">Featured Properties</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- Listings -->
    <section id="listings" class=" px-4">
        <div class="conatiner">
        <div class="map-section">
            <div class="property">
                <!-- Property 1 -->
                @foreach($listings as $listing)
                    <div class="property-inner">
                        <a href="{{ route('single.listing', $listing->id) }}">
                            <img alt="Property Image" src="{{ url($listing -> thumbnail_0) }}" alt="">
                        </a>
                        <div class="property-dec">
                            <h2>Property Details</h2>
                            <span>{{$listing->title}}</span>
                            <div class="option-option">
                                <h5>{{ $listing->bathroom }} Bathroom </h5>
                                <h5>{{ $listing->bedroom }} Bedrooms </h5>
                            </div>
                            <p>{{ substr($listing->description, 0, 50).'...' }}</p>
                        </div>
                        <div class="property-box">
                            <h5>{{ $listing->price }}</h5>
                            <a href="#">Per Night</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Map Section -->
            
            <div class="map">
                <div class="map-heading">
                    <!-- <h3>Location</h3> -->
                </div>
               <div id="map_canvas"></div>
            <!-- <div class="agent-widget-inner">
                <div class="agent-widget">
                    <div class="agent-image">
                        <img src="{{asset('assets/img/realtors\jenny.jpg')}}"">
                    </div>
                    <div class="agent-name">
                        <h3>Kelly</h3>
                         <span>+ 9987766766</span>
                    </div>
                </div>
                <div class="agent-form">
                <label for="first_name"></label>
                  <input type="text" name="first_name" class="form-control" placeholder="Your Email" required>
                  <label for="first_name"></label>
                  <input type="text" name="first_name" class="form-control" placeholder="Your Phone" required>
                  <label for="first_name"></label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="I'm interested in this property [ID 123456] and I'd like to know more details." rows="2"></textarea>
                  <div class="agent-btn">
                  <button>Send Message</button>
                  </div>
                </div>
            </div> -->
                  </div>
             </div>
             
      
        
    </section>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBD-W2RjTGgl0IF9ijvUlWHTnN04Sy0wFo&callback=initMap" defer></script>
    <script>

     let map, activeInfoWindow, markers = [];
    
    function initMap() {
        map = new google.maps.Map(document.getElementById("map_canvas"), {
        
            center: {
                lat: 31.0461,
                lng: 34.8516,
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
    console.log("11111",map);
    console.log(event.latLng.lat(), event.latLng.lng());
}

/* ------------------------ Handle Marker Click Event ----------------------- */
function markerClicked(marker, index) {
    console.log(marker.position.lat());
    console.log(marker.position.lng());
}

/* ----------------------- Handle Marker DragEnd Event ---------------------- */
function markerDragEnd(event, index) {

    console.log(event.latLng.lat());
    console.log(event.latLng.lng());
}
    </script>
@endsection
