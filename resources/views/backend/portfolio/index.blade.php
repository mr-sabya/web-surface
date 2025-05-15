@extends('backend.layouts.app')

@section('content')
<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Dashboard</h3>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
            <a href="{{ route('admin.portfolio.create') }}" wire:navigate class="btn btn-primary btn-round">Add Portfolio</a>
        </div>
    </div>


    <livewire:backend.portfolio.index />
</div>

@endsection