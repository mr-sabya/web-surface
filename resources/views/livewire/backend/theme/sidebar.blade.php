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


                <li class="nav-item {{ Route::is('admin.website.*') || Route::is('admin.service.*') || Route::is('admin.technology.*') || Route::is('admin.portfolio.*') || Route::is('admin.testimonial.*') ? 'active submenu' : '' }}">
                    <a data-bs-toggle="collapse" href="#webiste">
                        <i class="fas fa-desktop"></i>
                        <p>Website</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Route::is('admin.website.*') || Route::is('admin.service.*') || Route::is('admin.technology.*') || Route::is('admin.portfolio.*') || Route::is('admin.testimonial.*') ? 'show' : '' }}" id="webiste">
                        <ul class="nav nav-collapse">
                            <li class="{{ Route::is('admin.website.page', 'home') ? 'active' : '' }}">
                                <a href="{{ route('admin.website.page', 'home') }}" wire:navigate>
                                    <span class="sub-item">Home Page</span>
                                </a>
                            </li>

                            <li class="{{ Route::is('admin.service.index') ? 'active' : '' }}">
                                <a href="{{ route('admin.service.index') }}" wire:navigate>
                                    <span class="sub-item">Services</span>
                                </a>
                            </li>

                            <li class="{{ Route::is('admin.technology.index') ? 'active' : '' }}">
                                <a href="{{ route('admin.technology.index') }}" wire:navigate>
                                    <span class="sub-item">Technology</span>
                                </a>
                            </li>

                            <li class="{{ Route::is('admin.portfolio.index') ? 'active' : '' }}">
                                <a href="{{ route('admin.portfolio.index') }}" wire:navigate>
                                    <span class="sub-item">Portfolio</span>
                                </a>
                            </li>

                            <li class="{{ Route::is('admin.testimonial.index') ? 'active' : '' }}">
                                <a href="{{ route('admin.testimonial.index') }}" wire:navigate>
                                    <span class="sub-item">Testimonial</span>
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


                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-th-list"></i>
                        <p>Sidebar Layouts</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="sidebar-style-2.html">
                                    <span class="sub-item">Sidebar Style 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="icon-menu.html">
                                    <span class="sub-item">Icon Menu</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#forms">
                        <i class="fas fa-pen-square"></i>
                        <p>Forms</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="forms/forms.html">
                                    <span class="sub-item">Basic Form</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#tables">
                        <i class="fas fa-table"></i>
                        <p>Tables</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="tables/tables.html">
                                    <span class="sub-item">Basic Table</span>
                                </a>
                            </li>
                            <li>
                                <a href="tables/datatables.html">
                                    <span class="sub-item">Datatables</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#maps">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Maps</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="maps">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="maps/googlemaps.html">
                                    <span class="sub-item">Google Maps</span>
                                </a>
                            </li>
                            <li>
                                <a href="maps/jsvectormap.html">
                                    <span class="sub-item">Jsvectormap</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#charts">
                        <i class="far fa-chart-bar"></i>
                        <p>Charts</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="charts/charts.html">
                                    <span class="sub-item">Chart Js</span>
                                </a>
                            </li>
                            <li>
                                <a href="charts/sparkline.html">
                                    <span class="sub-item">Sparkline</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="widgets.html">
                        <i class="fas fa-desktop"></i>
                        <p>Widgets</p>
                        <span class="badge badge-success">4</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../../documentation/index.html">
                        <i class="fas fa-file"></i>
                        <p>Documentation</p>
                        <span class="badge badge-secondary">1</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#submenu">
                        <i class="fas fa-bars"></i>
                        <p>Menu Levels</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="submenu">
                        <ul class="nav nav-collapse">
                            <li>
                                <a data-bs-toggle="collapse" href="#subnav1">
                                    <span class="sub-item">Level 1</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav1">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Level 2</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Level 2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a data-bs-toggle="collapse" href="#subnav2">
                                    <span class="sub-item">Level 1</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav2">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Level 2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Level 1</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>