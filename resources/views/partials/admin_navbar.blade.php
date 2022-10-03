<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    {{-- <div class="col-6 text-start">
        <ul class="navbar-nav">
            <li class="nav-item d-inline-block d-sm-none">
                <a class="nav-link {{ $title === 'Dashboard' ? 'active' : '' }}" href="/home">

                    <span class="align-middle">Home</span>
                </a>
            </li>

            <li class="nav-item d-inline-block d-sm-none">
                <a class="nav-link {{ $title === 'Kategori' ? 'active' : '' }}" href="/categories">

                    <span class="align-middle">Kategori</span>
                </a>
            </li>
        </ul>
    </div> --}}
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <img src="/img/avatars/blank.png" class="avatar img-fluid rounded me-1" alt="" />
                </a>
                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    <img src="/img/avatars/blank.png" class="avatar img-fluid rounded me-1" alt="" />
                    <span class="text-dark">{{ auth()->user()->username }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="/profile/{{ auth()->user()->username }}">
                        <i class="bi bi-person align-middle me-1 fs-4"></i>
                        Profile</a>
                    <a class="dropdown-item" href="/profile/user/edit">
                        <i class="bi bi-gear align-middle me-1 fs-4"></i>
                        Pengaturan</a>
                    <div class="dropdown-divider"></div>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">Log out</button>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
