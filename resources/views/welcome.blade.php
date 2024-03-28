<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Property and Map</title>
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
    /* Adjust as needed */
    .property img {
        max-width: 100%;
        height: auto;
    }
    .map iframe {
        width: 100%;
        height: 400px; /* Adjust height as needed */
        border: 0;
    }
</style>
</head>
<body>

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

</body>
</html>
