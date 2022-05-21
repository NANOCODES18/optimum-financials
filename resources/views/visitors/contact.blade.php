@extends("layouts.spacedcustomlayout")

@section("body")


  <!-- Start Breadcrumb Area -->
  <div class="breadcrumb-area" style="background-image: url('assets/img/breadcrumb.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Area -->
<!-- Start Contact Area -->
<section class="contact-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 align-self-center">
                <div class="contact-form">
                    <h2>Get In Touch</h2>
                    <form id="contact-form" action="{{route('postcontact')}}" method="POST">
                      @csrf                      <div class="row">
                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="text" name="name" required placeholder="Your Name" />
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="email" name="email" required placeholder="Your Email" />
                                    <i class="far fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="text" name="phone"  placeholder="Your Phone" />
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
                                    <textarea name="message" required placeholder="Write Message"></textarea>
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
            <div class="col-lg-4 align-self-center">
                <div class="contact-form-info" style="background-image: url('assets/img/contact.jpg');">
                    <h2>Don't hesitate to contact us</h2>
                    <div class="contact-info-list">
                        <div class="item mb-20">
                            <div class="icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="content">
                                <h4>Drop A Mail</h4>
                                <p>{{$company_detail? $company_detail->companyemail : "company email"}}</p>

                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="content">
                                <h4>Call Us</h4>
                                <p>{{$company_detail? $company_detail->companyphone : "company phone"}}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->


@endsection()
