<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)" data-aos="zoom-in">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        @if (auth()->user()->role == 'ADMIN')
        <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center">
                <a href="{{ route('admin') }}"><img src="{{ asset('assets/img/favicon/logo.png') }}" alt="Logo"
                        width="80" data-aos="zoom-in"></a>
            </div>
        </div>
        @endif
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- User -->
            <li class="nav-item lh-1 me-3" data-aos="zoom-in">
                <div class="text-end text-primary fw-semibold d-block"><b>
                        {{ auth()->user()->name }}
                    </b></div>
                <div class="text-end fw-semibold d-block" style="font-size: small;">
                    Edupay
                </div>
            </li>
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online" data-aos="zoom-in">
                        <img src="{{ auth()->user()->profile }}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="{{ auth()->user()->profile }}" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">{{ auth()->user()->name }}</span>
                                    <small class="text-muted">{{ Str::title(auth()->user()->role) }}</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item {{ is_route('user', 'active') }}" href="{{ route('user') }}">
                            <i class="bx bx-group me-2"></i>
                            <span class="align-middle">Users Management</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#gantiPass">
                            <i class="bx bxs-key me-2"></i>
                            <span class="align-middle">Ubah Password</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        @php
                        $logoutRoute = auth()->check() && auth()->user()->role == 'ADMIN' ? route('auth.logoutAdmin') :
                        route('auth.logout');
                        @endphp
                        <a class="dropdown-item" href="{{ $logoutRoute }}">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>