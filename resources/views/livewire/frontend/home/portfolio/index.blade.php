<section class="portfolio-section pad-tb">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-8">
                <div class="common-heading">
                    <span>{{ $portfolio_section->title }}</span>
                    <h2 class="mb20">{{ $portfolio_section->subtitle }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($portfolios as $portfolio)
            <div class="col-lg-4 col-sm-6 col mt40 wow fadeIn" data-wow-delay="{{ $loop->index * 0.2 }}s">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="#"><img src="{{ asset('storage/' . $portfolio->image) }}" alt="image" class="img-fluid" /> </a>
                    </div>
                    <div class="item-info-div shdo">
                        <h4><a href="#">{{ $portfolio->name }}</a></h4>
                        <p>{{ $portfolio->service['title'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>