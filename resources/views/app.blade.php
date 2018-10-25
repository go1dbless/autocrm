{{--<!doctype html>--}}
{{--<html lang="en">--}}

{{--<head>--}}
{{--<meta charset="utf-8" />--}}
{{--<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">--}}
{{--<link rel="icon" type="image/png" href="assets/img/favicon.png">--}}
{{--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />--}}
{{--<title>--}}
{{--Material Dashboard by Creative Tim--}}
{{--</title>--}}
{{--<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />--}}
{{--<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />--}}
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">--}}
{{--<link href="{{asset('css/material-dashboard.min.css')}}" rel="stylesheet" />--}}
{{--</head>--}}

{{--<body class="">--}}
{{--<div id="app">--}}
{{--<app></app>--}}
{{--</div>--}}

{{--<script src="{{asset('js/core/jquery.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('js/core/popper.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('js/plugins/chartist.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('js/plugins/bootstrap-notify.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('js/material-dashboard.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{ asset('js/app.js') }}"></script>--}}
{{--</body>--}}

{{--</html>--}}


<html class="boxed js flexbox flexboxlegacy csstransforms csstransforms3d no-overflowscrolling no-mobile-device custom-scroll"
      style="">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Boxed Layout | Okler Themes | Porto-Admin</title>
    <meta name="keywords" content="HTML5 Admin Template">
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light"
          rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset("vendor/bootstrap/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("vendor/font-awesome/css/font-awesome.css")}}">
    <link rel="stylesheet" href="{{asset("vendor/magnific-popup/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("vendor/bootstrap-datepicker/css/datepicker3.css")}}">


    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset("stylesheets/theme.css")}}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset("stylesheets/skins/default.css")}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset("stylesheets/theme-custom.css")}}">

    <!-- Head Libs -->
    <script src="{{asset("vendor/modernizr/modernizr.js")}}"></script>

</head>
<body>
<section class="body">

    <!-- start: header -->
    <header class="header">
        <div class="logo-container">
            <a href="../" class="logo">
                <img src="img/logo.png" height="35" alt="">
            </a>
            <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
                 data-fire-event="sidebar-left-opened">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <!-- start: search & user box -->
        <div class="header-right">

            <form action="pages-search-results.html" class="search nav-form">
                <div class="input-group input-search">
                    <input type="text" class="form-control" name="q" id="q" placeholder="Поиск...">
                    <span class="input-group-btn">
							<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
						</span>
                </div>
            </form>

            <span class="separator"></span>

            <ul class="notifications">


                <li class="">
                    <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <span class="badge">3</span>
                    </a>

                    <div class="dropdown-menu notification-menu">
                        <div class="notification-title">
                            <span class="pull-right label label-default">3</span>Уведомления
                        </div>

                        <div class="content">
                            <ul>
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="image">
                                            <i class="fa fa-thumbs-down bg-danger"></i>
                                        </div>
                                        <span class="title">Server is Down!</span>
                                        <span class="message">Just now</span>
                                    </a>
                                </li>


                            </ul>


                        </div>
                    </div>
                </li>
            </ul>

            <span class="separator"></span>

            <div id="userbox" class="userbox">
                <a href="#" data-toggle="dropdown" aria-expanded="false">
                    <figure class="profile-picture">
                        <img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle"
                             data-lock-picture="assets/images/!logged-user.jpg">
                    </figure>
                    <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                        <span class="name">John Doe Junior</span>
                        <span class="role">administrator</span>
                    </div>

                    <i class="fa custom-caret"></i>
                </a>

                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                        <li class="divider"></li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i>Профиль</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i>Блокировка</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i>Выход</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->

    <div class="inner-wrapper">
        <!-- start: sidebar -->
        <aside id="sidebar-left" class="sidebar-left">

            <div class="sidebar-header">
                <div class="sidebar-title">Меню</div>
                <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html"
                     data-fire-event="sidebar-left-toggle">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <div class="nano has-scrollbar">
                <div class="nano-content" tabindex="0" style="margin-right: -15px;">
                    <nav id="menu" class="nav-main" role="navigation">
                        <ul class="nav nav-main">
                            <li>
                                <a href="index.html">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <hr class="separator">

                    <div class="sidebar-widget widget-stats">
                        <div class="widget-header">
                            <h6>Краткая статистика</h6>
                            <div class="widget-toggle">+</div>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li>
                                    <span class="stats-title">Stat 1</span>
                                    <span class="stats-complete">85%</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary progress-without-number"
                                             role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 85%;">
                                            <span class="sr-only">85% Complete</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="nano-pane" style="display: block; opacity: 1; visibility: visible;">
                    <div class="nano-slider" style="height: 20px; transform: translate(0px, 0px);"></div>
                </div>
            </div>

        </aside>
        <!-- end: sidebar -->

        <section role="main" class="content-body">
            <header class="page-header">
                <h2>Заголовок</h2>
            </header>

            <!-- start: page -->

            <!-- end: page -->
        </section>
    </div>


    <!-- Vendor -->
    <script src="{{asset('vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('vendor/nanoscroller/nanoscroller.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('vendor/magnific-popup/magnific-popup.js')}}"></script>
    <script src="{{asset('vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>

    <!-- Specific Page Vendor -->

    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('javascripts/theme.js')}}"></script>

    <!-- Theme Custom -->
    <script src="{{asset('javascripts/theme.custom.js')}}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{asset('javascripts/theme.init.js')}}"></script>

    <script src="{{ asset('js/app.js') }}"></script>

</section>

</body>
</html>