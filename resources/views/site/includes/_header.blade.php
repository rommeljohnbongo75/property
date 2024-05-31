   <!-- Top Bar -->
   <style>
       @import url(<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-thin-rounded/css/uicons-thin-rounded.css'>);

       image {
           max-width: 100%;
           height: auto;
       }

       #header {
           position: fixed;
           top: 0;
           width: 100%;
           z-index: 999;
       }

       .navbar-dark .navbar-nav .nav-link {
           color: black !important;
           font-family: var(--font-family) !important;
           font-size: 16px;
           font-weight: bold;
           z-index: 999;
           transition: all 0.2s linear;
       }

       .navbar-nav .nav-link:hover {
           color: #e5974f !important;
       }

       nav.navbar {
           background-color: transparent;
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
           padding: 5px 40px !important;
       }

       .navbar-dark .navbar-brand span {
           color: #000;
           font-size: 30px;
           font-style: italic;
       }

       .navbar-expand-lg .navbar-collapse {
           display: flex !important;
           flex-basis: auto;
           padding: 20px 0;
       }

       .navbar-dark .navbar-brand {
           /* font-style:italic; */
       }

       .nav-item a img {
           width: 25px;
           padding-right: 5px;
       }

       .navbar img {
           width: 100%;
           max-width: 90px;
       }

       input[type="text"] {
           width: 100%;
       }

       .logo-text {
           color: black;
           font-size: 30px;
           font-style: italic;
       }

       .logo-text h4 {
           color: #e5974f;
           font-size: 60px;
           font-style: italic;
       }

       .logo-text h3 {
           color: #e5974f;
           font-size: 60px;
           font-style: italic;
       }

       .logo-text {
           gap: 6px;
       }

       /* .active {
  background-color: rgba(34,34,34,0.8);
} */

       .container-form h1 {
           font-size: 26px;
       }

       @media only screen and (max-width: 1024px) {}

       @media only screen and (max-width: 768px) {
           #listings {
               padding-top: 70px;
           }

           .form-btn button {
               width: 60%;
           }

           #listings .slick-next {

               right: -14px;

           }

           #listings .slick-prev {

               left: -14px !important;
           }

       }

       @media only screen and (max-width: 425px) {

           input#ranges,
           input#rangesend {
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
               background-color: white !important;
           }

           #listings .slick-next {

               display: none !important;
           }

           #listings .slick-prev {
               display: none !important;
           }

           #listings .slick-prev::before,
           .slick-next::before {
               display: none;
           }

           .form-btn button {
               width: 51%;
               padding: 6px 0;
               font-size: 14px;
           }

           .form-btn button i {
               font-size: 14px;
           }

           .banner-image img {
               height: 60%;
           }

           #listings {
               padding-top: 67px;
           }

           .services-card {
               flex-wrap: wrap;

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
               width: 288px !important;
               top: 20%;
           }

           .container-form h1 {
               font-size: 20px !important;
           }

           .banner-image img {
               height: 60%;
           }

           #listings {
               padding-top: 67px;
           }

       }
   </style>
 <header id="header">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('assets/img/logo7.png') }}"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Estate Rental</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item  {{ request()->routeIs('listings') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('listings') }}"> 
                                <img src="{{ asset('assets/img/rent.png') }}">Featured Property
                            </a>
                        </li>
                        <li class="nav-item   {{ request()->routeIs('listings') ? 'active' : '' }}">
                            <a class="nav-link " href="{{ route('conatct.new') }}">
                                <img src="{{ asset('assets/img/telephone.png') }}"> Contact
                            </a>
                        </li>
                        @auth
                            @if (auth()->user()->role == 0)
                                <li class="nav-item  {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('admin.index') }}"><i class="fas fa-user-plus"></i>
                                        Dashboard</a>
                                </li>
                            @else
                                <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-user-plus"></i>
                                        Dashboard</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); 
                                    document.getElementById('frm-logout').submit();">
                                    <i class="fas fa-sign-in-alt"></i> Logout
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
                            <li class="nav-item  {{ request()->routeIs('register') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('register') }}"><img src="{{ asset('assets/img/login.png') }}">Register</a>
                            </li>
                            <li class="nav-item  {{ request()->routeIs('login') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('login') }}">
                                    <img src="{{ asset('assets/img/user.png') }}">Log In</a>
                                </i>
                            </li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>