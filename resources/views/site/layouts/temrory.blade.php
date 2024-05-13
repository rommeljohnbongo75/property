<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');

    #register {
        padding-top: 130px;
        padding-bottom: 40px;
    }

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
        p label {
            font-family: var(--font-family);
        }

        .container {
            max-width: 1440px;
            margin: 0 auto;
        }

        #listings {
            padding: 90px 0;
        }

        .filter-location-inner {
            border: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.10);
        }

        .filter-location-dec h4 {
            font-size: 19px;
        }

        .filter-location-dec {
            padding: 10px;
        }

        .location-filter-detials {
            padding: 0 10px;
        }

        .listings-location-inner {
            display: grid;
            grid-template-columns: 0.8fr 0.8fr 0.8fr;
            gap: 30px;
            padding-top: 30px;
        }

        .search-bar-inner {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 0.3fr;
            gap: 20px;
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

        .listing-heading i {
            padding-right: 5px;
            color: #FFA920;
            font-size: 20px;
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

        .arrive-data {
            align-items: center;
        }

        .adult-inner h4 {
            margin-bottom: 0;
        }

        .location-filter-detials a {
            background-color: #FFA920;
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

        .adult-inner {
            gap: 10px;
            color: black;
        }

        .adult-data {
            align-items: center;
            border: 1px solid #d5dbdb;
            border-radius: 0.375rem;
            position: relative;
        }

        .adult-data:hover.adult-data ul {
            visibility: visible;
        }

        .adult-data i {
            /* border: 1px solid #d5dbdb; */
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

        .form-control:focus {
            border-color: inherit;
            -webkit-box-shadow: none;
            box-shadow: none;
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

        .adult-data h4 {
            font-size: 13px;
        }

        .adult-data ul {
            top: 105%;
            width: 100%;
            margin: 0;
            padding: 10px 0;
            left: -3px;
            z-index: 9999;
            background-color: white;
            border: 1px solid #d5dbdb;
            visibility: hidden;
            transition: all .15s ease-in-out;
        }

        .adult-data ul li {
            list-style: none;
            width: 100%;
        }

        .adult-data ul li a {
            text-decoration: none;
        }

        .adult-inner {
            align-items: center;
            display: flex;
        }

        .select-data {
            gap: 20px;
            padding: 0 20px;

        }

        .plus a {
            color: black;
        }

        .plus h5,
        .plus span {
            font-size: 20px;
        }

        .plus {
            display: contents;
            /* gap: 30px; */
            padding: 0 46px;
            border: 1px solid black;
            border-radius: 10px;
            color: black;
        }

        @media only screen and (max-width:1024px) {
            .listings-location-inner {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media only screen and (max-width:425px) {
            .listings-location-inner {
                grid-template-columns: 1fr;
            }

            .search-bar-inner {
                grid-template-columns: 1fr;
            }

            .arrive-search {
                font-size: 20px;
                background-color: #e5974f;
                text-align: center;
                color: white;

            }
        }
    }
</style>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="zv0xCkChP7csuT20F9DHng88QStpYn8M2M7cBA2d">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css"
        integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://estatedira.com/public/assets/css/all.css">
    <!-- Lightbox -->
    <!-- slick-slider -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link href="https://estatedira.com/public/assets/css/lightbox.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://estatedira.com/public/assets/css/bootstrap.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
    <!-- Custom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://estatedira.com/public/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://estatedira.com/public/assets/datepicker/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://estatedira.com/public/assets/datepicker/css/custom.css">
    <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/19.2.3/css/dx.common.css" />
    <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/19.2.3/css/dx.material.orange.light.compact.css" />






    <title>
        | Real State
    </title>
</head>

<body id="top">




    <!-- Top Bar -->
    <style>
        /* @import url(<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-thin-rounded/css/uicons-thin-rounded.css'>); */

        image {
            max-width: 100%;
            height: auto;
        }

        #header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 999;
        }

        /* .navbar-dark .navbar-nav .nav-link {
            color: black !important;
            font-family: var(--font-family) !important;
            font-size: 16px;
            font-weight: bold;
            z-index: 999;
            transition: all 0.2s linear;
        }

        .navbar-nav .nav-link:hover {
            color: #e5974f !important;
        } */

        /* nav.navbar {
            background-color: transparent;
            width: 100%;
            opacity: 1;

        } */

        /* .active-header {
            background-color: #ffff !important;
            width: 100%;
            opacity: 1;
            border-bottom: 1px solid rgba(153, 153, 153, 0.22);
            box-shadow: 0px 4px 18px 0px rgba(0, 0, 0, 0.0784313725);
        } */

        .navbar {
            padding: 0 10px !important;
        }

   

        .navbar-dark .navbar-brand {
            /* font-style:italic; */
        }

        .nav-item a img {
            width: 25px;
            padding-right: 5px;
        }

        .navbar img {
            width: 100%;
            max-width: 70px;
        }

        input[type="text"] {
            width: 100%;
        }

    </style>
    <header id="header">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <!-- <div class="position-absolute">  -->
            <div class="d-flex logo-text align-items-center">
                <!-- <img src="https://estatedira.com/public/assets/img/residential.png"> -->
                <h4>E</h4>state
                <h3>R</h3><span>ental</span>
                <a class="navbar-brand" href="https://estatedira.com/public"></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item   mr-3">
                <a class="nav-link" href="https://estatedira.com/public">Home</a>
              </li> -->
                    <!-- <li class="nav-item mr-3 ">
                <a class="nav-link" href="https://estatedira.com/public/about">About</a>
              </li> -->

                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-3 ">
                        <a class="nav-link" href="https://estatedira.com/public/listings">Featured Property</a>
                    </li>
                    <li class="nav-item mr-3 ">
                        <a class="nav-link" href="https://estatedira.com/public/conatct-new">Contact</a>
                    </li>
                    <li class="nav-item mr-3 ">
                        <a class="nav-link" href="https://estatedira.com/public/register">
                            <img src="https://estatedira.com/public/assets/img/login.png">Register</a>
                    </li>
                    <li class="nav-item mr-3 ">
                        <a class="nav-link" href="https://estatedira.com/public/login">
                            <img src="https://estatedira.com/public/assets/img/user.png">Log In</a>
                        </i>
                    </li>

                </ul>
            </div>
            <!-- </div> -->
        </nav>
    </header>

    <section id="listings">
        <div class="container">
            <div class="search-bar-inner">
                <div class="adult-data d-flex position-relative">
                    <label class="visually-hidden" for="specificSizeSelect"></label>
                    <i class="fa-regular fa-user"></i>
                    <h4>1 Adult | 0 Children | 0infant | 0 Room | 0 Bed</h4>
                    <ul class="position-absolute">
                        <li><a href="">
                                <div class="select-data d-flex justify-content-between">
                                    <div class=" adult-inner">
                                        <h4>1</h4>
                                        <span>Adults</span>
                                    </div>
                                    <div class="plus">
                                        <h5><a href="">-</a></h5>
                                        <span><a href="">+</a></span>
                                    </div>
                                </div>
                            </a></li>
                        <li><a href="">
                                <div class="select-data d-flex justify-content-between">
                                    <div class=" adult-inner">
                                        <h4>1</h4>
                                        <span>Adults</span>
                                    </div>
                                    <div class="plus">
                                        <h5><a href="">-</a></h5>
                                        <span><a href="">+</a></span>
                                    </div>
                                </div>
                            </a></li>
                        <li><a href="">
                                <div class="select-data d-flex justify-content-between">
                                    <div class=" adult-inner">
                                        <h4>1</h4>
                                        <span>Adults</span>
                                    </div>
                                    <div class="plus">
                                        <h5><a href="">-</a></h5>
                                        <span><a href="">+</a></span>
                                    </div>
                                </div>
                            </a></li>
                        <li><a href="">
                                <div class="select-data d-flex justify-content-between">
                                    <div class=" adult-inner">
                                        <h4>1</h4>
                                        <span>Adults</span>
                                    </div>
                                    <div class="plus">
                                        <h5><a href="">-</a></h5>
                                        <span><a href="">+</a></span>
                                    </div>
                                </div>
                            </a></li>
                        <li><a href="">
                                <div class="select-data d-flex justify-content-between">
                                    <div class=" adult-inner">
                                        <h4>1</h4>
                                        <span>Adults</span>
                                    </div>
                                    <div class="plus">
                                        <h5><a href="">-</a></h5>
                                        <span><a href="">+</a></span>
                                    </div>
                                </div>
                            </a></li>

                    </ul>
                </div>
                <div class="arrive-data d-flex">
                    <i class="fa-regular fa-calendar"></i><input type="text" name="checkin_filter"
                        id="checkin_filter" autocomplete="off" value="" readonly="" class="form-control"
                        placeholder="Arrive - Depart">
                </div>
                <div class=" Amenities-data">
                    <div class="checkbox-dropdown">
                        <i class="fa-solid fa-bath"></i>Amenities
                        <ul class="checkbox-dropdown-list">
                            <li>
                                <label><input type="checkbox" value="Vejle" name="city" />Air
                                    Conditioning</label>
                            </li>
                            <li>
                                <label><input type="checkbox" value="Horsens" name="city" />Barbecue Area</label>
                            </li>
                            <li>
                                <label><input type="checkbox" value="Kolding" name="city" />Beis Medrash</label>
                            </li>
                            <li>
                                <label><input type="checkbox" value="Kolding" name="city" /> City View</label>
                            </li>
                            <li>
                                <label><input type="checkbox" value="Kolding" name="city" /> Coffee
                                    Machine</label>
                            </li>
                            <li>
                                <label><input type="checkbox" value="Kolding" name="city" /> Dishwasher</label>
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
                                    <input type="checkbox" value="Kolding" name="city" /> Laundry</label>
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

    </section>








</body>

</html>
