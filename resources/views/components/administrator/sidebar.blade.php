        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center mt-4" href="#"> 
                <img class="img img-brand" src="{{asset('img/applogo_white.png')}}" alt="applogo" style="max-width:200px"> 
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0 mb-3">
            <div>
            <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('administrator.index')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('administrator.pengaduan')}}">
                    <i class="fas fa-fw fa-comment"></i>
                    <span>Pengaduan Masyarakat</span></a>
                </li>  
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('administrator.akun')}}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Akun Admin & Petugas</span></a>
                </li>  
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('administrator.akunMasyarakat')}}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Akun Masyarakat</span></a>
                </li>  
            </div>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider d-none d-md-block"> -->

            <!-- Sidebar Toggler (Sidebar) -->
            <!-- <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>  -->
        </ul> 
        <!-- End of Sidebar -->