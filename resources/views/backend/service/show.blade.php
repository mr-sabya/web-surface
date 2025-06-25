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
            <button class="nav-link" id="process-tab" data-bs-toggle="tab" data-bs-target="#process" type="button" role="tab" aria-controls="process" aria-selected="false">Process</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="addon-tab" data-bs-toggle="tab" data-bs-target="#addon" type="button" role="tab" aria-controls="addon" aria-selected="false">Addon (Why Choose Us)</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pricing-tab" data-bs-toggle="tab" data-bs-target="#pricing" type="button" role="tab" aria-controls="pricing" aria-selected="false">Pricing</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane pt-4 fade show active" id="feature" role="tabpanel" aria-labelledby="feature-tab">
            <livewire:backend.service-feature.index serviceId="{{ $service->id }}" />
        </div>
        <div class="tab-pane pt-4 fade" id="process" role="tabpanel" aria-labelledby="process-tab">
            <livewire:backend.service-process.index serviceId="{{ $service->id }}" />
        </div>
        <div class="tab-pane pt-4 fade" id="addon" role="tabpanel" aria-labelledby="addon-tab">
            <livewire:backend.service-addon.index serviceId="{{ $service->id }}" />
        </div>
        <div class="tab-pane pt-4 fade" id="pricing" role="tabpanel" aria-labelledby="pricing-tab">
            <livewire:backend.pricing.index serviceId="{{ $service->id }}" />
        </div>
    </div>

</div>

@endsection