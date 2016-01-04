<!-- BEGIN SIDEBAR -->
<!-- BEGIN MENU -->
<div class="page-sidebar" id="main-menu">
    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
        <!-- BEGIN SIDEBAR MENU -->
        <ul>
            <li>
                <a href="#" class="" id="layout-condensed-toggle">
                    <i class="fa fa-bars"></i>
                    <span class="title">Toggle Menu</span>
                </a>
            </li>
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
                <a href="search.php">
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