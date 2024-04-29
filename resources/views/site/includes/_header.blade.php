  <!-- Top Bar -->
<style>
  @import url(<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-thin-rounded/css/uicons-thin-rounded.css'>);
  image{
    max-width:100%;
    height:auto;
  }
  #header{
    position:fixed;
    top:0;
    width:100%;
    z-index:999;
  }
  .navbar-dark .navbar-nav .nav-link {
    color:black!important;
    font-family:var(--font-family) !important;
    font-size:16px;
    font-weight:bold;
    z-index:999;
    transition:all 0.2s linear;
}

.navbar-nav .nav-link:hover{
  color: #e5974f !important;
}
nav.navbar {
    background-color:transparent;
    width: 100%;
    opacity: 1;

}
.active-header {
    background-color: #ffff !important;
    width: 100%;
    opacity: 1;
    border-bottom: 1px solid rgba(153, 153, 153, 0.22);
    box-shadow: 0px 4px 18px 0px rgba(0, 0, 0, 0.0784313725);
}
.navbar {
    padding:0 10px!important;
}
.navbar-dark .navbar-brand span {
    color: #e5974f;
    font-size:30px;
    font-style:italic;
}
.navbar-dark .navbar-brand{
  /* font-style:italic; */
}
.nav-item a img{
  width:25px;
  padding-right:5px;
}
.navbar img{
  width:100%;
  max-width:70px;
}
input[type="text"] {
    width: 100%;
}
.logo-text{
  color:black;
  font-size:30px;
  font-style:italic;
}
.logo-text h4{
  color: #e5974f;
  font-size:60px;
  font-style:italic;
}
.logo-text h3{
  color: #e5974f;
  font-size:60px;
  font-style:italic;
}
.logo-text{
  gap:6px;
}
/* .active {
  background-color: rgba(34,34,34,0.8);
} */

.container-form h1 {
    font-size: 26px;
}
@media only screen and (max-width: 1024px) {

}
@media only screen and (max-width: 768px) {
#listings {
    padding-top: 70px;
}
.form-btn button {
    width: 60%;
}
}
@media only screen and (max-width: 425px) {
  input#ranges, input#rangesend {
    border: none;
    padding-left: 11px;
    width: 100%;
    max-width: 200px;
}
.logo-text {
    color: black;
    font-size: 16px;
    font-style: italic;
}
.active {
    background-color:white !important;
}

#listings .slick-prev::before,.slick-next::before{
  display:none;
}
.form-btn button {
    width: 51%;
    padding: 6px 0;
    font-size: 14px;
}
.form-btn button i {
    font-size: 14px;
}
.banner-image img{
  height:60%;
}
#listings {
    padding-top: 67px;
}
.services-card {
  flex-wrap:wrap;

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
    left: 10%;
    width: 288px!important;
    top: 20%;
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
  <header id="header">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark ">
  <!-- <div class="position-absolute">  -->
  <div class="d-flex logo-text align-items-center">
         <!-- <img src="{{ asset('assets/img/residential.png' ) }}"> -->
         <h4>E</h4>state
         <h3>R</h3><span>ental</span>
         <a class="navbar-brand" href="{{url('/')}}"></a>
         </div>
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
          
        </ul>

        <ul class="navbar-nav ml-auto">
        <li class="nav-item mr-3 {{ (request()->routeIs('listings')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('listings') }}">Featured Property</a>
          </li>
          <li class="nav-item mr-3 {{ (request()->routeIs('listings')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('conatct.new') }}">Contact</a>
          </li>
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
            <img src="{{ asset('assets/img/login.png' ) }}">Register</a>
          </li>
          <li class="nav-item mr-3 {{ (request()->routeIs('login')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('login') }}">
            <img src="{{ asset('assets/img/user.png' ) }}">Log In</a>
             </i>
          </li>
          @endif
          
        </ul>
      </div>
<!-- </div> -->
  </nav>
</header>

