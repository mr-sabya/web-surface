@extends('frontend.layouts.app')

@section('content')

<livewire:frontend.service.index serviceId="{{ $service->id }}" />

@endsection