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

                <li> <a class="has-arrow waves-effect waves-dark" href="/service" aria-expanded="false"><i class="fa fa-gears"></i><span class="hide-menu">Services</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="service">All Services</a></li>
                        <li><a href="categorie">Categories</a></li>
                    </ul>
                </li>

                <li> <a class=" waves-effect waves-dark" href="company" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Companies</span></a>
                </li>

                <li> <a class=" waves-effect waves-dark" href="vendor" aria-expanded="false"><i class="fa fa-truck"></i><span class="hide-menu">Vendors</span></a>
                </li>

                <li> <a class="waves-effect waves-dark" href="manufactor" aria-expanded="false"><i class="mdi mdi-worker"></i><span class="hide-menu">Manufactors</span></a>
                </li>

                <li> <a class="waves-effect waves-dark" href="user" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Users</span></a>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="/product" aria-expanded="false"><i class="fa  fa-archive"></i><span class="hide-menu">Products</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="product">All Products</a></li>
                        <li><a href="product/categorie">Categories</a></li>
                        <li><a href="product/tags">Tags</a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="/business" aria-expanded="false"><i class="fa fa-handshake-o"></i><span class="hide-menu"> Business for Sale</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="business">All Business</a></li>
                        <li><a href="business/categorie">Categories</a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-eye"></i><span class="hide-menu">Oportunities</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="oportunitie">All Oportunities</a></li>
                        <li><a href="categorie">categorie</a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="/post" aria-expanded="false"><i class="fa fa-paper-plane"></i><span class="hide-menu">News</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="post">View All</a></li>
                        <li><a href="post/create">Add New</a></li>
                    </ul>
                </li>

                <li class="nav-devider"></li>
                <li class="nav-small-cap">SETTINGS</li>
                <li> <a class="waves-effect waves-dark" href="accounting" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu">Accounting</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="package" aria-expanded="false"><i class="fa fa-tasks"></i><span class="hide-menu">Packages</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="message" aria-expanded="false"><i class="fa fa-envelope-o"></i><span class="hide-menu">Message Center</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="report" aria-expanded="false"><i class="fa  fa-file-pdf-o"></i><span class="hide-menu">Reports</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="setting" aria-expanded="false"><i class="fa fa-cog"></i><span class="hide-menu">SETTINGS</span></a>
                </li>
                <li class="nav-devider"></li>




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
