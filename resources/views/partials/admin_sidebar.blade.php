<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand text-center" href="/admin">
            <span class="align-middle">Admin | Informatics</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Menu
            </li>

            <li class="sidebar-item {{ $title === 'Dashboard' ? 'active' : '' }}">
                <a class="sidebar-link" href="/admin">
                    <i class="bi bi-pie-chart fs-5 align-middle"></i><span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ $title === 'Kategori' ? 'active' : '' }}">
                <a class="sidebar-link" href="/admin/categories">
                    <i class="bi bi-tags fs-5 align-middle"></i><span class="align-middle">Kategori</span>
                </a>
            </li>

            <li class="sidebar-header">
                Forum
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/home">
                    <i class="bi bi-people fs-5 align-middle"></i><span class="align-middle">Go Forum</span>
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
