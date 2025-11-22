@extends('backend.layouts.app')

@section('content')
<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Industry Section</h3>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
            <a href="{{ route('admin.website.page', 'home') }}" wire:navigate class="btn btn-header"><i class="fas fa-reply me-3"></i>Go Back</a>
        </div>
    </div>

    <ul class="nav nav-tabs" id="industryTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="industry-section-tab" data-bs-toggle="tab" data-bs-target="#industry-section" type="button" role="tab" aria-controls="industry-section" aria-selected="true">
                Industry Section
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="industry-tab" data-bs-toggle="tab" data-bs-target="#industry" type="button" role="tab" aria-controls="industry" aria-selected="false">
                Industries
            </button>
        </li>
    </ul>

    <div class="tab-content" id="industryTabContent">
        <div class="tab-pane fade show active" id="industry-section" role="tabpanel" aria-labelledby="industry-section-tab">
            <livewire:backend.industry-section.index />
        </div>

        <div class="tab-pane fade" id="industry" role="tabpanel" aria-labelledby="industry-tab">
            <livewire:backend.industry.index />
        </div>
    </div>

</div>

@endsection