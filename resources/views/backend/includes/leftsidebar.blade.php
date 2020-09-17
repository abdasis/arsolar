<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{ url('/') }}/backend/assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-toggle="dropdown">Abd. Asis</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user mr-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings mr-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock mr-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item text-danger">
                        <i class="fe-log-out mr-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="#sidebarDashboards" data-toggle="collapse">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboards </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Apps</li>

                <li>
                    <a href="#sidebarProyek" data-toggle="collapse">
                        <i class="mdi mdi-briefcase-check-outline"></i>
                        <span> Proyek </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarProyek">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('project.create') }}">Tambah Proyek</a>
                            </li>
                            <li>
                                <a href="{{ route('project.index') }}">Daftar Proyek</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarProduk" data-toggle="collapse">
                        <i class="mdi mdi-gift-outline"></i>
                        <span> Produk </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarProduk">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('product.create') }}">Tambah Produk</a>
                            </li>
                            <li>
                                <a href="{{ route('product.index') }}">Daftar Produk</a>
                            </li>
                            <li>
                                <a href="{{ route('kategori.index') }}">Kategori</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarProduk" data-toggle="collapse">
                        <i class=" fas fa-images"></i>
                        <span> Slider </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarProduk">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('slider.create') }}">Tambah Slider</a>
                            </li>
                            <li>
                                <a href="{{ route('slider.index') }}">Daftar Slider</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarBerita" data-toggle="collapse">
                        <i class="mdi mdi-newspaper"></i>
                        <span> Berita </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarBerita">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('admin.berita.create') }}">Tambah Berita</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.berita.index') }}">Daftar Produk</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{ route('admin.setting.contact') }}"><i class="fa fa-phone-square"></i>Contact Us</a>
                </li>
                <li>
                    <a href="{{ route('admin.setting.about') }}"><i class="fa fa-file-alt"></i>About Page</a>
                </li>


                <li>
                    <a href="#sidebarSetting" data-toggle="collapse">
                        <i class="fas fa-cogs"></i>
                        <span> Setting </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarSetting">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('admin.setting.general') }}">General</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.setting.seo') }}">SEO</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
