<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="We offer affordable luxury! Explore trendsetting fashion, home appliances, and stylish accessories">
    <meta name="keywords"
        content="Luxury, men's fashion, women's fashion, ">
    <meta name="author" content="pixelstrap">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon.png">


    <title>Ednascorner Stores - Admin</title>

    <!-- Google font-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">


    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_dashboard')}}/assets/css/vendors/font-awesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_dashboard')}}/assets/css/vendors/flag-icon.css">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_dashboard')}}/assets/css/vendors/icofont.css">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_dashboard')}}/assets/css/vendors/prism.css">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_dashboard')}}/assets/css/vendors/chartist.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_dashboard')}}/assets/css/vendors/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_dashboard')}}/assets/css/style.css">
</head>

<body>

    <!-- page-wrapper Start-->
    <div id="app" class="page-wrapper">

        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row">
                <div class="main-header-left d-lg-none w-auto">
                    <div class="logo-wrapper">
                        <a href="index.html">
                            <img style="height: 60px;" class="blur-up lazyloaded d-block d-lg-none"
                                src="{{asset('/')}}assets/img/logo/nav-logo.webp" alt="">
                        </a>
                    </div>
                </div>
                <div class="mobile-sidebar w-auto">
                    <div class="media-body text-end switch-sm">
                        <label class="switch">
                            <a href="javascript:void(0)">
                                <i id="sidebar-toggle" data-feather="align-left"></i>
                            </a>
                        </label>
                    </div>
                </div>
                <div class="nav-right col">
                    <ul class="nav-menus">
                        {{-- <li>
                            <form class="form-inline search-form">
                                <div class="form-group">
                                    <input class="form-control-plaintext" type="search" placeholder="Search..">
                                    <span class="d-sm-none mobile-search">
                                        <i data-feather="search"></i>
                                    </span>
                                </div>
                            </form>
                        </li> --}}
                        <li>
                            <a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()">
                                <i data-feather="maximize-2"></i>
                            </a>
                        </li>

                        <li class="onhover-dropdown">
                            <i data-feather="bell"></i>
                            <span class="badge badge-pill badge-primary pull-right notification-badge">3</span>
                            <span class="dot"></span>
                            <ul class="notification-dropdown onhover-show-div p-0">
                                <li>Notification <span class="badge badge-pill badge-primary pull-right">3</span></li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-0">
                                                <span>
                                                    <i class="shopping-color" data-feather="shopping-bag"></i>
                                                </span>Your order ready for Ship..!
                                            </h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-0 txt-success">
                                                <span>
                                                    <i class="download-color font-success" data-feather="download"></i>
                                                </span>Download Complete
                                            </h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-0 txt-danger">
                                                <span>
                                                    <i class="alert-color font-danger" data-feather="alert-circle"></i>
                                                </span>250 MB trash files
                                            </h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="txt-dark"><a href="javascript:void(0)">All</a> notification</li>
                            </ul>
                        </li>

                        <li class="onhover-dropdown">
                            <div class="media align-items-center">
                                <img class="align-self-center pull-right img-50 blur-up lazyloaded"
                                    src="{{asset('admin_dashboard')}}/assets/images/dashboard/user3.jpg" alt="header-user">
                                <div class="dotted-animation">
                                    <span class="animate-circle"></span>
                                    <span class="main-circle"></span>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">


                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="settings"></i>Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="log-out"></i>Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-lg-none mobile-toggle pull-right">
                        <i data-feather="more-horizontal"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            <div class="page-sidebar">
                <div class="main-header-left d-none d-lg-block">
                    <div class="logo-wrapper">
                        <a href="index.html">
                            <img class="d-none d-lg-block blur-up lazyloaded"
                                src="{{asset('/')}}images/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="sidebar custom-scrollbar">
                    <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                            aria-hidden="true"></i></a>
                    <div class="sidebar-user">
                      <store-profile-card appurl="{{config('app.url')}}"></store-profile-card>
                    </div>
                    <ul class="sidebar-menu">
                        <li>
                            <a class="sidebar-header" href="/dashboard">
                                <i data-feather="home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a class="sidebar-header" href="/all-products">
                                <i data-feather="users"></i>
                                <span>Products</span>
                            </a>

                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="/all-products">
                                        <i class="fa fa-circle"></i>All Products
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                        <i class="fa fa-circle"></i>Category
                                    </a>
                                </li>
                                <li>
                                    <a href="/add-products">
                                        <i class="fa fa-circle"></i>Add Products
                                    </a>
                                </li>



                            </ul>
                        </li>

                        <li>
                            <a class="sidebar-header" href="/my-orders">
                                <i data-feather="users"></i>
                                <span>Orders</span>
                            </a>
                        </li>

                        <li>
                            <a class="sidebar-header" href="/settings">
                                <i data-feather="users"></i>
                                <span>Settings</span>
                            </a>
                        </li>

                        <li>
                            <a class="sidebar-header" href="#">
                                <i data-feather="log-out"></i>
                                <span>Logout</span>
                            </a>
                        </li>






                    </ul>
                </div>
            </div>
            <!-- Page Sidebar Ends-->



            @yield('content')

            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright text-start">
                            <p class="mb-0">Copyright 2023 ©vicSystems Technologies Ltd.</p>
                        </div>
                        <div class="col-md-6 pull-right text-end">

                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer end-->
        </div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>

    <!-- latest jquery-->
    <script src="{{asset('admin_dashboard')}}/assets/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('admin_dashboard')}}/assets/js/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="{{asset('admin_dashboard')}}/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{asset('admin_dashboard')}}/assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="{{asset('admin_dashboard')}}/assets/js/sidebar-menu.js"></script>

    <!--chartist js-->
    <script src="{{asset('admin_dashboard')}}/assets/js/chart/chartist/chartist.js"></script>

    <!--chartjs js-->
    <script src="{{asset('admin_dashboard')}}/assets/js/chart/chartjs/chart.min.js"></script>

    <!-- lazyload js-->
    <script src="{{asset('admin_dashboard')}}/assets/js/lazysizes.min.js"></script>

    <!--copycode js-->
    <script src="{{asset('admin_dashboard')}}/assets/js/prism/prism.min.js"></script>
    <script src="{{asset('admin_dashboard')}}/assets/js/clipboard/clipboard.min.js"></script>
    <script src="{{asset('admin_dashboard')}}/assets/js/custom-card/custom-card.js"></script>

    <!--counter js-->
    <script src="{{asset('admin_dashboard')}}/assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="{{asset('admin_dashboard')}}/assets/js/counter/jquery.counterup.min.js"></script>
    <script src="{{asset('admin_dashboard')}}/assets/js/counter/counter-custom.js"></script>

    <!--peity chart js-->
    <script src="{{asset('admin_dashboard')}}/assets/js/chart/peity-chart/peity.jquery.js"></script>

    <!-- Apex Chart Js -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!--sparkline chart js-->
    <script src="{{asset('admin_dashboard')}}/assets/js/chart/sparkline/sparkline.js"></script>

    <!--Customizer admin-->
    {{-- <script src="{{asset('admin_dashboard')}}/assets/js/admin-customizer.js"></script> --}}

    <!--dashboard custom js-->
    <script src="{{asset('admin_dashboard')}}/assets/js/dashboard/default.js"></script>

    <!--right sidebar js-->
    <script src="{{asset('admin_dashboard')}}/assets/js/chat-menu.js"></script>

    <!--height equal js-->
    <script src="{{asset('admin_dashboard')}}/assets/js/height-equal.js"></script>

    <!-- lazyload js-->
    <script src="{{asset('admin_dashboard')}}/assets/js/lazysizes.min.js"></script>

    <!--script admin-->
    <script src="{{asset('admin_dashboard')}}/assets/js/admin-script.js"></script>

    @yield('load-chart')


</body>

</html>
