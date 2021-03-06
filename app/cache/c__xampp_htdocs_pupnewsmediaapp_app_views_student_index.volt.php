
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
                        <li><a href="<?= $this->url->get('student/profile') ?>"><i class="material-icons">person</i>Profile</a></li>
                       
                        <li role="seperator" class="divider"></li>
                        <li><a href="<?= $this->url->get('logout') ?>"><i class="material-icons">input</i>Sign Out</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>

                <li class="active">
                    <a href="<?= $this->url->get('student/home') ?>">

                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>

   


                <li class="active">
                    <a href="<?= $this->url->get('student/announcements/announcements') ?>">

                        <i class="material-icons">announcement</i>
                        <span>Announcements</span>
                    </a>
                </li>


                <li class="active">
                   <a href="<?= $this->url->get('student/announcements/events') ?>">

                    <i class="material-icons">event_note</i>
                    <span>Events Calendar</span>
                </a>
            </li>





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