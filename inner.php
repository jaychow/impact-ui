<?php include_once('include/header.php'); ?>
    <!-- BEGIN CONTAINER -->
    <div class="page-container row-fluid">
        <?php include_once('include/sidebar.php')?>
        <!-- BEGIN PAGE CONTAINER-->
        <div class="page-content">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div id="portlet-config" class="modal hide">
                <div class="modal-header">
                    <button data-dismiss="modal" class="close" type="button"></button>
                    <h3>Widget Settings</h3>
                </div>
                <div class="modal-body"> Widget settings form goes here</div>
            </div>
            <div class="clearfix"></div>
            <div class="content">
                <ul class="breadcrumb">
                    <li>
                        <p>YOU ARE HERE</p>
                    </li>
                    <li><a href="#" class="active">themes</a></li>
                </ul>
                <div class="page-title"><i class="icon-custom-left"></i>

                    <h3>Theme - <span class="semi-bold">Coporate</span></h3>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="grid simple transparent">
                            <div class="grid-title">
                                <h4>General <span class="semi-bold">Typography</span></h4>

                                <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                            </div>
                            <div class="grid-body">

                                <h1>Research Publications</span></h1>

                                <div style="margin-bottom:20px; height: 210px;">
                                    <a class="pull-left" style="padding-right: 10px;" href="#"><img
                                            src="http://placehold.it/200" alt="illustration"></a>

                                    <p>is the art and technique of arranging type in order to make language visible.
                                        The arrangement of type involves the selection of typefaces, point size, line
                                        length,
                                        leading (line spacing), adjusting the spaces between groups of letters
                                        (tracking)
                                    </p>
                                </div>
                                <div style="margin-bottom:20px">
                                    <a class="pull-right" href="#" style="padding-left: 10px;"><img
                                            src="http://placehold.it/200" alt="illustration"></a>

                                    <p>is the art and technique of arranging type in order to make language visible.
                                        The arrangement of type involves the selection of typefaces, point size, line
                                        length,
                                        leading (line spacing), adjusting the spaces between groups of letters
                                        (tracking)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="grid simple">
                            <div class="grid-title no-border">
                                <h4>Help <span class="semi-bold">Guide</span></h4>

                                <div class="tools"><a href="javascript:;" class="collapse"></a> <a href="#grid-config"
                                                                                                   data-toggle="modal"
                                                                                                   class="config"></a>
                                    <a href="javascript:;" class="reload"></a> <a href="javascript:;"
                                                                                  class="remove"></a></div>
                            </div>
                            <div class="grid-body no-border">
                                </p>
                                <br>
                                <h4><span class="semi-bold">Categories</span></h4>
                                <ul style="list-style-type: none; padding-left: 0px;">
                                    <li>
                                        <div><i class="fa fa-angle-right"></i><a href="#"> Researchers</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div><i class="fa fa-angle-right"></i><a href="#"> Publishers</a>
                                        </div>
                                    </li>
                                </ul>
                                <br><br>
                                <h4><span class="semi-bold">Tags</span></h4>
                                <code>
                                    Research
                                </code><br>
                                <code>
                                    Data
                                </code><br>
                                <code>
                                    Publication
                                </code>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="grid simple ">
                                    <div class="grid-title no-border">
                                        <h4>Research Stuff</span></h4>

                                        <div class="tools"><a href="javascript:;" class="collapse"></a>
                                            <a href="#grid-config" data-toggle="modal" class="config"></a>
                                            <a href="javascript:;" class="reload"></a>
                                            <a href="javascript:;" class="remove"></a>
                                        </div>
                                    </div>
                                    <div class="grid-body no-border">
                                        <div class="panel-group" id="accordion">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion"
                                                           href="#collapse1">
                                                            Collapsible Group 1</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse1" class="panel-collapse collapse in">
                                                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua. Ut enim ad
                                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                        aliquip ex ea
                                                        commodo consequat.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion"
                                                           href="#collapse2">
                                                            Collapsible Group 2</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse2" class="panel-collapse collapse">
                                                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua. Ut enim ad
                                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                        aliquip ex ea
                                                        commodo consequat.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion"
                                                           href="#collapse3">
                                                            Collapsible Group 3</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse3" class="panel-collapse collapse">
                                                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua. Ut enim ad
                                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                        aliquip ex ea
                                                        commodo consequat.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- BEGIN CHAT -->
        <div class="chat-window-wrapper">
            <div id="main-chat-wrapper" class="inner-content">
                <div class="chat-window-wrapper scroller scrollbar-dynamic" id="chat-users">
                    <div class="chat-header">
                        <div class="pull-left">
                            <input type="text" placeholder="search">
                        </div>
                        <div class="pull-right">
                            <a href="#" class="">
                                <div class="iconset top-settings-dark "></div>
                            </a>
                        </div>
                    </div>
                    <div class="side-widget">
                        <div class="side-widget-title">group chats</div>
                        <div class="side-widget-content">
                            <div id="groups-list">
                                <ul class="groups">
                                    <li><a href="#">
                                            <div class="status-icon green"></div>
                                            Office work</a></li>
                                    <li><a href="#">
                                            <div class="status-icon green"></div>
                                            Personal vibes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="side-widget fadeIn">
                        <div class="side-widget-title">favourites</div>
                        <div id="favourites-list">
                            <div class="side-widget-content">
                                <div class="user-details-wrapper active" data-chat-status="online"
                                     data-chat-user-pic="assets/img/profiles/d.jpg"
                                     data-chat-user-pic-retina="assets/img/profiles/d2x.jpg"
                                     data-user-name="Jane Smith">
                                    <div class="user-profile">
                                        <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg"
                                             data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                                    </div>
                                    <div class="user-details">
                                        <div class="user-name">
                                            Jane Smith
                                        </div>
                                        <div class="user-more">
                                            Hello you there?
                                        </div>
                                    </div>
                                    <div class="user-details-status-wrapper">
                                        <span class="badge badge-important">3</span>
                                    </div>
                                    <div class="user-details-count-wrapper">
                                        <div class="status-icon green"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="user-details-wrapper" data-chat-status="busy"
                                     data-chat-user-pic="assets/img/profiles/d.jpg"
                                     data-chat-user-pic-retina="assets/img/profiles/d2x.jpg"
                                     data-user-name="David Nester">
                                    <div class="user-profile">
                                        <img src="assets/img/profiles/c.jpg" alt="" data-src="assets/img/profiles/c.jpg"
                                             data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
                                    </div>
                                    <div class="user-details">
                                        <div class="user-name">
                                            David Nester
                                        </div>
                                        <div class="user-more">
                                            Busy, Do not disturb
                                        </div>
                                    </div>
                                    <div class="user-details-status-wrapper">
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="user-details-count-wrapper">
                                        <div class="status-icon red"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="side-widget">
                        <div class="side-widget-title">more friends</div>
                        <div class="side-widget-content" id="friends-list">
                            <div class="user-details-wrapper" data-chat-status="online"
                                 data-chat-user-pic="assets/img/profiles/d.jpg"
                                 data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                                <div class="user-profile">
                                    <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg"
                                         data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                                </div>
                                <div class="user-details">
                                    <div class="user-name">
                                        Jane Smith
                                    </div>
                                    <div class="user-more">
                                        Hello you there?
                                    </div>
                                </div>
                                <div class="user-details-status-wrapper">

                                </div>
                                <div class="user-details-count-wrapper">
                                    <div class="status-icon green"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="user-details-wrapper" data-chat-status="busy"
                                 data-chat-user-pic="assets/img/profiles/d.jpg"
                                 data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
                                <div class="user-profile">
                                    <img src="assets/img/profiles/h.jpg" alt="" data-src="assets/img/profiles/h.jpg"
                                         data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
                                </div>
                                <div class="user-details">
                                    <div class="user-name">
                                        David Nester
                                    </div>
                                    <div class="user-more">
                                        Busy, Do not disturb
                                    </div>
                                </div>
                                <div class="user-details-status-wrapper">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="user-details-count-wrapper">
                                    <div class="status-icon red"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="user-details-wrapper" data-chat-status="online"
                                 data-chat-user-pic="assets/img/profiles/d.jpg"
                                 data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                                <div class="user-profile">
                                    <img src="assets/img/profiles/c.jpg" alt="" data-src="assets/img/profiles/c.jpg"
                                         data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
                                </div>
                                <div class="user-details">
                                    <div class="user-name">
                                        Jane Smith
                                    </div>
                                    <div class="user-more">
                                        Hello you there?
                                    </div>
                                </div>
                                <div class="user-details-status-wrapper">

                                </div>
                                <div class="user-details-count-wrapper">
                                    <div class="status-icon green"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="user-details-wrapper" data-chat-status="busy"
                                 data-chat-user-pic="assets/img/profiles/d.jpg"
                                 data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
                                <div class="user-profile">
                                    <img src="assets/img/profiles/h.jpg" alt="" data-src="assets/img/profiles/h.jpg"
                                         data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
                                </div>
                                <div class="user-details">
                                    <div class="user-name">
                                        David Nester
                                    </div>
                                    <div class="user-more">
                                        Busy, Do not disturb
                                    </div>
                                </div>
                                <div class="user-details-status-wrapper">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="user-details-count-wrapper">
                                    <div class="status-icon red"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="chat-window-wrapper" id="messages-wrapper" style="display:none">
                    <div class="chat-header">
                        <div class="pull-left">
                            <input type="text" placeholder="search">
                        </div>
                        <div class="pull-right">
                            <a href="#" class="">
                                <div class="iconset top-settings-dark "></div>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="chat-messages-header">
                        <div class="status online"></div>
                        <span class="semi-bold">Jane Smith(Typing..)</span>
                        <a href="#" class="chat-back"><i class="icon-custom-cross"></i></a>
                    </div>
                    <div class="chat-messages scrollbar-dynamic clearfix">
                        <div class="inner-scroll-content clearfix">
                            <div class="sent_time">Yesterday 11:25pm</div>
                            <div class="user-details-wrapper ">
                                <div class="user-profile">
                                    <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg"
                                         data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                                </div>
                                <div class="user-details">
                                    <div class="bubble">
                                        Hello, You there?
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="sent_time off">Yesterday 11:25pm</div>
                            </div>
                            <div class="user-details-wrapper ">
                                <div class="user-profile">
                                    <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg"
                                         data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                                </div>
                                <div class="user-details">
                                    <div class="bubble">
                                        How was the meeting?
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="sent_time off">Yesterday 11:25pm</div>
                            </div>
                            <div class="user-details-wrapper ">
                                <div class="user-profile">
                                    <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg"
                                         data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                                </div>
                                <div class="user-details">
                                    <div class="bubble">
                                        Let me know when you free
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="sent_time off">Yesterday 11:25pm</div>
                            </div>
                            <div class="sent_time ">Today 11:25pm</div>
                            <div class="user-details-wrapper pull-right">
                                <div class="user-details">
                                    <div class="bubble sender">
                                        Let me know when you free
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="sent_time off">Sent On Tue, 2:45pm</div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-input-wrapper" style="display:none">
                        <textarea id="chat-message-input" rows="1" placeholder="Type your message"></textarea>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- END CHAT -->
    </div>
    <!-- END CONTAINER -->
<?php include_once('include/footer.php'); ?>