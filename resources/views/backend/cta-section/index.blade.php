@extends('backend.layouts.app')

@section('content')
<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">CTA Section</h3>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
            <a href="{{ route('admin.website.page', 'home') }}" wire:navigate class="btn btn-header"><i class="fas fa-reply me-3"></i>Go Back</a>
        </div>
    </div>


    <ul class="nav nav-tabs" id="ctaTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="cta-tab" data-bs-toggle="tab" data-bs-target="#cta" type="button" role="tab" aria-controls="cta" aria-selected="true">
                CTA Section
            </button>
        </li>
    </ul>

    <div class="tab-content" id="ctaTabContent">
        <div class="tab-pane fade show active" id="cta" role="tabpanel" aria-labelledby="cta-tab">
            <livewire:backend.cta-section.index />
        </div>
    </div>

</div>

@endsection