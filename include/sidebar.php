<!-- BEGIN SIDEBAR -->
<!-- BEGIN MENU -->
<div class="page-sidebar" id="main-menu">
    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
        <!-- BEGIN MINI-PROFILE -->
        <div class="user-info-wrapper">
            <div class="profile-wrapper">
                <img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar.jpg" width="69" height="69" />
            </div>
            <div class="user-info">
                <div class="greeting">Welcome</div>
                <div class="username">User <span class="semi-bold">Name</span></div>
                <div class="status">
                    <a href="#">
                        <div class="status-icon blue"></div>Last Online: 12/01/2015</a>
                </div>
            </div>
        </div>
        <!-- END MINI-PROFILE -->
        <!-- BEGIN SIDEBAR MENU -->
        <ul>
            <!-- BEGIN SELECTED LINK -->
            <li class="start <?php echo ($page == 'home') ? 'active' : null?>">
                <a href="index.php">
                    <i class="fa fa-home"></i>
                    <span class="title">Home</span>
                    <span class="selected"></span>
                </a>
            </li>
            <!-- END SELECTED LINK -->
            <!-- BEGIN BADGE LINK -->
            <li class="<?php echo ($page == 'inner') ? 'active' : null?>">
                <a href="inner.php">
                    <i class="fa fa-file-text"></i>
                    <span class="title">Inner Page</span>
                </a>
            </li>
            <!-- END BADGE LINK -->
            <!-- BEGIN SINGLE LINK -->
            <li class="<?php echo ($page == 'search') ? 'active' : null?>">
                <a href="search_results.php">
                    <i class="fa fa-search"></i>
                    <span class="title">Search Results</span>
                </a>
            </li>
            <!-- END SINGLE LINK -->
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<!-- BEGIN SCROLL UP HOVER -->
<a href="#" class="scrollup">Scroll</a>
<!-- END SCROLL UP HOVER -->
<!-- END MENU -->
<!-- BEGIN SIDEBAR FOOTER WIDGET -->
<!-- END SIDEBAR FOOTER WIDGET -->
<!-- END SIDEBAR -->