<?php include_once('include/header.php')?>
    <!-- BEGIN CONTENT -->
    <div class="page-container row-fluid">
      <!-- BEGIN SIDEBAR -->
      <!-- BEGIN MENU -->
      <div class="page-sidebar" id="main-menu">
        <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
          <!-- BEGIN MINI-PROFILE -->
          <div class="user-info-wrapper">
            <div class="profile-wrapper">
              <img src="assets/img/profiles/dustin.jpg" alt="" data-src="assets/img/profiles/dustin.jpg" data-src-retina="assets/img/profiles/dustin.jpg" width="69" height="69" />
            </div>
            <div class="user-info">
              <div class="greeting">Welcome</div>
              <div class="username">Dustin <span class="semi-bold">Henson</span></div>
              <div class="status">Status
                <a href="#">
                  <div class="status-icon green"></div>Online</a>
              </div>
            </div>
          </div>
          <!-- END MINI-PROFILE -->
          <!-- BEGIN SIDEBAR MENU -->
          <p class="menu-title">BROWSE<span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>
          <ul>
            <!-- BEGIN SELECTED LINK -->
            <li class="start active">
              <a href="#">
                <i class="icon-custom-home"></i>
                <span class="title">Link 1</span>
                <span class="selected"></span>
                <span class="badge badge-important pull-right">5</span>
              </a>
            </li>
            <!-- END SELECTED LINK -->
            <!-- BEGIN BADGE LINK -->
            <li class="">
              <a href="#">
                <i class="fa fa-envelope"></i>
                <span class="title">Link 2</span>
                <span class="badge badge-disable pull-right">203</span>
              </a>
            </li>
            <!-- END BADGE LINK -->
            <!-- BEGIN SINGLE LINK -->
            <li class="">
              <a href="#">
                <i class="fa fa-flag"></i>
                <span class="title">Link 3</span>
              </a>
            </li>
            <!-- END SINGLE LINK -->
            <!-- BEGIN ONE LEVEL MENU -->
            <li class="">
              <a href="javascript:;">
                <i class="icon-custom-ui"></i>
                <span class="title">Link 4</span>
                <span class="arrow"></span>
              </a>
              <ul class="sub-menu">
                <li><a href="#">Sub Link 1</a></li>
              </ul>
            </li>
            <!-- END ONE LEVEL MENU -->
            <!-- BEGIN TWO LEVEL MENU -->
            <li class="">
              <a href="javascript:;">
                <i class="fa fa-folder-open"></i>
                <span class="title">Link 5</span>
                <span class="arrow"></span>
              </a>
              <ul class="sub-menu">
                <li><a href="javascript:;">Sub Link 1</a></li>
                <li>
                  <a href="javascript:;"><span class="title">Sub Link 2</span><span class="arrow "></span></a>
                  <ul class="sub-menu">
                    <li><a href="javascript:;">Sub Link 1</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <!-- END TWO LEVEL MENU -->
          </ul>
          <!-- END SIDEBAR MENU -->
          <!-- BEGIN SIDEBAR WIDGETS -->
          <div class="side-bar-widgets">
            <!-- BEGIN FOLDER WIDGET -->
            <p class="menu-title">FOLDER<span class="pull-right"><a href="#" class="create-folder"><i class="icon-plus"></i></a></span></p>
            <ul class="folders">
              <li>
                <a href="#">
                  <div class="status-icon green"></div>Task 1</a>
              </li>
              <!-- BEGIN HIDDEN INPUT BOX (FOR ADD FOLDER LINK) -->
              <li class="folder-input" style="display:none">
                <input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" id="folder-name">
              </li>
              <!-- END HIDDEN INPUT BOX (FOR ADD FOLDER LINK) -->
            </ul>
            <!-- END FOLDER WIDGET -->
            <!-- BEGIN PROJECTS WIDGET -->
            <p class="menu-title">PROJECTS</p>
            <!-- BEGIN EXAMPLE 1 -->
            <div class="status-widget">
              <div class="status-widget-wrapper">
                <div class="title">Project Title<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
                <p>Project Description</p>
              </div>
            </div>
            <!-- END EXAMPLE 1 -->
            <!-- END PROJECTS WIDGET -->
          </div>
          <div class="clearfix"></div>
          <!-- END SIDEBAR WIDGETS -->
        </div>
      </div>
      <!-- BEGIN SCROLL UP HOVER -->
      <a href="#" class="scrollup">Scroll</a>
      <!-- END SCROLL UP HOVER -->
      <!-- END MENU -->
      <!-- BEGIN SIDEBAR FOOTER WIDGET -->
      <div class="footer-widget">
        <div class="progress transparent progress-small no-radius no-margin">
          <div data-percentage="79%" class="progress-bar progress-bar-success animate-progress-bar"></div>
        </div>
        <div class="pull-right">
          <div class="details-status">
            <span data-animation-duration="560" data-value="86" class="animate-number"></span>%
          </div>
          <a href="#"><i class="fa fa-power-off"></i></a>
        </div>
      </div>
      <!-- END SIDEBAR FOOTER WIDGET -->
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE CONTAINER-->
      <div class="page-content">
        <div class="content">
          <!-- BEGIN PAGE TITLE -->
          <div class="page-title">
            <h3>Master Page</h3>
          </div>
          <!-- END PAGE TITLE -->
          <!-- BEGIN PlACE PAGE CONTENT HERE -->
          <!-- END PLACE PAGE CONTENT HERE -->
        </div>
      </div>
      <!-- END PAGE CONTAINER -->
      <!-- BEGIN CHAT -->
      <div class="chat-window-wrapper">
        <div id="main-chat-wrapper" class="inner-content">
          <div class="chat-window-wrapper scroller scrollbar-dynamic" id="chat-users">
            <!-- BEGIN CHAT HEADER -->
            <div class="chat-header">
              <!-- BEGIN CHAT SEARCH BAR -->
              <div class="pull-left">
                <input type="text" placeholder="search">
              </div>
              <!-- END CHAT SEARCH BAR -->
              <!-- BEGIN CHAT QUICKLINKS -->
              <div class="pull-right">
                <a href="#" class="">
                  <div class="iconset top-settings-dark"></div>
                </a>
              </div>
              <!-- END CHAT QUICKLINKS -->
            </div>
            <!-- END CHAT HEADER -->
            <!-- BEGIN GROUP WIDGET -->
            <div class="side-widget">
              <div class="side-widget-title">group chats</div>
              <div class="side-widget-content">
                <div id="groups-list">
                  <ul class="groups">
                    <li>
                      <a href="#">
                        <div class="status-icon green"></div>Group Chat 1</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- END GROUP WIDGET -->
            <!-- BEGIN FAVORITES WIDGET -->
            <div class="side-widget">
              <div class="side-widget-title">favorites</div>
              <div class="side-widget-content">
                <!-- BEGIN SAMPLE CHAT -->
                <div class="user-details-wrapper active" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                  <!-- BEGIN PROFILE PIC -->
                  <div class="user-profile">
                    <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                  </div>
                  <!-- END PROFILE PIC -->
                  <!-- BEGIN MESSAGE -->
                  <div class="user-details">
                    <div class="user-name">Jane Smith</div>
                    <div class="user-more">Message...</div>
                  </div>
                  <!-- END MESSAGE -->
                  <!-- BEGIN MESSAGES BADGE -->
                  <div class="user-details-status-wrapper">
                    <span class="badge badge-important">3</span>
                  </div>
                  <!-- END MESSAGES BADGE -->
                  <!-- BEGIN STATUS -->
                  <div class="user-details-count-wrapper">
                    <div class="status-icon green"></div>
                  </div>
                  <!-- END STATUS -->
                  <div class="clearfix"></div>
                </div>
                <!-- END SAMPLE CHAT -->
              </div>
            </div>
            <!-- END FAVORITES WIDGET -->
            <!-- BEGIN MORE FRIENDS WIDGET -->
            <div class="side-widget">
              <div class="side-widget-title">more friends</div>
              <div class="side-widget-content" id="friends-list">
                <!-- BEGIN SAMPLE CHAT -->
                <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                  <!-- BEGIN PROFILE PIC -->
                  <div class="user-profile">
                    <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                  </div>
                  <!-- END PROFILE PIC -->
                  <!-- BEGIN MESSAGE -->
                  <div class="user-details">
                    <div class="user-name">Jane Smith</div>
                    <div class="user-more">Message...</div>
                  </div>
                  <!-- END MESSAGE -->
                  <!-- BEGIN MESSAGES BADGE -->
                  <div class="user-details-status-wrapper">
                    <span class="badge badge-important">3</span>
                  </div>
                  <!-- END MESSAGES BADGE -->
                  <!-- BEGIN STATUS -->
                  <div class="user-details-count-wrapper">
                    <div class="status-icon green"></div>
                  </div>
                  <!-- END STATUS -->
                  <div class="clearfix"></div>
                </div>
                <!-- END SAMPLE CHAT -->
              </div>
            </div>
            <!-- END MORE FRIENDS WIDGET -->
          </div>
          <!-- BEGIN DUMMY CHAT CONVERSATION -->
          <div class="chat-window-wrapper" id="messages-wrapper" style="display:none">
            <!-- BEGIN CHAT HEADER BAR -->
            <div class="chat-header">
              <!-- BEGIN SEARCH BAR -->
              <div class="pull-left">
                <input type="text" placeholder="search">
              </div>
              <!-- END SEARCH BAR -->
              <!-- BEGIN CLOSE TOGGLE -->
              <div class="pull-right">
                <a href="#" class="">
                  <div class="iconset top-settings-dark"></div>
                </a>
              </div>
              <!-- END CLOSE TOGGLE -->
            </div>
            <div class="clearfix"></div>
            <!-- END CHAT HEADER BAR -->
            <!-- BEGIN CHAT BODY -->
            <div class="chat-messages-header">
              <div class="status online"></div>
              <span class="semi-bold">Jane Smith(Typing..)</span>
              <a href="#" class="chat-back"><i class="icon-custom-cross"></i></a>
            </div>
            <!-- BEGIN CHAT MESSAGES CONTAINER -->
            <div class="chat-messages scrollbar-dynamic clearfix">
              <!-- BEGIN TIME STAMP EXAMPLE -->
              <div class="sent_time">Yesterday 11:25pm</div>
              <!-- END TIME STAMP EXAMPLE -->
              <!-- BEGIN EXAMPLE CHAT MESSAGE -->
              <div class="user-details-wrapper">
                <!-- BEGIN MESSENGER PROFILE -->
                <div class="user-profile">
                  <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                </div>
                <!-- END MESSENGER PROFILE -->
                <!-- BEGIN MESSENGER MESSAGE -->
                <div class="user-details">
                  <div class="bubble">Hello, You there?</div>
                </div>
                <!-- END MESSENGER MESSAGE -->
                <div class="clearfix"></div>
                <!-- BEGIN TIMESTAMP ON CLICK TOGGLE -->
                <div class="sent_time off">Yesterday 11:25pm</div>
                <!-- END TIMESTAMP ON CLICK TOGGLE -->
              </div>
              <!-- END EXAMPLE CHAT MESSAGE -->
              <!-- BEGIN TIME STAMP EXAMPLE -->
              <div class="sent_time">Today 11:25pm</div>
              <!-- BEGIN TIME STAMP EXAMPLE -->
              <!-- BEGIN EXAMPLE CHAT MESSAGE (FROM SELF) -->
              <div class="user-details-wrapper pull-right">
                <!-- BEGIN MESSENGER MESSAGE -->
                <div class="user-details">
                  <div class="bubble sender">Let me know when you free</div>
                </div>
                <!-- END MESSENGER MESSAGE -->
                <div class="clearfix"></div>
                <!-- BEGIN TIMESTAMP ON CLICK TOGGLE -->
                <div class="sent_time off">Sent On Tue, 2:45pm</div>
                <!-- END TIMESTAMP ON CLICK TOGGLE -->
              </div>
              <!-- END EXAMPLE CHAT MESSAGE (FROM SELF) -->
            </div>
            <!-- END CHAT MESSAGES CONTAINER -->
          </div>
          <div class="chat-input-wrapper" style="display:none">
            <textarea id="chat-message-input" rows="1" placeholder="Type your message"></textarea>
          </div>
          <div class="clearfix"></div>
          <!-- END DUMMY CHAT CONVERSATION -->
        </div>
      </div>
      <!-- END CHAT -->
    </div>
    <!-- END CONTENT -->
<?php include_once('footer.php');?>