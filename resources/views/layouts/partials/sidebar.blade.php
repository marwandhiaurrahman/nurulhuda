<div id="aside" class="app-aside modal fade folded md nav-expand">
    <div class="left navside indigo-900 dk" layout="column">
        <div class="navbar navbar-md no-radius">
            <!-- brand -->
            <a class="navbar-brand">
                <div ui-include="'../assets/images/logo.svg'"></div>
                <img src="../assets/images/logo.png" alt="." class="hide">
                <span class="hidden-folded inline">NURUL HUDA</span>
            </a>
            <!-- / brand -->
        </div>
        <div flex class="hide-scroll">
            <nav class="scroll nav-active-primary">

                <ul class="nav" ui-nav>
                    <li class="nav-header hidden-folded">
                        <small class="text-muted">Menu Utama</small>
                    </li>
                    @if (Auth::user()->is_admin)
                    {{-- admin --}}

                    <li {{ Request::segment(2) === 'dashboard' ? 'active' : null }}>
                        <a href="{{route('admin.dashboard')}}">
                            <span class="nav-icon">
                                <i class="material-icons">&#xe3fc;
                                    <span ui-include="'../assets/images/i_0.svg'"></span>
                                </i>
                            </span>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-header hidden-folded">
                        <small class="text-muted">Management</small>
                    </li>

                    <li class="{{ Request::segment(2) === 'arsip' ? 'active' : null }}">
                        <a href="{{route('arsip.index')}}">
                            <span class="nav-icon">
                                <i class="fa fa-caret-down"></i>
                            </span>
                            <span class="nav-text">Kearsipan</span>
                        </a>
                    </li>

                    <li class="{{ Request::segment(2) === 'pegawai' ? 'active' : null }}">
                        <a>
                            <span class="nav-caret">
                                <i class="fa fa-caret-down"></i>
                            </span>
                            <span class="nav-icon">
                                <i class="fa  fa-suitcase"></i>
                            </span>
                            <span class="nav-text">Kepegawaian</span>
                        </a>
                        <ul class="nav-sub">
                            <li class="{{ Request::segment(2) === 'pegawai' ? 'active' : null }}">
                                <a href="{{route('pegawai.index')}}">
                                    <span class="nav-text">Data Pegawai</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ Request::segment(2) === 'tahun-ajaran' ? 'active' : null }}">
                        <a>
                            <span class="nav-caret">
                                <i class="fa fa-caret-down"></i>
                            </span>
                            <span class="nav-icon">
                                <i class="material-icons">&#xe896;
                                    {{-- <span ui-include="'../assets/images/i_7.svg'"></span> --}}
                                </i>
                            </span>
                            <span class="nav-text">Akademik</span>
                        </a>
                        <ul class="nav-sub">
                            <li class="{{ Request::segment(2) === 'tahun-ajaran' ? 'active' : null }}">
                                <a href="{{route('tahun-ajaran.index')}}">
                                    <span class="nav-text">Tahun Ajaran</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ Request::segment(2) === 'jadwal-penerimaan' ? 'active' : null }}">
                        <a>
                            <span class="nav-caret">
                                <i class="fa fa-caret-down"></i>
                            </span>
                            <span class="nav-icon">
                                <i class="material-icons">&#xe896;
                                    <span ui-include="'../assets/images/i_7.svg'"></span>
                                </i>
                            </span>
                            <span class="nav-text">Manage PPDB</span>
                        </a>
                        <ul class="nav-sub">
                            <li class="{{ Request::segment(2) === 'jadwal-penerimaan' ? 'active' : null }}">
                                <a href="{{route('jadwal-penerimaan.index')}}">
                                    <span class="nav-text">Jadwal Pendaftaran</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- @endcan --}}
                    @can('siswa-list')
                    <li class="{{ Request::segment(2) === 'siswa' ? 'active' : null }}">
                        <a>
                            <span class="nav-caret">
                                <i class="fa fa-caret-down"></i>
                            </span>
                            <span class="nav-icon">
                                <i class="material-icons">&#xe896;
                                    <span ui-include="'../assets/images/i_7.svg'"></span>
                                </i>
                            </span>
                            <span class="nav-text">Siswa</span>
                        </a>
                        <ul class="nav-sub">
                            <li class="{{ Request::segment(2) === 'siswa' ? 'active' : null }}">
                                <a href="{{route('siswa.index')}}">
                                    <span class="nav-text">Data Siswa</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endcan

                    @can('calon-siswa-list')
                    <li class="{{ Request::segment(2) === 'calonsiswa' ? 'active' : null }}">
                        <a>
                            <span class="nav-caret">
                                <i class="fa fa-caret-down"></i>
                            </span>
                            <span class="nav-icon">
                                <i class="material-icons">&#xe896;
                                    <span ui-include="'../assets/images/i_7.svg'"></span>
                                </i>
                            </span>
                            <span class="nav-text">Calon Siswa</span>
                        </a>
                        <ul class="nav-sub">
                            <li class="{{ Request::segment(2) === 'calonsiswa' ? 'active' : null }}">
                                <a href="{{ route('calonsiswa.index') }}">
                                    <span class="nav-text">Data Calon Siswa</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endcan
                    <li class="nav-header hidden-folded">
                        <small class="text-muted">Setting</small>
                    </li>
                    @can('user-list','role-list')
                    <li
                        class="{{ Request::segment(2) === 'users' ? 'active' : null }} {{ Request::segment(2) === 'roles' ? 'active' : null }}">
                        <a>
                            <span class="nav-caret">
                                <i class="fa fa-caret-down"></i>
                            </span>
                            <span class="nav-icon">
                                <i class="material-icons">&#xe896;
                                    <span ui-include="'../assets/images/i_7.svg'"></span>
                                </i>
                            </span>
                            <span class="nav-text">User & Role</span>
                        </a>
                        <ul class="nav-sub">
                            @can('user-list')
                            <li class="{{ Request::segment(2) === 'users' ? 'active' : null }}">
                                <a href="{{ route('users.index') }}">
                                    <span class="nav-text">User</span>
                                </a>
                            </li>
                            @endcan
                            @can('role-list')
                            <li class="{{ Request::segment(2) === 'roles' ? 'active' : null }}">
                                <a href="{{ route('roles.index') }}">
                                    <span class="nav-text">Role</span>
                                </a>
                            </li>
                            @endcan


                        </ul>
                    </li>
                    @endcan

                    {{-- admin end--}}
                    @else
                    {{-- siswa --}}
                    <li {{ Request::segment(2) === 'dashboard' ? 'active' : null }}>
                        <a href="{{route('dashboard')}}">
                            <span class="nav-icon">
                                <i class="material-icons">&#xe3fc;
                                    <span ui-include="'../assets/images/i_0.svg'"></span>
                                </i>
                            </span>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li {{ Request::segment(2) === 'biodata' ? 'active' : null }}>
                        <a href="{{route('biodata')}}">
                            <span class="nav-icon">
                                <i class="material-icons">&#xe3fc;
                                    <span ui-include="'../assets/images/i_0.svg'"></span>
                                </i>
                            </span>
                            <span class="nav-text">Biodata</span>
                        </a>
                    </li>
                    {{-- siswa end --}}
                    @endif
                </ul>
            </nav>
        </div>
        <div flex-no-shrink>
            <nav ui-nav>
                <ul class="nav">
                    <li>
                        <div class="b-b b m-t-sm"></div>
                    </li>
                    <li class="no-bg">
                        <a>
                            <span class="nav-icon">
                                <i class="material-icons">&#xe8ac;</i>
                            </span>
                            <span class="nav-text">Logout</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
