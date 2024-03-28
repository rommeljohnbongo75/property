@extends('site.base')
@section('title')All Properties | @endsection
<style>
  .container {
        display: flex;
    }
    .property {
        flex: 1;
        padding: 20px;
    }
    .map {
        flex: 1;
        padding: 20px;
    }
  
    .property img {
        max-width: 100%;
        height: auto;
    }
    .map iframe {
        width: 100%;
        height: 400px;
        border: 0;
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
<section id="listings" class="py-4">
  <div class="container">
      <div class="property">
          <h2>Property Details</h2>
          <p>Description of the property goes here.</p>
          <img src="{{ asset('/assets/img/showcase.jpg') }}" alt="Property Image">
      </div>
      <div class="map">
          <h2>Location Map</h2>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.060140753942!2dYOUR-LONGITUDE!3dYOUR-LATITUDE!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3AYOUR-PIN-Y!2sYOUR-PIN-X!5e0!3m2!1sen!2sus!4vYOUR-MAP-API-KEY" allowfullscreen></iframe>
      </div>
  </div>
</section>
@endsection