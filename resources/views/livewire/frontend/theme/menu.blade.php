<ul class="{{ $className }}">
    <li>
        <a href="{{ route('home') }}" class="menu-links" wire:navigate>Home</a>
    </li>
    <li>
        <a href="{{ route('about.index') }}" class="menu-links" wire:navigate>About Us</a>
    </li>

    <li class="sbmenu rpdropdown">
        <a href="#" class="menu-links">Services</a>
        <div class="nx-dropdown menu-dorpdown">
            <div class="sub-menu-section">
                <div class="sub-menu-center-block">
                    <div class="sub-menu-column smfull">
                        <ul>
                            @foreach ($services as $service)
                            <li>
                                <a href="{{ route('service.show', $service->slug) }}" wire:navigate>
                                    {{ $service->title }}
                                </a>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li>
        <a href="{{ route('portfolio.index') }}" class="menu-links" wire:navigate>Portfolio</a>
    </li>
    <li>
        <a href="{{ route('blog.index') }}" class="menu-links" wire:navigate>Blog</a>
    </li>
</ul>