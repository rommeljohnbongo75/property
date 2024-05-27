@extends('site.base')
@section('title')
    Contact |
@endsection
<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');

    #register {
        padding-top: 130px;
        padding-bottom: 40px;
    }

    .container {
        max-width: 1440px;
        margin: 0 auto;
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
        p,
        label {
            font-family: var(--font-family);
        }
    }

    .conatct-form-label {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 10px;
    }

    .lable-icon {
        display: flex;
        gap: 10px;
        padding: 20px 0;
    }

    .contactus {
        padding: 150px 0;
    }

    .contact-title p {
        color: #8E8E93;
    }

    .contact-title h2 {
        font-size: 45px;
        color: black;
        font-weight: bold;
    }

    .conatct-form-label {
        padding: 30px 0;
    }

    .cont-form-icon {
        text-align: center;
    }

    .lable-icon h3 {
        font-size: 22px;
    }

    .lable-icon span {
        color: #8E8E93;
    }

    .contact-title {
        text-align: center;
    }

    .conatct-form-inner {
        background-color: white;
        padding: 20px;
        box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.10);
    }

    .contact-us-form .card-header {
        background-color: unset;
    }

    .contact-us-form .card-header i {
        padding-right: 10px;
        color:#FFA920;
    }

    .cont-form-icon i:hover {
        background-color: #FFA920;
        color: white;
    }

    .cont-form-icon i {
        font-size: 20px;
        /* padding: 20px; */
        background-color: rgba(0, 0, 0, 0.05);
        border-radius: 50%;
        height: 60px;
        text-align: center;
        align-items: center;
        width: 60px;
        color: #FFA920;
        padding-top: 20px;
        transition: all 0.2s ease;
    }

    .lable-icon {
        justify-content: center;
    }

    .data1 label {
        color: black;
        font-size: 16px;
    }

    .data-one label {
        color: black;
        font-size: 16px;
    }

    .data1 input[type="text"] {
        width: 100%;
        border-top: 0;
        border-left: 0;
        border-right: 0;
        padding: unset;
    }

    #exampleFormControlTextarea1 {
        width: 100%;
        border-top: 0;
        border-left: 0;
        border-right: 0;
    }

    #exampleFormControlTextarea1 {
        padding: unset !important;
    }

    @media only screen and (max-width: 768px) {
        .conatct-form-label {
            grid-template-columns: 1fr 1fr;
        }

        .contact-title h2 {
            font-size: 35px;
        }

        .lable-icon h3 {
            font-size: 18px;
        }
    }

    @media only screen and (max-width:425px) {
        .conatct-form-label {
            grid-template-columns: 1fr;
        }

        .contact-title h2 {
            font-size: 25px;
        }
    }
</style>
@section('content')
    <section class="contactus">
        <div class="contact-page">
            <div class="container">
                <div class="contact-title">
                    <h2>Contact US</h2>
                    <p>Say hello. Tell us how we can guide you.</p>
                </div>
                <div class="conatct-form-label">
                    <div class="form-label">
                        <div class="cont-form-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="lable-icon flex">
                            <h3>Address:</h3>
                            <span>198,west,21 street, NY 1006</span>

                        </div>
                    </div>
                    <div class="form-label">
                        <div class="cont-form-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="lable-icon flex">
                            <h3>Phone:</h3>
                            <span>+9875642215</span>

                        </div>
                    </div>
                    <div class="form-label">
                        <div class="cont-form-icon">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <div class="lable-icon flex">
                            <h3>Email:</h3>
                            <span>info@yaho.com</span>

                        </div>
                    </div>
                    <div class="form-label">
                        <div class="cont-form-icon">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <div class="lable-icon flex">
                            <h3>Website:</h3>
                            <span>Yoursite.com</span>

                        </div>
                    </div>

                </div>
                <div class="conatct-form-inner">
                    <div class="row contact-us-inner align-items-center ">
                        <div class="col-sm-12 col-lg-6 contact-image">
                            <div class="contact-us-form">
                                <div class="card-header  text-black">

                                    <h4>
                                        <i class="fa-regular fa-id-badge"></i>Contact US
                                    </h4>
                                </div>
                                <div class="card-body contact">
                                    <form method="POST" action="{{ route('store') }}">
                                        @csrf
                                        <div class="data1">
                                            <div class="form-group ">
                                                <label for="username">Full Name</label>
                                                <input type="text" name="fullname"
                                                    class="form-control   @error('fullname') is-invalid @enderror"
                                                    placeholder=" Name">
                                                <span class="text-danger">
                                                    @error('fullname')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Email Address</label>
                                                <input type="text" name="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    placeholder="Email">
                                                <span class="text-danger">
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="data-one">
                                            <div class="form-group">
                                                <label for="subject">Subject</label>
                                                <textarea class="form-control @error('subject') is-invalid @enderror" name="subject" id="exampleFormControlTextarea1"
                                                    placeholder="Subject" rows="3"></textarea>
                                                <span class="text-danger">
                                                    @error('subject')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <label for="message">Message</label>
                                                <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="exampleFormControlTextarea1"
                                                    placeholder="Message" rows="3"></textarea>
                                                <span class="text-danger">
                                                    @error('message')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <input type="submit" value="Send Message" class="btn btn-secondary btn-block">
                                </div>


                                </form>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6  contact-form">
                            <img src="{{ asset('assets/img/showcase-old.jpg') }}">
                        </div>
                    </div>


                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
