<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? '' : 'collapsed' }}" href="/">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link {{ Request::is('directory*') || Request::is('search*') ? '' : 'collapsed' }}"
                href="/directory">
                <i class="bi bi-card-list"></i>
                <span>Directory</span>
            </a>
        </li><!-- End Register Page Nav -->

    </ul>

</aside><!-- End Sidebar-->
