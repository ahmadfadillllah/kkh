<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="index-2.html" class="b-brand text-primary">
                <!-- ========   Change your logo from here   ============ -->
                {{-- <img src="{{ asset('dashboard') }}/assets/images/logos.svg" alt="logo image" /> --}}
                <span class="badge bg-brand-color-2 rounded-pill ms-2 theme-version">KKH Online</span>
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Navigation</label>
                    <i class="ph-duotone ph-gauge"></i>
                </li>
                <li class="pc-item">
                    <a href="{{ route('dashboards.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="ph-duotone ph-gauge"></i>
                        </span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('kkh.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="ph-duotone ph-identification-card"></i>
                        </span>
                        <span class="pc-mtext">KKH</span>
                    </a>
                </li>

                <li class="pc-item pc-caption">
                    <label>Other</label>
                    <i class="ph-duotone ph-devices"></i>
                </li>

                <li class="pc-item"><a href="../other/sample-page.html" class="pc-link">
                        <span class="pc-micon">
                            <i class="ph-duotone ph-user-circle"></i>
                        </span>
                        <span class="pc-mtext">Settings</span></a></li>
                <li class="pc-item"><a href="../other/sample-page.html" class="pc-link">
                        <span class="pc-micon">
                            <i class="ph-duotone ph-power"></i>
                        </span>
                        <span class="pc-mtext">Log Out</span></a></li>

            </ul>
            <div class="card nav-action-card bg-brand-color-4">
                <div class="card-body"
                    style="background-image: url('{{ asset('dashboard') }}/assets/images/layout/nav-card-bg.svg')">
                    <h5 class="text-dark">Web Test</h5>
                    <p class="text-dark text-opacity-75">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    <a href="https://google.com/" class="btn btn-primary" target="_blank">Unduh</a>
                </div>
            </div>
        </div>
        <div class="card pc-user-card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('dashboard') }}/assets/images/user/avatar-1.jpg" alt="user-image"
                            class="user-avtar wid-45 rounded-circle" />
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <div class="dropdown">
                            <a href="#" class="arrow-none dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false" data-bs-offset="0,20">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 me-2">
                                        <h6 class="mb-0">Jonh Smith</h6>
                                        <small>Administrator</small>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="btn btn-icon btn-link-secondary avtar">
                                            <i class="ph-duotone ph-windows-logo"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li>
                                        <a class="pc-user-links">
                                            <i class="ph-duotone ph-gear"></i>
                                            <span>Settings</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('auth.logout') }}" class="pc-user-links">
                                            <i class="ph-duotone ph-power"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="pc-user-links">
                                            <i class="ph-duotone ph-key"></i>
                                            <span>Ganti Password</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
