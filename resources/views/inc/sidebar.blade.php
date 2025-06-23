<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">

        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">

                <!-- Section Title -->
                <li class="menu-title"><span data-key="t-menu">E-Library</span></li>

                <!-- Library Management -->
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ph-layout"></i> <span data-key="t-layouts">Library Management</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('tasks') }}" class="nav-link" data-key="t-two-column">Insert New Book</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('managebooks') }}" class="nav-link" data-key="t-two-column">Manage Books</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <!-- Account Section -->
                <li class="menu-title"><span data-key="t-menu">Account</span></li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                        @csrf
                        <a href="#" class="nav-link menu-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="ri-logout-box-line"></i> <span data-key="t-logout">Logout</span>
                        </a>
                    </form>
                </li>

            </ul>
        </div>
    </div>

    <!-- Sidebar Background -->
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
