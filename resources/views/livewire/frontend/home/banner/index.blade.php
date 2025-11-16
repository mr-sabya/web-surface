<section class="hero-card-web mobile-app-">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 v-center">
                <div class="hero-heading-sec2 niwax" data-rellax-speed="3">
                    <h1 class="wow fadeIn" data-wow-delay="0.2s">{{ $banner->heading }}</h1>
                    <p class="wow fadeIn" data-wow-delay="0.4s">{{ $banner->paragraph }}</p>
                    <div class="content-sec  d-flex mt30 v-center text-w wow fadeIn" data-wow-delay="0.6s">
                        <div class="mr25"><a href="{{ $banner->btn_link }}" class="btn-main bg-btn4 lnk">{{ $banner->btn_text }}<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a></div>
                        <div class="video-intro-pp v-center"><a class="video-link play-video" href="{{ $banner->video_link }}"><span class="triangle-play"></span></a></div>
                        <div class="title-hero-oth v-center">
                            <p>See Profile Video</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 v-center">
                <div class="app-hero-bnr wow fadeIn" data-wow-delay="0.4s"> <img src="{{ url('storage/' . $banner->image) }}" alt="niwax mobile app development company" class="img-fluid"> </div>
            </div>
        </div>
    </div>
</section>