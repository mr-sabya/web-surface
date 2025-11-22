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


    <ul class="nav nav-tabs" id="clientTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="client-section-tab" data-bs-toggle="tab" data-bs-target="#client-section" type="button" role="tab" aria-controls="client-section" aria-selected="true">
                Our Client Section
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="client-tab" data-bs-toggle="tab" data-bs-target="#client" type="button" role="tab" aria-controls="client" aria-selected="false">
                Clients
            </button>
        </li>
    </ul>

    <div class="tab-content" id="clientTabContent">
        <div class="tab-pane fade show active" id="client-section" role="tabpanel" aria-labelledby="client-section-tab">
            <livewire:backend.our-client-section.index />
        </div>

        <div class="tab-pane fade" id="client" role="tabpanel" aria-labelledby="client-tab">
            <livewire:backend.client.index />
        </div>
    </div>

</div>

@endsection