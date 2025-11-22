@extends('backend.layouts.app')

@section('content')
<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">{{ ucwords(strtolower($name)) }} Page</h3>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
            <a href="{{ route('admin.dashboard') }}" wire:navigate class="btn btn-header"><i class="fas fa-home me-3"></i>Go Home</a>
        </div>
    </div>


    @livewire('backend.page.' . $name)
</div>

@endsection