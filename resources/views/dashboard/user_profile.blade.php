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
        <title>Profile</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/helper.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/spinners.css" rel="stylesheet">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                                <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="upload/<?php echo Auth::user()->user_photo;?>" alt="user" class="profile-pic" /></a>
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




                            <li> <a class="active"  href="#" aria-expanded="true"><i class="fa fa-tachometer"></i><span class="show-menu">Dashboard </span></a>

                            </li>

                            <li> <a  href="/establishment_promo" aria-expanded="true"><i class="fa fa-star-half-o"></i><span class="show-menu">Promotions </span></a>

                            </li>

                            <li> <a  href="/establishment_profile" aria-expanded="true" href="#" ><i class="fa fa-building"></i><span class="show-menu">Establishment Profile </span></a>

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
            <div class="page-wrapper" style="height:1200px;">
                <!-- Bread crumb -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-primary">Profile</h3> </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                </div>
                <!-- End Bread crumb -->
                <!-- Container fluid  -->
                <!-- Container fluid  -->
                <div class="container-fluid">
                    <!-- Start Page Content -->
                    @if (Session::has('update_profile_'))
                    <script>
                                                swal({
                              title: "",
                              text: "You have successfully updated your profile!",
                              icon: "success"
                            });
                    </script>
                    @endif
                    @if (Session::has('password_'))
                    <script>
                                                swal({
                              title: "",
                              text: "You have successfully reset your password",
                              icon: "success"
                            });
                    </script>
                    @endif

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">User Profile</h4>

                            <!--                            testing......................-->


                            <div class="container" style="margin-top: 30px;">

                                <div class="col-sm-12">
                                    <div data-spy="scroll" class="tabbable-panel">
                                        <div class="tabbable-line">
                                            <!--                                            if statement to load password tab is there is an error-->
                                            @if ($errors->has('password'))
                                            <ul class="nav nav-tabs ">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#tab_default_1" data-toggle="tab">Personal Info </a>
                                                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#tab_default_2" data-toggle="tab">Reset Password</a>
                                                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#tab_default_3" data-toggle="tab">Subscription Info</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane" id="tab_default_1">
                                                    <br>
                                                    <img src="upload/<?php echo Auth::user()->user_photo;?>" alt="user photo" style="display:block;width:150px;height:150px;outline: #4CAF50 solid 2px;outline-style:dotted;">
                                                    @if(Auth::user()->user_photo == "default.png")
                                                    <form action="/delete_photo_" enctype="multipart/form-data"  method="post">
                                                        {{ csrf_field() }}
                                                       
                                                    </form>
                                                    @else
                                                    <form action="/delete_photo_" enctype="multipart/form-data"  method="post">
                                                        {{ csrf_field() }}
                                                       <button type="submit" class='btn' style='background-color:transparent;'>
                                                            <i class="fa fa-times"></i> remove photo</button>
                                                    </form>
                                                    @endif
                                                    
                                                    <form action="/update_profile_" enctype="multipart/form-data"  method="post">
                                                        {{ csrf_field() }}
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="col-md-6 ">
                                                                    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}" >
                                                                        <br> <label>First Name</label>
                                                                        <input id="first_name" name="first_name"  type="text" value="<?php echo Auth::user()->first_name;?>" class="form-control" autofocus>
                                                                        @if ($errors->has('first_name'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('first_name') }}</strong>
                                                                        </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 ">
                                                                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}" >
                                                                        <br> <label>Last Name</label>
                                                                        <input id="last_name" name="last_name"  type="text" value="<?php echo Auth::user()->last_name;?>" class="form-control" autofocus>
                                                                        @if ($errors->has('last_name'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('last_name') }}</strong>
                                                                        </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/row-->
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-6 ">
                                                                    <div class="form-group{{ $errors->has('contact_no') ? ' has-error' : '' }}" >
                                                                        <br> <label>Contact Number</label>
                                                                        <input id="contact_no" name="contact_no"  type="number" value="<?php echo Auth::user()->contact_no; ?>" class="form-control" autofocus>
                                                                        @if ($errors->has('contact_no'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('contact_no') }}</strong>
                                                                        </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 ">
                                                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" >
                                                                        <br> <label>Email</label>
                                                                        <input id="email" name="email"  type="email" value="<?php echo Auth::user()->email;?>" class="form-control" autofocus>
                                                                        @if ($errors->has('email'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('email') }}</strong>
                                                                        </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row  col-lg-offset-1 col-md-offset-3 col-xs-5">
                                                                
                                                                <div class="full-width">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;<label>Photo:</label><input class="col-md-10" accept=".jpeg, .jpg, .jpe, .jfif, .jif,.png,image/*"id="photo" name="photo" type="file" class="form-control" autofocus>
                                                                    <input hidden name="photo1" value="<?php echo Auth::user()->user_photo;?>" type="text">
                                                                    @if ($errors->has('photo'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('photo') }}</strong>
                                                                    </span>
                                                                    @endif
                                                                </div>
                                                            </div><br>
                                                            <!--/row-->
                                                        </div>
                                                        <div class="form-actions">
                                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                        </div>

                                                    </form>
                                                </div>

                                                <div class="tab-pane active" id="tab_default_2">
                                                    <!--                                                    <div class="well well-sm">
                                                                                                            <h4>EDUCATIONAL BACKGROUND</h4>
                                                                                                        </div>-->
                                                    <!--/row-->
                                                    <form action="update_password_" enctype="multipart/form-data"  method="post">
                                                        {{ csrf_field() }}
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="col-md-6 ">
                                                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" >
                                                                        <br> <label>Password</label>
                                                                        <input required id="password" name="password"  type="password" value="" class="form-control" autofocus>
                                                                        @if ($errors->has('password'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('password') }}</strong>
                                                                        </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 ">
                                                                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}" >
                                                                        <br> <label>Confirm Password</label>
                                                                        <input required id="confirm_password" name="password_confirmation"  type="password" value="" class="form-control" autofocus>
                                                                        @if ($errors->has('password_confirmation'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                                        </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-actions">
                                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                        </div>
                                                    </form>
                                                    <!--/row-->
                                                </div>

                                                <div class="tab-pane" id="tab_default_3">
                                                    <div class="well well-sm">
                                                        <h4>EMPLOYMENT RECORD</h4>
                                                    </div>
                                                    <p align="right">
                                                        <button type="button" class="btn btn-default btn-sm">
                                                            <span class="glyphicon glyphicon-edit"></span> Edit</button>
                                                    </p>

                                                </div>

                                            </div>
                                            <!--                                            end of if statement to load password tab if there is an error-->


                                            @else
                                            <ul class="nav nav-tabs ">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#tab_default_1" data-toggle="tab">Personal Info </a>
                                                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#tab_default_2" data-toggle="tab">Reset Password</a>
                                                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#tab_default_3" data-toggle="tab">Subscription Info</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_default_1">
                                                    <br>
                                                    <img src="upload/<?php echo Auth::user()->user_photo;?>" alt="user photo" style="display:block;width:150px;height:150px;outline: #4CAF50 solid 2px;outline-style:dotted;">
                                                    @if(Auth::user()->user_photo == "default.png")
                                                    <form action="/delete_photo_" enctype="multipart/form-data"  method="post">
                                                        {{ csrf_field() }}
                                                       
                                                    </form>
                                                    @else
                                                    <form action="/delete_photo_" enctype="multipart/form-data"  method="post">
                                                        {{ csrf_field() }}
                                                       <button type="submit" class='btn' style='background-color:transparent;'>
                                                            <i class="fa fa-times"></i> remove photo</button>
                                                    </form>
                                                    @endif
                                                    <form action="/update_profile_" enctype="multipart/form-data"  method="post">
                                                        {{ csrf_field() }}
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="col-md-6 ">
                                                                    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}" >
                                                                        <br> <label>First Name</label>
                                                                        <input id="first_name" name="first_name"  type="text" value="<?php echo Auth::user()->first_name;?>" class="form-control" autofocus>
                                                                        @if ($errors->has('first_name'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('first_name') }}</strong>
                                                                        </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 ">
                                                                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}" >
                                                                        <br> <label>Last Name</label>
                                                                        <input id="last_name" name="last_name"  type="text" value="<?php echo Auth::user()->last_name;?>" class="form-control" autofocus>
                                                                        @if ($errors->has('last_name'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('last_name') }}</strong>
                                                                        </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/row-->
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-6 ">
                                                                    <div class="form-group{{ $errors->has('contact_no') ? ' has-error' : '' }}" >
                                                                        <br> <label>Contact Number</label>
                                                                        <input id="contact_no" name="contact_no"  type="number" value="<?php echo Auth::user()->contact_no;?>" class="form-control" autofocus>
                                                                        @if ($errors->has('contact_no'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('contact_no') }}</strong>
                                                                        </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 ">
                                                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" >
                                                                        <br> <label>Email</label>
                                                                        <input id="email" name="email"  type="email" value="<?php echo Auth::user()->email;?>" class="form-control" autofocus>
                                                                        @if ($errors->has('email'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('email') }}</strong>
                                                                        </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/row-->
                                                            
                                                            <div class="row  col-lg-offset-1 col-md-offset-3 col-xs-5">
                                                                
                                                                <div class="full-width">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;<label>Photo:</label><input class="col-md-10" accept=".jpeg, .jpg, .jpe, .jfif, .jif,.png,image/*"id="photo" name="photo" type="file" class="form-control" autofocus>
                                                                    <input hidden name="photo1" value="<?php $photo = Auth::user()->user_photo;
                                                                           echo $photo;
?>" type="text">
                                                                    @if ($errors->has('photo'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('photo') }}</strong>
                                                                    </span>
                                                                    @endif
                                                                </div>
                                                            </div><br>
                                                        </div>
                                                        <div class="form-actions">
                                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                        </div>

                                                    </form>
                                                </div>

                                                <div class="tab-pane" id="tab_default_2">
                                                    <!--                                                    <div class="well well-sm">
                                                                                                            <h4>EDUCATIONAL BACKGROUND</h4>
                                                                                                        </div>-->
                                                    <!--/row-->
                                                    <form action="update_password_" enctype="multipart/form-data"  method="post">
                                                        {{ csrf_field() }}
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="col-md-6 ">
                                                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" >
                                                                        <br> <label>Password</label>
                                                                        <input required id="password" name="password"  type="password" value="" class="form-control" autofocus>
                                                                        @if ($errors->has('password'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('password') }}</strong>
                                                                        </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 ">
                                                                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}" >
                                                                        <br> <label>Confirm Password</label>
                                                                        <input required id="confirm_password" name="password_confirmation"  type="password" value="" class="form-control" autofocus>
                                                                        @if ($errors->has('password_confirmation'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                                        </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-actions">
                                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                        </div>
                                                    </form>
                                                    <!--/row-->
                                                </div>

                                                <div class="tab-pane" id="tab_default_3">
                                                    <div class="well well-sm">
                                                        <h4>EMPLOYMENT RECORD</h4>
                                                    </div>
                                                    <p align="right">
                                                        <button type="button" class="btn btn-default btn-sm">
                                                            <span class="glyphicon glyphicon-edit"></span> Edit</button>
                                                    </p>

                                                </div>

                                            </div>

                                            @endif

                                        </div><!-- /.col-lg-12 -->
                                    </div><!-- /.row -->

                                </div>
                            </div>
                        </div>
                    </div>

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

</body>

</html>















































































































































































































































































































