@extends('admin.base')

<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');

    :root {
        --font-family: "DM Sans", sans-serif;
    }

    .dropzone {
        border: 2px dashed #0087F7;
        border-radius: 5px;
        background: white;
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
        a,
        label {
            font-family: var(--font-family);
        }

        image {
            max-width: 100%;
            height: auto;
        }

        .container {
            max-width: 1440px;
            margin: 0 auto;
        }

        #navbarSupportedContent {
            position: fixed;
            width: 100%;
            opacity: 1;
        }

        .navbar-img {
            gap: 20px;
        }

        .navbar-default-one {
            background-color: #FFF;

        }

        .rental-option {
            margin: 0;
            padding: 0;
        }

        .rental {
            background-color: white;
        }

        .rental-option li {
            padding: 10px 0;
        }

        .rental-option li a {
            font-size: 16px;
            color: #6a7a8c;
        }

        .rental-option li a svg {
            padding: 0 20px;
        }

        .overview-lang h4 {
            font-size: 12px;
            color: black;
            font-weight: bold;
        }

        .overview-lang h4 span {
            font-size: 16px;
            color: black;
            font-weight: bold;
            padding-left: 5px;
        }

        .renatl-text {
            color: black;
            padding-top: 20px;
        }

        .overview-lang-icon h4 svg {
            padding-right: 5px;
        }

        .rental {
            width: 450px;
            position: fixed;
            left: 0;
            top: 0;
            right: auto;
            min-height: 100%;
            overflow-y: auto;
            white-space: nowrap;
            height: 100%;
            z-index: 1;
            /* border-right: 1px solid #ddd; */
            padding-top: 40px;
            display: grid;
            padding-left: 20px;
            padding-right: 20px;
            grid-template-rows: 1fr 20fr 2fr;
        }

        .navbar {
            border: none;
            margin-left: 0;
            background-color: inherit;
        }

        .navbar-header {
            width: 100%;
            border-bottom: 1px solid #e7e7e7;
            margin-bottom: 20px;
            background: #fff;
        }

        /*-----booking-privacy----------*/
        .booking-data {
            margin-left: 200px;
        }

        .booking-policy h4 {
            color: black;
            font-size: 16px;
            font-weight: bold;
        }

        .booking-policy {
            border-bottom: 1px solid black;
            padding: 10px 0;
        }

        .Bookability {
            padding: 20px 0;
        }

        .Bookability h4 {
            color: black;
            font-size: 16px;
            font-weight: bold;
        }

        .booking-box {
            padding: 20px 0;
        }

        .instant-booking input[type="radio"] {
            width: 18px;
            height: 18px;
        }

        .instant-booking:hover {
            border: 1px solid black;
        }

        .instant-booking {
            border: 1px solid lightgray;
            border-radius: 10px;
            padding: 30px;
            transition: all 0.2s linear;
        }

        .instant-booking button {
            background-color: black;
            color: white;
            padding: 2px 10px;
            border: none;
            font-size: 14px;
            border-radius: 10px;
        }

        .instant-booking input[type="radio"]:checked {
            border-color: black;
        }

        .booking-details {
            padding-top: 20px;
        }

        .booking-privacy {
            box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.10);
            padding: 30px 20px;
        }

        /*-----booking-privacy----------*/
        .nav-img-inner img {
            max-width: 100px;
        }

        .rental-form {
            border-bottom: 1px solid black;
            padding: 20px 0;
        }

        .photos-heading p {
            font-size: 16px;
        }

        .rental-form .form-check {
            padding-left: 0;
        }

        .navbar-img {
            padding: 30px 0;
        }

        .rental-inner {
            padding: 0;
            margin: 0;
        }

        .rental-inner li:hover {
            background-color: white;
        }

        .rental-inner li {
            list-style: none;
            padding: 10px;
            transition: all 0.2s linear;
        }

        .rental-inner li a {
            font-size: 18px;
            color: #6a7a8c;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .location-btn {
            background-color: black;
            color: white;
        }

        .rental-inner li a svg {
            color: black;
        }

        .nav-btn a {
            color: white;
            padding: 10px 50px;
            border-radius: 10px;
            background-color: #f5a623;
        }

        .nav-btn {
            text-align: center;
            padding-top: 10px;
            margin-bottom: 20px;
        }

        select.form-select {
            width: 30%;
            height: 7%;
        }

        .rental-type h3 {
            margin: 0;
            padding: 20px 0;
            color: black;
        }

        .sleeping-arrang h3 {
            margin: 0;
            padding: 20px 0;
            color: black;
        }

        .Rental-rooms h3 {
            margin: 0;
            padding: 20px 0;
            color: black;
        }

        .navbar-nav .search-box {
            width: unset;
        }

        .Rental-rooms {
            padding: 50px 0;
            border-bottom: 1px solid black;
        }

        .overview-form {
            padding: 0;
        }

        .sleeping-btn {
            padding: 20px 0;
            border-radius: 4px;
        }

        .sleeping-btn a {
            background-color: black;
            color: white;
            padding: 10px 30px;
            border-radius: 4px;
        }

        .room-btn {
            padding: 30px 0;
        }

        .room-btn a {
            background-color: black;
            color: white;
            padding: 10px 30px;
            border-radius: 4px;
        }

        .room-list li {
            list-style: none;
        }

        .room-list li a {
            color: #666;
        }

        .room-list {
            margin: 0;
            padding: 0;
        }

        .sleeping-btn span {
            padding: 10px 30px;
        }

        .rental-info h3 {
            color: black;
        }

        .Rental-amenities {
            padding: 70px 0;
            /* border-bottom: 1px solid black; */
        }

        .rental-info {
            padding: 50px 0;
            border-bottom: 1px solid black;
        }

        .rental-size ul li a {
            color: #666;
        }

        .rental-type {
            border-bottom: 1px solid black;
            padding: 50px 0;
        }

        .photos-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .rental-size ul li {
            list-style: none;
        }

        .sleeping-arrang {
            padding: 50px 0;
            border-bottom: 1px solid black;
        }

        .rental-gallary img {
            width: 100%;
        }

        .rental-gallary {
            border: 1px solid black;
            border-radius: 4px;
        }

        .loation-map {
            padding: 30px 0;
        }

        .input-data input[type="text"] {
            width: 100%;
            border: none;
        }

        .input-data {
            padding: 10px 0;
        }

        .login-name h4 {
            color: black;
            font-weight: bold;
        }

        .rental-info p,
        .sleeping-arrang p,
        .Rental-rooms p,
        .Rental-amenities p {
            margin: 0;
            padding: 10px;
            font-size: 16px;
        }

        .rental-size ul {
            margin: 0;
            padding: 0;
        }

        .rental-form label {
            font-size: 18px;
            color: black;
        }

        .rental-info-btn {
            padding: 20px 0;
        }

        .Rental-amenities h3 {
            color: black;
        }

        .rental-info-btn a {
            background-color: black;
            color: white;
            padding: 10px;
            border-radius: 4px;
        }

        .location-form .form-label {
            padding: 20px 0;
            font-size: 16px;
        }

        .location-form label {
            color: black;
        }

        .location-form button[type="submit"] {
            margin: 20px 0;
        }

        .rental-inner li.active {
            transition: all 0.2s linear;
        }

        .rental-inner li.active:hover {
            border: 1px solid black;
            border-radius: 7px;
        }

        .amities-list li a {
            color: #666;
            font-size: 16px;
        }

        .photos-heading h2 {
            color: black;
            font-weight: bold;
        }

        .booking-heading h2 {
            color: black;
            font-weight: bold;
        }

        .booking-heading p {
            font-size: 16px;
        }

        .loaction-heading h2 {
            color: black;
            font-weight: bold;
        }

        .photos-heading svg {
            font-size: 25px;
            color: black;
        }

        .add-photos {
            text-align: center;
            border: 2px dashed;
            padding: 30px;
            flex-direction: column;
            display: flex;
            justify-content: center;
        }

        .add-photos h4 a {
            background-color: black;
            color: white;
            padding: 10px;
        }

        .add-photos span {
            font-size: 16px;
        }

        .add-photos h4 {
            margin: 0;
            padding: 20px 0;
        }

        .amenities-btn {
            padding: 20px 0;
        }

        .overview-heading span {
            font-size: 18px;
            font-weight: bold;
        }

        .location-form {
            margin-left: 10px;
        }

        .location-form select.form-select {
            width: 100% !important;
            height: 7%;
        }

        .overview-heading h3 {
            font-size: 30px;
            color: black;
            font-weight: bold;
            margin: 0;
            padding: 10px 0;
        }

        .photos-option {
            gap: 10px;
            padding: 20px 0;
        }

        .photos-form {
            margin-top: 70px;
        }

        .booking-settings {
            margin-top: 70px;
        }

        /*-----------contact-form-------------*/
        .contact-from {
            margin-top: 70px;
        }

        .contact-from select.form-select {
            height: 5%;
        }

        .contact-info {
            padding: 20px;
            background-color: #fceeca;
            margin: 20px 0;
            border-radius: 6px;
        }

        .contact-heading h2 {
            color: black;
            font-weight: bold;
        }

        .nav-tabs {
            border-bottom: 0;
        }

        .cont-btn {
            background-color: black;
            color: white;
            padding: 5px;
        }

        .contact-button h4 a {
            background-color: #7460ee;
            color: white;
            padding: 10px;
            border-radius: 6px;
        }

        .contact-button h5 a {
            background-color: #7460ee;
            color: white;
            padding: 10px;
            border-radius: 6px;
        }

        .page-wrapper {
            height: 100%;
        }

        .contact-button {
            gap: 30px;
            padding: 30px 0;
        }

        .alert {
            gap: 10px;
            padding: 0;
            margin: 0;
        }

        .alert h4 {
            margin: 0;
        }

        .alert svg {
            color: black;
            font-size: 20px;
        }

        .account-holder h3 {
            border-bottom: 1px solid #d7d4d4;
            font-size: 20px;
        }

        .account-holder {
            box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.10);
            padding: 30px;
        }

        .acc-owner,
        .acc-name,
        .last-name,
        .acc-phn,
        .acc-email {
            border-bottom: 1px solid #d7d4d4;
            padding: 20px 0;
        }

        .account-holder p {
            margin: 0;
            padding: 10px 0;
            font-size: 18px;
        }

        /*-------------contact-form-----------*/
        /*---msg-placeholder-page------------------*/
        .msg-placeholder {
            margin-top: 70px;
        }

        .msg-holder-heading h2 {
            color: black;
            font-weight: bold;
        }

        .msg-tips {
            gap: 40px;
            padding: 30px 0;
        }

        .msg-title {
            padding: 30px 0;
            gap: 10px;
            color: black;
            font-weight: bold;
        }

        main {
            max-width: 720px;
            margin: auto;
        }

        section {
            margin-bottom: 3rem;
        }

        h1 {
            font-size: 1.75rem;
            font-weight: bold;
        }

        .msg-toolbox h4 {
            color: black;
            font-size: 22px;
        }

        .msg-toolbox p {
            color: #333;
        }

        /*---msg-placeholder-page-end------------------*/
        .location-inner {
            margin-top: 70px;
        }

        .photos-option span {
            font-size: 12px;
            color: black;
            font-weight: bold;
        }

        .photos-option h4 {
            font-size: 16px;
            color: black;
            margin: 0;
            font-weight: bold;
        }

        .amenities-btn a {
            background-color: black;
            color: white;
            padding: 10px;
            border-radius: 4px;
        }

        .location-map-btn {
            text-align: center;
            margin: 40px 0;
        }

        .location-map-btn a {
            padding: 20px 80px;
            color: white;
            width: 100%;
            background-color: #7460ee;
            font-size: 18px;
        }

        .overview-heading {
            /* margin-left: 130px; */
            margin-top: 40px;
            padding-bottom: 20px;
        }

        .form-check {
            margin: 0;
            padding: 0;
        }

        .overview {
            background-color: white;
            width: 100%;
            margin-left: 451px;
        }

        .navbar-nav {
            .panel {
                border: 0 none;
                box-shadow: none;
                margin: 0;
                background: inherit;
            }

            li {
                display: block;
                width: 100%;

                a {
                    padding: 15px;
                    color: #5f5f5f;

                    .glyphicon,
                    .fa {
                        margin-right: 8px;
                    }
                }
            }
        }

        .nb {
            padding-top: 5px;
            padding-left: 10px;
            margin-bottom: 30px;
            overflow: hidden;

        }
    }

    ul.nv,
    ul.ns {
        position: relative;
        padding: 0;
        list-style: none;
    }

    .dropzone {
        border: 2px dashed #0087F7;
        border-radius: 5px;
        background: white;
    }

    .ck-blurred.ck.ck-content.ck-editor__editable.ck-rounded-corners.ck-editor__editable_inline {
        height: 30%;
    }

    /* media-query */
    @media only screen and (max-width:1440px) {}

    @media only screen and (max-width:1024px) {
        .overview {
            background-color: white;
            margin-left: 236px !important;
        }

        .rental {
            width: 300px !important;
        }

        .photos-grid {
            grid-template-columns: 1fr !important;
        }
    }

    @media only screen and (max-width:768px) {
        .overview {
            background-color: white;
        }

        .Rental-rooms,
        .sleeping-arrang,
        .rental-info,
        .rental-type,
        .Rental-amenities {
            padding: 20px 0 !important;
        }

    }
</style>
@section('content')
    <section class="rental-section ">
        <div class="rental " left-sidebar" data-sidebarbg="skin5"" id=" msb">
            <nav class="nav-navbar-rental navbar-default-one" role="navigation">
                <div class="navbar-header">
                    <div class="brand-wrapper">
                        <!-- Brand -->

                        <span>1 Unread Message</span>
                    </div>
                </div>
            </nav>
            <!-- Main Menu -->
            <div class="side-menu-container">
                <div class="nav navbar-img d-flex align-items-center">
                    <div class="nav-img-inner">
                        <img src="{{ asset('assets/img/showcase-old.jpg') }}">
                    </div>
                    <div class="login-name">
                        <h4>MAX</h4>
                        <h5>abhdhd</h5>
                    </div>
                </div>
                <div classs="rental-details-one">
                    <h3 class="renatl-text">Rental Details</h3>
                    <ul class="rental-inner nav-tabs tabs-left sideways">
                        <li class="active"><a href="#home-v" data-toggle="tab"><i
                                    class="fa-solid fa-house-chimney"></i>Overview</a></li>
                        <li><a href="#profile-v" data-toggle="tab"><i class="fa-regular fa-image"></i>Photos</a></li>
                        <li><a href="#messages-v" data-toggle="tab"><i class="fa-solid fa-location-dot"></i>Location</a>
                        </li>
                        <li><a href="#settings-v" data-toggle="tab"><i class="fa-regular fa-clock"></i>Booking Settings</a>
                        </li>
                        <li><a href="#contact-v" data-toggle="tab"><i class="fa-regular fa-address-book"></i>Contact</a>
                        </li>
                        <li><a href="#placeholder-v" data-toggle="tab"><i class="fa-solid fa-square-envelope"></i>Messaging
                                Placeholder</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="overview">
        <div class="col-sm-8">
            <div class="col-xs-9">
                <div class="tab-content">
                    <div class="tab-pane active" id="home-v">
                        <div class="overview-heading">
                            <h3>Overview</h3>
                            <span>Name & description</span>
                        </div>
                        <div class="overview-form col-8">
                            <div class="d-flex justify-content-between">
                                <div class="overview-lang">
                                    <h4>GB<span>English</span></h4>
                                </div>
                                <div class="overview-lang-icon">
                                    <h4><i class="fa-solid fa-gear"></i>Languages</h4>
                                </div>
                            </div>
                            <form class="rental-form" action="{{ route('rental.store') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="name" name="name"
                                        class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"
                                        placeholder="Name" aria-describedby="emailHelp">
                                    <span class="text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <div id="emailHelp" class="form-text"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Internal name</label>
                                    <input type="Internal name" name="internal_name"
                                        class="form-control @error('internal_name') is-invalid @enderror"
                                        placeholder="Internal name" id="exampleInputPassword1">
                                    <span class="text-danger">
                                        @error('internal_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="mb-3 form-check">
                                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                                        id="exampleFormControlTextarea1" rows="3"></textarea>
                                    <span class="text-danger">
                                        @error('description')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <button type="submit" class="btn btn-primary"
                                    style="background-color:#FFA920;border:#333">Submit</button>
                            </form>

                            <div class="rental-type">
                                <h3>Rental Type</h3>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>House</option>
                                    <option value="1">Room</option>
                                    <option value="2">Villa</option>
                                    <option value="3">Resort</option>
                                    <option value="4">Motel</option>
                                    <option value="5">Inn</option>
                                    <option value="6">Hostel</option>
                                    <option value="7">Boat</option>
                                </select>
                            </div>

                            <div class="rental-info">
                                <h3>Rental info</h3>
                                <p>What are the key facts about your place?</p>
                                <div class="rental-size">
                                    <ul>
                                        <li><a href="">1 Sq ft Rental size</a></li>
                                        <li><a href="">One guest</a></li>
                                        <li><a href="">One unit</a></li>
                                    </ul>
                                    <div class="rental-info-btn">
                                        <a href="">Edit Rental Info</a>
                                    </div>
                                </div>
                            </div>

                            <div class="sleeping-arrang">
                                <h3>Sleeping arrangements</h3>
                                <p>What are the sleeping arrangements for your rental?</p>
                                <div class="sleeping-btn">
                                    <a href="">Edit sleeping arrangements</a>
                                </div>

                            </div>

                            <div class="Rental-rooms">
                                <h3>Rooms</h3>
                                <p>List other rooms that are available in your rental.</p>
                                <ul class="room-list">
                                    <li><a href="">Bathroom (private)</a></li>
                                    <li><a href="">Bedroom (private)</a></li>
                                </ul>
                                <div class="room-btn">
                                    <a href="">Edit Rooms</a>
                                </div>
                            </div>
                            <div class="Rental-amenities">
                                <h3>Rental amenities</h3>
                                <p>elect amenities that your rental offers.</p>
                                <ul class="amities-list">
                                    <li><a href="">Air conditioning</a></li>
                                    <li><a href="">Essentials</a></li>
                                    <li><a href="">General heating</a></li>
                                    <li><a href="">Kitchen stove</a></li>
                                    <li><a href="">Parking</a></li>
                                    <li><a href="">Pets allowed</a></li>
                                    <li><a href="">Washing machine</a></li>
                                    <li><a href="">Internet wireless</a></li>
                                </ul>
                                <div class="amenities-btn">
                                    <a href="">Edit amenities</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane photos-form" id="profile-v">
                        <div class="photos-heading d-flex justify-content-between">
                            <h2>Photos</h2>
                            <i class="fa-regular fa-lightbulb"></i>
                        </div>
                        <div class="">
                            <p>Catch a potential guest eye with high-quality photos. Include a variety of perspectives
                                (interior
                                and exterior) to give them the best overall impression of your place.</p>

                        </div>
                        <div class="photos-option d-flex gap-4">
                            <span>GB</span>
                            <h4>English</h4>
                        </div>
                        <div class="photos-grid col-6">
                            <div class="container">
                                <div id="drop-area">
                                    <form action="{{ route('photos.upload') }}" class="drop-form" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="rental_id" id=""
                                            value="{{ $rantalId->id }}">
                                        <div>
                                            <input type="file" name="images[]" id="Image" class="form-control"
                                                placeholder="Image" multiple>
                                            <span class="text-danger">
                                                @error('images')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div>
                                            <button class="btn btn-primary"
                                                style="background-color:#FFA920;border:#333">Create</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="rental-gallary">
                                <img src="{{ asset('/assets/img/showcase.jpg') }}">
                                <div class="input-data d-flex justify-content-between">
                                    <input type="text">
                                    <span>1/100</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane location-inner" id="messages-v">
                        <div class="loaction-heading">
                            <h2>Location</h2>
                        </div>
                        <form class="" action="{{ route('location.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="rental_id" id="" value="{{ $rantalId->id }}">
                            <div class="location-form">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="inputEmail4">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Password</label>
                                    <input type="password" name="password"
                                        class="form-control @error('email') is-invalid @enderror" id="inputPassword4">
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Address</label>
                                    <input type="text" name="address"
                                        class="form-control @error('address') is-invalid @enderror" id="inputAddress"
                                        placeholder="1234 Main St">
                                    <span class="text-danger">
                                        @error('address')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Address 2</label>
                                    <input type="text" name="address2"
                                        class="form-control @error('address2') is-invalid @enderror" id="inputAddress2"
                                        placeholder="Apartment, studio, or floor">
                                    <span class="text-danger">
                                        @error('address2')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">City</label>
                                    <select id="inputState" class="form-select" name="city">
                                        <option selected>Afghanistan</option>
                                        <option value="1">Albania</option>
                                        <option value="2">Andorra</option>
                                        <option value="3">Angola</option>
                                        <option value="4">Australia</option>
                                        <option value="5">Azerbaijan</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('city')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-2">
                                    <label for="inputZip" class="form-label">Zip</label>
                                    <input type="text" name="zip"
                                        class="form-control @error('zip') is-invalid @enderror" id="inputZip">
                                    <span class="text-danger">
                                        @error('zip')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Check me out
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary"
                                        style="background-color:#FFA920;border:#333">Sign in</button>
                                </div>
                                <div class="loation-map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2693991.100718813!2d-104.66015667334729!3d38.35762941154143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1713506531455!5m2!1sen!2sin"
                                        width="100%" height="450" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="row g-3">
                                    <div class="col">
                                        <input type="text" class="form-control" aria-label="location"
                                            value="21.170245">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" aria-label="location"
                                            value="72.831061">
                                    </div>
                                    <div class="btn location-btn">
                                        Ok
                                    </div>

                                </div>
                                <div class="location-map-btn">
                                    <a href="">Save</a>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="tab-pane booking-settings" id="settings-v">
                        <div class="booking-heading">
                            <h2>Booking settings</h2>
                            <p>Set the payment schedule, cancellation rules, and security deposit for your rental</p>
                        </div>
                        <div class="booking-privacy">
                            <div class="booking-policy d-flex justify-content-between">
                                <h4>Primary policy</h4>
                                <i class="fa-solid fa-ellipsis"></i>
                            </div>
                            <div class="booking-details">
                                <h4>Payment schedule</h4>
                                <p>50% due at time of booking. Remaining balance due 7 days before arrival.</p>
                            </div>
                            <div class="collection">
                                <h4>Cancellation policy</h4>
                                <p>All paid prepayments are non-refundable.</p>
                            </div>
                            <div class="deposit">
                                <h4>Security deposit</h4>
                                <p>No security deposit is due.</p>
                            </div>
                        </div>
                        <div class="Bookability">
                            <h4>Bookability</h4>
                            <p>Choose how you want to accept bookings for this rental</p>
                        </div>
                        <div class="booking-box">
                            <div class="instant-booking">
                                <div class="d-flex justify-content-between">
                                    <h4>Instant booking</h4>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                        </label>
                                    </div>
                                </div>
                                <p>You accept bookings instantly without requiring your prior approval, i.e. guests can
                                    instantly
                                    book and pay your rental as long as they agree to your terms (price, payment &
                                    cancellation
                                    policy) and rental agreement.</p>
                                <button>Recommended</button>
                            </div>

                            <div class="instant-booking">
                                <div class="d-flex justify-content-between">
                                    <h4>Booking request</h4>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                        </label>
                                    </div>
                                </div>
                                <p>Only accept bookings after review and approval, i.e. guests can request to book your
                                    rental as long as they agree to your terms (price, payment & cancellation policy), but
                                    you still need to approve each booking manually.</p>
                            </div>

                            <div class="instant-booking">
                                <div class="d-flex justify-content-between">
                                    <h4>Inquiry only</h4>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                        </label>
                                    </div>
                                </div>
                                <p>You only accept inquiries from guests, i.e. guests have no obligation to actually book
                                    the rental after submitting an inquiry.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Contact-page-start -->

                    <div class="tab-pane contact-from" id="contact-v">
                        <div class="contact-heading">
                            <h2>Contact</h2>
                            <p>Make sure the contact details for this rental are correct. This is how guests will get in
                                touch.</p>
                        </div>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Account Holder</option>
                            <option value="1">Use custom contact information</option>
                            <option value="2">Account holder</option>s
                        </select>
                        <div class="contact-info d-flex justify-content-between">
                            <div class="d-flex alert"><i class="fa-solid fa-triangle-exclamation"></i>
                                <h4>Want to edit this information?</h4>
                            </div>
                            <button class="cont-btn" id="toggle">Edit</button>

                        </div>
                        <p id="box">You can edit the details below from your profile.</p>
                        <form action="{{ route('contact.update') }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="account-holder">
                                <h3>Acount Holder</h3>
                                <div class="acc-owner d-flex justify-content-between">
                                    <h4>Max</h4>
                                    <input type="text" name="max" id="box1" value="{{ $user->username }}">
                                </div>
                                <div class="acc-name d-flex justify-content-between">
                                    <h4>Name</h4>
                                    <input type="text" name="name" id="box2"
                                        value="{{ $user->first_name }}">
                                </div>
                                <div class="last-name d-flex justify-content-between">
                                    <h4>Last Name</h4>
                                    <input type="text" name="last_name" id="box1"
                                        value="{{ $user->last_name }}">
                                </div>
                                <div class="acc-phn d-flex justify-content-between">
                                    <h4>Phone Number</h4>
                                    <input type="text" name="phone" id="box1" value="{{ $user->phone }}">
                                </div>
                                <div class="acc-email d-flex justify-content-between">
                                    <h4>Email</h4>
                                    <input type="text" name="email" id="box1" value="{{ $user->email }}">
                                </div>
                                <p>Spoken languages</p>
                            </div>
                            <div class="contact-button d-flex">
                                <h5><a href="" class="btn btn-primary"
                                        style="background-color:#FFA920;border:#333">Cancel</a></h5>
                                <h5><button type="submit" class="btn btn-primary"
                                        style="background-color:#FFA920;border:#333">Save Change</button></h5>

                            </div>
                        </form>
                    </div>


                    <!-- Contact-page-end-->

                    <div class="tab-pane msg-placeholder" id="placeholder-v">
                        <div class="msg-holder-heading">
                            <h2>Messaging placeholders</h2>
                            <p>Here you can create the content of your messaging placeholders for the rental instructions.
                                These auto-populated texts are reusable in any of the notification messages you send to your
                                clients, and they complete the messaging placeholder library Lodgify automatically creates
                                for you (rental name, guest name, etc.).</p>
                        </div>
                        <div class="msg-tips d-flex">
                            <i class="fa-solid fa-lightbulb"></i>
                            <h4>Tips</h4>
                        </div>
                        <div class="msg-title d-flex">
                            <h4>GB</h4>
                            <h5>English</h5>
                        </div>
                        <div class="msg-toolbox">
                            <h4>Check-in instructions</h4>
                            <p>Inform your clients about the details on the check-in instructions and other specific when
                                arriving.</p>
                            <form action="{{ route('message.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="rental_id" id="" value="{{ $rantalId->id }}">
                                <textarea class="ckeditor form-control" name="message" id="editor"></textarea>
                                <button type="submit" class="btn btn-primary mt-2"
                                    style="background-color:#FFA920;border:#333">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="clearfix"></div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
</section>
