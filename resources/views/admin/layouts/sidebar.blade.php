<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('admin.dashboard') }}" class="b-brand text-primary">
                <!-- Change your logo from here -->
                <img src="{{ url($setting->logo) }}" alt="logo image" class="logo-lg"
                    style="max-width: 150px; max-height: 50px;">
                <span class="badge bg-primary rounded-pill ms-2 theme-version">{{ $seo->meta_title }} </span>
            </a>
        </div>

        <div class="card pc-user-card">
            <div class="card-body">
                <div class="nav-user-image">
                    <a data-bs-toggle="collapse" href="#navuserlink">
                        <img src="{{ asset(Auth::user()->image) }}" alt="user-image"
                            class="user-avtar rounded-circle" />

                    </a>
                </div>
                <div class="pc-user-collpsed collapse" id="navuserlink">
                    <h4 class="mb-0">{{ Auth::user()->name }}</h4><span>Administrator</span>
                    <ul>
                        <li><a href="{{ route('admin.profile') }}" class="pc-user-links"><i
                                    class="ph-duotone ph-user"></i> <span>My Account</span></a>
                        </li>
                        <li>
                            <a href="{{ route('admin.logout') }}" class="pc-user-links" id="logout"><i
                                    class="ph-duotone ph-power"></i> <span>Logout</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption"><label>Navigation</label></li>
                <li class="pc-item pc-hasmenu"><a href="{{ route('admin.dashboard') }}" class="pc-link">
                        <span class="pc-micon"><i class="ph-duotone ph-gauge"></i> </span>
                        <span class="pc-mtext">Dashboard</span>
                        <span class="pc-arrow"></span></a>
                </li>
                @role('superadmin|admin')
                    {{-- Only show to superadmin and admin --}}

                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-book"></i></span>
                            <span class="pc-mtext">Main page</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                        </a>
                        <ul class="pc-submenu">
                            @can('view about')
                                <li class="pc-item"><a class="pc-link" href="{{ route('about.index') }}">About us</a></li>
                            @endcan

                            @can('view slider')
                                <li class="pc-item"><a class="pc-link" href="{{ route('slider.index') }}">Slider Info</a></li>
                            @endcan

                           
                                <li class="pc-item"><a class="pc-link" href="{{ route('service.index') }}">Service Info</a>
                                </li>

                                     <li class="pc-item"><a class="pc-link" href="{{ route('ressume.index') }}">Ressume Info</a>
                                </li>
                                <li class="pc-item"><a class="pc-link" href="{{ route('skill.index') }}">Skill Info</a>
                                </li>
                       



                                <li class="pc-item"><a class="pc-link" href="{{ route('portfolio.index') }}">Portfolio</a>
                                </li>
                        </ul>
                    </li>
             

                    <li class="pc-item pc-hasmenu">
                        <a href="{{ route('permissions.index') }}" class="pc-link">
                            <span class="pc-micon"><i class="fa fa-users-cog"></i></span>
                            <span class="pc-mtext">Roles & Permissions</span>
                        </a>
                    </li>

                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-settings"></i></span>
                            <span class="pc-mtext">Setting</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="{{ route('seo.index') }}">SEO Setting</a></li>
                            <li class="pc-item"><a class="pc-link" href="{{ route('website.index') }}">Website
                                    Setting</a></li>
                            <li class="pc-item"><a class="pc-link" href="{{ route('page.index') }}">Page Management</a>
                            </li>
                            <li class="pc-item"><a class="pc-link" href="{{ route('smtp.index') }}">SMTP Setting</a>
                            </li>
                            <li class="pc-item"><a class="pc-link"
                                    href="{{ route('registered-admins.index') }}">Registred Admin</a></li>
                            registered-admins
                        </ul>
                    </li>
                @endrole

            </ul>
        </div>
    </div>
</nav>
