<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="/">
            <span class="align-middle">Informatics</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Menu
            </li>

            <li class="sidebar-item {{ $title === 'Home' ? 'active' : '' }}">
                <a class="sidebar-link" href="/">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Home</span>
                </a>
            </li>

            <li class="sidebar-item {{ $title === 'Kategori' ? 'active' : '' }}">
                <a class="sidebar-link" href="/categories">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Kategori</span>
                </a>
            </li>

        </ul>

        {{-- <div class="sidebar-cta">
            <div class="sidebar-cta-content">
                <strong class="d-inline-block mb-2">Upgrade to Pro</strong>
                <div class="mb-3 text-sm">
                    Are you looking for more components? Check out our premium version.
                </div>
                <div class="d-grid">
                    <a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
                </div>
            </div>
        </div> --}}
    </div>
</nav>
