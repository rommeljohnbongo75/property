<style>
    div#navbarSupportedContent {
        background-color: #333333;
    }
    .active{
      background-color:unset !important;
    }
    li.nav-item.search-box img {
        margin-left: 25px;
    }
</style>
<header class="topbar" data-navbarbg="skin6">
  <nav class="navbar top-navbar navbar-expand-md navbar-light">
      <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
          <ul class="navbar-nav float-left mr-auto">
              <li class="nav-item search-box three-line">
                <img width="30px" src="{{asset('assets/img/three-line-1.png' )}}">
              </li>
              <li class="nav-item search-box">
                <h3 style="margin-left:30px; color:#fff;">Estate Rental</h3>
              </li>
          </ul>
          <ul class="navbar-nav float-right">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->username }}</a>

                    <div class="dropdown-menu dropdown-menu-right user-dd animated">
                      <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                      <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                        document.getElementById('frm-logout').submit();">
                        <i class="ti-email m-r-5 m-l-5"></i> Logout</a>
                      <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </div>
              </li>
          </ul>
      </div>
  </nav>
</header>
