<header class="header">

    <!-- Top Header Section -->
    <div class="top-header-section">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="logo my-3 my-sm-0">
                        <a href="index.html">
                            <img src="{{ asset('img/logo.png') }}" alt="logo image" class="img-fluid" width="100">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-6 text-right">
                    <div class="user-block d-none d-lg-block">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="user-notification-block align-right d-inline-block">
                                    <div class="top-nav-search item-animated">
                                        <form>
                                            <input type="text" class="form-control" placeholder="Tìm kiếm">
                                            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>

                                <!-- User notification-->
                                <div class="user-notification-block align-right d-inline-block">
                                    <ul class="list-inline m-0">
                                        <li class="list-inline-item item-animated" data-toggle="tooltip"
                                            data-placement="top" title="" data-original-title="Apply Leave">
                                            <a href="leave.html" class="font-23 menu-style text-white align-middle">
                                                <span class="lnr lnr-briefcase position-relative"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /User notification-->

                                <!-- user info-->
                                <div class="user-info align-right dropdown d-inline-block header-dropdown">
                                    <a href="javascript:void(0)" data-toggle="dropdown"
                                        class=" menu-style dropdown-toggle">
                                        <div class="user-avatar d-inline-block">
                                            <img src="{{ asset('img/profiles/img-6.jpg') }}" alt="user avatar"
                                                class="rounded-circle img-fluid" width="55">
                                        </div>
                                    </a>

                                    <!-- Notifications -->
                                    <div
                                        class="dropdown-menu notification-dropdown-menu shadow-lg border-0 p-3 m-0 dropdown-menu-right">
                                        <a class="dropdown-item p-2" href="employment.html">
                                            <span class="media align-items-center">
                                                <span class="lnr lnr-user mr-3"></span>
                                                <span class="media-body text-truncate">
                                                    <span class="text-truncate">Hồ sơ</span>
                                                </span>
                                            </span>
                                        </a>
                                        <a class="dropdown-item p-2" href="profile-settings.html">
                                            <span class="media align-items-center">
                                                <span class="lnr lnr-cog mr-3"></span>
                                                <span class="media-body text-truncate">
                                                    <span class="text-truncate">Cài đặt</span>
                                                </span>
                                            </span>
                                        </a>
                                        <a class="dropdown-item p-2" href="{{ route('auth.logout') }}">
                                            <span class="media align-items-center">
                                                <span class="lnr lnr-power-switch mr-3"></span>
                                                <span class="media-body text-truncate">
                                                    <span class="text-truncate">Đăng xuất</span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                    <!-- Notifications -->

                                </div>
                                <!-- /User info-->

                            </div>
                        </div>
                    </div>
                    <div class="d-block d-lg-none">
                        <a href="javascript:void(0)">
                            <span class="lnr lnr-user d-block display-5 text-white" id="open_navSidebar"></span>
                        </a>

                        <!-- Offcanvas menu -->
                        <div class="offcanvas-menu" id="offcanvas_menu">
                            <span class="lnr lnr-cross float-left display-6 position-absolute t-1 l-1 text-white"
                                id="close_navSidebar"></span>
                            <div class="user-info align-center bg-theme text-center">
                                <a href="javascript:void(0)" class="d-block menu-style text-white">
                                    <div class="user-avatar d-inline-block mr-3">
                                        <img src="{{ asset('img/profiles/img-6.jpg') }}" alt="user avatar"
                                            class="rounded-circle" width="50">
                                    </div>
                                </a>
                            </div>
                            <div class="user-notification-block align-center">
                                <div class="top-nav-search item-animated">
                                    <form>
                                        <input type="text" class="form-control" placeholder="Search here">
                                        <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <hr>
                            <div class="user-menu-items px-3 m-0">
                                <a class="px-0 pb-2 pt-0" href="{{ route('admin.dashboard') }}">
                                    <span class="media align-items-center">
                                        <span class="lnr lnr-home mr-3"></span>
                                        <span class="media-body text-truncate text-left">
                                            <span class="text-truncate text-left">Dashboard</span>
                                        </span>
                                    </span>
                                </a>
                                <a class="p-2" href="{{ route('admin.employee.index') }}">
                                    <span class="media align-items-center">
                                        <span class="lnr lnr-users mr-3"></span>
                                        <span class="media-body text-truncate text-left">
                                            <span class="text-truncate text-left">Employees</span>
                                        </span>
                                    </span>
                                </a>
                                <a class="p-2" href="company.html">
                                    <span class="media align-items-center">
                                        <span class="lnr lnr-apartment mr-3"></span>
                                        <span class="media-body text-truncate text-left">
                                            <span class="text-truncate text-left">Company</span>
                                        </span>
                                    </span>
                                </a>
                                <a class="p-2" href="calendar.html">
                                    <span class="media align-items-center">
                                        <span class="lnr lnr-calendar-full mr-3"></span>
                                        <span class="media-body text-truncate text-left">
                                            <span class="text-truncate text-left">Calendar</span>
                                        </span>
                                    </span>
                                </a>
                                <a class="p-2" href="leave.html">
                                    <span class="media align-items-center">
                                        <span class="lnr lnr-briefcase mr-3"></span>
                                        <span class="media-body text-truncate text-left">
                                            <span class="text-truncate text-left">Leave</span>
                                        </span>
                                    </span>
                                </a>
                                <a class="p-2" href="reviews.html">
                                    <span class="media align-items-center">
                                        <span class="lnr lnr-star mr-3"></span>
                                        <span class="media-body text-truncate text-left">
                                            <span class="text-truncate text-left">Reviews</span>
                                        </span>
                                    </span>
                                </a>
                                <a class="p-2" href="reports.html">
                                    <span class="media align-items-center">
                                        <span class="lnr lnr-rocket mr-3"></span>
                                        <span class="media-body text-truncate text-left">
                                            <span class="text-truncate text-left">Reports</span>
                                        </span>
                                    </span>
                                </a>
                                <a class="p-2" href="manage.html">
                                    <span class="media align-items-center">
                                        <span class="lnr lnr-sync mr-3"></span>
                                        <span class="media-body text-truncate text-left">
                                            <span class="text-truncate text-left">Manage</span>
                                        </span>
                                    </span>
                                </a>

                                <a class="p-2" href="settings.html">
                                    <span class="media align-items-center">
                                        <span class="lnr lnr-cog mr-3"></span>
                                        <span class="media-body text-truncate text-left">
                                            <span class="text-truncate text-left">Settings</span>
                                        </span>
                                    </span>
                                </a>
                                <a class="p-2" href="employment.html">
                                    <span class="media align-items-center">
                                        <span class="lnr lnr-user mr-3"></span>
                                        <span class="media-body text-truncate text-left">
                                            <span class="text-truncate text-left">Profile</span>
                                        </span>
                                    </span>
                                </a>
                                <a class="p-2" href="{{ route('auth.logout') }}">
                                    <span class="media align-items-center">
                                        <span class="lnr lnr-power-switch mr-3"></span>
                                        <span class="media-body text-truncate text-left">
                                            <span class="text-truncate text-left">Logout</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!-- /Offcanvas menu -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Top Header Section -->

    <!-- Slide Nav -->

    <!-- Slide Nav -->
    <div class="header-wrapper d-none d-sm-none d-md-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="header-menu-list d-flex bg-white rt_nav_header horizontal-layout nav-bottom">
                        <div class="append mr-auto my-0 my-md-0 mr-auto">
                            <ul class="list-group list-group-horizontal-md mr-auto">
                                <li class="mr-1 @if (request()->is('admin/dashboard')) active @endif">
                                    <a href="{{ route('admin.dashboard') }}" class="btn-ctm-space text-dark">
                                        <span class="lnr lnr-home pr-0 pr-lg-2"></span>
                                        <span class="d-none d-lg-inline">Bảng điều khiển</span>
                                    </a>
                                </li>
                                <li class="mr-1 {{ request()->routeIs('admin.employee.*') ? 'active' : '' }}"><a
                                        class="text-dark btn-ctm-space "
                                        href="{{ route('admin.employee.index') }}"><span
                                            class="lnr lnr-users pr-0 pr-lg-2"></span><span
                                            class="d-none d-lg-inline">Người lao động</span></a></li>
                                <li class="mr-1"><a class="text-dark btn-ctm-space " href="company.html"><span
                                            class="lnr lnr-apartment pr-0 pr-lg-2"></span><span
                                            class="d-none d-lg-inline">Company</span></a></li>
                                <li class="mr-1"><a class="btn-ctm-space text-dark" href="calendar.html"><span
                                            class="lnr lnr-calendar-full pr-0 pr-lg-2"></span><span
                                            class="d-none d-lg-inline">Calendar</span></a></li>
                                <li class="mr-1"><a class="btn-ctm-space text-dark" href="leave.html"><span
                                            class="lnr lnr-briefcase pr-0 pr-lg-2"></span><span
                                            class="d-none d-lg-inline">Leave</span></a></li>
                                <li class="mr-1"><a class="text-dark btn-ctm-space" href="reviews.html"><span
                                            class="lnr lnr-star pr-0 pr-lg-2"></span><span
                                            class="d-none d-lg-inline">Reviews</span></a></li>
                                <li class="mr-1"><a class="btn-ctm-space text-dark" href="reports.html"><span
                                            class="lnr lnr-rocket pr-0 pr-lg-2"></span><span
                                            class="d-none d-lg-inline">Reports</span></a></li>
                                <li class="mr-1"><a class="btn-ctm-space text-dark" href="manage.html"><span
                                            class="lnr lnr-sync pr-0 pr-lg-2"></span><span
                                            class="d-none d-lg-inline">Manage</span></a></li>
                                <li class="mr-1"><a class="btn-ctm-space text-dark" href="settings.html"><span
                                            class="lnr lnr-cog pr-0 pr-lg-2"></span><span
                                            class="d-none d-lg-inline">Settings</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Slide Nav -->

</header>
