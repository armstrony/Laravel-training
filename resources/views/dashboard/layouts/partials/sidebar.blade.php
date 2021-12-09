<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/gallery*') ? 'active' : ''}}" href="/dashboard/gallery">
                    <span data-feather="file"></span>
                    My Art
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/orders*') ? 'active' : ''}}" href="#">
                    <span data-feather="file"></span>
                    Orders
                </a>
            </li>
        </ul>
    </div>
</nav>