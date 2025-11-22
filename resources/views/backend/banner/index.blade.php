@extends('backend.layouts.app')

@section('content')
<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Banner Section</h3>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
            <a href="{{ route('admin.website.page', 'home') }}" wire:navigate class="btn btn-header"><i class="fas fa-reply me-3"></i>Go Back</a>
        </div>
    </div>


    <ul class="nav nav-tabs" id="bannerTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="banner-tab" data-bs-toggle="tab" data-bs-target="#banner" type="button" role="tab" aria-controls="banner" aria-selected="true">
                Banner Section
            </button>
        </li>
    </ul>

    <div class="tab-content" id="bannerTabContent">
        <div class="tab-pane fade show active" id="banner" role="tabpanel" aria-labelledby="banner-tab">
            <livewire:backend.banner.index />
        </div>
    </div>

</div>

@endsection