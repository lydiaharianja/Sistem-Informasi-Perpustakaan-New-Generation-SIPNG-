<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="icon" href="/gambar/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="/gambar/logo.png" type="image/x-icon">
    <title>dashboard</title>

    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/todo.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link id="color" rel="stylesheet" href="/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
</head>
<body>

<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        <div class="header-wrapper row m-0">
            <div class="header-logo-wrapper col-auto p-0">
                <div class="logo-wrapper">
                    <a href="{{route("home")}}">
                        <img class="img-fluid" src="/assets/images/logo/logo.png" alt="">
                    </a>
                </div>
                <div class="toggle-sidebar">
                    <div class="status_toggle sidebar-toggle d-flex">
                        <i class="fa fa-bars"></i>
                    </div>
                </div>
            </div>
            <div class="left-side-header col ps-0 d-none d-md-block">
                <div class="input-group"><span class="input-group-text" id="basic-addon1">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <g>
                      <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M11.2753 2.71436C16.0029 2.71436 19.8363 6.54674 19.8363 11.2753C19.8363 16.0039 16.0029 19.8363 11.2753 19.8363C6.54674 19.8363 2.71436 16.0039 2.71436 11.2753C2.71436 6.54674 6.54674 2.71436 11.2753 2.71436Z"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M19.8987 18.4878C20.6778 18.4878 21.3092 19.1202 21.3092 19.8983C21.3092 20.6783 20.6778 21.3097 19.8987 21.3097C19.1197 21.3097 18.4873 20.6783 18.4873 19.8983C18.4873 19.1202 19.1197 18.4878 19.8987 18.4878Z"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                  </g>
                </svg></span>
                    <input class="form-control" type="text" placeholder="Search here.." aria-label="search"
                           aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="nav-right col-10 col-sm-6 pull-right right-header p-0">
                <ul class="nav-menus">
                    <li>
                        <div class="mode animated backOutRight">

                            <svg class="darkicon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"></path>
                                <path
                                    d="M18.3117 5.68834L18.4286 5.57143M5.57144 18.4286L5.68832 18.3117M12 3.07394V3M12 21V20.9261M3.07394 12H3M21 12H20.9261M5.68831 5.68834L5.5714 5.57143M18.4286 18.4286L18.3117 18.3117"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                    </li>
                    <li class="onhover-dropdown">
                        <div class="notification-box">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11.9961 2.51416C7.56185 2.51416 5.63519 6.5294 5.63519 9.18368C5.63519 11.1675 5.92281 10.5837 4.82471 13.0037C3.48376 16.4523 8.87614 17.8618 11.9961 17.8618C15.1152 17.8618 20.5076 16.4523 19.1676 13.0037C18.0695 10.5837 18.3571 11.1675 18.3571 9.18368C18.3571 6.5294 16.4295 2.51416 11.9961 2.51416Z"
                                              stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                        <path d="M14.306 20.5122C13.0117 21.9579 10.9927 21.9751 9.68604 20.5122"
                                              stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                    </g>
                                </g>
                            </svg>
                            <span class="badge rounded-pill badge-warning">4 </span>
                        </div>
                        <div class="onhover-show-div notification-dropdown">
                            <div class="dropdown-title">
                                <h3>Notification</h3><a class="f-right" href="cart.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-bell">
                                        <path
                                            d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0"></path>
                                    </svg>
                                </a>
                            </div>
                            <ul class="custom-scrollbar">
                                <li>
                                    <div class="media">
                                        <div class="notification-img bg-light-primary"><img
                                                src="../assets/images/avtar/man.png" alt=""></div>
                                        <div class="media-body">
                                            <h5><a class="f-14 m-0" href="user-profile.html">Allie Grater</a></h5>
                                            <p>Peringatan pengembalian buku </p><span>10:20</span>
                                        </div>
                                        <div class="notification-right"><a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-x">
                                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                                </svg>
                                            </a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="notification-img bg-light-secondary"><img
                                                src="../assets/images/avtar/teacher.png" alt=""></div>
                                        <div class="media-body">
                                            <h5><a class="f-14 m-0" href="user-profile.html">Olive Yew</a></h5>
                                            <p>Peringatan Pengembalian buku</p><span>09:20</span>
                                        </div>
                                        <div class="notification-right"><a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-x">
                                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                                </svg>
                                            </a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="notification-img bg-light-info"><img
                                                src="../assets/images/avtar/teenager.png" alt=""></div>
                                        <div class="media-body">
                                            <h5><a class="f-14 m-0" href="user-profile.html">Peg Legge</a></h5>
                                            <p>Peringatan pengembalian buku</p><span>07:20</span>
                                        </div>
                                        <div class="notification-right"><a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-x">
                                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                                </svg>
                                            </a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="notification-img bg-light-success"><img
                                                src="../assets/images/avtar/chinese.png" alt=""></div>
                                        <div class="media-body">
                                            <h5><a class="f-14 m-0" href="user-profile.html">Teri Dactyl</a></h5>
                                            <p>Peringatan Pengembalian buku</p><span>05:20</span>
                                        </div>
                                        <div class="notification-right"><a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-x">
                                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                                </svg>
                                            </a></div>
                                    </div>
                                </li>
                                <li class="p-0"><a class="btn btn-primary" href="#">Check all</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="profile-nav onhover-dropdown pe-0 py-0 me-0">
                        <div class="media profile-media">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M9.55851 21.4562C5.88651 21.4562 2.74951 20.9012 2.74951 18.6772C2.74951 16.4532 5.86651 14.4492 9.55851 14.4492C13.2305 14.4492 16.3665 16.4342 16.3665 18.6572C16.3665 20.8802 13.2505 21.4562 9.55851 21.4562Z"
                                              stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M9.55849 11.2776C11.9685 11.2776 13.9225 9.32356 13.9225 6.91356C13.9225 4.50356 11.9685 2.54956 9.55849 2.54956C7.14849 2.54956 5.19449 4.50356 5.19449 6.91356C5.18549 9.31556 7.12649 11.2696 9.52749 11.2776H9.55849Z"
                                              stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                        <path
                                            d="M16.8013 10.0789C18.2043 9.70388 19.2383 8.42488 19.2383 6.90288C19.2393 5.31488 18.1123 3.98888 16.6143 3.68188"
                                            stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M17.4608 13.6536C19.4488 13.6536 21.1468 15.0016 21.1468 16.2046C21.1468 16.9136 20.5618 17.6416 19.6718 17.8506"
                                            stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">

                            <li><a href="{{route('logout')}}"><i data-feather="log-in"> </i><span>Logout</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Header Ends -->
    <!-- Page Body Start -->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
            <div>

                <div class="logo-wrapper">
                    <a href="{{route("home")}}"><img class="img-fluid for-light" src="/gambar/logo.png" alt="">
                        <img class="img-fluid for-dark" src="/gambar/logo.png" alt="" style="height:30px; padding:10px">SIPNG
                    </a>
                    <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                </div>
                <div class="logo-icon-wrapper">
                    <a href="{{route("home")}}">
                        <img class="img-fluid" src="/gambar/logo.png" alt="">
                    </a>
                </div>

                <nav class="sidebar-main">

                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar" data-simplebar="init" style="display: block;">
                            <div class="simplebar-wrapper" style="margin: 0px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                                            <div class="simplebar-content" style="padding: 0px;">

                                                <li class="back-btn">
                                                    <a href="{{route("home")}}" class="active"><img class="img-fluid" src="/gambar/logo.png" alt="">
                                                    </a>
                                                    <div class="mobile-back text-end">
                                                        <span>Back</span>
                                                        <i class="fa fa-angle-right ps-2" aria-hidden="true">

                                                        </i>
                                                    </div>
                                                </li>

                                                <li class="sidebar-list">
                                                    <a class="sidebar-link sidebar-title link-nav {{Route::currentRouteName() == "home" ? "bg-light" : ""}}" href="{{route("home")}}">
                                                        <span style="font-size: 18px;"><i class="fa fa-home"></i> Home</span>
                                                    </a>
                                                </li>

                                                <li class="sidebar-list">
                                                    <a class="sidebar-link sidebar-title link-nav {{Route::currentRouteName() == "books" ? "bg-light" : ""}}" href="{{route("books")}}">
                                                        <span style="font-size: 18px;"><i class="fa fa-book"></i> Books</span>
                                                    </a>
                                                </li>

                                                <li class="sidebar-list">
                                                    <a class="sidebar-link sidebar-title link-nav {{Route::currentRouteName() == "borrows" ? "bg-light" : ""}}" href="{{route("borrows")}}">
                                                        <span style="font-size: 18px;"><i class="fa fa-handshake-o"></i> Borrows</span>
                                                    </a>
                                                </li>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: auto; height: 2035px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar"
                                     style="height: 52px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                            </div>
                        </ul>
                    </div>

                </nav>
            </div>
        </div>

        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <!-- Container-fluid starts-->
            <div class="container-fluid pt-3">
                @yield('content')
            </div>
            <!-- Container-fluid ends                    -->
        </div>
        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 Kelompok 4 PPW </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- latest jquery-->
<script src="/assets/js/jquery-3.5.1.min.js"></script>
<!-- Bootstrap js-->
<script src="/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<!-- feather icon js-->
<script src="/assets/js/icons/feather-icon/feather.min.js"></script>
<script src="/assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- scrollbar js-->
<script src="/assets/js/scrollbar/simplebar.js"></script>
<script src="/assets/js/scrollbar/custom.js"></script>
<!-- Sidebar jquery-->
<script src="/assets/js/config.js"></script>
<!-- Plugins JS start-->
<script src="/assets/js/sidebar-menu.js"></script>
<script src="/assets/js/todo/todo.js"></script>
<script src="/assets/js/tooltip-init.js"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="/assets/js/script.js"></script>
<!-- login js-->
<!-- Plugin used-->
</body>


</html>
