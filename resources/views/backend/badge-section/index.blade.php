@extends('backend.layouts.app')

@section('content')
<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Our Client Section</h3>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
            <a href="{{ route('admin.website.page', 'home') }}" wire:navigate class="btn btn-header"><i class="fas fa-reply me-3"></i>Go Back</a>
        </div>
    </div>


    <ul class="nav nav-tabs" id="badgeTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="badge-section-tab" data-bs-toggle="tab" data-bs-target="#badge-section" type="button" role="tab" aria-controls="badge-section" aria-selected="true">
                Badge Section
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="badge-tab" data-bs-toggle="tab" data-bs-target="#badge" type="button" role="tab" aria-controls="badge" aria-selected="false">
                Badges
            </button>
        </li>
    </ul>

    <div class="tab-content" id="badgeTabContent">
        <div class="tab-pane fade show active" id="badge-section" role="tabpanel" aria-labelledby="badge-section-tab">
            <livewire:backend.badge-section.index />
        </div>

        <div class="tab-pane fade" id="badge" role="tabpanel" aria-labelledby="badge-tab">
            <livewire:backend.badge.index />
        </div>
    </div>

</div>

@endsection