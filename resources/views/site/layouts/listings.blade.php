@extends('site.base')
@section('title')
    All Properties |
@endsection
<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');

    :root {
        --font-family: "DM Sans", sans-serif;
    }

    body {

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        span,
        p,
        label {
            font-family: var(--font-family);
        }

    }

    image {
        max-width: 100%;
        height: auto;
    }

    .map-section {
        display: flex;
        gap: 60px;
        padding-top: 40px;
    }

    .property {
        width: 100%;
        /* Change width to full width */
        display: grid;
        grid-template-columns: 1fr 1fr;
        flex-wrap: wrap;
        /* Ensure properties wrap to new line */
        gap: 30px;
        justify-content: space-between;
        /* Evenly distribute properties */

    }

    .property-inner {
        /* width: calc(50% - 10px); Adjust width to fit 3 properties in a row */
        border: 1px solid rgba(0, 0, 0, 0.1);
        position: relative;
        /* margin:20px 0; */
        display: flex;
        transition: all 0.4s linear;
        overflow: hidden;

    }

    .property-inner:hover {
        box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.10);
        transform: scale(1);
    }

    .property:nth-child(3n+1) {
        clear: both;
        /* Clear float every third property */
    }

    #listings {
        padding: 90px 0;
    }

    .property-box a {
        font-size: 14px;
        padding: 0;
    }

    .property-box h5 {
        font-size: 16px;
    }

    .property-box {
        position: absolute;
        top: 10px;
        left: 10px;
        box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.10);
        /* background-color: #e5974f; */
        padding: 5px;
        background-color: white;
        border-radius: 8px;
    }

    .checkbox-dropdown {
        border: 1px solid #dee2e6;
        padding: .375rem 2.25rem .375rem .75rem;
        position: relative;
        margin: 0 auto;
        user-select: none;
        border-radius: 0.375rem;
    }

    /* Display CSS arrow to the right of the dropdown text */
    .checkbox-dropdown:after {
        content: '';
        height: 0;
        position: absolute;
        width: 0;
        border: 6px solid transparent;
        border-top-color: #000;
        top: 50%;
        right: 10px;
        margin-top: -3px;
    }

    /* Reverse the CSS arrow when the dropdown is active */
    .checkbox-dropdown.is-active:after {
        border-bottom-color: #000;
        border-top-color: #fff;
        margin-top: -9px;
    }

    .checkbox-dropdown-list {
        list-style: none;
        margin: 0;
        padding: 0;
        position: absolute;
        top: 100%;
        z-index: 9999;
        border: inherit;
        border-top: none;
        left: -1px;
        right: -1px;
        opacity: 0;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        height: unset !important;
        overflow-x: hidden;
        pointer-events: none;
    }

    .is-active .checkbox-dropdown-list {
        opacity: 1;
        /* display the dropdown */
        background-color: white;
        z-index: 999;
        pointer-events: auto;
        /* make sure that the user still can select checkboxes */
    }

    .checkbox-dropdown-list input[type="checkbox"] {
        margin-right: 5px;
    }

    .checkbox-dropdown-list li label {
        display: block;
        /* border-bottom: 1px solid silver; */
        padding: 0 10px;

        transition: all 0.2s ease-out;
    }

    .checkbox-dropdown-list li label:hover {
        background-color: #fff;
        color: #000;
    }

    .property-box a:hover {
        text-decoration: none;
    }

    .property-inner a {
        overflow: hidden;
    }

    .property-inner a img {
        transition: all 0.4s linear;
    }

    .property-inner a img:hover {
        transform: scale(1.2);
    }

    .property-dec span {
        font-size: 16px;
        color: #8E8E93;
    }

    .search-bar-inner {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 0.3fr;
        gap: 20px;
    }

    .arrive-data {
        align-items: center;
    }

    .arrive-data .form-control[readonly] {
        background-color: #fff;
        opacity: 1;
    }

    .adult-data-inner {
        display: flex !important;
        gap: 30px;
    }

    .arrive-data input[type="text"] {
        border-left: 0;
    }

    .arrive-data i {
        border: 1px solid #d5dbdb;
        padding: 9.8px;
        border-radius: 0.375rem;
        border-right: 0;
        margin-right: -6px;
    }

    .arrive-search i {
        font-size: 20px;
        background-color: #e5974f;
        text-align: center;
        color: white;
        padding: 10px;
    }

    .adult-data {
        align-items: center;
    }

    .adult-data i {
        border: 1px solid #d5dbdb;
        padding: 9.8px;
        border-radius: 0.375rem;
        border-right: 0;
        margin-right: -6px;
    }

    .search-location {
        align-items: center;
    }

    .search-location i {
        border: 1px solid #d5dbdb;
        padding: 9.8px;
        border-radius: 0.375rem;
        border-right: 0;
        margin-right: -6px;
    }

    .search-location .form-select {
        border-left: 0;
        border-radius: 0.375rem;
    }

    .adult-data .form-select {
        border-left: 0;
        border-radius: 0.375rem;
    }

    .property-dec p {
        font-size: 16px;
    }

    .property-dec h5:hover {
        color: #FFA920;
        transition: all 0.2s linear;
    }

    .property-dec h5 {
        font-size: 16px;
        margin: 0;
        color: #868686;
        padding: 5px 15px 0 0;
        cursor: pointer;
    }

    .option-option {
        display: inline-flex;
        background-color: #f7f7f7;
        justify-content: space-between;
        padding: 15px 0;
        margin: 10px 0;
    }

    .property-dec {
        padding: 0 10px;
    }

    .map-heading h3 {
        font-size: 40px;
        padding-bottom: 20px;
    }

    .option-option h5 {
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
        max-width: 500px;
        height: 100%;
    }

    .listing-title {
        padding: 40px 0;
    }

    div#map_canvas {
        width: 100%;
        height: 735px;
    }

    .agent-widget-inner {
        width: 100%;
        gap: 30px;
        margin: 80px 0;
        box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.10);
    }

    .agent-widget {
        display: flex;
        gap: 20px;
        padding-top: 20px;
        align-items: center;
        justify-content: center;
    }

    .agent-widget img {
        max-width: 100px;
        border-radius: 105px;
        height: 100px;
    }

    .agent-form input[type="text"] {
        margin: 10px 0;
    }

    .agent-form {
        padding: 30px;
    }

    .agent-name h3 {
        color: #FFA920;
        font-size: 30px;
    }

    .agent-btn {
        text-align: center;
        padding: 20px 0;
    }

    .agent-btn button {
        background-color: #FFA920;
        color: white;
        border: none;
        padding: 10px 15px;
    }

    /* ------------ocation-listings-start--------------*/
    .location-filter {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 20px;
    }

    .filter-location-dec h4 {
        font-size: 20px;
    }

    .location-filter-detials a {
        background-color: #FFA920;
    }

    .location-filter-detials a:hover {
        background-color: #FFA920;
        border: none;
    }

    .filter-icon {
        display: flex;
        gap: 6px;
        align-items: center;
    }

    .filter-icon i {
        color: black;

    }

    /* ------------ocation-listings-end--------------*/

    /*------------media-queary-start------------------*/
    @media only screen and (max-width:1024px) {
        .map-section {
            display: block;
        }

        .property {
            width: 100%;
            padding-bottom: 40px;
        }

        .map {
            width: 100%;
            /* margin: auto; */
        }

        .map-heading h3 {
            padding-top: 30px;
        }
    }

    @media only screen and (max-width:768px) {
        .property {
            width: 100%;
            grid-template-columns: 1fr;

        }

        .map-heading h3 {
            padding-top: 30px;
            font-size: 25px;
        }

        .agent-widget-inner {
            width: 100%;
        }
    }

    @media only screen and (max-width:425px) {
        .property-inner {
            display: block;
        }

        .agent-widget-inner {
            margin: 40px 0;
        }

        #listings {
            padding: unset;
        }

        .property img {
            max-width: unset !important;
            max-width: 500px;
            height: unset !important;
        }

        .logo-text {
            color: black;
            font-size: 16px;
            font-style: italic;
        }

        .search-bar-inner {
            grid-template-columns: 1fr;
        }

        .navbar {
            padding: unset !important;
        }

        .arrive-search {
            font-size: 20px;
            background-color: #e5974f;
            text-align: center;
            color: white;

        }
    }
</style>
@section('content')
    <section id="listings">

        <div class="container">
            <form action="" method="post">
                <div class="search-bar-inner">
                    <div class="search-location d-flex">
                        <label  for="specificSizeSelect"></label>
                        <i class="fa-solid fa-location-dot"></i>
                        <select class="form-select">
                            <option selected>Jerusalem</option>
                            <option value="Jerusalem">Geula</option>
                            <option value="Jerusalem">New York</option>
                            <option value="Jerusalem">Shalem Tower</option>
                        </select>
                    </div>
                    <div class="adult-data d-flex">
                        <label  for="specificSizeSelect"></label>
                        <i class="fa-regular fa-user"></i>
                        <select class="form-select" id="specificSizeSelect">

                            <option selected>1 Adult | 0 Children | 0infant | 0 Room | 0 Bed</option>
                            <option value="Jerusalem" class="adult-data-inner">
                                <div class="">
                                    <h3>1 Adults</h3>
                                </div>
                                <div class="d-flex plus-text">
                                    <h4>-</h4>
                                    <h5>+</h5>
                                </div>
                            </option>
                            <option value="Jerusalem" class="adult-data-inner">
                                <div class="">
                                    <h3>1 Adults</h3>
                                </div>
                                <div class="d-flex plus-text">
                                    <h4>-</h4>
                                    <h5>+</h5>
                                </div>
                            </option>
                            <option value="Jerusalem" class="adult-data-inner">
                                <div class="">
                                    <h3>1 Adults</h3>
                                </div>
                                <div class="d-flex plus-text">
                                    <h4>-</h4>
                                    <h5>+</h5>
                                </div>
                            </option>
                        </select>
                    </div>
                    <div class="arrive-data d-flex">
                        <i class="fa-regular fa-calendar"></i><input type="text" name="checkin_filter"
                            id="checkin_filter" autocomplete="off" value="" readonly="" class="form-control"
                            placeholder="Arrive - Depart">
                    </div>
                    <div class=" Amenities-data">
                        <div class="checkbox-dropdown">
                            <i class="fa-solid fa-bath"></i>
                            Amenities
                            <ul class="checkbox-dropdown-list">
                                <li>
                                    <label>
                                        <input type="checkbox" value="Vejle" name="city" />Air Conditioning</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" value="Horsens" name="city" />Barbecue Area</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" value="Kolding" name="city" />Beis Medrash</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" value="Kolding" name="city" /> City View</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" value="Kolding" name="city" /> Coffee Machine</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" value="Kolding" name="city" /> Dishwasher</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" value="Kolding" name="city" /> Elevator</label>
                                </li>

                                <li>
                                    <label>
                                        <input type="checkbox" value="Kolding" name="city" /> Elevator for
                                        Shabbos</label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" value="Kolding" name="city" /> Garden
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" value="Kolding" name="city" />Laundry</label>
                                </li>

                                <li>
                                    <label>
                                        <input type="checkbox" value="Kolding" name="city" />Microwave</label>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="arrive-search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </form>
        </div>
        <div class="map-section">
            <div class="property">
                <!-- Property 1 -->
                @foreach ($listings as $listing)
                    <div class="property-inner">
                        <a href="{{ route('single.listing', $listing->id) }}">
                            <img alt="Property Image" src="{{ url($listing->thumbnail_0) }}" alt="">
                        </a>
                        <div class="property-dec">
                            <h2>Property Details</h2>
                            <span>{{ $listing->title }}</span>
                            <div class="option-option">
                                <h5>{{ $listing->bathroom }} Bathroom </h5>
                                <h5>{{ $listing->bedroom }} Bedrooms </h5>
                            </div>
                            <p>{{ substr($listing->description, 0, 50) . '...' }}</p>
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

                <!-- listings-location-end -->
                <!-- <div class="agent-widget-inner">
                            <div class="agent-widget">
                                <div class="agent-image">
                                    <img src="{{ asset('assets/img/realtors\jenny.jpg') }}"">
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
                              <textarea class="form-control" id="exampleFormControlTextarea1"
                                  placeholder="I'm interested in this property [ID 123456] and I'd like to know more details." rows="2"></textarea>
                              <div class="agent-btn">
                              <button>Send Message</button>
                              </div>
                            </div>
                        </div> -->
            </div>
        </div>



    </section>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBD-W2RjTGgl0IF9ijvUlWHTnN04Sy0wFo&callback=initMap"
        defer></script>
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
                    if (activeInfoWindow) {
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
            console.log("11111", map);
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
