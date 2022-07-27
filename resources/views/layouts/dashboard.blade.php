<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Safety Indicator - Admin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{ asset('admin/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/vendor/chartist/css/chartist.min.css') }}">

    <link href="{{ asset('admin/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    @stack('custom-css')
    <style>
        .dataTables_wrapper .dataTables_paginate .paginate_button.previous, .dataTables_wrapper .dataTables_paginate .paginate_button.next {
            /* background: 0 0!important; */
            color: #353d25 !important;
             border: none !important;
            margin: 0 10px;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button{
            padding: 10px !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button{
            background: transparent !important;
        }
        .dt-buttons button{
            background: #353d25 !important;
            border-color: #353d25 !important;
        }
    </style>
</head>
<body>

<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>


<div id="main-wrapper">

    <div class="nav-header">
        <a href="{{ route('home') }}" class="brand-logo">
            <img class="logo-abbr" src="images/logo.png" alt="">
            <img class="logo-compact" src="images/logo-text.png" alt="">
            <img class="brand-title" src="images/logo-text.png" alt="">
        </a>
        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">
                            Dashboard
                        </div>
                    </div>
                    <ul class="navbar-nav header-right">

{{--                        <li class="nav-item dropdown notification_dropdown">--}}
{{--                            <a class="nav-link  ai-icon" href="javascript:void(0)" role="button" data-toggle="dropdown">--}}
{{--                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M23.3333 19.8333H23.1187C23.2568 19.4597 23.3295 19.065 23.3333 18.6666V12.8333C23.3294 10.7663 22.6402 8.75902 21.3735 7.12565C20.1068 5.49228 18.3343 4.32508 16.3333 3.80679V3.49996C16.3333 2.88112 16.0875 2.28763 15.6499 1.85004C15.2123 1.41246 14.6188 1.16663 14 1.16663C13.3812 1.16663 12.7877 1.41246 12.3501 1.85004C11.9125 2.28763 11.6667 2.88112 11.6667 3.49996V3.80679C9.66574 4.32508 7.89317 5.49228 6.6265 7.12565C5.35983 8.75902 4.67058 10.7663 4.66667 12.8333V18.6666C4.67053 19.065 4.74316 19.4597 4.88133 19.8333H4.66667C4.35725 19.8333 4.0605 19.9562 3.84171 20.175C3.62292 20.3938 3.5 20.6905 3.5 21C3.5 21.3094 3.62292 21.6061 3.84171 21.8249C4.0605 22.0437 4.35725 22.1666 4.66667 22.1666H23.3333C23.6428 22.1666 23.9395 22.0437 24.1583 21.8249C24.3771 21.6061 24.5 21.3094 24.5 21C24.5 20.6905 24.3771 20.3938 24.1583 20.175C23.9395 19.9562 23.6428 19.8333 23.3333 19.8333Z" fill="#67636D" />--}}
{{--                                    <path d="M9.98193 24.5C10.3863 25.2088 10.971 25.7981 11.6767 26.2079C12.3823 26.6178 13.1839 26.8337 13.9999 26.8337C14.816 26.8337 15.6175 26.6178 16.3232 26.2079C17.0289 25.7981 17.6136 25.2088 18.0179 24.5H9.98193Z" fill="#67636D" />--}}
{{--                                </svg>--}}
{{--                                <span class="badge light text-white bg-primary rounded-circle">4</span>--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-menu dropdown-menu-right">--}}
{{--                                <div id="dlab_W_Notification1" class="widget-media dlab-scroll p-3 height380">--}}
{{--                                    <ul class="timeline">--}}
{{--                                        <li>--}}
{{--                                            <div class="timeline-panel">--}}
{{--                                                <div class="media mr-2">--}}
{{--                                                    <img alt="image" width="50" src="images/avatar/1.jpg">--}}
{{--                                                </div>--}}
{{--                                                <div class="media-body">--}}
{{--                                                    <h6 class="mb-1">Dr sultads Send you Photo</h6>--}}
{{--                                                    <small class="d-block">29 July 2020 - 02:26 PM</small>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}

{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <a class="all-notification" href="javascript:void(0)">See all notifications <i class="ti-arrow-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                <img src="images/profile/17.jpg" width="20" alt="" />
                                <div class="header-info">
                                    <span class="text-black">{{ auth()->user()->name }}</span>
                                    <p class="fs-12 mb-0">Admin</p>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
{{--                                <a href="app-profile.html" class="dropdown-item ai-icon">--}}
{{--                                    <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>--}}
{{--                                    <span class="ml-2">Profile </span>--}}
{{--                                </a>--}}
{{--                                <a href="email-inbox.html" class="dropdown-item ai-icon">--}}
{{--                                    <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>--}}
{{--                                    <span class="ml-2">Inbox </span>--}}
{{--                                </a>--}}
                                <a  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                    <span class="ml-2">Logout </span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="dlabnav">
        <div class="dlabnav-scroll">
            <ul class="metismenu" id="menu">
                <li><a href="{{ route('home') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li><a href="{{ route('password.request') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-controls-3"></i>
                        <span class="nav-text">Reset Password</span>
                    </a>
                </li>
                {{--                <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">--}}
                {{--                        <i class="flaticon-381-settings-2"></i>--}}
                {{--                        <span class="nav-text">Widget</span>--}}
                {{--                    </a>--}}
                {{--                </li>--}}

            </ul>
            <a class="add-menu-sidebar d-block" href="javascript:void(0)" data-toggle="modal" data-target=".addModal">+ New Indicator</a>
            <div class="copyright">
                <p><strong>Safety Indicator</strong> © {{ date('Y') }} All Rights Reserved</p>
                <p>Made with <span class="heart"></span> by Bizzle</p>
            </div>
        </div>
    </div>

    <div class="content-body">
        <div class="container-fluid">
            @yield('content')
            </div>
        </div>
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https//github.com/KarikariAdade" target="_blank">Karikari</a> {{ date('Y') }}</p>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
{{--    <script src="{{ asset('admin/vendor/chart.js/Chart.bundle.min.js') }}"></script>--}}
    <script src="{{ asset('admin/js/custom.min.js') }}"></script>
    <script src="{{ asset('admin/js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('admin/vendor/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('admin/vendor/peity/jquery.peity.min.js') }}"></script>
{{--    <script src="{{ asset('admin/vendor/apexchart/apexchart.js') }}"></script>--}}
    <script src="{{ asset('admin/js/dashboard/dashboard-1.js') }}"></script>
    <script src="{{ asset('admin/js/notiflix-aio-3.2.5.min.js') }}"></script>
    <script src="{{ asset('admin/js/notify_settings.js') }}"></script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>
@stack('custom-js')
</body>
</html>

