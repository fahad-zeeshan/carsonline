<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"> <img src="{{asset('asset/img/users/1.jpg')}}" alt="user" />
            </div>
            <!-- User profile text-->
            <div class="profile-text">
                <h5>Markarn Doe</h5>
                <a href="{{url('profile')}}" class="" data-toggle="tooltip" title="Profile"><i class="ti-user"></i></a>
                <a href="login.html" class="" data-toggle="tooltip" title="Logout"><i class="ti-power-off"></i></a>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="active"><a class="waves-effect waves-dark" href="{{route('dashboard')}}"><i
                            class="icon-layers"></i><span
                            class="hide-menu">Dashboard</span>
                    </a></li>
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-people"></i><span class="hide-menu">Users</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('user.add')}}">Add User</a></li>
                        <li><a href="{{route('users')}}">View All Users</a></li>
                    </ul>
                </li>
                <li><a class="waves-effect waves-dark" href="{{route('add.text')}}"><i class="ti-receipt"></i><span class="hide-menu">AddText</span></a></li>
                <li><a class="waves-effect waves-dark" href="{{route('add.images')}}"><i class="icon-picture"></i><span class="hide-menu">Add Images</span></a></li>
                <li><a class="waves-effect waves-dark" href="{{route('add.videos')}}"><i class="icon-film"></i><span class="hide-menu">AddVideos</span></a></li>
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-grid"></i><span class="hide-menu">Ads</span></a>

                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('create.ads')}}">Create Ads</a></li>
                        <li><a href="{{url('view-all-adds')}}">View All Ads</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>

