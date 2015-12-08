<?php
$page = 'search';
include_once('include/header.php')?>
<!-- BEGIN CONTAINER -->
<div class="page-container row">
  <?php include_once('include/sidebar.php')?>
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">
      <ul class="breadcrumb">
        <li>
          <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Search Results</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Search - <span class="semi-bold">Results</span></h3>
      </div>
      <div class="pull-left" id="Filters">
        <div class="btn-group"> <a href="#" data-toggle="dropdown" class="btn dropdown-toggle btn-demo-space"> <span class="anim150">Region</span> <span class="caret"></span> </a>
          <ul class="dropdown-menu">
            <li class="active" data-filter="all" data-dimension="region"><a href="#">All</a></li>
            <li data-filter="alaska" data-dimension="region"><a href="#">Alaska</a></li>
            <li data-filter="intermountain" data-dimension="region"><a href="#">Intermountain</a></li>
            <li data-filter="northeast" data-dimension="region"><a href="#">Northeast</a></li>
            <li data-filter="pacific_west" data-dimension="region"><a href="#">Pacific</a> </li>
            <li data-filter="southeast" data-dimension="region"><a href="#">Southeast</a></li>
          </ul>
        </div>
        <div class="btn-group"> <a href="#" data-toggle="dropdown" class="btn dropdown-toggle btn-demo-space"> <span class="anim150">Categories</span> <span class="caret"></span> </a>
          <ul class="dropdown-menu">
            <li class="active" data-filter="all" data-dimension="recreation"><a href="#">All</a></li>
            <li data-filter="camping" data-dimension="recreation"><a href="#">Research</a></li>
            <li data-filter="climbing" data-dimension="recreation"><a href="#">Data</a></li>
            <li data-filter="fishing" data-dimension="recreation"><a href="#">Publications</a></li>
            <li data-filter="swimming" data-dimension="recreation"><a href="#">Peer Reviewed</a></li>
          </ul>
        </div>
      </div>
      <div class="pull-right">
        <div data-toggle="buttons-radio" class="btn-group">
          <button class="btn btn-primary active" type="button" id="ToList"><i class="fa fa-th-list"></i></button>
          <button class="btn btn-primary" type="button" id="ToGrid"><i class="fa fa-th-large"></i></button>
        </div>
      </div>
      <div class="clearfix"></div>
      <br>
      <div id="Parks" class="just">
        <!-- "TABLE" HEADER CONTAINING SORT BUTTONS (HIDDEN IN GRID MODE)-->
        <div class="list_header">
          <div class="meta name active desc" id="SortByName"> Name &nbsp; <span class="sort anim150 asc active" data-sort="data-name" data-order="desc"></span> <span class="sort anim150 desc" data-sort="data-name" data-order="asc"></span> </div>
          <div class="meta region">Region</div>
          <div class="meta rec">Categories</div>
          <div class="meta area" id="SortByArea"> Date Published &nbsp; <span class="sort anim150 asc" data-sort="data-area" data-order="asc"></span> <span class="sort anim150 desc" data-sort="data-area" data-order="desc"></span> </div>
        </div>
        <!-- FAIL ELEMENT -->
        <div class="fail_element anim250">Sorry &mdash; we could not find any parks matching matching these criteria</div>
        <!-- BEGIN LIST OF PARKS (MANY OF THESE ELEMENTS ARE VISIBLE ONLY IN LIST MODE)-->
        <ul>
          <li class="mix northeast camping climbing fishing swimming" data-name="Acadia" data-area="47452.80">
            <div class="meta name">
              <div class="img_wrapper"> <img src="assets/img/others/acadia.jpg" alt="" /> </div>
              <div class="titles">
                <h2>Atlas</h2>
                <p><em>Internet Atlas<br>Featured in MIT<br>Technology Review...</em></p>
              </div>
            </div>
            <div class="meta region">
              <p>Northeast</p>
            </div>
            <div class="meta rec">
              <ul>
                <li>Research</li>
                <li>Data</li>
                <li>Publication</li>
                <li>Peer Review</li>
              </ul>
            </div>
            <div class="meta area">
              <p>12/7/2015</p>
            </div>
          </li>
          <li class="mix intermountain camping climbing" data-name="Arches" data-area="76678.98">
            <div class="meta name">
              <div class="img_wrapper"> <img src="assets/img/others/arches.jpg" onload="" alt="" /> </div>
              <div class="titles">
                <h2>Atlas</h2>
                <p><em>Internet Atlas<br>Featured in MIT<br>Technology Review...</em></p>
              </div>
            </div>
            <div class="meta region">
              <p>Intermountain</p>
            </div>
            <div class="meta rec">
              <ul>
                <li>Publication</li>
                <li>Peer Review</li>
              </ul>
            </div>
            <div class="meta area">
              <p>12/7/2015</p>
            </div>
          </li>


          <!-- END LIST OF PARKS -->
        </ul>
      </div>
    </div>
    <!-- END PAGE -->
  </div>
  <!-- BEGIN CHAT -->
  <div class="chat-window-wrapper">
    <div id="main-chat-wrapper" class="inner-content">
      <div class="chat-window-wrapper scroller scrollbar-dynamic" id="chat-users" >
        <div class="chat-header">
          <div class="pull-left">
            <input type="text" placeholder="search">
          </div>
          <div class="pull-right">
            <a href="#" class="" ><div class="iconset top-settings-dark "></div> </a>
          </div>
        </div>
        <div class="side-widget">
          <div class="side-widget-title">group chats</div>
          <div class="side-widget-content">
            <div id="groups-list">
              <ul class="groups" >
                <li><a href="#"><div class="status-icon green"></div>Office work</a></li>
                <li><a href="#"><div class="status-icon green"></div>Personal vibes</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="side-widget fadeIn">
          <div class="side-widget-title">favourites</div>
          <div id="favourites-list">
            <div class="side-widget-content" >
              <div class="user-details-wrapper active" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                <div class="user-profile">
                  <img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
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
              <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
                <div class="user-profile">
                  <img src="assets/img/profiles/c.jpg"  alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
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
            <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
              <div class="user-profile">
                <img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
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
            <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
              <div class="user-profile">
                <img src="assets/img/profiles/h.jpg"  alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
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
            <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
              <div class="user-profile">
                <img src="assets/img/profiles/c.jpg"  alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
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
            <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
              <div class="user-profile">
                <img src="assets/img/profiles/h.jpg"  alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
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
            <a href="#" class="" ><div class="iconset top-settings-dark "></div> </a>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="chat-messages-header">
          <div class="status online"></div><span class="semi-bold">Jane Smith(Typing..)</span>
          <a href="#" class="chat-back"><i class="icon-custom-cross"></i></a>
        </div>
        <div class="chat-messages scrollbar-dynamic clearfix">
          <div class="inner-scroll-content clearfix">
            <div class="sent_time">Yesterday 11:25pm</div>
            <div class="user-details-wrapper " >
              <div class="user-profile">
                <img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
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
                <img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
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
                <img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
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
<?php include_once('include/footer.php')?>