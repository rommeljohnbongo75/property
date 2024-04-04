  <!-- Top Bar -->


  <!-- <section id="top-bar" class="p-3">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <i class="fas fa-phone"></i> 
      
        </div>
        <div class="col-md-4">
          <i class="fas fa-envelope-open"></i> 
         
        </div>
        <div class="col-md-4">
          <div class="social text-right">
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-pinterest"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section> -->
<style>
  nav.navbar.scrolltop {
    background-color: #718096;
    z-index: 999!important;
    opacity: 1 !important;
    top: 0;
    position: sticky;
}
  .navbar{
    background-color:#718096;
    position: absolute;
    padding:0 !important;
  }
  .navbar-dark .navbar-nav .nav-link {
    color: #e5974f !important ;
}
.navbar-dark .navbar-brand {
    color:#e5974f;
}
.navbar-nav .nav-item a{
  font-size:20px;
}
.navbar-dark .navbar-brand span {
    color: #e5974f;
    font-size:35px;
}
.navbar-dark .navbar-brand{
  font-style:italic;
}
.position-absolute {
    width: 100%;
    top: 0;
    display: flex;
    
}
.navbar img{
  width:100%;
  max-width:150px;
}
input[type="text"] {
    width: 100%;
}

.container-form {
  width:350px;
}
.container-form h1 {
    font-size: 26px;
}
@media only screen and (max-width: 1024px) {
.container-form {
 left: 36%;
}
}
@media only screen and (max-width: 768px) {
.container-form {
    left: 26%;
}
#listings {
    padding-top: 70px;
}
}
@media only screen and (max-width: 425px) {
  input#ranges, input#rangesend {
    border: none;
    padding-left: 11px;
    width: 100%;
    max-width: 200px;
}
.container-form {
    left: 9%;
    top:10%;
}
.banner-image img{
  height:80%;
}
#listings {
    padding-top: 67px;
}
}

@media only screen and (max-width: 375px) {
.form-btn button {
    background-color: #e5974f;
    width: 58%;
    padding: 9px 0;
    font-size: 14px;
}
.container-form {
    left:10%;
    width:312px!important;
    top:6%;
}
.container-form h1 {
    font-size: 20px !important;
}
.banner-image img{
  height:60%;
}
#listings {
    padding-top: 67px;
}
}



  </style>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top ">
  <!-- <div class="position-absolute">  -->
      <a class="navbar-brand" href="{{url('/')}}">
       <!-- <span class="text-black ">Estate</span>Rental  -->
         <img src="{{ asset('assets/img/estate-high-resolution-logo.png' ) }}">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
        <!-- <li class="nav-item {{ (request()->routeIs('index')) ? 'active' : '' }}  mr-3">
            <a class="nav-link" href="{{ route('index') }}">Home</a>
          </li> -->
          <!-- <li class="nav-item mr-3 {{ (request()->routeIs('about')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('about') }}">About</a>
          </li> -->
          <li class="nav-item mr-3 {{ (request()->routeIs('listings')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('listings') }}">Featured Property</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          @auth
          <li class="nav-item mr-3 {{ (request()->routeIs('dashboard')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="fas fa-user-plus"></i> Dashboard</a>
          </li>
          <li class="nav-item mr-3">

          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); 
            document.getElementById('frm-logout').submit();">
            <i class="fas fa-sign-in-alt"></i>  Logout
          </a>    
          <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
            {{-- <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit">Logout</button>
            </form> --}}
            </li>
          @else
          <li class="nav-item mr-3 {{ (request()->routeIs('register')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('register') }}">
              <i class="fas fa-user-plus"></i> Register</a>
          </li>
          <li class="nav-item mr-3 {{ (request()->routeIs('login')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('login') }}">
              <i class="fas fa-sign-in-alt"></i>

              Login</a>
          </li>
          @endif
        </ul>
      </div>
<!-- </div> -->
  </nav>
<script>
 $(window).scroll(function() {
    if ($(document).scrollTop() > 500) {
      $("nav.navbar").addClass("scrolltop");
    } else {
      $(".navbar").removeClass("position-absolute");
    }
  });
</script>
