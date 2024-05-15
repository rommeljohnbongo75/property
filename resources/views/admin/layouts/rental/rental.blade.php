@extends('admin.base')

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

        .rental-inner img {
            width: 100%;
        }

        .page-wrapper {
            height: 100%;
        }

        .rental-inner {
            box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.10);
            padding: 10px 0;
        }

        .rental-details {
            padding: 15px;
        }

        .rental-list {
            padding: 30px 0;
        }

        .rental-details h3 {
            font-size: 16px;
            color: black;
        }

        .rental-details h4 {
            font-size: 16px;
        }

        .rental-btn {
            background-color: #f5a623;
            padding: 10px 0;
            border-radius: 10px;
            margin: 10px 0;
        }

        .rental-btn a {
            color: white;
        }

        .rental-btn a svg {
            padding-left: 5px;
        }

        .rental-dec ul li {
            list-style: none;
        }

        .rental-dec ul {
            top: 19px;
            left: 8px;
            gap: 117px;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .rental-text {
            background-color: #f5a623;
            border-radius: 8px;
            padding: 3px;
        }

        .rental-text a {
            color: white;
        }

        .rental-icon a svg {
            color: white;
            background-color: black;
            padding: 6px;
            border-radius: 4px;
        }

        .rental-icon a {
            color: white;
        }

        @media only screen and (max-width:768px) {
            .rental-dec ul {
                left: 3px;
            }
        }

        @media only screen and (max-width:425px) {
            .rental-dec ul {
                left: 9px;
                gap: 282px;
            }
        }

        @media only screen and (max-width:375px) {
            .rental-dec ul {
                left: 5px;
                gap: 229px;
            }
        }
</style>

@section('content')
    <section>
        <div class="container my-2">
            <div class="col-sm-12 text-right">
                <a href="{{route('rental-form')}}" class="btn btn-primary">Add Property</a>
            </div>
            
            <div class="rental-list d-flex justify-content-around">
                @foreach ($image as $images)
                <div class="rental-inner col-sm-4 col-lg-3 col-xl-2 position-relative ">
                    <img src="{{ url('assets/uploads/multipleproductimage/' . $images->image) }}">
                            <div class="rental-dec ">
                                <ul class="d-flex position-absolute">
                                    <li class="rental-text"><a href="">Completed</a></li>
                                    <li class="rental-icon"><a href=""><i class="fa-solid fa-ellipsis"></i></a></li>
                                </ul>
                            </div>
                            <div class="rental-details">
                                <a href="{{ route('rental-form') }}">
                                    @foreach ($overview as $overviews)
                                        @if ($overview->first() == $overviews)
                                            <h4>{{ $overviews->name }}</h4>
                                            <span>ID:578916</span>
                                            <div class="rental-btn text-center">
                                              <a href="{{route('rental.edit',$images->id)}}">Edit Property<i class="fa-regular fa-circle-check"></i></a>
                                          </div>
                                        @endif
                                    @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
            </a>
        </div>
    </section>
@endsection
