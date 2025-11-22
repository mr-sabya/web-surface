@extends('backend.layouts.app')

@section('content')
<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Why Choose Us Section</h3>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
            <a href="{{ route('admin.website.page', 'home') }}" wire:navigate class="btn btn-header"><i class="fas fa-reply me-3"></i>Go Back</a>
        </div>
    </div>


    <ul class="nav nav-tabs" id="whyChooseTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="whychoose-section-tab" data-bs-toggle="tab" data-bs-target="#whychoose-section" type="button" role="tab" aria-controls="whychoose-section" aria-selected="true">
                Why Choose Us Section
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="whychoose-feature-tab" data-bs-toggle="tab" data-bs-target="#whychoose-feature" type="button" role="tab" aria-controls="whychoose-feature" aria-selected="false">
                Why Choose Us Features
            </button>
        </li>
    </ul>

    <div class="tab-content" id="whyChooseTabContent">
        <div class="tab-pane fade show active" id="whychoose-section" role="tabpanel" aria-labelledby="whychoose-section-tab">
            <livewire:backend.why-choose-us.index />
        </div>

        <div class="tab-pane fade" id="whychoose-feature" role="tabpanel" aria-labelledby="whychoose-feature-tab">
            @if($whyChooseUs)
            <livewire:backend.why-choose-us-feature.index whyChooseUsId="{{ $whyChooseUs->id }}" />
            @else
            <div class="alert alert-warning">
                <strong>Warning!</strong> No Why Choose Us section found. Please create the section first.
            </div>
            @endif
        </div>
    </div>

</div>

@endsection