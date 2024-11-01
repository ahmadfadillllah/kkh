<header class="pc-header">
    <div class="header-wrapper">
        <!-- [Mobile Media Block] start -->
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled">
                <!-- ======= Menu collapse Icon ===== -->
                <li class="pc-h-item pc-sidebar-collapse">
                    <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="pc-h-item pc-sidebar-popup">
                    <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="dropdown pc-h-item d-inline-flex d-md-none">
                    <a class="pc-head-link dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ph-duotone ph-magnifying-glass"></i>
                    </a>
                    <div class="dropdown-menu pc-h-dropdown drp-search">
                        <form class="px-3">
                            <div class="mb-0 d-flex align-items-center">
                                <input type="search" class="form-control border-0 shadow-none"
                                    placeholder="Search..." />
                                <button class="btn btn-light-secondary btn-search">Search</button>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="pc-h-item d-none d-md-inline-flex">
                    <form class="form-search">
                        <i class="ph-duotone ph-magnifying-glass icon-search"></i>
                        <input type="search" class="form-control" placeholder="Search..." />

                        <button class="btn btn-search" style="padding: 0"><kbd>ctrl+k</kbd></button>
                    </form>
                </li>
            </ul>
        </div>
        <!-- [Mobile Media Block end] -->
        <div class="ms-auto">
            <ul class="list-unstyled">
                <li class="dropdown pc-h-item">
                    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ph-duotone ph-sun-dim"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
                        <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
                            <i class="ph-duotone ph-moon"></i>
                            <span>Dark</span>
                        </a>
                        <a href="#!" class="dropdown-item" onclick="layout_change('light')">
                            <i class="ph-duotone ph-sun-dim"></i>
                            <span>Light</span>
                        </a>
                        <a href="#!" class="dropdown-item" onclick="layout_change_default()">
                            <i class="ph-duotone ph-cpu"></i>
                            <span>Default</span>
                        </a>
                    </div>
                </li>
                <li class="pc-h-item">
                    <a class="pc-head-link pct-c-btn" href="#" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvas_pc_layout">
                        <i class="ph-duotone ph-gear-six"></i>
                    </a>
                </li>
                <li class="dropdown pc-h-item">
                    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ph-duotone ph-bell"></i>
                        <span class="badge bg-success pc-h-badge">1</span>
                    </a>
                    <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Notifications</h5>
                            {{-- <ul class="list-inline ms-auto mb-0">
                                <li class="list-inline-item">
                                    <a href="../application/mail.html" class="avtar avtar-s btn-link-hover-primary">
                                        <i class="ti ti-link f-18"></i>
                                    </a>
                                </li>
                            </ul> --}}
                        </div>
                        <div class="dropdown-body text-wrap header-notification-scroll position-relative"
                            style="max-height: calc(100vh - 235px)">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    {{-- <p class="text-span">Today</p> --}}
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('dashboard') }}/assets/images/user/avatar-2.jpg"
                                                alt="user-image" class="user-avtar avtar avtar-s" />
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 me-3 position-relative">
                                                    <h6 class="mb-0 text-truncate">Ahmad Fadillah</h6>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span class="text-sm">2 min ago</span>
                                                </div>
                                            </div>
                                            <p class="position-relative mt-1 mb-2"><br /><span
                                                    class="text-truncate">Telah mengisi KKH</span></p>
                                            <span class="badge bg-light-primary border border-primary me-1 mt-1">web
                                                design</span>
                                            <span
                                                class="badge bg-light-warning border border-warning me-1 mt-1">Dashobard</span>
                                            <span
                                                class="badge bg-light-success border border-success me-1 mt-1">Design
                                                System</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown-footer">
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="d-grid"><button class="btn btn-primary">Lihat semua</button></div>
                                </div>
                                {{-- <div class="col-6">
                                    <div class="d-grid"><button class="btn btn-outline-secondary">Mark all as
                                            read</button></div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown pc-h-item header-user-profile">
                    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
                        <img src="{{ asset('dashboard') }}/assets/images/user/avatar-2.jpg" alt="user-image"
                            class="user-avtar" />
                    </a>
                    <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Profile</h5>
                        </div>
                        <div class="dropdown-body">
                            <div class="profile-notification-scroll position-relative"
                                style="max-height: calc(100vh - 225px)">
                                <ul class="list-group list-group-flush w-100">
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset('dashboard') }}/assets/images/user/avatar-2.jpg"
                                                    alt="user-image" class="wid-50 rounded-circle" />
                                            </div>
                                            <div class="flex-grow-1 mx-3">
                                                <h5 class="mb-0">{{ Auth::user()->name }}</h5>
                                                <a class="link-primary"
                                                    href="#">{{ Auth::user()->nik }}</a>
                                            </div>
                                            <span class="badge bg-primary">{{ Auth::user()->departemen }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="dropdown-item">
                                            <span class="d-flex align-items-center">
                                                <i class="ph-duotone ph-key"></i>
                                                <span>Change password</span>
                                            </span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <span class="d-flex align-items-center">
                                                <i class="ph-duotone ph-gear-six"></i>
                                                <span>Settings</span>
                                            </span>
                                        </a>
                                        <a href="{{ route('logout') }}" class="dropdown-item">
                                            <span class="d-flex align-items-center">
                                                <i class="ph-duotone ph-power"></i>
                                                <span>Logout</span>
                                            </span>
                                        </a>
                                        <div class="dropdown-item">
                                            <span class="d-flex align-items-center">
                                                <i class="ph-duotone ph-moon"></i>
                                                <span>Dark mode</span>
                                            </span>
                                            <div class="form-check form-switch form-check-reverse m-0">
                                                <input class="form-check-input f-18" id="dark-mode" type="checkbox"
                                                    onclick="dark_mode()" role="switch" />
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>

