
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">

  <?= $this->tag->getTitle() ?>
  
    <?= $this->tag->stylesheetLink('https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext') ?>
    <?= $this->tag->stylesheetLink('https://fonts.googleapis.com/icon?family=Material+Icons') ?>
    <!-- Bootstrap Core Css -->
    <?= $this->tag->stylesheetLink('plugins/bootstrap/css/bootstrap.css') ?>
    <!-- Waves Effect Css -->
    <?= $this->tag->stylesheetLink('plugins/node-waves/waves.css') ?>
    <!-- Animation Css -->
    <?= $this->tag->stylesheetLink('plugins/animate-css/animate.css') ?>
    <!-- Custom Css -->
    <?= $this->tag->stylesheetLink('css/style.css') ?>
    <!-- Bootstrap Material Datetime Picker Css -->
    <?= $this->tag->stylesheetLink('plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') ?>
    <!-- Wait Me Css -->
    <?= $this->tag->stylesheetLink('plugins/waitme/waitMe.css') ?>
    <!-- Bootstrap Select Css -->
    <?= $this->tag->stylesheetLink('plugins/bootstrap-select/css/bootstrap-select.css ') ?>
    <!-- Custom Css -->
    <?= $this->tag->stylesheetLink('css/style.css') ?>
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
     <?= $this->tag->stylesheetLink('css/themes/all-themes.css') ?>
 <?= $this->tag->stylesheetLink('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') ?>
  <style type="text/css">

  </style>
</head>   

          <!-- Content Header (Page header) -->
<body class="theme-red">
      <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->

                <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.html">PUP NEWS MEDIA APP</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->

                    <!-- Tasks -->
                   
                    <!-- <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li> -->

                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
            <?= $this->getContent() ?>
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <?= $this->tag->image(['uploads/userss/' . $prof->profilepic, 'width' => '60', 'heigth' => '60']) ?>
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $prof->firstname ?>&nbsp;<?= $prof->middlename ?>&nbsp;<?= $prof->lastname ?></div>
                <div class="email"><?= $prof->email ?></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="<?= $this->url->get('admin/profile') ?>"><i class="material-icons">person</i>Profile</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="<?= $this->url->get('logout') ?>"><i class="material-icons">input</i>Sign Out</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <!-- #admin Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>



                <li class="active">
                    <a href="<?= $this->url->get('admin/home') ?>">

                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="active">
                    <a href="<?= $this->url->get('admin/dashboard') ?>">

                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="active">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>MANAGE</span>
                    </a>
                    <ul class="ml-menu">

                        <li>
                            <a href="<?= $this->url->get('admin/ManageUsers') ?>">Manage Users</a>
                        </li>
                        <li>
                            <a href="<?= $this->url->get('admin/ManageMagazine') ?>">Manage Magazine</a>
                        </li>
                        <li>
                            <a href="<?= $this->url->get('admin/ManageNews') ?>">Manage News</a>
                            
                        </li>
                        <li>
                            <a href="<?= $this->url->get('admin/MyContentMagazine') ?>">Manage Content Magazine</a>
                            
                        </li>
                        <li>
                            <a href="<?= $this->url->get('admin/ManageCategory') ?>">Manage Category</a>

                        </li>
                        <li>
                            <a href="<?= $this->url->get('admin/ManageAnnouncements') ?>">Manage Announcements</a>
                            
                        </li>
                        <li>
                            <a href="<?= $this->url->get('admin/ManageEvents') ?>">Manage Events</a>
                            
                        </li>
                    </ul>
                </li>


                <li class="active">
                    <a href="<?= $this->url->get('admin/MyNews') ?>">

                        <i class="material-icons">assignment</i>
                        <span>My News</span>
                    </a>
                </li>

                <li class="active">
                    <a href="<?= $this->url->get('admin/MyMagazines') ?>">

                        <i class="material-icons">assignment</i>
                        <span>My Magazines</span>
                    </a>
                </li>

                <li class="active">
                    <a href="<?= $this->url->get('admin/MyContentMagazine') ?>">

                        <i class="material-icons">assignment</i>
                        <span>Manage Content Magazine</span>
                    </a>
                </li>



                <li class="active">
                    <a href="<?= $this->url->get('admin/ManageAnnouncements/announcements') ?>">

                        <i class="material-icons">announcement</i>
                        <span>Announcements</span>
                    </a>
                </li>


                <li class="active">
                    <a href="<?= $this->url->get('admin/ManageEvents/events') ?>">

                        <i class="material-icons">event_note</i>
                        <span>Events Calendar</span>
                    </a>
                </li>





<!-- 
               
                     <li class="active">
                        <a href="<?= $this->url->get('admin/student') ?>">
                        
                            <i class="material-icons">line_weight</i>
                            <span>Magazine</span>
                        </a>
                    </li>

                     <li class="active">
                        <a href="<?= $this->url->get('user/student') ?>">
                        
                            <i class="material-icons">accessibility</i>
                            <span>About Me</span>
                        </a>
                    </li>

                     <li class="active">
                        <a href="<?= $this->url->get('user/student') ?>">
                        
                            <i class="material-icons">directions_run</i>
                            <span>Goals</span>
                        </a>
                    </li>

                     <li class="active">
                        <a href="<?= $this->url->get('user/student') ?>">
                        
                            <i class="material-icons">contacts</i>
                            <span>Contacts</span>
                        </a>
                    </li> -->



<!-- 
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                    <a href="<?= $this->url->get('admin/dashboard') ?>">Dashboard</a>
                            </li>
                            
                        </ul>
                    </li> -->
                  <!--   <li>
                        <a href="../../pages/typography.html">
                            <i class="material-icons">text_fields</i>
                            <span>Typography</span>
                        </a>
                    </li> -->
            <!--         <li>
                        <a href="../../pages/helper-classes.html">
                            <i class="material-icons">layers</i>
                            <span>Helper Classes</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Widgets</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Cards</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="../../pages/widgets/cards/basic.html">Basic</a>
                                    </li>
                                    <li>
                                        <a href="../../pages/widgets/cards/colored.html">Colored</a>
                                    </li>
                                    <li>
                                        <a href="../../pages/widgets/cards/no-header.html">No Header</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Infobox</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="../../pages/widgets/infobox/infobox-1.html">Infobox-1</a>
                                    </li>
                                    <li>
                                        <a href="../../pages/widgets/infobox/infobox-2.html">Infobox-2</a>
                                    </li>
                                    <li>
                                        <a href="../../pages/widgets/infobox/infobox-3.html">Infobox-3</a>
                                    </li>
                                    <li>
                                        <a href="../../pages/widgets/infobox/infobox-4.html">Infobox-4</a>
                                    </li>
                                    <li>
                                        <a href="../../pages/widgets/infobox/infobox-5.html">Infobox-5</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
              <!--       <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>User Interface (UI)</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../../pages/ui/alerts.html">Alerts</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/animations.html">Animations</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/badges.html">Badges</a>
                            </li>

                            <li>
                                <a href="../../pages/ui/breadcrumbs.html">Breadcrumbs</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/colors.html">Colors</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/dialogs.html">Dialogs</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/labels.html">Labels</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/list-group.html">List Group</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/media-object.html">Media Object</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/pagination.html">Pagination</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/preloaders.html">Preloaders</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/progressbars.html">Progress Bars</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/range-sliders.html">Range Sliders</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/sortable-nestable.html">Sortable & Nestable</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/thumbnails.html">Thumbnails</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/tooltips-popovers.html">Tooltips & Popovers</a>
                            </li>
                            <li>
                                <a href="../../pages/ui/waves.html">Waves</a>
                            </li>
                        </ul>
                    </li> -->
                <!--     <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                    <a href="<?= $this->url->get('admin/dashboard') ?>">Dashboard</a>
                            </li>
                            
                        </ul>
                    </li> -->


                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
                        <div class="legal">
                <div class="copyright">
                    &copy; <a href="javascript:void(0);">PUP - News & Media App</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0
                </div>
            </div>
            <!-- #Footer -->
            
            <!-- Footer -->

        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <!-- <div role="tabpanel" class="tab-pane fade in active in active" id="skins"> -->
     <!--                <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul> -->
                    <!-- </div> -->

<!--                 <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            -->
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>






      

<!-- jQuery 3 -->



    
             <!--  -->
    
            <!-- /.content-wrapper -->  
</div>
<!-- jQuery 3 -->
   <?= $this->tag->javascriptInclude('plugins/jquery/jquery.min.js') ?>

    <!-- Bootstrap Core Js -->
    <?= $this->tag->javascriptInclude('plugins/bootstrap/js/bootstrap.js') ?>

    <!-- Select Plugin Js -->
   <?= $this->tag->javascriptInclude('plugins/bootstrap-select/js/bootstrap-select.js') ?>

    <!-- Slimscroll Plugin Js -->
   <?= $this->tag->javascriptInclude('plugins/jquery-slimscroll/jquery.slimscroll.js') ?>

    <!-- Waves Effect Plugin Js -->
   <?= $this->tag->javascriptInclude('plugins/node-waves/waves.js') ?>

    <!-- Autosize Plugin Js -->
   <?= $this->tag->javascriptInclude('plugins/autosize/autosize.js') ?>

    <!-- Moment Plugin Js -->
   <?= $this->tag->javascriptInclude('plugins/momentjs/moment.js') ?>
    <!-- Bootstrap Material Datetime Picker Plugin Js -->
   <?= $this->tag->javascriptInclude('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') ?>

    <!-- Custom Js -->
   <?= $this->tag->javascriptInclude('js/admin.js') ?>
   <?= $this->tag->javascriptInclude('js/pages/forms/basic-form-elements.js') ?>

    <!-- Demo Js -->
   <?= $this->tag->javascriptInclude('js/demo.js') ?>


    
  <!-- Google Font -->



</body>
</html>