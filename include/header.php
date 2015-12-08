<!DOCTYPE html>
<html>
<head>
    <title>Impact Demo</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN PLUGIN CSS -->
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="webarch/css/webarch.css" rel="stylesheet" type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
</head>
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <!-- BEGIN NAVIGATION HEADER -->
        <div class="header-seperation">
            <!-- BEGIN MOBILE HEADER -->
            <ul class="nav pull-left notifcation-center visible-xs visible-sm">
                <li class="dropdown">
                    <a href="#main-menu" data-webarch="toggle-left-side">
                        <div class="iconset top-menu-toggle-white"></div>
                    </a>
                </li>
            </ul>
            <!-- END MOBILE HEADER -->
            <!-- BEGIN LOGO -->
            <a href="#">
                <img src="assets/img/logoImpact.png" class="logo" alt="" data-src="assets/img/logoImpact.png" data-src-retina="assets/img/logoImpact.png" width="106" height="21" />
            </a>
            <!-- END LOGO -->
            <!-- BEGIN LOGO NAV BUTTONS -->
            <ul class="nav pull-right notifcation-center">
                <li class="dropdown hidden-xs hidden-sm">
                    <a href="index.html" class="dropdown-toggle active" data-toggle="">
                        <div class="iconset top-home"></div>
                    </a>
                </li>
                <li class="dropdown hidden-xs hidden-sm">
                    <a href="email.html" class="dropdown-toggle">
                        <div class="iconset top-messages"></div><span class="badge">2</span>
                    </a>
                </li>
                <li class="dropdown visible-xs visible-sm">
                    <a href="#" data-webarch="toggle-right-side">
                        <div class="iconset top-chat-white "></div>
                    </a>
                </li>
            </ul>
            <!-- END LOGO NAV BUTTONS -->
        </div>
        <!-- END NAVIGATION HEADER -->
        <!-- BEGIN CONTENT HEADER -->
        <div class="header-quick-nav">
            <!-- BEGIN HEADER LEFT SIDE SECTION -->
            <div class="pull-left">
                <!-- BEGIN SLIM NAVIGATION TOGGLE -->
                <ul class="nav quick-section">
                    <li class="quicklinks">
                        <a href="#" class="" id="layout-condensed-toggle">
                            <div class="iconset top-menu-toggle-dark"></div>
                        </a>
                    </li>
                </ul>
                <!-- END SLIM NAVIGATION TOGGLE -->
                <!-- BEGIN HEADER QUICK LINKS -->
                <ul class="nav quick-section">
                    <li class="quicklinks">
                        <a href="#" class="">
                            <div class="iconset top-reload"></div>
                        </a>
                    </li>
                    <li class="quicklinks"><span class="h-seperate"></span></li>
                    <li class="quicklinks">
                        <a href="#" class="">
                            <div class="iconset top-tiles"></div>
                        </a>
                    </li>
                    <!-- BEGIN SEARCH BOX -->
                    <li class="m-r-10 input-prepend inside search-form no-boarder">
                        <span class="add-on"><span class="iconset top-search"></span></span>
                        <input name="" type="text" class="no-boarder" placeholder="Search Dashboard" style="width:250px;">
                    </li>
                    <!-- END SEARCH BOX -->
                </ul>
                <!-- BEGIN HEADER QUICK LINKS -->
            </div>
            <!-- END HEADER LEFT SIDE SECTION -->
            <!-- BEGIN HEADER RIGHT SIDE SECTION -->
            <div class="pull-right">
                <div class="chat-toggler">
                    <!-- BEGIN NOTIFICATION CENTER -->
                    <a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom" data-content="" data-toggle="dropdown" data-original-title="Notifications">
                        <div class="user-details">
                            <div class="username">
                                <span class="badge badge-important">3</span>&nbsp;Dustin<span class="bold">&nbsp;Henson</span>
                            </div>
                        </div>
                        <div class="iconset top-down-arrow"></div>
                    </a>
                    <div id="notification-list" style="display:none">
                        <div style="width:300px">
                            <!-- BEGIN NOTIFICATION MESSAGE -->
                            <div class="notification-messages info">
                                <div class="user-profile">
                                    <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                                </div>
                                <div class="message-wrapper">
                                    <div class="heading">Title of Notification</div>
                                    <div class="description">Description...</div>
                                    <div class="date pull-left">A min ago</div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- END NOTIFICATION MESSAGE -->
                        </div>
                    </div>
                    <!-- END NOTIFICATION CENTER -->
                    <!-- BEGIN PROFILE PICTURE -->
                    <div class="profile-pic">
                        <img src="assets/img/profiles/dustin.jpg" alt="" data-src="assets/img/profiles/dustin.jpg" data-src-retina="assets/img/profiles/dustin.jpg" width="35" height="35" />
                    </div>
                    <!-- END PROFILE PICTURE -->
                </div>
                <!-- BEGIN HEADER NAV BUTTONS -->
                <ul class="nav quick-section">
                    <!-- BEGIN SETTINGS -->
                    <li class="quicklinks">
                        <a data-toggle="dropdown" class="dropdown-toggle pull-right" href="#" id="user-options">
                            <div class="iconset top-settings-dark"></div>
                        </a>
                        <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="user-options">
                            <li><a href="#">Normal Link</a></li>
                            <li><a href="#">Badge Link&nbsp;&nbsp;<span class="badge badge-important animated bounceIn">2</span></a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Separated Link</a></li>
                        </ul>
                    </li>
                    <!-- END SETTINGS -->
                    <li class="quicklinks"><span class="h-seperate"></span></li>
                    <!-- BEGIN CHAT SIDEBAR TOGGLE -->
                    <li class="quicklinks">
                        <a id="chat-menu-toggle" href="#sidr" class="chat-menu-toggle" data-webarch="toggle-right-side">
                            <div class="iconset top-chat-dark"><span class="badge badge-important hide" id="chat-message-count">1</span></div>
                        </a>
                        <!-- BEGIN OPTIONAL RECENT CHAT POP UP NOTIFICATION -->
                        <div class="simple-chat-popup chat-menu-toggle hide" data-webarch="toggle-right-side">
                            <div class="simple-chat-popup-arrow"></div>
                            <div class="simple-chat-popup-inner">
                                <div style="width:100px">
                                    <div class="semi-bold">Name</div>
                                    <div class="message">Message...</div>
                                </div>
                            </div>
                        </div>
                        <!-- END OPTIONAL RECENT CHAT POP UP NOTIFICATION -->
                    </li>
                    <!-- END CHAT SIDEBAR TOGGLE -->
                </ul>
                <!-- END HEADER NAV BUTTONS -->
            </div>
            <!-- END HEADER RIGHT SIDE SECTION -->
        </div>
        <!-- END CONTENT HEADER -->
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->