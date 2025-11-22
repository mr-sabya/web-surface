@extends('backend.layouts.app')

@section('content')
<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Portfolio Section</h3>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
            <a href="{{ route('admin.website.page', 'home') }}" wire:navigate class="btn btn-header"><i class="fas fa-reply me-3"></i>Go Back</a>
        </div>
    </div>


    <ul class="nav nav-tabs" id="portfolioTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="portfolio-section-tab" data-bs-toggle="tab" data-bs-target="#portfolio-section" type="button" role="tab" aria-controls="portfolio-section" aria-selected="true">
                Portfolio Section
            </button>
        </li>
    </ul>

    <div class="tab-content" id="portfolioTabContent">
        <div class="tab-pane fade show active" id="portfolio-section" role="tabpanel" aria-labelledby="portfolio-section-tab">
            <livewire:backend.portfolio-section.index />
        </div>
    </div>

</div>

@endsection