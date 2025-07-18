<footer>
    <div class="footer-row1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="email-subs">
                        <h3>Get New Insights Weekly</h3>
                        <p>News letter dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Enter your email</p>
                    </div>
                </div>
                <div class="col-lg-6 v-center">
                    <div class="email-subs-form">
                        <form>
                            <input type="email" placeholder="Email Your Address" name="emails">
                            <button type="submit" name="submit" class="lnk btn-main bg-btn">Subscribe <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-row2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-sm-6  ftr-brand-pp">
                    <a class="navbar-brand mt30 mb25 f-dark-logo" href="{{ route('home') }}" wire:navigate>
                        @if($settings->logo)
                        <img src="{{ asset('storage/' . $settings->logo) }}" alt="Logo" />
                        @else
                        <img src="{{ url('assets/frontend/images/logo.png') }}" alt="Logo" />
                        @endif
                    </a>
                    <a class="navbar-brand mt30 mb25 f-white-logo" href="{{ route('home') }}" wire:navigate>
                        @if($settings->white_logo)
                        <img src="{{ asset('storage/' . $settings->white_logo) }}" alt="Logo" />
                        @else
                        <img src="{{ url('assets/frontend/images/white-logo.png') }}" alt="Logo" />
                        @endif
                    </a>
                    <p>{{ $settings->footer_about }}</p>
                    <a href="#" class="btn-main bg-btn3 lnk mt20">Become Partner <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h5>Contact Us</h5>
                    <ul class="footer-address-list ftr-details">
                        <li>
                            <span><i class="fas fa-envelope"></i></span>
                            <p>Email <span> <a href="mailto:{{ $settings->email }}">{{ $settings->email ?? 'N/A' }}</a></span></p>
                        </li>
                        <li>
                            <span><i class="fas fa-phone-alt"></i></span>
                            <p>Phone <span> <a href="tel:{{ $settings->phone }}">{{ $settings->phone ?? 'N/A'}}</a></span></p>
                        </li>
                        <li>
                            <span><i class="fas fa-map-marker-alt"></i></span>
                            <p>Address <span> {{ $settings->address}}</span></p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h5>Company</h5>
                    <ul class="footer-address-list link-hover">
                        <li><a href="get-quote.html">Contact</a></li>
                        <li><a href="javascript:void(0)">Customer's FAQ</a></li>
                        <li><a href="javascript:void(0)">Refund Policy</a></li>
                        <li><a href="javascript:void(0)">Privacy Policy</a></li>
                        <li><a href="javascript:void(0)">Terms and Conditions</a></li>
                        <li><a href="javascript:void(0)">License & Copyright</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-6 footer-blog-">
                    <h5>Latest Blogs</h5>
                    <div class="single-blog-">
                        <div class="post-thumb"><a href="#"><img src="{{ url('assets/frontend/images/blog/blog-small.jpg') }}" alt="blog"></a></div>
                        <div class="content">
                            <p class="post-meta"><span class="post-date"><i class="far fa-clock"></i>April 15, 2020</span></p>
                            <h4 class="title"><a href="https://separateweb.com/">We Provide you Best &amp; Creative Consulting Service</a></h4>
                        </div>
                    </div>
                    <div class="single-blog-">
                        <div class="post-thumb"><a href="#"><img src="{{ url('assets/frontend/images/blog/blog-small.jpg') }}" alt="blog"></a></div>
                        <div class="content">
                            <p class="post-meta"><span class="post-date"><i class="far fa-clock"></i>April 15, 2020</span></p>
                            <h4 class="title"><a href="https://separateweb.com/">We Provide you Best &amp; Creative Consulting Service</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-brands">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 v-center">
                    <h5 class="mb10">Top App Development Companies</h5>
                    <p>News letter dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Enter your email</p>
                </div>
                <div class="col-lg-8 v-center">
                    <ul class="footer-badges-">
                        <li><a href="#"><img src="{{ url('assets/frontend/images/about/badges-a.png') }}" alt="badges"></a></li>
                        <li><a href="#"><img src="{{ url('assets/frontend/images/about/badges-b.png') }}" alt="badges"></a></li>
                        <li><a href="#"><img src="{{ url('assets/frontend/images/about/badges-c.png') }}" alt="badges"></a></li>
                        <li><a href="#"><img src="{{ url('assets/frontend/images/about/badges-d.png') }}" alt="badges"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-row3">
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-social-media-icons">
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-youtube"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-pinterest-p"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-vimeo-v"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-dribbble"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-behance"></i></a>
                        </div>
                        <div class="footer-">
                            <p>© 2020-2022. All Rights Reserved By <a href="https://themeforest.net/user/rajesh-doot/portfolio" target="blank">Rajesh Doot</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>