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


<!--Start About-->
<section class="about-agency pad-tb block-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 v-center">
                <div class="about-image">
                    <img src="{{ url('assets/frontend/images/about/company-about.png') }}" alt="about us" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="common-heading text-l ">
                    <span>About Us</span>
                    <h2>About Agency</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. is simply dummy text of the printing and typesetting industry. </p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="row in-stats small about-statistics">
                    <div class="col-lg-4 col-sm-4">
                        <div class="statistics">
                            <div class="statnumb counter-number">
                                <span class="counter">450</span>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="statistics">
                            <div class="statnumb">
                                <span class="counter">95</span><span>k</span>
                                <p>Hours Worked</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="statistics mb0">
                            <div class="statnumb counter-number">
                                <span class="counter">850</span>
                                <p>Projects Done</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About-->

<!--Start Mission Vision-->
<section class="missionvision dark-bg4 pad-tb bg-gradient3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <h2>A group of creative minds dedicated to creating the best apps and websites in the world.</h2>
            </div>
            <div class="col-lg-6 col-sm-12">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <p class="mt15">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
        </div>
        <div class="row mt30">
            <div class="col-lg-6 col-sm-12 mt30">
                <div class="s-block2">
                    <div class="card-icon"><img src="{{ url('assets/frontend/images/icons/vision.png') }}" alt="icon" class="w80 mb20"></div>
                    <h3>Our Vision</h3>
                    <p class="mt15">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 mt30">
                <div class="s-block2">
                    <div class="card-icon"><img src="{{ url('assets/frontend/images/icons/mountain.png') }}" alt="icon" class="w80 mb20"></div>
                    <h3>Our Mission</h3>
                    <p class="mt15">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Mission Vision-->

<!--Start About Features-->
<section class="about-agencys pad-tb block-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading">
                    <span>Our Philosophy</span>
                    <h2>Our Business Philosophy</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center niwaxgap40">
            <div class="col-lg-5 v-center order1">
                <div class="image-block">
                    <img src="{{ url('assets/frontend/images/about/leadership.jpg') }}" alt="about us Niwax" class="img-fluid" />
                </div>
            </div>

            <div class="col-lg-5 v-center order2">
                <div class="common-heading text-l">
                    <span>Supervision</span>
                    <h2 class="mb20">Leadership</h2>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center niwaxgap40 mt60">
            <div class="col-lg-5 v-center order2">
                <div class="common-heading text-l">
                    <span>Strength</span>
                    <h2 class="mb20">Team Collaboration</h2>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>

            <div class="col-lg-5 v-center order1">
                <div class="image-block">
                    <img src="{{ url('assets/frontend/images/about/collaboration.jpg') }}" alt="about us Niwax" class="img-fluid" />
                </div>
            </div>
        </div>

        <div class="row justify-content-center niwaxgap40 mt60">

            <div class="col-lg-5 v-center order1">
                <div class="image-block">
                    <img src="{{ url('assets/frontend/images/about/transparency.jpg') }}" alt="about us Niwax" class="img-fluid" />
                </div>
            </div>

            <div class="col-lg-5 v-center order2">
                <div class="common-heading text-l">
                    <span>Quality</span>
                    <h2 class="mb20">Transparency & Integrity</h2>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End About Features-->
<!--Start why-choose-->
<section class="why-choose pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-heading">
                    <span>We Are Awesome</span>
                    <h2 class="mb30">Why Choose Niwax</h2>
                </div>
            </div>
        </div>
        <div class="row upset">
            <div class="col-lg-3 col-sm-6 mt30">
                <div class="s-block up-hor">
                    <div class="s-card-icon"><img src="{{ url('assets/frontend/images/icons/research.svg') }}" alt="service" class="img-fluid" /></div>
                    <h4>Reasearch and Analysis</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30">
                <div class="s-block up-hor">
                    <div class="s-card-icon"><img src="{{ url('assets/frontend/images/icons/chat.svg') }}" alt="service" class="img-fluid" /></div>
                    <h4>Negotiation and power</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30">
                <div class="s-block up-hor">
                    <div class="s-card-icon"><img src="{{ url('assets/frontend/images/icons/monitor.svg') }}" alt="service" class="img-fluid" /></div>
                    <h4>Creative and innovative solutions</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30">
                <div class="s-block up-hor">
                    <div class="s-card-icon"><img src="{{ url('assets/frontend/images/icons/trasparency.svg') }}" alt="service" class="img-fluid" /></div>
                    <h4>Trasparency and ease of work</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End why-choose-->
<!--Start timeline-->
<section class="niwaxcompanytimeline pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-heading">
                    <span>The Time Machine</span>
                    <h2>A Timeline of Our Journey</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="timeline">
                    <div class="timeline-row niwaxcnnt1">
                        <div class="timeline-time">
                            Establishment<small>2005</small>
                        </div>
                        <div class="timeline-content">
                            <h4>The Company Born</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        </div>
                    </div>
                    <div class="timeline-row niwaxcnnt2">
                        <div class="timeline-time">
                            New Office<small>2006</small>
                        </div>
                        <div class="timeline-content">
                            <h4>New Workspace</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        </div>
                    </div>
                    <div class="timeline-row niwaxcnnt1">
                        <div class="timeline-time">
                            New Horizons<small>2008</small>
                        </div>
                        <div class="timeline-content">
                            <h4>New Horizons</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        </div>
                    </div>
                    <div class="timeline-row niwaxcnnt2">
                        <div class="timeline-time">
                            Growing Teams<small>2010</small>
                        </div>
                        <div class="timeline-content">
                            <h4>We are 2500 and growing</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        </div>
                    </div>
                    <div class="timeline-row niwaxcnnt1">
                        <div class="timeline-time">
                            Happy Clients<small>2011</small>
                        </div>
                        <div class="timeline-content">
                            <h4>5K Happy Clients</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <div class="thumbs">
                                <img class="img-fluid rounded" src="{{ url('assets/frontend/images/user-thumb/girl.jpg') }}" alt="Niwax">
                                <img class="img-fluid rounded" src="{{ url('assets/frontend/images/user-thumb/girl2.jpg') }}" alt="Niwax">
                            </div>
                        </div>
                    </div>
                    <div class="timeline-row niwaxcnnt2">
                        <div class="timeline-time">
                            Awards<small> 2014</small>
                        </div>
                        <div class="timeline-content">
                            <h4>Academy Sward for Best Company</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <div class="thumbs">
                                <img class="img-fluid rounded" src="{{ url('assets/frontend/images/icons/badge.svg') }}" alt="Niwax">
                                <img class="img-fluid rounded" src="{{ url('assets/frontend/images/icons/badge.svg') }}" alt="Niwax">
                            </div>
                        </div>
                    </div>
                    <div class="timeline-row niwaxcnnt1">
                        <div class="timeline-time">
                            New Milestone<small>2020</small>
                        </div>
                        <div class="timeline-content">
                            <h4>A New Milestone Achieved</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                    </div>
                    <div class="timeline-row niwaxcnnt1">
                        <div class="timeline-time">
                            Happy Clients<small>2021</small>
                        </div>
                        <div class="timeline-content">
                            <h4>5K Happy Clients</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <div class="thumbs">
                                <img class="img-fluid rounded" src="{{ url('assets/frontend/images/user-thumb/girl.jpg') }}" alt="Niwax">
                                <img class="img-fluid rounded" src="{{ url('assets/frontend/images/user-thumb/girl2.jpg') }}" alt="Niwax">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End timeline-->
<!--Start Team-->
<section class="dg-testinomial-section bg-gradient5 dark-bg4  pb80 pt80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading">
                    <h2 class="mb20">Meet our Team</h2>
                    <p class="mb30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
        <div class="single-slide owl-carousel mt60">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4">
                    <div class="image-block upset h-scl-">
                        <div class="image-div h-scl-base"><img src="{{ url('assets/frontend/images/team/team-single.jpg') }}" alt="team" class="img-fluid" /></div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="full-image-card mt0">
                        <div class="info-text-block">
                            <h3><a href="#">Anna Rexia</a></h3>
                            <p>Company CTO</p>
                            <div class="social-media-profile">
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>
                        <div class="otherinfo">
                            <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4">
                    <div class="image-block upset">
                        <div class="image-div"><a href="#"><img src="{{ url('assets/frontend/images/team/team-single.jpg') }}" alt="team" class="img-fluid" /></a></div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="full-image-card mt0">
                        <div class="info-text-block">
                            <h3><a href="#">Anna Rexia</a></h3>
                            <p>Company CTO</p>
                            <div class="social-media-profile">
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>
                        <div class="otherinfo">
                            <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mt30 h-scl-">
                        <div class="img-ca2set h-scl-base"><img src="{{ url('assets/frontend/images/about/office-1.jpg') }}" alt="companyname" class="img-fluid w-100"></div>
                    </div>
                    <div class="col-lg-7 mt30 h-scl-">
                        <div class="img-ca2set h-scl-base"><img src="{{ url('assets/frontend/images/about/office-2.jpg') }}" alt="companyname" class="img-fluid w-100"></div>
                    </div>
                    <div class="col-lg-7 mt30 h-scl-">
                        <div class="img-ca2set h-scl-base"><img src="{{ url('assets/frontend/images/about/office-3.jpg') }}" alt="companyname" class="img-fluid w-100"></div>
                    </div>
                    <div class="col-lg-5 mt30 h-scl-">
                        <div class="img-ca2set h-scl-base"><img src="{{ url('assets/frontend/images/about/office-4.jpg') }}" alt="companyname" class="img-fluid w-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Team-->


@endsection