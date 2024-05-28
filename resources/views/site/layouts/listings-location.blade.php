@extends('site.base')
@section('title')
    |
@endsection
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

        .checkbox-dropdown i {
            padding-right: 10px;
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
     

        @media only screen and (max-width:1024px) {
            .listings-location-inner {
                grid-template-columns: 1fr 1fr;
            }
            .search-bar-inner {
    display: grid;
    grid-template-columns: 1fr 1.5fr 1fr 1fr 0.3fr;
    gap: 20px;
}
        }
    
    @media only screen and (max-width:768px) {
        .search-bar-inner {
    /* display: grid; */
    display: block;
    grid-template-columns: 1fr 1.5fr 1fr 1fr 0.3fr;
    gap: 20px;
}
.Amenities-data, .arrive-data, .adult-data, .search-location{
    margin-bottom: 10px;
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

    .minus {
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

    .plus {
        cursor: pointer;
        display: inline-block;
        width: 30px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        background-color: #FFA920 !important;
        color: #fff;
        border-radius: 5px;
    }

    .adults-minus {
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

    .adults-plus {
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

    .counter-add-data input[type="text"] {
        width: 15%;
        height: 40px;
        text-align: center;
    }

    input.adults-adults,
    input.children-children {
        border: none;
        /* background-color: whitesmoke; */
        padding: 5%;
        border-radius: 2px;
        font-size: 18px;
    }

    .search {
        background-color: #FFA920;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
    }
</style>

@section('content')
    <section id="listings">
        <div class="container">
            <form action="{{ route('listingslocation.filter') }}" method="post">
                @csrf
                <div class="search-bar-inner">
                    <div class="search-location d-flex">
                        <label class="visually-hidden" for="specificSizeSelect"></label>
                        <i class="fa-solid fa-location-dot"></i>
                        <select class="form-select" id="specificSizeSelect" name="city">
                            <option value="Jerusalem">Jerusalem</option>
                            <option value="Geula">Geula</option>
                            <option value="New York">New York</option>
                            <option value="Shalem Tower">Shalem Tower</option>
                            <option value="netanya">netanya</option>

                        </select>
                    </div>
                    <div class="adult-data d-flex position-relative">
                        <label class="visually-hidden" for="specificSizeSelect"></label>
                        <i class="fa-regular fa-user"></i>
                        <div class="form-group-one d-flex align-items-center" id="sec-menu">
                            <div class="data-lable-one">
                                <input type="text" class="adults-adults" name="bedroom" style="font-size:18px" value="1 Bedroom"
                                    placeholder="1 Adults">
                            </div>
                            <div class="data-lable-one">
                                <input type="text" class="children-children" name="bathroom" style="font-size:18px" value="1 Bathroom"
                                    placeholder="1 Children">
                            </div>
                        </div>
                        <ul class="position-absolute">
                            <div class="counter-add-data text-center">
                                <div class="form-date">
                                    <h4>Adults Capacity</h4>
                                    <p>Total guests capacity</p>
                                </div>
                                <span class="adults-minus">-</span>
                                <input type="text" id="adults" name="bedroom" value="1" readonly>
                                <span class="adults-plus">+</span>
                            </div>

                            <div class="counter-add-data text-center">
                                <div class="form-date">
                                    <h4>Adults Capacity</h4>
                                    <p>Total guests capacity</p>
                                </div>
                                <span class="minus">-</span>
                                <input type="text" id="adults" name="bathroom" value="1" readonly>
                                <span class="plus">+</span>
                            </div>
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
                                    <label><input type="checkbox" value="Vejle" name="city" />Air Conditioning</label>
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
                                    <label><input type="checkbox" value="Kolding" name="city" /> Coffee Machine</label>
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
                        <button type="submit" class="search"> search </button>
                    </div>
                </div>
            </form>


            <div class="listings-location-inner col-sm-12 col-md-12 col-xl-8">
                @foreach ($listing as $item)
                    <div class="filter-location-inner">
                        <img src="{{ url($item->thumbnail_0) }}">
                        <div class="filter-location-dec">
                            <h4>{{ $item->title }}</h4>
                        </div>
                        <div class="location-filter-detials">
                            <div class="card-body-inner">
                                <div class="listing-heading text-center">
                                    <i class="fa-solid fa-location-dot"></i>
                                    {{ $item->city }}
                                </div>
                                <hr>
                                <div class="d-flex py-2 text-secondary justify-content-between">
                                    <div class="filter-icon ">
                                        <i class="fas fa-th-large px-2"></i>sqft
                                        {{ $item->square_feet }}

                                    </div>
                                    <div class="filter-icon ">
                                        <i class="fas fa-car px-2"></i>
                                        Garage:{{ $item->garage }}
                                    </div>

                                </div>
                                <div class="d-flex py-2 text-secondary justify-content-between">
                                    <div class="filter-icon">
                                        <i class="fas fa-bed px-2"></i>
                                        Bedrooms:{{ $item->bedroom }}
                                    </div>
                                    <div class="filter-icon">
                                        <i class="fas fa-bath px-2"></i>
                                        Bathrooms:{{ $item->bathroom }}

                                    </div>
                                </div>
                                {{-- <hr>
                                <div class="d-flex py-2 text-secondary justify-content-between">
                                    <div class="filter-icon">
                                        <i class="fas fa-user px-2"></i>
                                    </div>
                                    <div class="filter-icon">
                                        <i class="fas fa-clock px-2"></i>
                                    </div>
                                </div>
                                <hr> --}}
                                <a href="" class="btn  btn-block mb-4">Deatils</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
@endsection
