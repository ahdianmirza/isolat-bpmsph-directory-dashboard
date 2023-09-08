<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="">
            <span class="d-none d-lg-block fs-5 text-decoration-none">DATA ISOLAT BPMSPH</span>
        </a>
        <span class="toggle-sidebar-btn">
            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M4.75 5.75H19.25"></path>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M4.75 18.25H19.25"></path>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M4.75 12H19.25"></path>
            </svg>
        </span>
    </div><!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="get" action="/search">
            <input type="text" name="search" placeholder="Search" autocomplete="off"
                value="{{ request('search') }}">
            <button type="submit"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->
        </ul>
    </nav><!-- End Icons Navigation -->

    <form action="/logout" method="post">
        @csrf
        <button type="submit"
            class="btn btn-outline-secondary btn-sm me-4 text-decoration-none fw-semibold d-flex justify-content-center align-items-center">
            <i class="bi bi-box-arrow-right me-1 text-bolder"></i>Logout
        </button>
    </form>
</header><!-- End Header -->
