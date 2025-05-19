<section class="about-sec-app pad-tb pt60 dark-bg2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="common-heading text-l">
                    <h2 class="mb30"><span class="text-second text-bold">{{ $about->title_span }}</span> {{ $about->title }}</h2>
                    
                    {!! $about->description !!}
                </div>
                <div class="cta-card mt40">
                    <a href="{{ $about->button_link }}" class="btn-outline lnk" target="{{ $about->button_target }}">{{ $about->button_text }}<i class="{{ $about->button_icon }}"></i><span class="circle"></span></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="funfact">
                    <div class="row">
                        @foreach($about->features as $feature)
                        <div class="col-lg-4 col-md-6 col-sm-12 col-6">
                            <div class="funfct {{ $feature->color_code}}">
                                <img src="{{ url('storage/' . $feature->icon) }}" alt="niwax app development template">
                                <span class="services-cuntr counter">{{ $feature->counter}}</span><span class="services-cuntr">{{ $feature->counter_icon }}</span>
                                <p>{{ $feature->text }}</p>
                            </div>
                        </div>
                        @endforeach
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>