<!-- ============================================================== -->
<!-- left sidebar -->
<!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">

            <a class="d-xl-none d-lg-none" href="#"> Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ url('/admin') }}"  data-target="#submenu-1" ><i class="fab fa-asymmetrik"></i>Home<span class="badge badge-success">6</span></a>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('adminsProfile') }}"  data-target="#submenu-2"><i class="far fa-user-circle"></i>Admin <span class="badge badge-success">6</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('usersProfile') }}"  data-target="#submenu-2"><i class="fa fa-users"></i>Users <span class="badge badge-success">6</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('vendorsProfile') }}"  data-target="#submenu-3" aria-controls="submenu-3"><i class="fab fa-vuejs"></i>Vendors</a>
                    </li>
{{--                    <li class="nav-item ">--}}
{{--                        <a class="nav-link" href="{{ url('/admin') }}"  data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Forms</a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                        <div id="submenu-5" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route ('adminsTable') }}" ><i class="fas fa-th"></i>Admins Tables</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route ('usersTables') }}" ><i class="fas fa-th"></i>Users Tables</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route ('vendorsTables') }}" ><i class="fas fa-th"></i>Vendors Tables</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('file-manager') }}"  data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-folder"></i>File Manager</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mail-box') }}"  data-target="#submenu-3" aria-controls="submenu-3"><i class="fa big-icon fa-envelope icon-wrap"></i>Mail Box</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('calendar') }}"  data-target="#submenu-3" aria-controls="submenu-3"><i class="fab fa-fw fa-wpforms"></i>Calendar</a>
                    </li>



                    

                        </ul>
                        </div>

        </nav>
    </div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->
<!-- ============================================================== -->
       