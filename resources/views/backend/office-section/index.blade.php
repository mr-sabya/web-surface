@extends('backend.layouts.app')

@section('content')
<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Our Office Section</h3>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
            <a href="{{ route('admin.website.page', 'home') }}" wire:navigate class="btn btn-header"><i class="fas fa-reply me-3"></i>Go Back</a>
        </div>
    </div>


    <ul class="nav nav-tabs" id="officeTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="office-section-tab" data-bs-toggle="tab" data-bs-target="#office-section" type="button" role="tab" aria-controls="office-section" aria-selected="true">
                Office Section
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="office-tab" data-bs-toggle="tab" data-bs-target="#office" type="button" role="tab" aria-controls="office" aria-selected="false">
                Offices
            </button>
        </li>
    </ul>

    <div class="tab-content" id="officeTabContent">
        <div class="tab-pane fade show active" id="office-section" role="tabpanel" aria-labelledby="office-section-tab">
            <livewire:backend.office-section.index />
        </div>
        <div class="tab-pane fade" id="office" role="tabpanel" aria-labelledby="office-tab">
            <livewire:backend.office.index />
        </div>
    </div>

</div>

@endsection