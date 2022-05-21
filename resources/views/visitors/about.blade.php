@extends("layouts.spacedcustomlayout")

@section("body")


  <!-- Start Breadcrumb Area -->
  <div class="breadcrumb-area" style="background-image: url('assets/img/breadcrumb.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2>About Us</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Area -->
<!-- Start About Area -->
<section class="about-area section-padding section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-thumbnail">
                    <img src="assets/img/about.jpg" alt="about" />
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-content">
                    <h5>About Our Company</h5>
                    <h2>{{$company_detail? $company_detail->companyname : "Name of company"}}</h2>
                    <div class="about-content-navs-tab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="aboutus-tab" data-bs-toggle="tab" data-bs-target="#aboutus" type="button" role="tab" aria-controls="aboutus" aria-selected="true">About Us</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="mission-tab" data-bs-toggle="tab" data-bs-target="#mission" type="button" role="tab" aria-controls="mission" aria-selected="false">Our Mission</button>
                            </li>
                            <!-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button" role="tab" aria-controls="vision" aria-selected="false">Our Vision</button>
                            </li> -->
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="aboutus" role="tabpanel" aria-labelledby="aboutus-tab">
                                <div class="about-content-navs-tab-content-full">
                                    <div class="title">
                                        <h2>11</h2>
                                        <span>Years of Experience</span>
                                    </div>
                                    <p>We identify and Analyze financial assets to maximize return.</p>
                                    <ul>
                                        <li><i class="far fa-check-square"></i> Identify Assets</li>
                                        <li><i class="far fa-check-square"></i> Analyze Risks</li>
                                    </ul>
                                    <a class="button-1" href="about.html">Learn More</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="mission-tab">
                                <div class="about-content-navs-tab-content-full">
                                    <div class="title">
                                        <h2>Our mission</h2>
                                        <span>is to deliver growth to your investments </span>
                                    </div>
                                    <ul>
                                        <li><i class="far fa-check-square"></i> Our trading strategies include a combination of human expertise and artificial intelligence in spoting profitable trade opportunities.</li>
                                        <li><i class="far fa-check-square"></i> The one thing that is common amongst all our clients is continuous increase in ROI of their investments. We deliver on our word!.</li>
                                    </ul>
                                    <a class="button-1" href="about.html">Learn More</a>
                                </div>
                            </div>
                            <!-- <div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="vision-tab">
                                <div class="about-content-navs-tab-content-full">
                                    <div class="title">
                                        <h2>16</h2>
                                        <span>Delivering Consistent Promises </span>
                                    </div>
                                    <p>We develop innovative and contemporary web and mobile apps which makes the world a smaller place through faster services.</p>
                                    <ul>
                                        <li><i class="far fa-check-square"></i> 1. Holistic Web Solutions</li>
                                        <li><i class="far fa-check-square"></i> 2. Software Consulting</li>
                                    </ul>
                                    <a class="button-1" href="https://troveoption.com/about">Learn More</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->
<!-- Start Counter Area -->
<div class="counter-area pt-50 pb-20" style="background-image: url('assets/img/counterbg.jpg');">
    <div class="container">
        <div class="row">
            <!-- Single -->
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="counter-item">
                    <div class="icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <div class="content">
                        <div class="title">
                            <h2 class="counter">{{$company_features? $company_features->totalusers:0}}</h2>
                            <h3>+</h3>
                        </div>
                        <p>Satisfield customers</p>
                    </div>
                </div>
            </div>
            <!-- Single -->
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="counter-item">
                    <div class="icon">
                        <i class="fas fa-dna"></i>
                    </div>
                    <div class="content">
                        <div class="title">
                            <h2 class="counter">{{$company_features? $company_features->onlinevisitors:0}}</h2>
                            <h3>+</h3>
                        </div>
                        <p>Consultations</p>
                    </div>
                </div>
            </div>
            <!-- Single -->
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="counter-item">
                    <div class="icon">
                        <i class="far fa-gem"></i>
                    </div>
                    <div class="content">
                        <div class="title">
                            <h2 class="counter">{{$company_features? $company_features->totaldeposit:0}}</h2>
                            <h3>+</h3>
                        </div>
                        <p>Awards Won</p>
                    </div>
                </div>
            </div>
            <!-- Single -->
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="counter-item">
                    <div class="icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="content">
                        <div class="title">
                            <h2 class="counter">{{$company_features? $company_features->started:0}}</h2>
                            <h3>+</h3>
                        </div>
                        <p>Partnership</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Counter Area -->
<!-- Start We Provide Area -->
<section class="web-prodive" style="background-image: url('assets/img/provide.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="we-provide-content">
                    <h2>What Our Investors Say</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End We Provide Area -->
<!-- Start Testimonial Area -->
<section class="testimonial-area">
    <div class="container">
        <div class="testimonial-area-full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-item-full owl-carousel" style="background-image: url('assets/img/provide.jpg');">
                        <!-- Single -->
                        <div class="testimonial-item">
                            <div class="thumbnail">
                                <img src="assets/img/testimonial2.jpg" alt="img" />
                            </div>
                            <div class="content">
                                <p>As a developer, I spend time mostly
                                    in the field, seeking designing. Having an investment with {{$company_detail? $company_detail->companyname : "Name of company"}} has assured me steady weekly
                                    income in terms of profits from my investment.
                                    I recommend this company!.</p>
                                <div class="ratting">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <h4>John Cole</h4>
                                <h5>Mobile App Developer</h5>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="testimonial-item">
                            <div class="thumbnail">
                                <img src="assets/img/testimonial1.jpg" alt="img" />
                            </div>
                            <div class="content">
                                <p>Investing is necessary!
                                    Working for a paycheck all your life is no good, especially at retirement. This realization led
                                    me to seek out ways to increase my savings, and that's when I found {{$company_detail? $company_detail->companyname : "Name of company"}}. Payouts are
                                    amazingly fast and easy!.</p>
                                <div class="ratting">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <h4>Amir Khan</h4>
                                <h5>Investor</h5>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="testimonial-item">
                            <div class="thumbnail">
                                <img src="assets/img/testimonial.png" alt="img" />
                            </div>
                            <div class="content">
                                <p>My husband and I
                                    have tried a couple of investment companies in the past, many couldn't deliver on their promises,
                                    so when we tried {{$company_detail? $company_detail->companyname : "Name of company"}}, i didn't really expect much, but when we started seeing our profits
                                    I was so excited I had to tell all my friends. Thank you.</p>
                                <div class="ratting">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <h4>Jane Amanda</h4>
                                <h5>Investor</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Area -->
<!-- Start Team Area -->
<section class="team-area section-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-50 text-center">
                <div class="section-headding">
                    <h5>Our Team</h5>
                    <h2>Our Team Members</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single -->
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="team-item">
                    <div class="thumbnail">
                        <img src="assets/img/team/1.jpg" alt="img" />
                    </div>
                    <div class="content">
                        <h2>Marie T. Gayle</h2>
                        <p>Chief Information Officer</p>
                    </div>
                </div>
            </div>
            <!-- Single -->
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="team-item">
                    <div class="thumbnail">
                        <img src="assets/img/team/2.jpg" alt="img" />
                    </div>
                    <div class="content">
                        <h2>ACD Cole</h2>
                        <p>CTO</p>
                    </div>
                </div>
            </div>
            <!-- Single -->
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="team-item">
                    <div class="thumbnail">
                        <img src="assets/img/team/3.jpg" alt="img" />
                    </div>
                    <div class="content">
                        <h2>Marina Mojo</h2>
                        <p>Chief Marketer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Team Area -->


@endsection
