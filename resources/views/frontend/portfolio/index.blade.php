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
<section class="portfolio-page pad-tb">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-lg-6">
                <div class="common-heading pp">
                    <span>Our Work</span>
                    <h2>Portfolio</h2>
                </div>
            </div>
            <div class="col-lg-6 v-center">
                <div class="filters">
                    <ul class="filter-menu">
                        <li data-filter="*" class="is-checked">All</li>
                        <li data-filter=".website">Website</li>
                        <li data-filter=".app">Mobile App</li>
                        <li data-filter=".graphic">Graphic</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row card-list">
            <div class="col-lg-4 col-md-6 grid-sizer"></div>
            <div class="col-lg-4 col-sm-6 single-card-item app">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="#"><img src="{{ url('assets/frontend/images/portfolio/image-1.jpg') }}" alt="portfolio" class="img-fluid" /> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="#">Creative App</a></h4>
                        <p>ios, design</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 single-card-item graphic">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="#"><img src="{{ url('assets/frontend/images/portfolio/image-2.jpg') }}" alt="image" class="img-fluid" /> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="#">Brochure Design</a></h4>
                        <p>Graphic, Print</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 single-card-item website">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="#"><img src="{{ url('assets/frontend/images/portfolio/image-3.jpg') }}" alt="image" class="img-fluid" /> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="#">Ecommerce Development</a></h4>
                        <p>Web Application</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 single-card-item app">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="#"><img src="{{ url('assets/frontend/images/portfolio/image-4.jpg') }}" alt="image" class="img-fluid" /> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="#">Icon Pack</a></h4>
                        <p>Android & iOs, Design</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 single-card-item graphic">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="#"><img src="{{ url('assets/frontend/images/portfolio/image-5.jpg') }}" alt="image" class="img-fluid" /> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="#">Smart Watch</a></h4>
                        <p>UI/UX Design</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 single-card-item graphic">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="#"><img src="{{ url('assets/frontend/images/portfolio/image-6.jpg') }}" alt="image" class="img-fluid" /> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="#">Brochure Design</a></h4>
                        <p>Graphic, Print</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 single-card-item website">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="#"><img src="{{ url('assets/frontend/images/portfolio/image-7.jpg') }}" alt="image" class="img-fluid" /> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="#">Packaging Design</a></h4>
                        <p>Graphic, Print</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 single-card-item app">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="#"><img src="{{ url('assets/frontend/images/portfolio/image-8.jpg') }}" alt="image" class="img-fluid" /> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="#">Restaurant App</a></h4>
                        <p>Android App</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 single-card-item  website">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="#"><img src="{{ url('assets/frontend/images/portfolio/image-9.jpg') }}" alt="image" class="img-fluid" /> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="#">Portfolio Website</a></h4>
                        <p>Web Design</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Portfolio--
    
@endsection