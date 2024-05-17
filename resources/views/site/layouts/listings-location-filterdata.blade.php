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
        background-color: whitesmoke;
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
    footer#main-footer {
    margin-top: 168px;
    background-color: black;
    padding: 0 90px;
    /* margin-top: 80px; */
}
.card-body {
    flex: 1 1 auto;
    padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
    color: var(--bs-card-color);
    width: 700px;
}
</style>

@section('content')
    <section id="listings">
        <div class="container">


            <div class="listings-location-inner col-sm-12 col-md-12 col-xl-8">
                @if (count($listingpost) > 0)
                    @foreach ($listingpost as $item)
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
                                        <div class="filter-icon">
                                            <i class="fas fa-th-large"></i>sqft
                                            {{ $item->square_feet }}

                                        </div>
                                        <div class="filter-icon">
                                            <i class="fas fa-car"></i>
                                            Garage:{{ $item->garage }}
                                        </div>

                                    </div>
                                    <div class="d-flex py-2 text-secondary justify-content-between">
                                        <div class="filter-icon">
                                            <i class="fas fa-bed"></i>
                                            Bedrooms:{{ $item->bedroom }}
                                        </div>
                                        <div class="filter-icon">
                                            <i class="fas fa-bath"></i>
                                            Bathrooms:{{ $item->bathroom }}

                                        </div>
                                    </div>
                                    {{-- <hr>
                                <div class="d-flex py-2 text-secondary justify-content-between">
                                    <div class="filter-icon">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="filter-icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                <hr> --}}
                                    <a href="" class="btn  btn-block mb-4">Deatils</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="row">
                        <div class="col-md-12 offset-md-5">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="text-center" style="color:red;">
                                                        <h1>No Data Found.</h1>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                @endif
            </div>
    </section>
@endsection
