<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile" style="background: url(../assets/images/background/user-info.jpg) no-repeat;">
            <!-- User profile image -->
            <div class="profile-img"> <img src={{ asset('assets/images/users/profile.png') }} alt="user" /> </div>
            <!-- User profile text-->
            <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Admin</a>
                <div class="dropdown-menu animated flipInY"> <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a> <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a> <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                    <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                    <div class="dropdown-divider"></div> <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a> </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">PERSONAL</li>
                <li> <a class="waves-effect waves-dark" href="home" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>

                <li> <a class="has-arrow waves-effect waves-dark" href="/company" aria-expanded="false"><i class="fa fa-database"></i><span class="hide-menu">My Company</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="campany">manage campany</a></li>
                        <li><a href="companies">my companies</a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="/service" aria-expanded="false"><i class="fa fa-gears"></i><span class="hide-menu">Services</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="manage service">All Services</a></li>
                        <li><a href="manage prices">Categories</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="/appointment" aria-expanded="false"><i class="fa fa-bolt"></i><span class="hide-menu">Appointment</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="service">all appointment</a></li>
                        <li><a href="categorie">manage time slots</a></li>
                    </ul>
                </li>

                <li> <a class=" waves-effect waves-dark" href="inbox" aria-expanded="false"><i class="fa fa-envelope-o"></i><span class="hide-menu">Inbox</span></a>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="/appointment" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu">Packages & Payouts</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="service">Packages</a></li>
                        <li><a href="categorie">Payouts</a></li>
                    </ul>
                </li>

                <li> <a class=" waves-effect waves-dark" href="vendor" aria-expanded="false"><i class="fa  fa-bell-o"></i><span class="hide-menu">Notification</span></a>
                </li>

                <li> <a class="waves-effect waves-dark" href="manufactor" aria-expanded="false"><i class="fa fa-cog"></i><span class="hide-menu">Account & Privacy</span></a>
                </li>

                <li> <a class="waves-effect waves-dark" href="user" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Profile</span></a>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
    <!-- End Bottom points-->
</aside>
