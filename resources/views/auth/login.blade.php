 <style>
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');
  *{
   padding:0;
   margin:0;
   box-sizing:border-box;
   list-style:none;
   text-decoration:none;
  }
  :root{
   --font-family: "DM Sans", sans-serif;
  }
  body{
   h1,h2,h3,h4,h5,h6, span, p{
      font-family:var(--font-family);
   }
  }
  image{
    max-width:100%;
    height:auto;
  }
   .container{
   max-width:1440px;
   margin:0 auto;
   }
   #login {
    padding:160px 0;
  }
  .login-dec{
    text-align:center;
    padding:20px 0;
  }
  #login .card{
    border:none;
  }
  .login-inner {
    background-color: white;
    padding: 20px 0;
    box-shadow: 0px 15px 30px rgba(0,0,0,0.10);
}
  .card label{
    font-family:var(--font-family);
    color:black;
  }
   .login-media-icon{
    display:grid;
    grid-template-columns:1fr 1fr;
    justify-content:center;
   }
   .login-dec span{
    color:#8E8E93;
   }
   .card-header {
     background-color:unset !important;
  }
  .card-header h4{
    font-size:30px;
  }
   .login-media{ 
    margin-left: 10px;
    border: 1px solid #E5E5EA;
    padding: 16px 17.5px;
    border-radius: 10px;
    display: flex;
    gap:10px;
}
.banner-login{
  padding:80px 0;
  
}
.overlay1 {
    background-color: rgb(0, 0, 0);
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    height: 58.6%;
    opacity: 0.3;
    width: 100%;
}
/* .banner-login img{
height:50%;
position: relative;
} */
.login-banner-heading{
  position:absolute;
  top:20%;
  left:40px;

}
.login-banner-heading h2{
  color:black;
  font-size:50px;
}
.login-banner-heading span{
  font-size:40px;
  font-weight:bold;
  color:#FFA920
}
.social-media-name span a{
  color:black;
  font-weight:bold;
}
.form-group i {
    transform: translate(13px, -25px);
    position: absolute;
}
::placeholder{
  padding-right:20px;
}
.form-group input[type="text"]{
  position: relative;
}
.form-control {
padding: 0.375rem 2.75rem !important;
}
@media only screen and (max-width:425px) {
  .login-media-icon {
    grid-template-columns: 1fr;
    gap:20px;
}
}
</style>



@extends('site.base')

@section('content')
<!-- <section> 
  <div class="banner-login">
    <img src="{{ asset('assets/img/mthome.jpg' ) }}">
    <div class="overlay1"></div>
    <div class="login-banner-heading">
     <h2>Welcome to Estate Rental</h2>
     <span>Login</span>
    </div>
  </div>
</section> -->

<section id="login" >
    <div class="container">
      <div class="row login-inner align-items-center ">
        <div class="col-sm-12 col-lg-6">
          <img src="{{ asset('assets/img/loginvector.png' ) }}">
        </div>
        <div class="col-sm-12 col-lg-6 mx-auto">
          <div class="card">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif

            <div class="card-header  text-black">
              <h4>
                <i class="fas fa-sign-in-alt"></i> Login</h4>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('authenticate') }}">
                @csrf
               
                <div class="form-group">
                  <label for="username">Email</label>
                  <input type="text" name="email" class="form-control" placeholder="Email" required>
                  <i class="fa-regular fa-envelope"></i>
                </div>

                <div class="form-group">
                  <label for="password2">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Password" required>
                  <i class="fa-solid fa-lock"></i>
                </div>

                <input type="submit" value="Login" class="btn  btn-block">
                <div class="login-dec">
                <p>Allready have an account? Login</p>
                <span>or Register with</span>
                </div>
                <div class="login-media-icon">
                <div class="login-media d-flex justify-content-center gap-2">
                  <div class="social-media-icon">
                  <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.43242 12.5863L3.73625 15.1852L1.19176 15.239C0.431328 13.8286 0 12.2149 0 10.5C0 8.84179 0.403281 7.27804 1.11812 5.90112H1.11867L3.38398 6.31644L4.37633 8.56815C4.16863 9.17366 4.05543 9.82366 4.05543 10.5C4.05551 11.2341 4.18848 11.9374 4.43242 12.5863Z" fill="#FBBB00"></path>
                                        <path d="M19.8242 8.6319C19.939 9.23682 19.9989 9.86155 19.9989 10.5C19.9989 11.216 19.9236 11.9143 19.7802 12.588C19.2934 14.8803 18.0214 16.8819 16.2594 18.2984L16.2588 18.2978L13.4055 18.1522L13.0017 15.6314C14.1709 14.9456 15.0847 13.8726 15.566 12.588H10.2188V8.6319H19.8242Z" fill="#518EF8"></path>
                                        <path d="M16.2595 18.2978L16.2601 18.2984C14.5464 19.6758 12.3694 20.5 9.99965 20.5C6.19141 20.5 2.88043 18.3715 1.19141 15.239L4.43207 12.5863C5.27656 14.8401 7.45074 16.4445 9.99965 16.4445C11.0952 16.4445 12.1216 16.1484 13.0024 15.6313L16.2595 18.2978Z" fill="#28B446"></path>
                                        <path d="M16.382 2.80219L13.1425 5.45437C12.2309 4.88461 11.1534 4.55547 9.99906 4.55547C7.39246 4.55547 5.17762 6.23348 4.37543 8.56812L1.11773 5.90109H1.11719C2.78148 2.6923 6.13422 0.5 9.99906 0.5C12.4254 0.5 14.6502 1.3643 16.382 2.80219Z" fill="#F14336"></path>
                                    </svg>
                  </div>
                  <div class="social-media-name">
                    <span><a href="">Google</a></span>
                  </div>
                </div>
                <div class="login-media d-flex justify-content-center">
                  <div class="social-media-icon ">
                  <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.5 10.5C20.5 15.4914 16.843 19.6285 12.0625 20.3785V13.3906H14.3926L14.8359 10.5H12.0625V8.62422C12.0625 7.8332 12.45 7.0625 13.6922 7.0625H14.9531V4.60156C14.9531 4.60156 13.8086 4.40625 12.7145 4.40625C10.4305 4.40625 8.9375 5.79063 8.9375 8.29688V10.5H6.39844V13.3906H8.9375V20.3785C4.15703 19.6285 0.5 15.4914 0.5 10.5C0.5 4.97734 4.97734 0.5 10.5 0.5C16.0227 0.5 20.5 4.97734 20.5 10.5Z" fill="#1877F2"></path>
                                        <path d="M14.3926 13.3906L14.8359 10.5H12.0625V8.62418C12.0625 7.83336 12.4499 7.0625 13.6921 7.0625H14.9531V4.60156C14.9531 4.60156 13.8088 4.40625 12.7146 4.40625C10.4304 4.40625 8.9375 5.79063 8.9375 8.29688V10.5H6.39844V13.3906H8.9375V20.3785C9.44664 20.4584 9.96844 20.5 10.5 20.5C11.0316 20.5 11.5534 20.4584 12.0625 20.3785V13.3906H14.3926Z" fill="white"></path>
                                    </svg>
                  </div>
                  <div class="social-media-name">
                    <span><a href="">Facebook</a></span>
                  </div>
                </div>
                </div>
               
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

