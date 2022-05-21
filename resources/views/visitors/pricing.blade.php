@extends("layouts.spacedcustomlayout")

@section("body")

     <!-- Start Breadcrumb Area -->
  <div class="breadcrumb-area" style="background-image: url('assets/img/breadcrumb.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2>Our Pricing Plans</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Area -->
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


@endsection
