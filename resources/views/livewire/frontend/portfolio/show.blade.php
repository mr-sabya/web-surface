<section class="portfolio-page pad-tb">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-lg-7">
                <div class="common-heading pp p-details">
                    <span>{{ $portfolio->name }}</span>
                    <h1>{{ $portfolio->title }}</h1>
                    <p>{{ $portfolio->short_description }}</p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="portfolio-details">
                    <div class="portfolio-meta link-hover">
                        <ul>
                            <li>
                                <i class="fas fa-user"></i>
                                <p>Client Name: <span>Creative Tom</span></p>
                            </li>
                            <li>
                                <i class="fas fa-tags"></i>
                                <p>Project Category: <span>Web design, Developments</span></p>
                            </li>
                            <li>
                                <i class="fas fa-calendar-alt"></i>
                                <p>Project Date: <span>20 May 2020</span></p>
                            </li>
                            <li><a href="#" target="_blank">Open External Link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 single-card-item">
                <div class="isotope_item pv-">
                    {!! $portfolio->description !!}
                </div>
            </div>
        </div>
    </div>
</section>