<div class="navbar-custom">
    <div class="container-fluid">            
        <ul class="list-unstyled topnav-menu float-right mb-0">

            <li class="dropdown d-inline-block d-lg-none">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-search noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-lg dropdown-menu-right p-0">
                    <form class="p-3">
                        <input type="text" class="form-control" placeholder="Search ..."
                            aria-label="Recipient's username">
                    </form>
                </div>
            </li>

            <li class="dropdown d-none d-lg-inline-block">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen"
                    href="#">
                    <i class="fe-maximize noti-icon"></i>
                </a>
            </li>

            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ url('/') }}/backend/assets/images/users/user-1.jpg" alt="user-image"
                        class="rounded-circle">
                    <span class="pro-user-name ml-1">
                        {{ Auth::user()->name ?? 'Guest' }} <i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock"></i>
                        <span>Lock Screen</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list">
                <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                    <i class="fe-settings noti-icon"></i>
                </a>
            </li>

        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="index.html" class="logo logo-dark text-center">
                <span class="logo-sm">
                    <img src="{{ url('/') }}/backend/assets/images/logo-sm.png" alt="" height="22">
                    <!-- <span class="logo-lg-text-light">ARsolar</span> -->
                </span>
                <span class="logo-lg">
                    <img src="{{ url('/') }}/backend/assets/images/logo-dark.png" alt="" height="20">
                    <!-- <span class="logo-lg-text-light">U</span> -->
                </span>
            </a>

            <a href="index.html" class="logo logo-light text-center">
                <span class="logo-sm">
                    <img src="{{ url('/') }}/backend/assets/images/logo-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{ url('/') }}/backend/assets/images/logo-light.png" alt="" height="20">
                </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->
                <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>

            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    
                    @if (Session::get('bahasa') == 'id' || empty(Session::get('bahasa')))
                    <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/flags/1x1/id.svg"
                        class="rounded-circle">
                    @else
                    <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/flags/1x1/us.svg"
                        class="rounded-circle">
                    @endif
                    <span class="pro-user-name ml-1">
                        Language <i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                        <a data-turbolinks="false"
                            class="dropdown-item {{ Session::get('bahasa') == 'id' ? 'active' : '' }}"
                            href="{{ route('bahasa', 'id') }}">
                            <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/flags/1x1/id.svg"
                                height="15px" width="auto" alt=""> Indonesia</a>
                        <a data-turbolinks="false"
                            class="dropdown-item {{ Session::get('bahasa') == 'en' ? 'active' : '' }}"
                            href="{{ route('bahasa', 'en') }}"><img
                                src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/flags/1x1/us.svg"
                                height="15px" width="auto" alt=""> English</a>
                    </div>
            </li>

        </ul>
        <div class="clearfix"></div>
    </div>
</div>
