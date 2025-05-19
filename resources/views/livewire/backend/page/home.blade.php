<div class="pages">

    <div class="row">
        <div class="col-lg-3">
            <div class="card page-section">
                <div class="card-body p-0">
                    <a href="{{ route('admin.website.banner') }}" wire:navigate><i class="fas fa-pencil-alt"></i></a>
                    <img src="{{ url('assets/frontend/images/section/banner-section.png') }}" alt="" class="w-100">
                </div>
                <div class="card-footer">
                    <h4 class="text-center m-0">Banner Section</h4>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3">
            <div class="card page-section">
                <div class="card-body p-5">
                    <a href="{{ route('admin.website.client') }}" wire:navigate><i class="fas fa-list"></i></a>
                </div>
                <div class="card-footer">
                    <h4 class="text-center m-0">Clients</h4>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3">
            <div class="card page-section">
                <div class="card-body p-0">
                    <a href="{{ route('admin.website.about-section') }}" wire:navigate><i class="fas fa-pencil-alt"></i></a>
                    <img src="{{ url('assets/frontend/images/section/about-section.png') }}" alt="" class="w-100">
                </div>
                <div class="card-footer">
                    <h4 class="text-center m-0">About Section</h4>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3">
            <div class="card page-section">
                <div class="card-body p-0">
                    <a href="{{ route('admin.website.why-choose-us') }}" wire:navigate><i class="fas fa-pencil-alt"></i></a>
                    <img src="{{ url('assets/frontend/images/section/why-choose-us.png') }}" alt="" class="w-100">
                </div>
                <div class="card-footer">
                    <h4 class="text-center m-0">Why Choose Us</h4>
                </div>
            </div>
        </div>
    </div>
</div>