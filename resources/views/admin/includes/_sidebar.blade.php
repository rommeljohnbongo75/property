<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" style="display:none;" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.index') }}"
                        aria-expanded="false">
                        <i class="mdi mdi-av-timer"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('users.index') }}"
                        aria-expanded="false">
                        <i class="mdi mdi-account-location"></i>
                        <span class="hide-menu">Users</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('listings.index') }}"
                        aria-expanded="false">
                        <i class="mdi mdi-account-network"></i>
                        <span class="hide-menu">Property</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('realtors.index') }}"
                        aria-expanded="false">
                        <i class="mdi mdi-face"></i>
                        <span class="hide-menu">Agent</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/back/fullcalender') }}"
                        aria-expanded="false">
                        <i class="mdi mdi-calculator"></i>

                        <span class="hide-menu">Calender</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ Route('rental') }}"
                        aria-expanded="false">
                        <i class="mdi mdi-bulletin-board"></i>
                        <span class="hide-menu">Rental</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('inquiries.index') }}"
                        aria-expanded="false">
                        <i class="mdi mdi-checkbox-marked-circle"></i>
                        <span class="hide-menu">Reservation</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('contact.index') }}"
                        aria-expanded="false">
                        <i class="mdi mdi-cellphone-basic"></i>
                        <span class="hide-menu">Contact Us</span>
                    </a>
                </li>
                <li class="nav-item sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" data-toggle="collapse" href="#submenu1" role="button" aria-expanded="false" aria-controls="submenu1">
                        <i class="mdi mdi-home"></i>
                        <span class="hide-menu"> Home </span>
                    </a>
                    <div class="collapse" id="submenu1">
                        <ul class="nav flex-column ml-3  ">
                            <li class="nav-item">
                                <a  href="{{route('banner.index') }}" class="waves-effect waves-dark sidebar-link">
                                    <i class="mdi mdi-folder-multiple"></i>
                                     <span class="hide-menu">Banner </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a  href="{{ route('FeaturedLocation.index') }}" class="waves-effect waves-dark sidebar-link">
                                    <i class="mdi mdi-map-marker"></i>
                                    <span class="hide-menu">Featured Locations </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
