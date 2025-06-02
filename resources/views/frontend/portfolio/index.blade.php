@extends('frontend.layouts.app')

@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-1" data-background="{{ url('assets/frontend/images/banner/9.jpg') }}">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="#">About Us</a></li>
                            </ul>
                        </div>
                        <div class="bread-title">
                            <h2>About Company</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->


<!--Start Portfolio-->
<livewire:frontend.portfolio.index />
<!--End Portfolio--
    
@endsection