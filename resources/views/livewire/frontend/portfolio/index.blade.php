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
                        @foreach($services as $service)
                        <li data-filter=".{{ $service->slug }}">{{ $service->title }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row card-list">
            <div class="col-lg-4 col-md-6 grid-sizer"></div>
            @foreach($portfolios as $portfolio)
            <div class="col-lg-4 col-sm-6 single-card-item {{ $portfolio->service['slug'] }}">
                <div class="isotope_item hover-scale">
                    <div class="item-image">
                        <a href="#"><img src="{{ asset('storage/' . $portfolio->image) }}" alt="portfolio" class="img-fluid" /> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="#">{{ $portfolio->name }}</a></h4>
                        <p>{{ $portfolio->service['title'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>