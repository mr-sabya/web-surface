@extends('backend.layouts.app')

@section('content')
<div class="page-inner">

    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">About Section</h3>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
            <a href="{{ route('admin.website.page', 'home') }}" wire:navigate class="btn btn-header"><i class="fas fa-reply me-3"></i>Go Back</a>
        </div>
    </div>


    <!-- content -->
    
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true">Abbout Section</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="feature-tab" data-bs-toggle="tab" data-bs-target="#feature" type="button" role="tab" aria-controls="feature" aria-selected="false">About Features</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
            <livewire:backend.about-section.index />
        </div>
        <div class="tab-pane fade" id="feature" role="tabpanel" aria-labelledby="feature-tab">
            @if($about)
            <livewire:backend.about-section-feature.index aboutSectionId="{{ $about->id }}" />
            @else
            <div class="alert alert-warning">
                <strong>Warning!</strong> No about section found. Please create an about section first.
            </div>
            @endif
        </div>
    </div>




</div>

@endsection