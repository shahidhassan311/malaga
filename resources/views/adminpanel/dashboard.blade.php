<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <title>Admin Panel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{ URL::to('/') }}/adminpanel/css/theme-default.css"/>
    <!-- EOF CSS INCLUDE -->
</head>
<body>
<!-- START PAGE CONTAINER -->
<div class="page-container">

    <!-- START PAGE SIDEBAR -->
    <div class="page-sidebar">
        <!-- START X-NAVIGATION -->
        <ul class="x-navigation">
            <li class="xn-logo">
                @if(\Illuminate\Support\Facades\Auth::user()->role == "admin")
                    <a href="/property">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
                @else
                @endif
                <a href="#" class="x-navigation-control"></a>
            </li>
            <li class="xn-profile">
                <a href="#" class="profile-mini">
                    <img src="{{ URL::to('/') }}/adminpanel/img/malagalogo.png" alt="Sameer"/>
                </a>
                <div class="profile">
                    <div class="profile-image">
                        <img src="{{ URL::to('/') }}/adminpanel/img/malagalogo.png" alt="Sameer" style="height: 120px"/>
                    </div>
                    <div class="profile-data">
                        <div class="profile-data-name">Malaga Class</div>
                    </div>
                    <div class="profile-controls">
                        <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                        <a href="#" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                    </div>
                </div>
            </li>
            <li class="xn-title">Navigation</li>
            <li class="active">
                <a href="/dashboard"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
            </li>
            <li>
                <a href="/properties"><span class="fa fa-desktop"></span> <span class="xn-text">Properties</span></a>
            </li>
            <li>
                <a href="/add_property"><span class="fa fa-desktop"></span> <span class="xn-text">Add Property</span></a>
            </li>
        </ul>
        <!-- END X-NAVIGATION -->
    </div>
    <!-- END PAGE SIDEBAR -->

    <!-- PAGE CONTENT -->
    <div class="page-content">

        <!-- START X-NAVIGATION VERTICAL -->
        <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
            <!-- TOGGLE NAVIGATION -->
            <li class="xn-icon-button">
                <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
            </li>
            <!-- END TOGGLE NAVIGATION -->
            <!-- SIGN OUT -->
            <li class="xn-icon-button pull-right">
                <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
            </li>
            <!-- END SIGN OUT -->
        </ul>
        <!-- END X-NAVIGATION VERTICAL -->

        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Dashboard</li>
        </ul>
        <!-- END BREADCRUMB -->

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <!-- START WIDGETS -->
            <div class="row">
                <div class="col-md-3">

                    <!-- START WIDGET SLIDER -->
                    <div class="widget widget-default widget-carousel">
                        <div class="owl-carousel" id="owl-example">
                            <div>
                                <div class="widget-title">Total Visitors</div>
                                <div class="widget-subtitle">27/08/2014 15:23</div>
                                <div class="widget-int">3,548</div>
                            </div>
                            <div>
                                <div class="widget-title">Returned</div>
                                <div class="widget-subtitle">Visitors</div>
                                <div class="widget-int">1,695</div>
                            </div>
                            <div>
                                <div class="widget-title">New</div>
                                <div class="widget-subtitle">Visitors</div>
                                <div class="widget-int">1,977</div>
                            </div>
                        </div>
                        <div class="widget-controls">
                            <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                               data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                        </div>
                    </div>
                    <!-- END WIDGET SLIDER -->

                </div>
                <div class="col-md-3">

                    <!-- START WIDGET MESSAGES -->
                    <div class="widget widget-default widget-item-icon" onclick="location.href='pages-messages.html';">
                        <div class="widget-item-left">
                            <span class="fa fa-envelope"></span>
                        </div>
                        <div class="widget-data">
                            <div class="widget-int num-count">48</div>
                            <div class="widget-title">New messages</div>
                            <div class="widget-subtitle">In your mailbox</div>
                        </div>
                        <div class="widget-controls">
                            <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                               data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                        </div>
                    </div>
                    <!-- END WIDGET MESSAGES -->

                </div>
                <div class="col-md-3">

                    <!-- START WIDGET REGISTRED -->
                    <div class="widget widget-default widget-item-icon"
                         onclick="location.href='pages-address-book.html';">
                        <div class="widget-item-left">
                            <span class="fa fa-user"></span>
                        </div>
                        <div class="widget-data">
                            <div class="widget-int num-count">375</div>
                            <div class="widget-title">Registred users</div>
                            <div class="widget-subtitle">On your website</div>
                        </div>
                        <div class="widget-controls">
                            <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                               data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                        </div>
                    </div>
                    <!-- END WIDGET REGISTRED -->

                </div>
                <div class="col-md-3">

                    <!-- START WIDGET CLOCK -->
                    <div class="widget widget-info widget-padding-sm">
                        <div class="widget-big-int plugin-clock">00:00</div>
                        <div class="widget-subtitle plugin-date">Loading...</div>
                        <div class="widget-controls">
                            <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                               data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                        </div>
                        <div class="widget-buttons widget-c3">
                            <div class="col">
                                <a href="#"><span class="fa fa-clock-o"></span></a>
                            </div>
                            <div class="col">
                                <a href="#"><span class="fa fa-bell"></span></a>
                            </div>
                            <div class="col">
                                <a href="#"><span class="fa fa-calendar"></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET CLOCK -->

                </div>
            </div>
            <!-- END WIDGETS -->

            <!-- START DASHBOARD CHART -->
            <div class="chart-holder" id="dashboard-area-1" style="height: 200px;"></div>
            <div class="block-full-width">

            </div>
            <!-- END DASHBOARD CHART -->

        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->

<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
            <div class="mb-content">
                <p>Are you sure you want to log out?</p>
                <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="{{ route('logout') }}" class="btn btn-success btn-lg" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">Yes</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->

<!-- START PRELOADS -->
<audio id="audio-alert" src="{{ URL::to('/') }}/adminpanel/audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="{{ URL::to('/') }}/adminpanel/audio/fail.mp3" preload="auto"></audio>
<!-- END PRELOADS -->

<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script type="text/javascript" src="{{ URL::to('/') }}/adminpanel/js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/adminpanel/js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/adminpanel/js/plugins/bootstrap/bootstrap.min.js"></script>
<!-- END PLUGINS -->

<!-- START THIS PAGE PLUGINS-->
<script type='text/javascript' src='{{ URL::to('/') }}/adminpanel/js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript"
        src="{{ URL::to('/') }}/adminpanel/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/adminpanel/js/plugins/scrolltotop/scrolltopcontrol.js"></script>

<script type="text/javascript" src="{{ URL::to('/') }}/adminpanel/js/plugins/morris/raphael-min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/adminpanel/js/plugins/morris/morris.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/adminpanel/js/plugins/rickshaw/d3.v3.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/adminpanel/js/plugins/rickshaw/rickshaw.min.js"></script>
<script type='text/javascript'
        src='{{ URL::to('/') }}/adminpanel/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
<script type='text/javascript'
        src='{{ URL::to('/') }}/adminpanel/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
<script type='text/javascript'
        src='{{ URL::to('/') }}/adminpanel/js/plugins/bootstrap/bootstrap-datepicker.js'></script>
<script type="text/javascript" src="{{ URL::to('/') }}/adminpanel/js/plugins/owl/owl.carousel.min.js"></script>

<script type="text/javascript" src="{{ URL::to('/') }}/adminpanel/js/plugins/moment.min.js"></script>
<script type="text/javascript"
        src="{{ URL::to('/') }}/adminpanel/js/plugins/daterangepicker/daterangepicker.js"></script>
<!-- END THIS PAGE PLUGINS-->

<!-- START TEMPLATE -->
<script type="text/javascript" src="{{ URL::to('/') }}/adminpanel/js/settings.js"></script>

<script type="text/javascript" src="{{ URL::to('/') }}/adminpanel/js/plugins.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/adminpanel/js/actions.js"></script>

<script type="text/javascript" src="{{ URL::to('/') }}/adminpanel/js/demo_dashboard.js"></script>
<!-- END TEMPLATE -->
<!-- END SCRIPTS -->
</body>
</html>






