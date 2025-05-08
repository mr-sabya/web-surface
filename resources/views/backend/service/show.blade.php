@extends('backend.layouts.app')

@section('content')
<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Dashboard</h3>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
            <a href="{{ route('admin.service.index') }}" wire:navigate class="btn btn-primary btn-round">Service List</a>
        </div>
    </div>


    <livewire:backend.service.show serviceId="{{ $service->id }}" />


    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="feature-tab" data-bs-toggle="tab" data-bs-target="#feature" type="button" role="tab" aria-controls="feature" aria-selected="true">Feature</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Process</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Addon</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane pt-4 fade show active" id="feature" role="tabpanel" aria-labelledby="feature-tab">
            <livewire:backend.service-feature.index serviceId="{{ $service->id }}" />
        </div>
        <div class="tab-pane pt-4 fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <livewire:backend.service-process.index serviceId="{{ $service->id }}" />
        </div>
        <div class="tab-pane pt-4 fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
    </div>

</div>

@endsection