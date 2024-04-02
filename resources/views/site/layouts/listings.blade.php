@extends('site.base')
@section('title')All Properties | @endsection
<style>
    .map-section {
        display: flex;
        gap: 20px;
    }

    .property {
        width: 100%; /* Change width to full width */
        display: flex;
        flex-wrap: wrap; /* Ensure properties wrap to new line */
        gap: 10px;
        justify-content: space-between; /* Evenly distribute properties */
    }

    .property-inner {
        width: calc(33.33% - 10px); /* Adjust width to fit 3 properties in a row */
        border: 1px solid rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .property:nth-child(3n+1) {
        clear: both; /* Clear float every third property */
    }

    #listings {
        padding: 90px 0;
    }

    .property-box {
        position: absolute;
        top: 10px;
        left: 10px;
        background-color: #e5974f;
        padding: 5px;
        border-radius: 8px;
    }

    .property-box a {
        border: 1px solid black;
        padding: 0 5px;
    }

    .property-box a:hover {
        text-decoration: none;
    }

    .property-dec span {
        font-size: 16px;
    }

    .property-dec p {
        font-size: 16px;
    }

    .property-dec h5 {
        font-size: 16px;
        margin: 0;
        padding: 5px 15px 0 0;
    }
    .option-option{
        display:flex;
    }

    .property-dec {
        padding: 10px;
    }

    .property-inner h2 {
        font-size: 16px;
        margin: 0;
        padding: 5px 0;
    }

    .map {
        width: 100%;
    }

    .property img {
        max-width: 100%;
        height: auto;
    }

        div#map_canvas {
        width: 100%;
        height: 735px;
    }
</style>
@section('content')
    <!-- Breadcrumb -->
    <section id="bc" class="mt-3">
        <div class="container">
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
                <div id="map_canvas"></div>
            </div>
        </div>
    </section>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBD-W2RjTGgl0IF9ijvUlWHTnN04Sy0wFo&callback=initMap" async></script>
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
