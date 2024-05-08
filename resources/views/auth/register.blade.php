@extends('site.base')
<style>
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');
#register{
  padding-top:80px;
  padding-bottom:40px;
}
:root{
   --font-family: "DM Sans", sans-serif;
  }
  body{
   h1,h2,h3,h4,h5,h6,span,p label{
      font-family:var(--font-family);
   }
  
  }
label{
  font-family:var(--font-family) !important;
}
#register  lable{
  margin-bottom:unset !important;
}
#register{
/* background-image: url('/assets/img/register.webp');
background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-repaet: no-reapet; */
}
#register .card-body  .form-group {
    position: relative;
    margin-bottom: 29px;
}
#register .btn:hover {
   background-color:#FFA920 !important; 
}
#register .overlay-one{
  background-color: rgb(0, 0, 0);
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    height: 100%;
    opacity: 0.5;
    width: 100%;
}
.card-header{
  padding:20px 0;
}
#register input[type="text"],#register input[type="password"]{
  width:100%;
  max-width:60%;
  margin:auto;
  padding:22px 10px;
}
#register input[type="submit"]{
  width:100%;
  max-width:60%;
  margin:auto;
}
#register .card-header {
  background-color:unset;
  border-bottom:unset;
}
#register .btn{
  display:flex;
  justify-content:center;
}
#register .card{
    box-shadow:0px 15px 30px rgba(0,0,0,0.10);
    border-radius:unset;
    border:none;
}
#register input[type="email"] {
    width:100%;
  max-width:60%;
  margin:auto;
    padding:22px 10px;
    border-color:#dee2e6;
    margin-top:unset !important;
    border-radius: 3px;
    box-sizing: border-box;
}
#register .title h4{
  font-size:30px;
  text-align:center;
  padding:10px 0;
  margin:0;
} 
#register .title h2{
  color:rgb(188, 172, 157);
  font-size:26px;
}


@media only screen and (max-width: 768px) {
  .reg-img{
    padding:40px 0;
    margin:auto;
  }
  .title h4{
    font-size:20px;
  }
}
</style>
@section('content')
<section id="register" class="">
    <div class="container">
      <div class=" align-items-center register-form">
        <!-- <div class="overlay-one"></div> -->
        <!-- <div class="col-md-5 col-lg-6 reg-img">
          <img src="{{ asset('assets/img/user-registration.png' ) }}">
        </div> -->
        <div class="col-md-6 col-lg-6 mx-auto form-reg-inner">
          <div class="card">
            <div class="card-header title">
              <h2 class="text-center pt-3">Welcome To Estate Rental</h2>
              <h4> Register</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('store') }}" method="POST">
                @csrf
                  <div class="form-group">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                  <!-- <label for="first_name">First Name</label> -->
                  <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                </div>
                <div class="form-group">
                  <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                  <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">

                  <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                </div>
                <div class="form-group">

                  <input type="password" name="password" class="form-control"  placeholder="Password" required>
                </div>
                <div class="form-group">
                  <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                </div>
                <input type="submit" value="Register" class="btn ">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
