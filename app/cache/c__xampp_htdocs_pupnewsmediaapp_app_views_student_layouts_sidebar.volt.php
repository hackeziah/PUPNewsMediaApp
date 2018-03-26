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




