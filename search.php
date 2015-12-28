<?php
$page = 'search';
include_once('include/header-v1.php')?>
    <!-- BEGIN CONTAINER -->
    <div class="page-container row">
        <?php include_once('include/sidebar-v1.php')?>
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
                <div>
                    <li class="m-r-10 input-prepend inside search-form no-boarder">
                        <span class="add-on"><span class="iconset top-search"></span></span>
                        <input name="" type="text" class="no-boarder" placeholder="Search Catalog" style="width:250px;">
                    </li>
                </div>
                <div class="pull-left">
                    <div id="Filters">
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
                    <div id="Sort">
                        <div class="meta name active desc" id="SortByName"> Name &nbsp; <span class="sort anim150 asc active" data-sort="data-name" data-order="desc"></span> <span class="sort anim150 desc" data-sort="data-name" data-order="asc"></span> </div>
                        <div class="meta area" id="SortByArea"> Date Published &nbsp; <span class="sort anim150 asc" data-sort="data-area" data-order="asc"></span> <span class="sort anim150 desc" data-sort="data-area" data-order="desc"></span> </div>
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
    </div>
    <!-- END CONTAINER -->
<?php include_once('include/footer.php');?>