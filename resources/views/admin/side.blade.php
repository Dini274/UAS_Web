<!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <h2>Admin Panel</h2>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                            <a class="js-arrow" href="/dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Home</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="/dashboard/herosection">Hero Section</a>
                                </li>
                                <li>
                                    <a href="/dashboard/trustedcompany">Truted Company Section</a>
                                </li>
                                <li>
                                    <a href="/dashboard/aboutsection">About Section</a>
                                </li>
                                <li>
                                    <a href="/dashboard/shopaction">Shop Action Section</a>
                                </li>
                                <li>
                                    <a href="/dashboard/menusection">Menu Section</a>
                                </li>
                                <li>
                                    <a href="/dashboard/menu">Menu</a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('dashboard/content') ? 'active' : '' }}">
                            <a href="/dashboard/aboutsection">
                                <i class="fas fa-chart-bar"></i>About</a>
                        </li>
                        <li class="{{ Request::is('dashboard/images') ? 'active' : '' }}">
                            <a href="/dashboard/comunity">
                                <i class="fas fa-users"></i>Comunity</a>
                        </li>
                        <li class="{{ Request::is('dashboard/images') ? 'active' : '' }}">
                            <a href="/dashboard/user">
                                <i class="fas fa-user"></i>User</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->