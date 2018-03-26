{{content()}}
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                {{ image("uploads/userss/"~prof.profilepic,'width' : '60', 'heigth' : '60') }}
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{prof.firstname}}&nbsp;{{ prof.middlename }}&nbsp;{{ prof.lastname }}</div>
                <div class="email">{{prof.email}}</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="{{ url("student/profile")}}"><i class="material-icons">person</i>Profile</a></li>
                       
                        <li role="seperator" class="divider"></li>
                        <li><a href="{{ url("logout")}}"><i class="material-icons">input</i>Sign Out</a></li>

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
                    <a href="{{ url("student/home")}}">

                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>

   


                <li class="active">
                    <a href="{{ url("student/announcements/announcements")}}">

                        <i class="material-icons">announcement</i>
                        <span>Announcements</span>
                    </a>
                </li>


                <li class="active">
                   <a href="{{ url("student/announcements/events")}}">

                    <i class="material-icons">event_note</i>
                    <span>Events Calendar</span>
                </a>
            </li>





                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            {% include "layouts/footer.volt" %}
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




