<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <title>Admin Panel</title>
    <meta name="csrf_token" content="{{ csrf_token() }}">
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
                    <img src="{{ URL::to('/') }}/adminpanel/img/malagalogo.png" alt="John Doe" />
                </a>
                <div class="profile">
                    <div class="profile-image">
                        <img src="{{ URL::to('/') }}/adminpanel/img/malagalogo.png" alt="John Doe" style="height: 120px"/>
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
                            <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                            <span class="contacts-title">John Doe</span>
                            <p>Praesent placerat tellus id augue condimentum</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="list-group-status status-away"></div>
                            <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                            <span class="contacts-title">Dmitry Ivaniuk</span>
                            <p>Donec risus sapien, sagittis et magna quis</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="list-group-status status-away"></div>
                            <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                            <span class="contacts-title">Nadia Ali</span>
                            <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="list-group-status status-offline"></div>
                            <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                            <span class="contacts-title">Darth Vader</span>
                            <p>I want my money back!</p>
                        </a>
                    </div>
                    <div class="panel-footer text-center">
                        <a href="pages-messages.html">Show all messages</a>
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
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Berg Collection</a></li>
            <li><a href="#">All Properties</a></li>

        </ul>
        <!-- END BREADCRUMB -->

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-12">


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>BERGESTATEGROUP</strong></h3>
                            <ul class="panel-controls">
                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                            </ul>
                        </div>
                        <div class="flash-message">
                            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                @if(Session::has('alert-' . $msg))
                                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                @endif
                            @endforeach
                        </div>

                        <div class="panel-body">
                            @foreach($property_detail_images as $property_detail_image)

                                <img style="height: 96px;width: 191px;" src="{{  URL::to('/') }}/uploads/{{ $property_detail_image->images }}" alt="">

                                <a href="/property_image_delete/{{ $property_detail_image->id }}/{{ Request::segment(2) }}"><button class="btn btn-primary"><span class="fa fa-trash-o"></span> Delete</button></a>
                            @endforeach
                            <br>
                            <br>
                            <br>
                            @foreach($property_detail as $key => $property_details)
                                <form class="form-horizontal" method="post" action="{{url('/property_update_store',$property_details->id)}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Property Name</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" value="{{ $property_details->name }}" name="property_name" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Property Location</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" value="{{ $property_details->location }}" name="property_location" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Price from</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text"  value="{{ $property_details->price_from }}" name="property_prive_from" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Bedroom</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="number" value="{{ $property_details->bedroom }}" name="property_bedroom" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Bathroom</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="number" value="{{ $property_details->bathroom }}" name="property_bathroom" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Details</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <textarea class="form-control" name="property_details" id="" cols="30" rows="10">{{  $property_details->details  }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Types</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <select name="property_type" id="" class="form-control">
                                                    @foreach($property_type as $key=> $property_types)
                                                    <option value="{{$property_types->id}}" {{ $property_types->id == $property_details->type ? 'selected="selected"' : '' }}>{{$property_types->type}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Sale Types</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <select name="sale_type" id="" class="form-control">
                                                    @foreach($property_sale_type as $key => $property_sale_types)
                                                        <option value="{{ $property_sale_types->id }}" {{ $property_sale_types->id == $property_details->sale_type ? 'selected="selected"' : '' }}>
                                                            {{ $property_sale_types->sale_type }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Upload Featured Image</label>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="file" class="fileinput btn-primary" name="property_images[]" id="filename"
                                                   title="Browse file" multiple/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">hide/show property</label>
                                        <div class="col-md-6 col-xs-12">
                                            <label class="check"><input type="checkbox" name="property_status" value="active" class="icheckbox" checked="checked"/> Show on page</label>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <button class="btn btn-primary pull-right">Submit</button>
                                    </div>
                                </form>
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>

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






