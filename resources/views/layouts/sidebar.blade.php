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
                        <a class="nav-link " href="{{ url('/admin') }}"  data-target="#submenu-1" ><i class="fab fa-autoprefixer"></i>Home<span class="badge badge-success">6</span></a>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('adminsProfile') }}"  data-target="#submenu-2"><i class="fa fa-users"></i>Users <span class="badge badge-success">6</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('usersProfile') }}"  data-target="#submenu-2"><i class="fa fa-users"></i>Users <span class="badge badge-success">6</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('vendorsProfile') }}"  data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-viacoin"></i>Vendors</a>
                    </li>
{{--                    <li class="nav-item ">--}}
{{--                        <a class="nav-link" href="{{ url('/admin') }}"  data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Forms</a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                        <div id="submenu-5" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route ('adminsTable') }}" >Admins Tables</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route ('usersTables') }}" >Users Tables</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route ('vendorsTables') }}" >Vendors Tables</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->
<!-- ============================================================== -->
       