@if (auth()->user()->role == 'ADMIN')
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme d-xl-none">
        <div class="app-brand demo">
            <a href="/" class="app-brand-link">
                <div class="skeleton" style="height: 50px; width: 50px;">
                    <img src="{{ asset('assets/img/logo/Logo Nuha Silihasih.png') }}" alt="Logo" width="50">
                </div>
                <div class="d-flex flex-column">
                    <span class="menu-text fw-bolder demo ms-2 skeleton">10632</span>
                    <span class="menu-text fw-bolder demo ms-2 skeleton">Nurul Hayah ||</span>
                </div>
            </a>
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">

            <!-- Dashboard -->
            <li class="menu-item {{ is_route('admin', 'active') }}">
                <a href="{{ route('admin') }}" class="menu-link skeleton">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Dashboard">Dashboard</div>
                </a>
            </li>

            <!-- Users Management -->
            <li class="menu-item {{ is_route('institution.bill', 'active') }}">
                <a href="{{ route('institution.bill') }}" class="menu-link skeleton">
                    <i class="menu-icon tf-icons bx bx-group"></i>
                    <div data-i18n="Users Management">Users Management</div>
                </a>
            </li>

            <!-- Lembaga Pendidikan -->
            <li class="menu-item {{ is_route('institution.bill', 'active') }}">
                <a href="{{ route('institution.bill') }}" class="menu-link skeleton">
                    <i class="menu-icon tf-icons bx bx-chalkboard"></i>
                    <div data-i18n="Lembaga Pendidikan">Lembaga Pendidikan</div>
                </a>
            </li>

            <!-- Konfigurasi -->
            <li class="menu-item {{ is_route('institution.bill', 'active') }}">
                <a href="{{ route('institution.bill') }}" class="menu-link skeleton">
                    <i class="menu-icon tf-icons bx bx-cog"></i>
                    <div data-i18n="Konfigurasi">Konfigurasi</div>
                </a>
            </li>


            <!-- Logout -->
            <li class="menu-item">
                <a href="{{ route('auth.logout') }}" class="menu-link skeleton">
                    <i class='menu-icon tf-icons bx bx-log-out-circle'></i>
                    <div data-i18n="Logout">Logout</div>
                </a>
            </li>
        </ul>
    </aside>
@endif
@if (auth()->user()->role != 'ADMIN')
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
            <a href="/" class="app-brand-link">
                <div class="skeleton" style="height: 50px; width: 50px;">
                    <img src="{{ asset('assets/img/logo/Logo Nuha Silihasih.png') }}" alt="Logo" width="50">
                </div>
                <div class="d-flex flex-column">
                    <span class="menu-text fw-bolder demo ms-2 skeleton">10632</span>
                    <span class="menu-text fw-bolder demo ms-2 skeleton">Nurul Hayah ||</span>
                </div>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">

            <!-- Dashboard -->
            <li class="menu-item {{ is_route('institution', 'active') }}">
                <a href="{{ route('institution') }}" class="menu-link skeleton">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Dashboard">Dashboard</div>
                </a>
            </li>

            <!-- Data Management -->
            <li
                class="menu-item {{ is_route(['institution.edulevel', 'institution.class', 'institution.student', 'institution.student.show', 'institution.school-year'], 'active') }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle skeleton">
                    <i class="menu-icon tf-icons bx bxs-school"></i>
                    <div data-i18n="Manajemen Data">Manajemen Data</div>
                </a>

                <ul class="menu-sub">
                    <li class="menu-item {{ is_route('institution.school-year', 'active') }}">
                        <a href="{{ route('institution.school-year') }}" class="menu-link">
                            <div data-i18n="Tahun Pelajaran">Tahun Pelajaran</div>
                        </a>
                    </li>
                    <li class="menu-item {{ is_route('institution.edulevel', 'active') }}">
                        <a href="{{ route('institution.edulevel') }}" class="menu-link">
                            <div data-i18n="Jenjang">Jenjang</div>
                        </a>
                    </li>
                    <li class="menu-item {{ is_route('institution.class', 'active') }}">
                        <a href="{{ route('institution.class') }}" class="menu-link">
                            <div data-i18n="Kelas">Kelas</div>
                        </a>
                    </li>
                    <li
                        class="menu-item {{ is_route(['institution.student', 'institution.student.show'], 'active') }}">
                        <a href="{{ route('institution.student') }}" class="menu-link">
                            <div data-i18n="Santri">Santri</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Bill -->
            <li class="menu-item {{ is_route(['institution.bill', 'institution.bill.show'], 'active') }}">
                <a href="{{ route('institution.bill') }}" class="menu-link skeleton">
                    <i class="menu-icon tf-icons bx bx-task"></i>
                    <div data-i18n="Tagihan">Tagihan</div>
                </a>
            </li>

            <!-- Report -->
            <li class="menu-item {{ is_route(['institution.finance', 'institution.income'], 'active open') }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle skeleton">
                    <i class="menu-icon tf-icons bx bxs-report"></i>
                    <div data-i18n="Laporan">Laporan</div>
                </a>

                <ul class="menu-sub">
                    <li class="menu-item {{ is_route('institution.finance', 'active') }}">
                        <a href="{{ route('institution.finance') }}" class="menu-link">
                            <div data-i18n="Keuangan">Keuangan</div>
                        </a>
                    </li>
                    <li class="menu-item {{ is_route('institution.income', 'active') }}">
                        <a href="{{ route('institution.income') }}" class="menu-link">
                            <div data-i18n="Asumsi Pendapatan">Ausumsi Pendapatan</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Logout -->
            <li class="menu-item text-danger">
                <a href="{{ route('auth.logout') }}" class="menu-link text-danger skeleton">
                    <i class='menu-icon tf-icons bx bx-log-out-circle text-danger'></i>
                    <div data-i18n="Logout" class="text-danger">Logout</div>
                </a>
            </li>
        </ul>
    </aside>
@endif
