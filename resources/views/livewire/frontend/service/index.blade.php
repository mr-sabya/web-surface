<div>
    <!--Breadcrumb Area-->
    <section class="breadcrumb-areav2" data-background="{{ url('storage/' . $service->banner_image) }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bread-titlev2">
                        <h1 class="wow fadeInUp" data-wow-delay=".2s">{{ $service->heading }}</h1>
                        <p class="mt20 wow fadeInUp" data-wow-delay=".4s">{{ $service->sub_heading }}</p>
                        <a href="#" class="btn-main bg-btn2 lnk mt20 wow zoomInDown" data-wow-delay=".6s">Get Quote <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="statistics-wrap bg-gradient5">
        <div class="container">
            <div class="row small t-ctr mt0">
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics">
                        <div class="statistics-img">
                            <img src="{{ url('assets/frontend/images/icons/deal.svg') }}" alt="happy" class="img-fluid">
                        </div>
                        <div class="statnumb">
                            <span class="counter">450</span>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics">
                        <div class="statistics-img">
                            <img src="{{ url('assets/frontend/images/icons/computers.svg') }}" alt="project" class="img-fluid">
                        </div>
                        <div class="statnumb counter-number">
                            <span class="counter">48</span><span>k</span>
                            <p>Projects Done</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics">
                        <div class="statistics-img">
                            <img src="{{ url('assets/frontend/images/icons/worker.svg') }}" alt="work" class="img-fluid">
                        </div>
                        <div class="statnumb">
                            <span class="counter">95</span><span>k</span>
                            <p>Hours Worked</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics mb0">
                        <div class="statistics-img">
                            <img src="{{ url('assets/frontend/images/icons/customer-service.svg') }}" alt="support" class="img-fluid">
                        </div>
                        <div class="statnumb">
                            <span class="counter">24</span><span>/</span><span class="counter">7</span>
                            <p>Support Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Hero-->


    <!--Start About-->
    <section class="service pad-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="image-block upset bg-shape wow fadeIn">
                        <img src="{{ url('storage/' . $service->image) }}" alt="image" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-8 block-1">
                    <div class="common-heading text-l pl25">
                        <span>Overview</span>
                        <h2>{{ $service->description_title }}</h2>
                        {!! $service->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About-->
    <!--Start Tech-->
    <div class="techonology-used-">
        <div class="container">
            <ul class="h-scroll tech-icons">
                @if($service->technologies)
                @foreach($service->technologies as $technology)
                <li><a href="#"><img src="{{ url('storage/' . $technology->logo) }}" alt="icon"></a></li>
                @endforeach
                @endif

            </ul>
        </div>
    </div>
    <!--End Tech-->
    <!--Start Service-->
    <section class="service-block bg-gradient6 pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="common-heading ptag">
                        <span>{{ $service->feature_section_title }}</span>
                        <h2>{{ $service->feature_section_sub_title }}</h2>
                        <p class="mb30">{{ $service->feature_section_text }}</p>
                    </div>
                </div>
            </div>
            <div class="row upset link-hover">
                @foreach($service->features as $feature)
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay="{{ $loop->index * 0.2 }}s">
                    <div class="s-block">
                        <div class="s-card-icon"><img src="{{ url('storage/' . $feature->icon) }}" alt="service" class="img-fluid" /></div>
                        <h4>{{ $feature->title }}</h4>
                        <p>{{ $feature->text }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="-cta-btn mt70">
                <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.3s">
                    <p>Hire a <span>Dedicated Developer</span></p>
                    <a href="#" class="btn-main bg-btn2 lnk">Hire Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!--End Service-->
    <!--Start Process-->
    <section class="service-block pad-tb light-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading ptag">
                        <span>{{ $service->process_section_title }}</span>
                        <h2>{{ $service->process_section_sub_title }}</h2>
                        <p>{{ $service->process_section_text }}</p>
                    </div>
                </div>
            </div>

            @foreach($service->processes as $index => $process)
            <div class="row upset justify-content-center mt60">
                @if($index % 2 == 0)
                {{-- Image Left, Text Right --}}
                <div class="col-lg-4 v-center order1">
                    <div class="image-block1">
                        <img src="{{ asset('storage/' . $process->image) }}" alt="{{ $process->title }}" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-7 v-center order2">
                    <div class="ps-block">
                        <span>{{ $index + 1 }}</span>
                        <h3>{{ $process->title }}</h3>
                        <p>{{ $process->text }}</p>
                    </div>
                </div>
                @else
                {{-- Text Left, Image Right --}}
                <div class="col-lg-7 v-center order2">
                    <div class="ps-block">
                        <span>{{ $index + 1 }}</span>
                        <h3>{{ $process->title }}</h3>
                        <p>{{ $process->text }}</p>
                    </div>
                </div>
                <div class="col-lg-4 v-center order1">
                    <div class="image-block1">
                        <img src="{{ asset('storage/' . $process->image) }}" alt="{{ $process->title }}" class="img-fluid" />
                    </div>
                </div>
                @endif
            </div>
            @endforeach

        </div>
    </section>
    <!--End Process-->
    <!--Start Why Choose-->
    <section class="service-block pad-tb bg-gradient7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading ptag">
                        <span>{{ $service->addon_section_title }}</span>
                        <h2>{{ $service->addon_section_sub_title }}</h2>
                        <p class="mb30">{{ $service->addon_section_text }}</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($service->addons as $addon)
                <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="{{ $loop->index * 0.3 }}s">
                    <div class="s-block wide-sblock">
                        <div class="s-card-icon"><img src="{{ url('storage/' . $addon->icon) }}" alt="service" class="img-fluid"></div>
                        <div class="s-block-content">
                            <h4>{{ $addon->title }}</h4>
                            <p>{{ $addon->text }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="-cta-btn mt70">
                <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.8s">
                    <p>Let's Start a <span>New Project</span> Together</p>
                    <a href="#" class="btn-main bg-btn2 lnk">Inquire Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!--End Why Choose-->
    <!--Start Pricing-->
    <section class="block-a1 pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading ptag">
                        <span>{{ $service->pricing_section_title }}</span>
                        <h2>{{ $service->pricing_section_sub_title }}</h2>
                        <p class="mb0">{{ $service->pricing_section_text }}</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($service->pricings as $plan)
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-table  {{ $loop->index == 1 ? 'best-plan mt60 bg-gradient4' : 'mt60' }}">
                        <div class="inner-table">
                            <img src="{{ url('storage/' . $plan->icon) }}" alt="Personal" />
                            <span class="title">{{ $plan->title }}</span>
                            <p class="title-sub">{{ $plan->sub_title }}</p>
                            <h2><sup>$</sup> {{ $plan->price_start }} - <sup>$</sup> {{ $plan->price_end }}</h2>
                            <p class="duration">{{ $plan->duration }}</p>
                            <div class="details">
                                <ul>
                                    @foreach($plan->features as $feature)
                                    <li>{{ $feature->text }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--End Pricing-->
    <!--Stat Projects-->
    <section class="featured-project pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="common-heading ptag">
                        <span>{{ $service->portfolio_section_title }}</span>
                        <h2>{{ $service->portfolio_section_sub_title }}</h2>
                        <p class="mb0">{{ $service->portfolio_section_text }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($service->portfolios as $portfolio)
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="{{ $loop->index * 0.2 }}s">
                    <div class="isotope_item hover-scale">
                        <div class="item-image">
                            <a href="#"><img src="{{ url('storage/' . $portfolio->image) }}" alt="portfolio" class="img-fluid" /> </a>
                        </div>
                        <div class="item-info">
                            <h4><a href="#">{{ $portfolio->name }}</a></h4>
                            <p>{{ $portfolio->service['title'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-lg-12 maga-btn mt60">
                    <a href="javascript:void(0)" class="btn-outline">View More Projects <i class="fas fa-chevron-right fa-icon"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--End Projects-->
    <!--Start reveiws-->
    <section class="reviews-block bg-gradient5 pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading ptag">
                        <span>{{ $service->testimonial_section_title }}</span>
                        <h2>{{ $service->testimonial_section_sub_title }}</h2>
                        <p class="mb30">{{ $service->testimonial_section_text }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($service->testimonials as $testimonial)
                <div class="col-md-4 mt30">
                    <div class="reviews-card pr-shadow">
                        <div class="row v-center">
                            <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
                        </div>
                        <div class="review-text pt-3">
                            <p>{{ $testimonial->content }}</p>
                        </div>
                        <div class="-client-details- d-flex align-items-center gap-3">
                            <div class="image rounded-circle overflow-hidden" style="width: 100px;">
                                <img src="{{ url('storage/' . $testimonial->image) }}" alt="review service logo">
                            </div>
                            <div class="reviewer-text">
                                <h4>{{ $testimonial->name }}</h4>
                                <p>{{ $testimonial->position }}, <small>{{ $testimonial->company }}</small></p>
                                <div class="star-rate">
                                    <ul>
                                        @for($i = 0; $i < 5; $i++)
                                            <li> <a href="javascript:void(0)" class="{{ $i < $testimonial->rating ? 'chked' : '' }}"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--End reviews-->
    <!--Start CTA-->
    <section class="cta-area pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <span>Let's work together</span>
                        <h2>We Love to Listen to Your Requirements</h2>
                        <a href="javascript:void(0)" class="btn-outline">Estimate Project <i class="fas fa-chevron-right fa-icon"></i></a>
                        <p class="cta-call">Or call us now <a href="tel:+1234567890"><i class="fas fa-phone-alt"></i> (123) 456 7890</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape shape-a1"><img src="{{ url('assets/frontend/images/shape/shape-3.svg') }}" alt="shape" /></div>
        <div class="shape shape-a2"><img src="{{ url('assets/frontend/images/shape/shape-4.svg') }}" alt="shape" /></div>
        <div class="shape shape-a3"><img src="{{ url('assets/frontend/images/shape/shape-13.svg') }}" alt="shape" /></div>
        <div class="shape shape-a4"><img src="{{ url('assets/frontend/images/shape/shape-11.svg') }}" alt="shape" /></div>
    </section>
    <!--End CTA-->
</div>