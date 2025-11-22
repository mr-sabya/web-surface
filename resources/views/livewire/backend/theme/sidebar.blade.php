<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img src="{{ asset('assets/backend/img/kaiadmin/logo_light.svg') }}" alt="navbar brand" class="navbar-brand"
                    height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" wire:navigate>
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>
                <li class="nav-item {{ Route::is('admin.setting.*') ? 'active submenu' : '' }}">
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group"></i>
                        <p>Setting</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Route::is('admin.setting.*') ? 'show' : '' }}" id="base">
                        <ul class="nav nav-collapse">
                            <li class="{{ Route::is('admin.setting.general') ? 'active' : '' }}">
                                <a href="{{ route('admin.setting.general') }}" wire:navigate>
                                    <span class="sub-item">General</span>
                                </a>
                            </li>

                            <li class="{{ Route::is('admin.setting.seo') ? 'active' : '' }}">
                                <a href="{{ route('admin.setting.seo') }}" wire:navigate>
                                    <span class="sub-item">SEO</span>
                                </a>
                            </li>

                            <li class="{{ Route::is('admin.setting.maintenance') ? 'active' : '' }}">
                                <a href="{{ route('admin.setting.maintenance') }}" wire:navigate>
                                    <span class="sub-item">Maintenance</span>
                                </a>
                            </li>

                            <li class="{{ Route::is('admin.setting.analytics') ? 'active' : '' }}">
                                <a href="{{ route('admin.setting.analytics') }}" wire:navigate>
                                    <span class="sub-item">Analytics & Pixel</span>
                                </a>
                            </li>

                            <li class="{{ Route::is('admin.setting.currency') ? 'active' : '' }}">
                                <a href="{{ route('admin.setting.currency') }}" wire:navigate>
                                    <span class="sub-item">Currency & Language</span>
                                </a>
                            </li>

                            <li class="{{ Route::is('admin.setting.email') ? 'active' : '' }}">
                                <a href="{{ route('admin.setting.email') }}" wire:navigate>
                                    <span class="sub-item">Email</span>
                                </a>
                            </li>

                            <li class="{{ Route::is('admin.setting.security') ? 'active' : '' }}">
                                <a href="{{ route('admin.setting.security') }}" wire:navigate>
                                    <span class="sub-item">Security</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>


                <li class="nav-item {{ Route::is('admin.website.*') ? 'active submenu' : '' }}">
                    <a data-bs-toggle="collapse" href="#webiste">
                        <i class="fas fa-desktop"></i>
                        <p>Website</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Route::is('admin.website.*') ? 'show' : '' }}" id="webiste">
                        <ul class="nav nav-collapse">
                            <li class="{{ request()->route('page') === 'home' ? 'active' : '' }}">
                                <a href="{{ route('admin.website.page', 'home') }}" wire:navigate>
                                    <span class="sub-item">Home Page</span>
                                </a>
                            </li>

                            <li class="{{ request()->route('page') === 'about' ? 'active' : '' }}">
                                <a href="{{ route('admin.website.page', 'about') }}" wire:navigate>
                                    <span class="sub-item">About Page</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ Route::is('admin.content.*') ? 'active submenu' : '' }}">
                    <a data-bs-toggle="collapse" href="#content">
                        <i class="fas fa-desktop"></i>
                        <p>Contents</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Route::is('admin.content.*') ? 'show' : '' }}" id="content">
                        <ul class="nav nav-collapse">

                            <li class="{{ Route::is('admin.content.testimonial.index') ? 'active' : '' }}">
                                <a href="{{ route('admin.content.testimonial.index') }}" wire:navigate>
                                    <span class="sub-item">Testimonial</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ Route::is('admin.service.*') || Route::is('admin.technology.*') || Route::is('admin.portfolio.*') ? 'active submenu' : '' }}">
                    <a data-bs-toggle="collapse" href="#portfolios">
                        <i class="fas fa-desktop"></i>
                        <p>Portfolios</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Route::is('admin.service.*') || Route::is('admin.technology.*') || Route::is('admin.portfolio.*') ? 'show' : '' }}" id="portfolios">
                        <ul class="nav nav-collapse">

                            <li class="{{ Route::is('admin.service.index') ? 'active' : '' }}">
                                <a href="{{ route('admin.service.index') }}" wire:navigate>
                                    <span class="sub-item">Services</span>
                                </a>
                            </li>

                            <li class="{{ Route::is('admin.portfolio.index') ? 'active' : '' }}">
                                <a href="{{ route('admin.portfolio.index') }}" wire:navigate>
                                    <span class="sub-item">Portfolio</span>
                                </a>
                            </li>

                            <li class="{{ Route::is('admin.technology.index') ? 'active' : '' }}">
                                <a href="{{ route('admin.technology.index') }}" wire:navigate>
                                    <span class="sub-item">Technology</span>
                                </a>
                            </li>



                        </ul>
                    </div>
                </li>

                <li class="nav-item {{ Route::is('admin.page.*') ? 'active' : '' }}">
                    <a href="{{ route('admin.page.index') }}" wire:navigate>
                        <i class="fas fa-th-list"></i>
                        <p>Pages</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>