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
                    <img src="{{ URL::to('/') }}/adminpanel/img/malagalogo.png" alt="John Doe"/>
                </a>
                <div class="profile">
                    <div class="profile-image">
                        <img src="{{ URL::to('/') }}/adminpanel/img/malagalogo.png" alt="John Doe" style="height: 120px;"/>
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
            <!-- SEARCH -->
            <li class="xn-search">
                <form role="form">
                    <input type="text" name="search" placeholder="Search..."/>
                </form>
            </li>
            <!-- END SEARCH -->
            <!-- SIGN OUT -->
            <li class="xn-icon-button pull-right">
                <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
            </li>
            <!-- END SIGN OUT -->
            <!-- MESSAGES -->
            <li class="xn-icon-button pull-right">
                <a href="#"><span class="fa fa-comments"></span></a>
                <div class="informer informer-danger">4</div>
                <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>
                        <div class="pull-right">
                            <span class="label label-danger">4 new</span>
                        </div>
                    </div>
                    <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                        <a href="#" class="list-group-item">
                            <div class="list-group-status status-online"></div>
                            <img src="{{ URL::to('/') }}/adminpanel/assets/images/users/user2.jpg" class="pull-left"
                                 alt="John Doe"/>
                            <span class="contacts-title">John Doe</span>
                            <p>Praesent placerat tellus id augue condimentum</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="list-group-status status-away"></div>
                            <img src="{{ URL::to('/') }}/adminpanel/assets/images/users/user.jpg" class="pull-left"
                                 alt="Dmitry Ivaniuk"/>
                            <span class="contacts-title">Dmitry Ivaniuk</span>
                            <p>Donec risus sapien, sagittis et magna quis</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="list-group-status status-away"></div>
                            <img src="{{ URL::to('/') }}/adminpanel/assets/images/users/user3.jpg" class="pull-left"
                                 alt="Nadia Ali"/>
                            <span class="contacts-title">Nadia Ali</span>
                            <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="list-group-status status-offline"></div>
                            <img src="{{ URL::to('/') }}/adminpanel/assets/images/users/user6.jpg" class="pull-left"
                                 alt="Darth Vader"/>
                            <span class="contacts-title">Darth Vader</span>
                            <p>I want my money back!</p>
                        </a>
                    </div>
                    <div class="panel-footer text-center">
                        <a href="pages-messages.html">Show all messages</a>
                    </div>
                </div>
                <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-content">
                        <ul class="list-inline item-details">
                            <li>
                                <a href="http://themifycloud.com/downloads/janux-premium-responsive-bootstrap-admin-dashboard-template/">Admin
                                    templates</a></li>
                            <li><a href="http://themescloud.org">Bootstrap themes</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <!-- END MESSAGES -->
            <!-- TASKS -->
            <li class="xn-icon-button pull-right">
                <a href="#"><span class="fa fa-tasks"></span></a>
                <div class="informer informer-warning">3</div>
                <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>
                        <div class="pull-right">
                            <span class="label label-warning">3 active</span>
                        </div>
                    </div>
                    <div class="panel-body list-group scroll" style="height: 200px;">
                        <a class="list-group-item" href="#">
                            <strong>Phasellus augue arcu, elementum</strong>
                            <div class="progress progress-small progress-striped active">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%
                                </div>
                            </div>
                            <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                        </a>
                        <a class="list-group-item" href="#">
                            <strong>Aenean ac cursus</strong>
                            <div class="progress progress-small progress-striped active">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%
                                </div>
                            </div>
                            <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                        </a>
                        <a class="list-group-item" href="#">
                            <strong>Lorem ipsum dolor</strong>
                            <div class="progress progress-small progress-striped active">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%
                                </div>
                            </div>
                            <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                        </a>
                        <a class="list-group-item" href="#">
                            <strong>Cras suscipit ac quam at tincidunt.</strong>
                            <div class="progress progress-small">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 100%;">100%
                                </div>
                            </div>
                            <small class="text-muted">John Doe, 21 Sep 2014 /</small>
                            <small class="text-success"> Done</small>
                        </a>
                    </div>
                    <div class="panel-footer text-center">
                        <a href="pages-tasks.html">Show all tasks</a>
                    </div>
                </div>
            </li>
            <!-- END TASKS -->
        </ul>
        <!-- END X-NAVIGATION VERTICAL -->

        <!-- START BREADCRUMB -->
        <ul class="breadcrumb push-down-0">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Properties info</a></li>
            <li class="active">Property Detail</li>
        </ul>
        <!-- END BREADCRUMB -->

        <!-- START CONTENT FRAME -->
        <div class="content-frame">

            <!-- START CONTENT FRAME TOP -->
            <div class="content-frame-top">
                <div class="page-title">
                    <h2><span class="fa fa-book"></span>  Property Details</h2>
                </div>
                <div class="pull-right">
                    {{--<button class="btn btn-primary"><span class="fa fa-upload"></span> Upload</button>--}}
                    <button class="btn btn-default content-frame-right-toggle"><span class="fa fa-bars"></span></button>
                </div>
            </div>


            <!-- START CONTENT FRAME BODY -->
            <div class="content-frame-body content-frame-body-left" style="margin-right: 0px !important;">

                {{--<div class="pull-left push-up-10">--}}
                    {{--<button class="btn btn-primary" id="gallery-toggle-items">Toggle All</button>--}}
                {{--</div>--}}
                {{--<div class="pull-right push-up-10">--}}
                    {{--<div class="btn-group">--}}
                        {{--<button class="btn btn-primary"><span class="fa fa-pencil"></span> Edit</button>--}}
                        {{--<button class="btn btn-primary"><span class="fa fa-trash-o"></span> Delete</button>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="gallery" id="links">
                    @foreach($property_detail_images as $key => $property_detail_image)
                        <a class="gallery-item" href="{{ URL::to('/') }}/uploads/{{ $property_detail_image->images }}"
                           title="Nature Image 1" data-gallery>
                            <div class="image">
                                <img src="{{ URL::to('/') }}/uploads/{{ $property_detail_image->images }}"
                                     alt="Nature Image 1" style="height: 197px;"/>
                                {{--<ul class="gallery-item-controls">--}}
                                    {{--<li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>--}}
                                    {{--<li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>--}}
                                {{--</ul>--}}
                            </div>
                            <div class="meta">
                                    {{--<strong>Nature image 1</strong>--}}
                                    {{--<span>Description</span>--}}
                            </div>
                        </a>
                    @endforeach
                </div>

                <div class="col-md-12">


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Property Info</strong></h3>
                            <ul class="panel-controls">
                            </ul>
                        </div>
                        <div class="flash-message">
                        </div>
                        <div class="panel-body">
                            @foreach($property_detail as $key => $property_details)
                            <p>NAME :{{ $property_details->name }}</p>
                            <p>PROPERTY TYPE :{{ $property_details->property_type }}</p>
                            <p>PROPERTY SALE TYPE :{{ $property_details->property_sale_type }}</p>
                            <p>LOCATION :{{ $property_details->location }}</p>
                            <p>PRICE FROM :{{ $property_details->price_from }}</p>
                            <p>BEDROOM :{{ $property_details->bedroom }}</p>
                            <p>BATHROOM :{{ $property_details->bathroom}}</p>
                            <p>DETAILS :{{ $property_details->details }}</p>
                            @endforeach
                        </div>

                    </div>


                </div>
            </div>
            <!-- END CONTENT FRAME BODY -->

        </div>
        <!-- END CONTENT FRAME -->


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
<script type="text/javascript" src="{{ URL::to('/') }}/adminpanel/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

<script type="text/javascript" src="{{ URL::to('/') }}/adminpanel/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/adminpanel/js/plugins/dropzone/dropzone.min.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/adminpanel/js/plugins/icheck/icheck.min.js"></script>
<!-- END THIS PAGE PLUGINS-->

<!-- START TEMPLATE -->
<script type="text/javascript" src="{{ URL::to('/') }}/adminpanel/js/settings.js"></script>

<script type="text/javascript" src="{{ URL::to('/') }}/adminpanel/js/plugins.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/adminpanel/js/actions.js"></script>

<script type="text/javascript" src="{{ URL::to('/') }}/adminpanel/js/demo_dashboard.js"></script>
<!-- END TEMPLATE -->
<!-- END SCRIPTS -->
<script>
    document.getElementById('links').onclick = function (event) {
        event = event || window.event;
        console.log(event);
        var target = event.target || event.srcElement;
        var link = target.src ? target.parentNode : target;
        var options = {
            console.log(options);
            index: link, event: event, onclosed: function () {
                setTimeout(function () {
                    $("body").css("overflow", "");
                }, 200);
            }
        };
        var links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
    };
</script>
</body>
</html>






