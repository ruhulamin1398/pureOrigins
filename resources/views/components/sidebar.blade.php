<!-- Sidebar -->
<ul class="navbar-nav bg-abasas-dark  sidebar sidebar-dark accordion sidebar-toggled " id="accordionSidebar">



    <li class="nav-item  ">
        <a class="nav-link text-center btn  " href="">

            <span class=" text-light   "> <i class="fas fa-plus text-light   "></i>New </span></a>
    </li>


    <hr class="sidebar-divider m-1 p-0 ">
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">


    <li class="nav-item">
        <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseSell"
            aria-expanded="true" aria-controls="collapseSell">
            <i class="fas fa-fw fa-cog"></i>
            <span>Blog</span>
        </a>
        <div id="collapseSell" class="collapse" aria-labelledby="headingSell" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                {{-- <a class="collapse-item" href="{{ route('blogs.index') }}">All Blogs </a> --}}
                {{-- <a class="collapse-item" href="">New Blog </a>
            <a class="collapse-item" href="">Blog Category </a> --}}

            </div>
        </div>
    </li>


    <!-- Divider -->
    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">


    <li class="nav-item">
        <a class="nav-link collapsed  p-3 " href="{{ route('services.index') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Services</span>
        </a>
      
    </li>

    <hr class="sidebar-divider m-1 p-0 ">


    <li class="nav-item">
        <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapsegallery"
            aria-expanded="true" aria-controls="collapseSell">
            <i class="fas fa-fw fa-cog"></i>
            <span>Gallery</span>
        </a>
        <div id="collapsegallery" class="collapse" aria-labelledby="headingSell" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="{{ route('gallery.index') }}">Gallery List </a> 
            <a class="collapse-item" href="{{ route('gallery-categories.index') }}">Gallery Category </a> 

            </div>
        </div>
    </li>



    <hr class="sidebar-divider m-1 p-0 ">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="{{ route('banners.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Banner</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>User </span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">
    <!-- Nav Item - Dashboard -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center  d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
