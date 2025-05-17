<div class="pages">

    <div class="row">
        <div class="col-lg-2">
            <div class="card page-section">
                <div class="card-body p-5">
                    <a href="{{ route('admin.website.banner') }}" wire:navigate><i class="fas fa-pencil-alt"></i></a>
                    <h4 class="text-center m-0">Banner Section</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card page-section">
                <div class="card-body p-5">
                    <a href="{{ route('admin.website.client') }}" wire:navigate><i class="fas fa-list"></i></a>
                    <h4 class="text-center m-0">Clients</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card page-section">
                <div class="card-body p-5">
                    <a href="{{ route('admin.website.about-section') }}" wire:navigate><i class="fas fa-pencil-alt"></i></a>
                    <h4 class="text-center m-0">About Section</h4>
                </div>
            </div>
        </div>
    </div>
</div>