@extends('site.base')
<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');

    #register {
        padding-top: 80px;
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

    }

    label {
        font-family: var(--font-family) !important;
    }

    #register lable {
        margin-bottom: unset !important;
    }

    #register {
        /* background-image: url('/assets/img/register.webp');
background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-repaet: no-reapet; */
    }

    #register .card-body .form-group {
        position: relative;
        margin-bottom: 29px;
    }

    #register .btn {
        background-color: #FFA920 !important;
    }

    #register .overlay-one {
        background-color: rgb(0, 0, 0);
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        height: 100%;
        opacity: 0.5;
        width: 100%;
    }

    .card-header {
        padding: 20px 0;
    }

    #register input[type="text"],
    #register input[type="password"] {
        width: 100%;
        max-width: 60%;
        margin: auto;
        padding: 22px 10px;
    }


    #register .card-header {
        background-color: unset;
        border-bottom: unset;
    }

    #register .btn {
        display: flex;
        justify-content: center;
        background-color: #FFA920 !important;
    width: 100%;
    max-width: 30%;
    margin: auto;
    }

    #register .card {
        box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.10);
        border-radius: unset;
        border: none;
    }
 
    #register input[type="email"] {
        width: 100%;
        max-width: 60%;
        margin: auto;
        padding: 22px 10px;
        border-color: #dee2e6;
        margin-top: unset !important;
        border-radius: 3px;
        box-sizing: border-box;
    }

    #register .title h4 {
        font-size: 30px;
        text-align: center;
        padding: 10px 0;
        margin: 0;
    }

    #register .title h2 {
        color: rgb(188, 172, 157);
        font-size: 26px;
    }

    @media only screen and (max-width: 768px) {
        .reg-img {
            padding: 40px 0;
            margin: auto;
        }

        .title h4 {
            font-size: 20px;
        }
    }
    @media only screen and (max-width: 425px) {
    .text-danger{

    margin-left:0 !important; 
     text-align: center;
    padding-left: 57px;
}
    }
    @media only screen and (max-width:375px) {
        .text-danger{
             margin-left:-27px !important;
             text-align: center;
    }
}
@media only screen and (max-width:320px) {
        .text-danger{
             margin-left:0 !important;
             text-align: center;
             padding-left:0 !important;
    }
}

</style>
@section('content')
    <section id="register" class="">
        <div class="container">
            <div class=" align-items-center register-form">
                <!-- <div class="overlay-one"></div> -->
                <!-- <div class="col-md-5 col-lg-6 reg-img">
              <img src="{{ asset('assets/img/user-registration.png') }}">
            </div> -->
                <div class="col-sm-12 col-lg-7 mx-auto form-reg-inner">
                    <div class="card">
                        <div class="card-header title">
                            <h2 class="text-center pt-3">Welcome To Estate Rental</h2>
                            <h4> Register</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('register.post') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <!-- <label for="first_name">First Name</label> -->
                                    <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="First Name">
                                    <span class="text-danger" style="margin-left: 130px">
                                     @error('first_name')
                                         {{ $message }}
                                     @enderror
                                 </span>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="last_name" class="form-control  @error('last_name') is-invalid @enderror" placeholder="Last Name">
                                    <span class="text-danger" style="margin-left: 130px">
                                      @error('last_name')
                                          {{ $message }}
                                      @enderror
                                  </span>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" placeholder="Username">
                                    <span class="text-danger" style="margin-left: 130px">
                                      @error('username')
                                          {{ $message }}
                                      @enderror
                                  </span>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Email">
                                    <span class="text-danger" style="margin-left: 130px">
                                      @error('email')
                                          {{ $message }}
                                      @enderror
                                  </span>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone">
                                    <span class="text-danger"  style="margin-left: 130px">
                                      @error('phone')
                                          {{ $message }}
                                      @enderror
                                  </span>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                    <span class="text-danger"  style="margin-left: 130px">
                                      @error('password')
                                          {{ $message }}
                                      @enderror
                                  </span>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password">
                                    <span class="text-danger"  style="margin-left: 130px">
                                        @error('password_confirmation')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <button type="submit" value="Login" class="btn   btn-block"> Register </button>
                            </form>
                        </div>
                    </div>
                </div>
    </section>
@endsection
