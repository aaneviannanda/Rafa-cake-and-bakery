<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion navbar-sidenav" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('adminHome'); }}">
        <div class="sidebar-brand-icon ">
        <i class="fas fa-id-card-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">DASHBOARD RAFA</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('adminHome'); }}">
            <i class="fas fa-desktop"></i>
            <span>Dashboard</span></a>
    </li>

        <!-- Nav Item - Add Product -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('products'); }}">
            <i class="fas fa-plus-circle"></i>
        <span>Product</span></a>
    </li>

    <!-- Nav Item - Categories-->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('categories'); }}">
            <i class="fas fa-wallet"></i>
            <span>Categories</span></a>
    </li>

    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    
</ul>