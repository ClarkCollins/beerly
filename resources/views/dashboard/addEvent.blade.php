<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Establishment Profile</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&language=en"></script>
        <!-- Custom CSS -->
        <link href="css/helper.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/spinners.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
        <!--[if lt IE 9]>
        <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body class="fix-header">
        <!-- Preloader - style you can find in spinners.css -->
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <!-- Main wrapper  -->
        <div id="main-wrapper">
            <!-- header header  -->
            <div class="header">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <!-- Logo -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.html">
                            <!-- Logo icon -->
                            <b><img src="images/bblogo_1.png" alt="homepage" class="dark-logo" /></b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span><img src="images/bblogolong.png" alt="homepage" class="dark-logo" /></span>
                        </a>
                    </div>
                    <!-- End Logo -->
                    <div class="navbar-collapse">
                        <!-- toggle and nav items -->
                        <ul class="navbar-nav mr-auto mt-md-0">
                            <!-- This is  -->
                            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                            <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)">
                                    <i class="ti-menu"></i></a> </li>

                        </ul>
                        <!-- User profile and search -->
                        <ul class="navbar-nav my-lg-0">

                            <!-- Search -->
                            <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                                <form class="app-search">
                                    <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                            </li>
                            <!-- Comment -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell"></i>
                                    <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                    <ul>
                                        <li>
                                            <div class="drop-title">Notifications</div>
                                        </li>
                                        <li>
                                            <div class="message-center">
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="btn btn-danger btn-circle m-r-10"><i class="fa fa-link"></i></div>
                                                    <div class="mail-contnet">
                                                        <h5>This is title</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="btn btn-success btn-circle m-r-10"><i class="ti-calendar"></i></div>
                                                    <div class="mail-contnet">
                                                        <h5>This is another title</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="btn btn-info btn-circle m-r-10"><i class="ti-settings"></i></div>
                                                    <div class="mail-contnet">
                                                        <h5>This is title</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="btn btn-primary btn-circle m-r-10"><i class="ti-user"></i></div>
                                                    <div class="mail-contnet">
                                                        <h5>This is another title</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- End Comment -->

                            <!-- Profile -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/5.jpg" alt="user" class="profile-pic" /></a>
                                <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                    <ul class="dropdown-user">
                                        <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                        <li><a href="#"><i class="ti-wallet"></i> Billing</a></li>

                                        <li><a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- End header header -->
            <!-- Left Sidebar  -->
            <div class="left-sidebar">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li class="nav-devider"></li>
                            <li class="nav-label">User Name</li>




                            <li> <a  href="/event_dashboard" aria-expanded="true"><i class="fa fa-tachometer"></i><span class="show-menu">Dashboard </span></a>

                            </li>

                            <li> <a  href="/event_promo" aria-expanded="true"><i class="fa fa-star-half-o"></i><span class="show-menu">Promotions </span></a>

                            </li>

                            <li> <a  href="#" ><i class="fa fa-building"></i><span class="show-menu">Event Profile </span></a>

                            </li>
                            <li class="nav-label">Account Management</li>
                            <li> <a class="has-arrow  " href="#" aria-expanded="true"><i class="fa fa-users"></i>Account</a>
                                <ul aria-expanded="true" >
                                    <li><a href="email-compose.html">Profile</a></li>

                                </ul>
                            </li>






                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </div>
            <!-- End Left Sidebar  -->
            <!-- Page wrapper  -->
            <div class="page-wrapper" style="height:1300px;">
                <!-- Bread crumb -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-primary">Dashboard</h3> </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Event</li>
                        </ol>
                    </div>
                </div>
                <!-- End Bread crumb -->
                <!-- Container fluid  -->
                <div class="container-fluid">
                    <!-- Start Page Content -->
                <div class="card card-outline-primary">
                        <div class="card-header">
                            <h4 class="m-b-0 text-white">New Event</h4>
                        </div>
                        <div class="card-body">
                            <form action="/add_event" enctype="multipart/form-data"  method="post">
                                {{ csrf_field() }}
                                <div class="form-body">

                                    <div class="row">
                                        <div class="col-md-5 ">
                                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}" >
                                                <br> <label>Event Title</label>
                                                <input id="title" name="title"  type="text" value="{{ old('title') }}" class="form-control" autofocus>
                                                @if ($errors->has('title'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-7 ">
                                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}" >
                                                <br> <label>Description</label>
                                                <input id="description" name="description"  type="text" value="{{ old('description') }}" class="form-control" autofocus>
                                                @if ($errors->has('description'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}" >
                                                    <label>Address</label>
                                                    <input id="autocomplete" name="address"  type="text" value="{{ old('address') }}" class="form-control" autofocus>
                                                    @if ($errors->has('address'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('address') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}" >
                                                <label class="control-label">Start Date</label>
                                                <input  type="date" min="<?php echo date('Y-m-d') ?>" name="start_date" id="start_date" value="{{ old('start_date') }}" class="form-control" autofocus>
                                                @if ($errors->has('start_date'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('start_date') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}" >
                                                <label class="control-label">End Date</label>
                                                <input  type="date" name="end_date" min="<?php echo date('Y-m-d') ?>" id="end_date" value="{{ old('end_date') }}" class="form-control" autofocus>
                                                @if ($errors->has('end_date'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('end_date') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group{{ $errors->has('contact_person') ? ' has-error' : '' }}" >
                                                    <label class="control-label">Contact Person</label>
                                                    <input  type="text" name="contact_person" id="contact_person" value="{{ old('contact_person') }}" class="form-control" autofocus>
                                                    @if ($errors->has('contact_person'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('contact_person') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group{{ $errors->has('contact_number') ? ' has-error' : '' }}" >
                                                    <label class="control-label">Contact Number</label>
                                                    <input  type="text" name="contact_number" id="contact_number" value="{{ old('contact_number') }}" class="form-control" autofocus>
                                                    @if ($errors->has('contact_number'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('contact_number') }}</strong>
                                                    </span>
                                                    @endif
                                                     </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group{{ $errors->has('longitude') ? ' has-error' : '' }}" >
                                                    <label class="control-label">Longitude</label>
                                                    <input  type="text" name="longitude" id="longitude" value="{{ old('longitude') }}" class="form-control" autofocus>
                                                    @if ($errors->has('longitude'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('longitude') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group{{ $errors->has('latitude') ? ' has-error' : '' }}" >
                                                    <label class="control-label">Latitude</label>
                                                    <input  type="text" name="latitude" id="latitude" value="{{ old('latitude') }}" class="form-control" autofocus>
                                                    @if ($errors->has('latitude'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('latitude') }}</strong>
                                                    </span>
                                                    @endif
                                                     </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                    <!--/span-->
                                    <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group{{ $errors->has('event_url') ? ' has-error' : '' }}" >
                                                    <label class="control-label">Event url</label>
                                                    <input  type="url" placeholder="e.g. http://www.google.com" pattern="https?://.+" title="Include http://" id="event_url" name="event_url" class="form-control" value="{{ old('event_url') }}" autofocus>
                                                    @if ($errors->has('event_url'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('event_url') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group{{ $errors->has('establishment_name') ? ' has-error' : '' }}" >
                                                <label title="e.g. pubs, clubs, tarvens etc." class="control-label">Establishment Name</label>
                                                <select value="{{ old('establishment_name') }}" title="e.g. pubs, clubs, tarvens etc." name="establishment_name" class="form-control">
                                                    <option value="">-----Select-----</option>
                                                    @foreach ($establishments as $establishment)
                                                    <option value="{{ $establishment->id }}">{{ $establishment->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('establishment_name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('establishment_name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}" >
                                                    <label>Photos</label>
                                                    <input  accept=".jpeg, .jpg, .jpe, .jfif, .jif,.png,image/*" multiple="true" id="photo" name="photo[]" type="file" value="{{ old('photo') }}" class="form-control" autofocus>
                                                    @if ($errors->has('photo'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('photo') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>&nbsp;&nbsp;&nbsp;
                                        <a type="button" class="btn btn-inverse" href="/event_profile"> Cancel </a><br><br><br>
                                    </div>
                                </div>
                            </form>

                        </div>
                        </div>
                    <!-- End PAge Content -->
                </div>
                <!-- End Container fluid  -->
                <!-- End Container fluid  -->
                <!-- footer -->
                <footer class="footer"> Â© 2018 All rights reserved. <a href="https://beerlybeloved.co.za">Beerly Beloved</a></footer>
                <!-- End footer -->
            </div>
            <!-- End Page wrapper  -->
        </div>
        <!-- End Wrapper -->
        <!-- All Jquery -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="js/jquery.slimscroll.js"></script>
        <!--Menu sidebar -->
        <script src="js/sidebarmenu.js"></script>
        <!--stickey kit -->
        <script src="js/sticky-kit.min.js"></script>
        <!--Custom JavaScript -->
        <script src="js/scripts.js"></script>
        <script>
      var input = document.getElementById('autocomplete');
      var autocomplete = new google.maps.places.Autocomplete(input);
    </script>

    </body>

</html>

