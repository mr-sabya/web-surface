<header class="header-pr {{ Route::is('home') ? 'nav-bg-b' : 'nav-bg-w' }} main-header navfix fixed-top menu-white">
    <div class="container-fluid m-pad">
        <div class="menu-header">
            <div class="dsk-logo"><a class="nav-brand" href="{{ route('home') }}" wire:navigate>
                    @if($settings->white_logo)
                    <img src="{{ asset('storage/' . $settings->white_logo) }}" alt="Logo" class="mega-white-logo" />
                    @else
                    <img src="{{ url('assets/frontend/images/white-logo.png') }}" alt="Logo" class="mega-white-logo" />
                    @endif

                    @if($settings->logo)
                    <img src="{{ asset('storage/' . $settings->logo) }}" alt="Logo" class="mega-darks-logo" />
                    @else
                    <img src="{{ url('assets/frontend/images/logo.png') }}" alt="Logo" class="mega-darks-logo" />
                    @endif
                </a>
            </div>
            <div class="custom-nav" role="navigation">

                <!-- menu items -->
                <livewire:frontend.theme.menu className="nav-list" />
                <!-- menu items -->

                <!-- mobile + desktop - sidebar menu- dark mode witch and button -->
                <ul class="nav-list right-end-btn">
                    <li class="hidemobile"><a data-bs-toggle="offcanvas" href="#offcanvasExample" class="btn-round- btn-br bg-btn2"><i class="fas fa-phone-alt"></i></a></li>

                    <li class="hidemobile">
                        <a href="{{ route('contact.index') }}" wire:navigate class="btn-br bg-btn3 btshad-b2 lnk">Request A Quote <span class="circle"></span></a>
                    </li>

                    <li class="hidedesktop darkmodeswitch">
                        <div class="switch-wrapper"> <label class="switch" for="niwax"> <input type="checkbox" id="niwax" /> <span class="slider round"></span> </label> </div>
                    </li>

                    <li class="hidedesktop"><a data-bs-toggle="offcanvas" href="#offcanvasExample" class="btn-round- btn-br bg-btn2"><i class="fas fa-phone-alt"></i></a></li>

                    <li class="navm- hidedesktop"> <a class="toggle" href="#"><span></span></a></li>
                </ul>
            </div>
        </div>

        <!--Mobile Menu-->
        <nav id="main-nav">
            <!-- menu items -->
            <livewire:frontend.theme.menu className="first-nav" />
            <!-- menu items -->

            <ul class="bottom-nav">
                <li class="prb">
                    <a href="tel:+11111111111">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                            <path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
						  c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
						  c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
						  C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z" />
                        </svg>
                    </a>
                </li>
                <li class="prb">
                    <a href="mailto:somewebmedia@gmail.com">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                            <path d="M0 0h24v24H0z" fill="none" />
                        </svg>
                    </a>
                </li>
                <li class="prb">
                    <a href="skype:niwax.company?call">
                        <svg enable-background="new 0 0 24 24" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                            <path d="m23.309 14.547c1.738-7.81-5.104-14.905-13.139-13.543-4.362-2.707-10.17.352-10.17 5.542 0 1.207.333 2.337.912 3.311-1.615 7.828 5.283 14.821 13.311 13.366 5.675 3.001 11.946-2.984 9.086-8.676zm-7.638 4.71c-2.108.867-5.577.872-7.676-.227-2.993-1.596-3.525-5.189-.943-5.189 1.946 0 1.33 2.269 3.295 3.194.902.417 2.841.46 3.968-.3 1.113-.745 1.011-1.917.406-2.477-1.603-1.48-6.19-.892-8.287-3.483-.911-1.124-1.083-3.107.037-4.545 1.952-2.512 7.68-2.665 10.143-.768 2.274 1.76 1.66 4.096-.175 4.096-2.207 0-1.047-2.888-4.61-2.888-2.583 0-3.599 1.837-1.78 2.731 2.466 1.225 8.75.816 8.75 5.603-.005 1.992-1.226 3.477-3.128 4.253z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>