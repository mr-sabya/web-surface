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
                            <li><a href="{{ route('service.web') }}" wire:navigate>Wed Development</a> </li>
                            <li><a href="{{ route('service.app') }}" wire:navigate>Android App Development</a> </li>
                            <li><a href="{{ route('service.seo') }}" wire:navigate>SEO & Digital Marketing</a> </li>
                            <li><a href="{{ route('service.graphic') }}" wire:navigate>Graphic Design</a> </li>
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