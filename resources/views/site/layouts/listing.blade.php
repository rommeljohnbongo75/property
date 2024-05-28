@extends('site.base')
@section('title')
    {{ $listing->title }} |
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
        p {
            font-family: var(--font-family);
        }
    }

    .container-form-one {
        max-width: 500px;
        padding: 20px;
        width: 100%;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
    }

    .container-form-one h1 {
        font-size: 30px;
        color: black;
        font-Family: var(--font-family);
    }

    .form-group label {
        display: block;
    }

    .form-group {
        margin: 0 !important;
    }

    #Booking-details {
        padding: 30px 0;
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
        color: #000 !important;
    }

    input[type="date"] {
        width: calc(100% - 40px);
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        display: inline-block;
        vertical-align: middle;
    }

    .counter {
        display: inline-block;

        padding: 10px 0;
    }

    .counter span {
        cursor: pointer;
        display: inline-block;
        width: 30px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        background-color: #FFA920;
        color: #fff;
        border-radius: 5px;
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

    .form-icon-one i {
        font-size: 25px;
        color: #FFA920 !important;
    }

    .form-group-icon i {
        font-size: 25px;
        padding-right: 5px;
        color: #FFA920 !important;
        /* margin-left:10px; */
    }

    .form-img i {
        font-size: 25px;
    }

    .form-group-one {
        background-color: #efe9e2;
        padding: 15px;
        border-radius: 10px;
        /* gap:20px; */
    }

    .from-data {
        background-color: #efe9e2;
        border-radius: 10px;
        padding: 5px 10px;
        margin: 10px 0;
    }

    .form-group .form-control {
        background-color: #efe9e2;
        border-radius: 10px;
        height: 20%;
    }

    .btn {
        margin-top: 20px;
    }

    .sec-menu-div {
        padding: 20px 0;
    }

    .adults-children .sec-menu-div.active {
        display: block !important;

    }

    .list-group.list-group-flush .list-group-item {
        font-size: 20px;
    }

    .counter input[type="text"] {
        width: 15%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        display: inline-block;
        text-align: center;
        vertical-align: middle;
    }

    .calendar-main {
        display: flex !important;
        justify-content: center;
    }

    div#map {
        width: 100%;
        height: 80%;
    }

    .list-group {
        list-style: none;
        padding: 0;
        gap: 10px;
    }

    .list-group-item {
        display: flex;
        gap: 20px;

    }

    .asking-price {
        order: 1;
    }

    .list-group {
        font-size: 23px !important;
    }

    .list-group .text-secondary {
        color: #10284e !important;
    }

    li.list-group-item.text-secondary {
        margin-bottom: 15px;
    }

    .list-group-item {
        border: none !important;
    }

    i.fa-solid.fa-bed {
        padding-left: 16px;
        font-size: 20px;
    }

    i.fa-solid.fa-location-dot {
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
        max-width: 568px !important;
        height: 490px !important;
        padding: 15px;
    }

    .date-pixel {
        display: flex;
    }

    input.adults-adults:focus-visible,
    input#ranges:focus-visible,
    input#rangesend,
    input.children-children {
        border: none;
        outline: none;
    }

    .option-tab ul li {
        list-style: none;
    }

    .option-tab ul {
        gap: 40px;
        padding: 0;
    }

    .review-card {
        background-color: white;
        padding: 20px;
        box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.10);
    }

    .option-tab ul li a {
        text-decoration: none;
        color: black;
        font-size: 20px;
        font-family: var(--font-family);
        position: relative;
    }

    .option-tab ul li a::after {
        content: '';
        position: absolute;
        top: 32px;
        width: 100%;
        height: 3px;
        left: 0px;
        background-color: #e5974f;
        transition: all 0.3s ease-in;
    }

    li:hover .option-tab ul li a::after {
        visibility: visible;
    }

    .review-inner {
        justify-content: space-between;
    }

    .review {
        padding-bottom: 70px;
    }

    .property-dec {
        font-family: var(--font-family);
        font-size: 16px;
    }

    .review-btn button {
        padding: 10px 20px;
        background-color: #FFA920;
        color: black;
        border: none;
        border-radius: 50px;
        outline-offset: none;
    }

    .review-title h3 {
        padding-bottom: 20px;
        color: black;
        font-size: 30px;
    }

    .review-dec p {
        color: #8E8E93;
        font-size: 16px;
    }

    .review-dec {
        /* display:flex; */
    }

    .about-host-inner ul {
        display: flex;
    }

    .about-host-inner ul li {
        list-style: none;
    }

    .tab-scroll {
        background-color: white;
        width: 100%;
    }

    /* .tab{
padding-bottom:30px;
    padding-top: 0px;
    padding-bottom: 1px;
    transform: translateY(60px);
    left: 1142px;
    top: 0px;
    position: fixed;
    width: 356px;
} */
    .adults-children {
        display: blo
    }

    .author-name {
        padding: 30px;
        background-color: lightgray;
        border-radius: 50px;
    }

    .about-host-inner {
        /* align-items:center; */
        gap: 20px;
        padding: 20px 0;

    }

    .about-host-inner span {
        font-size: 20px;
    }

    .fields1 {
        display: flex;
    }

    .fileds-inner {
        display: flex !important;
    }

    .cards {
        padding-top: 30px !important;
    }

    .list-group-item i {
        color: #FFA920 !important;
    }

    .adults-children.sec-menu-div.active {
        display: block !important;
    }

    @media only screen and (max-width: 768px) {
        .container-form-one {
            width: unset !important;
        }

        .fileds-inner {
            display: block !important;
        }

        .cards {
            padding-top: 40px;
        }

        .page-title {
            font-size: 30px;
        }

        .fields h2 {
            font-size: 30px;
        }

        .container-form-one h1 {
            margin: 0;
            padding: 20px 0;
        }

        input[type="text"] {
            margin: 0 !important;
        }

        .property-title h3 {
            font-size: 30px;
        }

        .map-map h3 {
            font-size: 30px;
        }

        .date h3 {
            font-size: 30px;
        }

        .about-host {
            padding: 20px 0;
        }

        .about-host-title h3 {
            padding: 10px 0;
        }

        .contact-details h4 {
            font-size: 20px;
        }

        .contact-details h5 {
            margin: 0;
            font-size: 16px;
            padding: 10px 0;
        }

        #listing {
            padding: 100px 0;
        }

        #Booking-details {
            padding: 40px 0 !important;
        }

        .booking i {
            color: #FFA920;
        }

        /* slick-slider */
        body {
            background: #ccc;
        }

        .main {
            font-family: Arial;
            width: 500px;
            display: block;
            margin: 0 auto;
        }

        .action {
            display: block;
            margin: 100px auto;
            width: 100%;
            text-align: center;
        }

        .action a {
            display: inline-block;
            padding: 5px 10px;
            background: #f30;
            color: #fff;
            text-decoration: none;
        }

        .action a:hover {
            background: #000;
        }

        .form-group-one {
            padding: 5px 10px;
        }

        .slick-tab {
            padding: 0 10px;
        }

        #sticky {
            position: sticky;
            z-index: 999;
            top: 20%;
            background-color: #fff;
            box-shadow: 0 1px 0 0 #d8d8d8;
            width: 100%;
        }

        .listing {
            position: relative;
        }



        .page-title {
            font-family: var(--font-family);
            font-size: 45px;
        }

        .bo p i {
            color: #FFA920;
        }

        .list-group-item {
            color: black;
            font-size: 18px;
            font-family: var(--font-family);
        }

        .slider-nav .slick-dots li button:before {
            font-size: 10px;
        }

        .property-title h3 {
            font-family: var(--font-family);
            font-size: 40px;
            color: black;
            margin: 0;
            padding: 20px 0;
        }

        .map-map {
            box-shadow: 0px 4px 18px 0px rgba(0, 0, 0, 0.0784313725);
            padding: 30px;
        }

        .option-tab ul {
            justify-content: space-between;
        }

        .map-map h3 {
            font-family: var(--font-family);
            font-size: 40px;
            color: black;
            margin: 0;
            padding: 20px 0;
        }

        .property {
            padding: 60px 0;
        }

        .property-title {
            padding: 20px 30px;
        }

        .slider-nav .slick-slide img {
            cursor: pointer;
        }

        .slider-for .slick-slide img {
            cursor: pointer;
        }

        .counter-text h4,
        .counter-text-one h4 {
            font-size: 18px;
        }

        .counter-text p,
        .counter-text-one p {
            font-size: 14px;
        }

        #counter {
            border-bottom: 1px solid lightgray;
        }

        .fields {
            box-shadow: 0px 4px 18px 0px rgba(0, 0, 0, 0.0784313725);
            padding-top: 20px;
            padding-bottom: 60px;
            /* padding-left: 20px; */
        }

        .fields h2 {
            font-family: var(--font-family);
            font-size: 40px;
            color: black;
            margin: 0;
            padding: 20px 0;
        }

        .property-title {
            box-shadow: 0px 4px 18px 0px rgba(0, 0, 0, 0.0784313725);
        }

        .date {
            padding: 40px 30px;
            margin-top: 80px;
            box-shadow: 0px 4px 18px 0px rgba(0, 0, 0, 0.0784313725);
        }

        .date h3 {
            font-family: var(--font-family);
            font-size: 40px;
            color: black;
            margin: 0;
            padding: 20px 0;
        }

        .about-host-title ul {
            display: flex;
            margin: 0;
            padding: 0;
        }

        .img-fluid {
            display: block !important;
        }

        .about-host-title .review-icon li {
            list-style: none;

        }

        .review-icon li i {
            font-size: 16px;
            padding-right: 5px !important;

        }

        .about-host-inner span {
            font-size: 20px;
        }

        .fields1 {
            display: flex;
        }

        .fileds-inner {
            display: flex !important;
        }

        .cards {
            padding-top: unset !important;
        }

        .container-form-one {
            width: unset !important;
            margin: auto;
        }

        .fileds-inner {
            display: block !important;
        }

        .cards {
            padding-top: 40px !important;
        }

        .page-title {
            font-size: 30px;
        }

        .fields h2 {
            font-size: 30px;
        }

        .container-form-one h1 {
            margin: 0;
            padding: 20px 0;
        }

        input[type="text"] {
            margin: 0 !important;
        }

        .property-title h3 {
            font-size: 30px;
        }

        .map-map h3 {
            font-size: 30px;
        }

        .date h3 {
            font-size: 30px;
        }

        .calendar-main {
            flex-wrap: wrap;
            justify-content: center;
        }

        .review-title h3 {
            margin: 0;
        }

        .about-host-inner {
            flex-wrap: wrap;
        }
    }



    @media only screen and (max-width:425px) {
        .fields1 {
            flex-wrap: wrap;
        }

        .container-form-one h1 {
            font-size: 21px !important;
        }

        .container-form-one input[type="text"] {
            font-size: 14px;
        }

        .list-group {
            gap: 0;
        }

        .alert-text p {
            padding-bottom: 0 !important;
        }

        .page-title {
            margin-top: 56px;
            font-size: 20px;
        }

        .form-group-one {
            padding: 10px;

        }

        .property-dec {
            font-size: 14px;
        }

        .about-host-inner ul {
            margin: 0;
            padding: 0;
            display: flex;
        }

        .author {
            width: unset !important;
        }

        .review-btn button {
            padding: 10px 13px;
            font-size: 14px;
        }

        #listing {
            padding: 40px 0;
        }

        #listings {
            padding: 40px 0;
        }

        .date {
            margin: 0;
        }

        .option-tab ul {
            flex-wrap: wrap;
            flex-direction: column;
        }

        .adults-children.sec-menu-div.active {
            display: block !important;
        }

        .datepicker-days table.table-condensed {
            max-width: 400px !important;

        }

        td.active.day.test {
            background-color: rgb(242, 94, 94) !important;
            color: #000000 !important;
            text-decoration: line-through;
        }

        .active {
            background-color: #ec0c0c;
            border-color: #d91414;
            text-decoration: line-through
        }

    }

    .calendar {
        padding: 1em;
        border-radius: 10px;
        display: grid;
        place-items: center;
        grid-template-columns: repeat(7, 1fr);
        grid-auto-rows: max-content;
        grid-auto-flow: row;
        color: black;
        background-color: hsl(231, 20%, 85%);
    }

    .cell {
        width: 100%;
        padding: 0.4em 0.8em;
        text-align: center;

        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .cell:hover,
    .cell:focus {
        color: hsl(231, 20%, 85%);
        background-color: #bf4e30;
        user-select: none;
    }

    .cell:empty {
        width: 0;
        padding: 0;
    }

    .cell--unselectable {
        color: hsl(231, 20%, 50%);
    }

    .cell--unselectable:hover,
    .cell--unselectable:focus {
        color: hsl(231, 20%, 50%);
        background-color: transparent;
    }

    .date-text {
        padding: 1em 0.8em;
        grid-column: 1 / 5;
        justify-self: start;
        display: flex;
        align-items: center;

        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .button {
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* OTHER */

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
</style>
@section('content')
    <!-- Listing -->
    <section id="listing">

        <div class="container">
            <!-- <a href="{{ 'listings' }}" class="btn btn-light mb-4">Back To Listings</a> -->

            <div class="row">
                <!-- <div class="slider-for"> -->
                <div class="col-md-12 booking ">

                    <!-- Home Main Image -->
                    <h2 class="page-title">{{ $listing->title }}</h2>
                    <p><i class="fa-solid fa-location-dot"></i> {{ $listing->city }}, {{ $listing->country }} <i
                            class="fa-solid fa-bed"></i> {{ $listing->bedroom }} Bedroom <i
                            class="fa-solid fa-dollar-sign"></i> {{ $listing->price }} Price</p>
                    <!-- <img src="{{ url($listing->thumbnail_0) }}" alt="" class="img-main img-fluid mb-3"> -->
                </div>
                <div class="slider slider-for" id="img-slider">
                    <div><img src="{{ asset('assets/img/homes/home-1.jpg') }}" alt=""
                            class="img-main img-fluid mb-3"></div>
                    <div><img src="{{ asset('assets/img/homes/home-3.jpg') }}" alt=""
                            class="img-main img-fluid mb-3"></div>
                    <div><img src="{{ url($listing->thumbnail_0) }}" alt="" class="img-main img-fluid mb-3">
                    </div>
                    <div><img src="{{ asset('assets/img/homes/home-1.jpg') }}" alt=""
                            class="img-main img-fluid mb-3"></div>
                    <div><img src="card-dec" alt="" class="img-main img-fluid mb-3"></div>
                </div>
                <div class="slider slider-nav">
                    <div class="slick-tab"> <img src="{{ asset('assets/img/homes/home-1.jpg') }}" alt=""
                            class="img-main img-fluid mb-3"></div>
                    <div class="slick-tab"> <img src="{{ asset('assets/img/homes/home-3.jpg') }}" alt=""
                            class="img-main img-fluid mb-3"></div>
                    <div class="slick-tab"> <img src="{{ url($listing->thumbnail_0) }}" alt=""
                            class="img-main img-fluid mb-3"></div>
                    <div class="slick-tab"> <img src="{{ asset('assets/img/homes/home-1.jpg') }}" alt=""
                            class="img-main img-fluid mb-3"></div>
                    <div class="slick-tab"> <img src="{{ url($listing->thumbnail_0) }}" alt=""
                            class="img-main img-fluid mb-3"></div>
                    <div class="slick-tab"> <img src="{{ asset('assets/img/homes/home-1.jpg') }}" alt=""
                            class="img-main img-fluid mb-3"></div>
                    <div class="slick-tab"> <img src="{{ url($listing->thumbnail_0) }}" alt=""
                            class="img-main img-fluid mb-3"></div>
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

                    <div class=" fields ">
                        <h2>Booking Details</h2>
                        <div class=" gap-5 fileds-inner">
                            <div class="col-md-12 col-lg-6  justify-content-between fields1">
                                <div class="page-inner">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item ">
                                            <i class="fas fa-money-bill-alt"></i> Asking Price:
                                            <span class="  ">${{ $listing->price }}</span>
                                        </li>
                                        <li class="list-group-item ">
                                            <i class="fas fa-bed"></i> Bedrooms:
                                            <span class="">{{ $listing->bedroom }}</span>
                                        </li>
                                        <li class="list-group-item ">
                                            <i class="fas fa-bath"></i> Bathrooms:
                                            <span class="">{{ $listing->bathroom }}</span>
                                        </li>
                                        <li class="list-group-item ">
                                            <i class="fas fa-car"></i> Garage:
                                            <span class="">{{ $listing->garage }}
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item ">
                                            <i class="fas fa-th-large"></i> Square Feet:
                                            <span class="">{{ $listing->square_feet }}</span>
                                        </li>
                                        <li class="list-group-item ">
                                            <i class="fas fa-square"></i> Lot Size:
                                            <span class="">{{ $listing->lot_size }} Acres
                                            </span>
                                        </li>
                                        <li class="list-group-item ">
                                            <i class="fas fa-calendar"></i> Listing Date:
                                            <span class="">{{ $listing->created_at->diffForHumans() }}</span>
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-bed"></i> Realtor:
                                            <span class="">{{ @$listing->realtor->name }}
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-6">
                                <div class="cards">
                                    <div class="container-form-one">
                                        <h1>Booking Request Deatils</h1>
                                        <form action="{{ url('contact') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="listing_id" value="{{ $listing->id }}">
                                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                            <input type="hidden" name="name"
                                                @auth value="{{ Auth::user()->get_full_name() }}"@endif>
                        <input type="hidden" name="email" @auth value="{{ Auth::user()->email }}" @endif>
                                            <div class="from-data d-flex justify-content-around align-items-center">
                                                <div class="form-icon-one">
                                                    <i class="fa-regular fa-calendar-days" style="color:#10284e"></i>
                                                </div>

                                                <div class="date-pixel" id="cal">
                                                    <div class="form-group">
                                                        <input type="text" id='ranges' name="checkin"
                                                            value="Check In" placeholder="Check In">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" id='rangesend' name="checkout"
                                                            value="Check-Out" placeholder="Check-Out">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="alert-text">
                                            </div>

                                            <div class="form-group-one d-flex align-items-center justify-content-around"
                                                id="sec-menu">
                                                <div class="form-group-icon">
                                                    <i class="fa-regular fa-user" style="color:#10284e"></i>
                                                </div>
                                                <div class="data-lable-one">
                                                    <input type="text" class="adults-adults" style="font-size:18px"
                                                        value="1 Bedroom" placeholder="1 Bedroom">
                                                </div>
                                                <div class="form-lable-two">
                                                    <input type="text" class="children-children"
                                                        style="font-size:18px" value="1 Bathroom"
                                                        placeholder="1 Bathroom">
                                                </div>
                                            </div>

                                            <div class="adults-children sec-menu-div">
                                                <div class="form-group">
                                                    <div class="counter d-flex justify-content-center" id="counter">
                                                        <div class="counter-text">
                                                            <h4>Bedroom Capacity</h4>
                                                            <p>Total guests capacity</p>
                                                        </div>
                                                        <div class="counter-add text-center">
                                                            <span class="adults-minus">-</span>
                                                            <input type="text" id="adults" name="adults"
                                                                value="1" readonly>
                                                            <span class="adults-plus">+</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="counter d-flex justify-content-center">
                                                        <div class="counter-text-one">
                                                            <h4>Bathroom Capacity</h4>
                                                            <p>Total guests capacity</p>
                                                        </div>
                                                        <div class="counter-add text-center">
                                                            <span class="minus">-</span>
                                                            <input type="text" id="adults" name="children"
                                                                value="1" readonly>
                                                            <span id="adults-plus">+</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label for="message" class="col-form-label">Message:</label>
                                                <textarea name="message" class="form-control" style=" background-color: #efe9e2;"></textarea>
                                            </div>
                                            <input type="submit" value="Request To Book"
                                                class="btn btn-block btn-secondary">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Description -->
                <section class="property" id="Property Description">
                    <div class="property-title">
                        <h3>Property Description</h3>
                        <div class="row mb-5">
                            <div class="col-md-12 property-dec">
                                {{ $listing->description }}
                            </div>
                        </div>
                    </div>

                </section>

                <div class="map-map" id="Property Location">
                    <h3 class="">Property Location</h3>
                    <div id="map"></div>
                </div>
                <div class="date" id="Dates & Reservations">
                    <h1>Dates & Reservations</h1>
                    <div id="calendar" class="calendar">
                        <span>Add something here</span>
                    </div>
                </div>
            </div>
    </section>
    <!---------review-section-start------->
    <section class="review" id="review-one">
        <div class="container">
            <div class="review-card">
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
                    <div class="sm:col-sm-2 author">
                        <h4 class="author-name">FS</h4>
                    </div>
                    <div class="review-dec">
                        <span>Max MArtin</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dolore ducimus perferendis porro
                            rerum non eligendi rem consequatur dolorum sint!</p>
                    </div>
                    <ul class="review-icon">
                        <li><a href=""><i class="fa-solid fa-star" style="color: #FFD43B;"></i></a></li>
                        <li><a href=""><i class="fa-solid fa-star" style="color: #FFD43B;"></i></a></li>
                        <li><a href=""><i class="fa-solid fa-star" style="color: #FFD43B;"></i></a></li>
                        <li><a href=""><i class="fa-regular fa-star-half-stroke" style="color: #FFD43B;"></i></a>
                        </li>
                        <li><a href=""><i class="fa-regular fa-star-half-stroke" style="color: #FFD43B;"></i></a>
                        </li>

                    </ul>
                </div>

            </div>

        </div>
    </section>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBD-W2RjTGgl0IF9ijvUlWHTnN04Sy0wFo&callback=initMap"
        defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script>
        function initMap() {
            var location = {
                lat: {{ $location->latitude }},
                lng: {{ $location->longitude }}
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }

        var calendarNode = document.querySelector("#calendar");

        var currDate = new Date();
        var currYear = currDate.getFullYear();
        var currMonth = currDate.getMonth() + 1;

        var selectedYear = currYear;
        var selectedMonth = currMonth;
        var selectedMonthName = getMonthName(selectedYear, selectedMonth);
        var selectedMonthDays = getDayCount(selectedYear, selectedMonth);

        // In Laravel Blade template
        let start_date = new Date("{{ date('Y-m-d', strtotime($Contact->start_date)) }}");
        let end_date = new Date("{{ date('Y-m-d', strtotime($Contact->end_date)) }}");


        renderDOM(selectedYear, selectedMonth);

        function getMonthName(year, month) {
            let selectedDate = new Date(year, month - 1, 1);
            return selectedDate.toLocaleString("default", {
                month: "long"
            });
        }

        function getMonthText() {
            if (selectedYear === currYear) return selectedMonthName;
            else return selectedMonthName + ", " + selectedYear;
        }

        function getDayName(year, month, day) {
            let selectedDate = new Date(year, month - 1, day);
            return selectedDate.toLocaleDateString("en-US", {
                weekday: "long"
            });
        }

        function getDayCount(year, month) {
            return 32 - new Date(year, month - 1, 32).getDate();
        }

        function getDaysArray() {
            let emptyFieldsCount = 0;
            let emptyFields = [];
            let days = [];

            emptyFields = Array(emptyFieldsCount).fill("");
            days = Array.from(Array(selectedMonthDays + 1).keys());
            days.splice(0, 1);

            return emptyFields.concat(days);
        }

        function renderDOM(year, month) {
            let newCalendarNode = document.createElement("div");
            newCalendarNode.id = "calendar";
            newCalendarNode.className = "calendar";

            let dateText = document.createElement("div");
            dateText.append(getMonthText());
            dateText.className = "date-text";
            newCalendarNode.append(dateText);

            let leftArrow = document.createElement("div");
            leftArrow.append("«");
            leftArrow.className = "button";
            leftArrow.addEventListener("click", goToPrevMonth);
            newCalendarNode.append(leftArrow);

            let curr = document.createElement("div");
            curr.append("📅");
            curr.className = "button";
            curr.addEventListener("click", goToCurrDate);
            newCalendarNode.append(curr);

            let rightArrow = document.createElement("div");
            rightArrow.append("»");
            rightArrow.className = "button";
            rightArrow.addEventListener("click", goToNextMonth);
            newCalendarNode.append(rightArrow);

            let dayNames = ["M", "T", "W", "T", "F", "S", "S"];

            dayNames.forEach((cellText) => {
                let cellNode = document.createElement("div");
                cellNode.className = "cell cell--unselectable";
                cellNode.append(cellText);
                newCalendarNode.append(cellNode);
            });

            let days = getDaysArray(month);

            days.forEach((cellText) => {
                let cellNode = document.createElement("div");
                cellNode.className = "cell";
                if (cellText !== "") {
                    let cellDate = new Date(year, month - 1, cellText);
                    console.log(cellDate);
                    if ((cellDate >= start_date && cellDate <= end_date) || cellDate === start_date || cellDate ===
                        17) {
                        cellNode.classList.add("active");
                    }
                }
                cellNode.append(cellText);
                newCalendarNode.append(cellNode);
            });

            calendarNode.replaceWith(newCalendarNode);
            calendarNode = document.querySelector("#calendar");
        }


        function goToPrevMonth() {
            selectedMonth--;
            if (selectedMonth === 0) {
                selectedMonth = 12;
                selectedYear--;
            }
            selectedMonthDays = getDayCount(selectedYear, selectedMonth);
            selectedMonthName = getMonthName(selectedYear, selectedMonth);

            renderDOM(selectedYear, selectedMonth);
        }

        function goToNextMonth() {
            selectedMonth++;
            if (selectedMonth === 13) {
                selectedMonth = 1;
                selectedYear++;
            }
            selectedMonthDays = getDayCount(selectedYear, selectedMonth);
            selectedMonthName = getMonthName(selectedYear, selectedMonth);

            renderDOM(selectedYear, selectedMonth);
        }

        function goToCurrDate() {
            selectedYear = currYear;
            selectedMonth = currMonth;

            selectedMonthDays = getDayCount(selectedYear, selectedMonth);
            selectedMonthName = getMonthName(selectedYear, selectedMonth);

            renderDOM(selectedYear, selectedMonth);
        }
    </script>
@endsection
