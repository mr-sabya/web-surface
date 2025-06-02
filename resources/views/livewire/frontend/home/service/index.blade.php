<section class="service-section-app pad-tb dark-bg2">
    <div class="sctxt">{{ $service_section->section_text }}</div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-heading ptag">
                    <span>{{ $service_section->title }}</span>
                    <h2>{{ $service_section->subtitle }}</h2>
                    <p class="mb30">{{ $service_section->text }}</p>
                </div>
            </div>
        </div>
        <div class="row upset">
            @foreach($services as $service)
            <div class="col-lg-4 col-md-6 mt30 wow fadeIn" data-wow-delay="0.2s">
                <div class="service-card-app hoshd">
                    <h4>{{ $service->title }}</h4>
                    <ul class="-service-list mt10">
                        @foreach($service->technologies as $technology)
                        <li> <a href="#">{{ $technology->name }}</a> </li>
                        @endforeach
                    </ul>
                    <div class="tec-icon mt30">
                        <ul class="servc-icon-sldr">
                            @foreach($service->technologies as $technology)
                            <li>
                                <a href="#">
                                    <div class="img-iconbb"><img src="{{ url('storage/' . $technology->logo) }}" alt="img"></div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <p class="mt20">{{ $service->short_description }}</p>
                    <a href="{{ route('service.show', $service->slug) }}" wire:navigate class="mt20 link-prbs">Read More <i class="fas fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>