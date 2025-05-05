@extends('frontend.layouts.app')

@section('content')
<!--Start Hero-->
<livewire:frontend.home.banner.index />
<!--End Hero-->

<!-- Start clients -->
<livewire:frontend.home.client-slider.index />
<!-- End clients -->

<!--Start About-->
<livewire:frontend.home.about.index />
<!--End About-->

<!--Start Service-->
<livewire:frontend.home.service.index />
<!--End Service-->

<!--why choose-->
<livewire:frontend.home.why-choose.index />
<!--End why choose-->

<!--Start Portfolio-->
<livewire:frontend.home.portfolio.index />
<!--End Portfolio-->

<!--Start Clients-->
<livewire:frontend.home.clients.index />
<!--End Clients-->

<!--Start Badges-->
<livewire:frontend.home.badges.index />
<!--End Badges-->

<!--Start work-category-->
<livewire:frontend.home.work-area.index />
<!--End  work-category-->

<!--Start Testinomial-->
<livewire:frontend.home.testimonial.index />
<!--End Testinomial-->

<!--Start CTA-->
<livewire:frontend.home.cta.index />
<!--End CTA-->

<!--Start Location-->
<livewire:frontend.home.location.index />
<!--End Location-->

@endsection