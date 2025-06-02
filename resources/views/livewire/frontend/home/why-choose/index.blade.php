<section class="why-choos-lg pad-tb deep-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="common-heading text-l">
                    <span>{{ $whyChooseUs->section_heading }}</span>
                    <h2 class="mb20">{{ $whyChooseUs->title_normal }} <span class="text-second text-bold">{{ $whyChooseUs->title_highlighted }}</span> {{ $whyChooseUs->title_suffix }}</h2>
                    <p>{{ $whyChooseUs->description }}</p>
                    <div class="itm-media-object mt40 tilt-3d">
                        @foreach($whyChooseUs->features as $feature)
                        <div class="media {{ $loop->first ? '' : 'mt40' }}">
                            <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="{{ url('storage/' . $feature->icon) }}" alt="icon" class="layer"></div>
                            <div class="media-body">
                                <h4>{{ $feature->title }}</h4>
                                <p>{{ $feature->description }}</p>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="single-image bg-shape-dez wow fadeIn" data-wow-duration="2s">
                    <img src="{{ url('storage/' . $whyChooseUs->image) }}" alt="image" class="img-fluid">
                </div>
                <p class="text-center mt30">{{ $whyChooseUs->image_text }}</p>
                <div class="cta-card mt60 text-center">
                    <h3 class="mb20">{{ $whyChooseUs->cta_title_prefix }} <span class="text-second text-bold">{{ $whyChooseUs->cta_title_highlight }}</span> {{ $whyChooseUs->cta_title_suffix }}</h3>
                    <p>{{ $whyChooseUs->cta_description }}</p>
                    <a href="#" class="btn-outline lnk mt30">{{ $whyChooseUs->cta_button_text }} <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>