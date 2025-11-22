@extends('backend.layouts.app')

@section('content')
<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Testimonial Section</h3>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
            <a href="{{ route('admin.website.page', 'home') }}" wire:navigate class="btn btn-header"><i class="fas fa-reply me-3"></i>Go Back</a>
        </div>
    </div>


    <ul class="nav nav-tabs" id="testimonialTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="testimonial-section-tab" data-bs-toggle="tab" data-bs-target="#testimonial-section" type="button" role="tab" aria-controls="testimonial-section" aria-selected="true">
                Testimonial Section
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="review-platform-tab" data-bs-toggle="tab" data-bs-target="#review-platform" type="button" role="tab" aria-controls="review-platform" aria-selected="false">
                Review Platforms
            </button>
        </li>
    </ul>

    <div class="tab-content" id="testimonialTabContent">
        <div class="tab-pane fade show active" id="testimonial-section" role="tabpanel" aria-labelledby="testimonial-section-tab">
            <livewire:backend.testimonial-section.index />
        </div>

        <div class="tab-pane fade" id="review-platform" role="tabpanel" aria-labelledby="review-platform-tab">
            <livewire:backend.review-platform.index />
        </div>
    </div>

</div>

@endsection