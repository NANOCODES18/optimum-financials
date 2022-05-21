@extends("layouts.spacedcustomlayout")

@section('body')
   <!-- Start Hero Area -->
  <section class="hero-area">
    <div class="hero-slider-full owl-carousel">
        <!-- single -->
        <div class="hero-slider-item" style="background-image: url('assets/img/slide5.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="hero-lsider-caption">
                            <h4>We Provide</h4>
                            <h2>Diversified Portfolio</h2>
                            <a class="button-1" href="{{route('register')}}" >Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single -->
        <div class="hero-slider-item" style="background-image: url('assets/img/slide7.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="hero-lsider-caption">
                            <h4>We Provide</h4>
                            <h2>Customized Investment Options</h2>
                            <a class="button-1" href="{{route('register')}}">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single -->
        <div class="hero-slider-item" style="background-image: url('assets/img/slider3.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="hero-lsider-caption">
                            <h4>We Provide</h4>
                            <h2>Blockchain Driven Assets</h2>
                            <a class="button-1" href="{{route('register')}}">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->
<!-- Start Features Area -->
<section class="feature-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 align-self-center">
                <div class="feature-area-content">
                    <h5>INFO</h5>
                    <h2>What We Do</h2>
                    <a class="button-1" href="about.html">Learn More</a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="features-area-left-content">
                    <img class="shap-features" src="assets/img/dots-features-left.png" alt="shap" />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-item active">
                                <img src="assets/img/home-visit.png" alt="features" />
                                <h2>Identify Assets</h2>
                                <p>We identify high potential assets using our intelligent financial markets systems, combined with expert advice.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features-item">
                                <img src="assets/img/free-consult.png" alt="features" />
                                <h2>Analyze Risk</h2>
                                <p>We carry out risk-reward analysis to determine the risk exposure for each asset we select.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Features Area -->
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
<!-- Start Services Area Area -->
<section class="services-area section-padding-2">
    <div class="container">
        <!-- Section Headding -->
        <div class="row">
            <div class="col-lg-12 mb-50 text-center">
                <div class="section-headding">
                    <h2>Our Services</h2>
                    <p>
                        Here are our major instruments from which we build investors' portfolios. <br> These instruments and their underlying assets were carefully selected, <br> using high-end fundamental and technical analysis.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single -->
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="info-box-1">
                    <div class="info-box-1-inner">
                        <div class="number-c">01</div>
                        <div class="icon">
                            <i class="fas fa-coins"></i>
                        </div>
                        <div class="content">
                            <h3><a href="javascript:void(0)">Cryptocurrencies</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single -->
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="info-box-1">
                    <div class="info-box-1-inner">
                        <div class="number-c">02</div>
                        <div class="icon">
                            <i class="fas fa-pencil-ruler"></i>
                        </div>
                        <div class="content">
                            <h3><a href="javascript:void(0)">Binary Option</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single -->
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="info-box-1">
                    <div class="info-box-1-inner">
                        <div class="number-c">03</div>
                        <div class="icon">
                            <i class="fas fa-exchange-alt"></i>
                        </div>
                        <div class="content">
                            <h3><a href="javascript:void(0)">Stock & ETFs</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Area Area -->
<!-- Start Pricing Plane Area -->
<section class="procing-lane-area section-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-50 text-center">
                <div class="section-headding">
                    <h5>Investments</h5>
                    <h2>Our Plans</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row">
@if ($investmentplans != null) 

@foreach ($investmentplans as $inv_plan)

<div class="col-lg-2 offset-lg-1 col-md-3 mb-30">
    <div class="pricing-item">
        <div class="pricing-header">
            <h2>{{$inv_plan->percentage}}% Daily</h2>
            <p>Duration: {{substr(Carbon\Carbon::now()->addDays($inv_plan->noofrepeat)->diffForHumans(), 0, -8)}} </p>

        </div>
        <div class="pricing-content">
            <ul>
                <li>Min: ${{$inv_plan->minimum}}</li>
                <li>Max: ${{$inv_plan->maximum}}</li>
                <li><b>PROFIT ACCESSIBLE AFTER 7 DAYS </b></li>
                <li><b>24/7 SUPPORT</b></li>
            </ul>
        </div>
    </div>
</div>
    
@endforeach
    
@endif

                


           



            </div>
        </div>
    </div>
</section>
<!-- End Pricing Plane Area -->
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
<!-- Start Contact Area -->
<section class="contact-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 align-self-center">
                <div class="contact-form">
                    <h2>Get In Touch</h2>
                    <form id="contact-form" action="https://troveoption.com/postcontact" method="POST">
                        <input type="hidden" name="_token" value="6QXnUSjWj0gQ5bImD5SOkGNR3Cploac0EE65GmvJ">                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="text" name="name" placeholder="Your Name" />
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="email" name="email" placeholder="Your Email" />
                                    <i class="far fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="text" name="phone" placeholder="Your Phone" />
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="text" name="subject" placeholder="Your Subjects" />
                                    <i class="fas fa-file-alt"></i>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input">
                                    <textarea name="message" placeholder="Write Message"></textarea>
                                    <i class="fas fa-pen"></i>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="button-1">Send Message</button>
                            </div>
                        </div>
                    </form>
                    <p class="ajax-response"></p>
                </div>
            </div>
            <div class="col-lg-5 align-self-center">
                <div class="faq-full">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    How can I sign up for an account?
                                </a>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        To signup for a new account is easy and straightforward. All you have to do is click on the Signup button at the top of the page and you will be redirected to a Signup form. Simply fill the form and submit, and your account is ready. It's that quick and easy with us!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <a class="collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What is the minimum/maximum investment amount?
                                </a>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        We're flexible at {{$company_detail? $company_detail->companyname : "Name of company"}}. Our investment capitals are adapted to investor needs, and to the stipulated plans we have written out in our Pricing page. To see the default plans, go over to the Pricing page from the menu and select a plan that suits your budget and financial goals. But if you want a special plan that's not in our Pricing Table, just make a request and if you qualify, you'll get it!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <a class="collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How secure is my investment
                                </a>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        we are a registered and regulated investment company. It is our responsibility to protect our clients and their investments with us. We keep client information private and we ensure that their investments insured by third-party investment insurance companies. Our investors have nothing to worry about at all!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Contact
    @endsection
