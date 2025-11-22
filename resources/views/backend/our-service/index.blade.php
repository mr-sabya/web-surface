@extends('backend.layouts.app')

@section('content')
<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Our Service Section</h3>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
            <a href="{{ route('admin.website.page', 'home') }}" wire:navigate class="btn btn-header"><i class="fas fa-reply me-3"></i>Go Back</a>
        </div>
    </div>


    <ul class="nav nav-tabs" id="serviceTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="service-tab" data-bs-toggle="tab" data-bs-target="#service" type="button" role="tab" aria-controls="service" aria-selected="true">
                Our Service Section
            </button>
        </li>
    </ul>

    <div class="tab-content" id="serviceTabContent">
        <div class="tab-pane fade show active" id="service" role="tabpanel" aria-labelledby="service-tab">
            <livewire:backend.our-service-section.index />
        </div>
    </div>

</div>

@endsection