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
        padding: 5px 0;
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

    .map-inner iframe {
        width: 100%;
        height: 100%;
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
                            <h5>{{ $listing->bathroom }} Bathroom </h5>
                            <p>Description of the property goes here.</p>
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
                <div class="map-inner">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d40371121.27261413!2d-89.21876900000001!3d-51.859903!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1711694470236!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
