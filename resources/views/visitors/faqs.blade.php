@extends('layouts.spacedcustomlayout')

@section('body')
    <!-- Start Breadcrumb Area -->
    <div class="breadcrumb-area" style="background-image: url('assets/img/breadcrumb.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2>Frequently Ask Questions</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->
    <!-- Start Faq Area -->
    <section class="faq-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="faq-full">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="false" aria-controls="collapseOne">
                                        How can I sign up for an account?
                                    </a>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            To signup for a new account is easy and straightforward. All you have to do is
                                            click on the Signup button at the top of the page and you will be redirected to
                                            a Signup form. Simply fill the form and submit, and your account is ready. It's
                                            that quick and easy with us!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <a class="collapsed" href="#" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What is the minimum/maximum investment amount?
                                    </a>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            We're flexible at
                                            {{ $company_detail ? $company_detail->companyname : 'Name of company' }}. Our
                                            investment capitals are adapted to investor
                                            needs, and to the stipulated plans we have written out in our Pricing page. To
                                            see the default plans, go over to the Pricing page from the menu and select a
                                            plan that suits your budget and financial goals. But if you want a special plan
                                            that's not in our Pricing Table, just make a request and if you qualify, you'll
                                            get it!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <a class="collapsed" href="#" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How secure is my investment
                                    </a>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            we are a registered and regulated investment company. It is our responsibility
                                            to protect our clients and their investments with us. We keep client information
                                            private and we ensure that their investments insured by third-party investment
                                            insurance companies. Our investors have nothing to worry about at all!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading4">
                                    <a class="collapsed" href="#" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        What if I can&#039;t log into my account because I forgot my password?
                                    </a>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Click forgot password link, type your e-mail and you&#039;ll receive a link to
                                            reset your password or chat the Live support. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading5">
                                    <a class="collapsed" href="#" data-bs-toggle="collapse"
                                        data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        After I make a withdrawal request, when will the funds be available on my wallet?
                                    </a>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Funds are automated and instantly processed to your wallet after your
                                            withdrawal. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading6">
                                    <a class="collapsed" href="#" data-bs-toggle="collapse"
                                        data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                        How can I check my account balances?
                                    </a>
                                </h2>
                                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            You can access your account information 24/7 </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading7">
                                    <a class="collapsed" href="#" data-bs-toggle="collapse"
                                        data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                        Can I open several accounts in your program?
                                    </a>
                                </h2>
                                <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            No! Multiple account isn’t allowed but you can make multiple deposit on same
                                            account. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading8">
                                    <a class="collapsed" href="#" data-bs-toggle="collapse"
                                        data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                        Who manages the funds?
                                    </a>
                                </h2>
                                <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Funds are managed by a team of
                                            {{ $company_detail ? $company_detail->companyname : 'Name of company' }}
                                            investment experts. Be rest assured your money is in save hands as we are
                                            regulated by Anti-Money Laundering (AML) scheme program. </p>
                                    </div>
                                </div>
                            </div>
                            @if ($faqs)
                    @foreach ($faqs as $faq)

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading9">
                            <a class="collapsed" href="#" data-bs-toggle="collapse"
                                data-bs-target="#collapse9{{$loop->index}}" aria-expanded="false" aria-controls="collapse9{{$loop->index}}">
                               {{$faq->question}}
                            </a>
                        </h2>
                        <div id="collapse9{{$loop->index}}" class="accordion-collapse collapse" aria-labelledby="heading9"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    {{$faq->answer}}</p>
                            </div>
                        </div>
                    </div>

                    @endforeach
                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Faq Area -->
@endsection()
