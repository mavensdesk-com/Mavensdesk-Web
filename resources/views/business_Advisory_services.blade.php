@extends('layouts.app')
@section('title', 'Business Advisory')

@section('navbar')
@include('components.navbar')
@endsection

@section('content')

<!--================Gadget Banner Area =================-->
<section class="gadget_banner_area" id="home" style="background-color: #f6f7fa;background-image: url(img/banner/business.svg);">
    <div class="container">
        <div class="gadget_banner_inner">
            <div class="gadget_text">
                <h2>Business Advisory</h2>
                <h6>Our team develops offers adaptive, innovative and comprehensive solutions for specific client business needs that may not require the expression of opinions based on professional standards.</h6>
                <a class="order_btn" href="#how">Get Started</a>
            </div>
        </div>
    </div>
</section>
<!--================End Gadget Banner Area =================-->

<!--================End Gadget Headphone Area =================-->
<section class="gadget_headphone" id="how">
    <div class="container">
        <div class="row g_head_inner">
            <div class="col-md-7">
                <div class="g_left_side">
                    <img src="img/services/training-1.svg" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <div class="g_right_side">
                    <h5>Business Advisory</h5>
                    <h4>How we help</h4>
                    <p>In both challenging and favourable economic conditions, organisations strive to be smart, nimble, creative and forward thinking. Mavensdesk provides deep technical knowledge and extensive industry experience to assist clients in addressing business issues that goes beyond providing traditional audit services.

                        Our Business Advisory team develops and offers adaptive, innovative and comprehensive solutions for specific client business needs that may not require the expression of opinions based on professional standards. Led by partners of
                        industry and function specialisations, the main objective of offering business advisory services is to bring more focus to the value proposition by delivering a broader range of advisory services and competencies. Mavensdesk offers a full
                        range of services to help clients tackle challenges faced in businesses.
                    </p>
                    <a class="pre_or_btn" href="/index.html#contact">Reach Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Gadget Headphone Area =================-->

<!--================End Gadget Feature Area =================-->
<section class="gadget_feature_area" id="feature">
    <div class="container">
        <div class="gd_title">
            <h2 data-title="Mavensdesk">What we do in our Business Advisory</h2>
        </div>
        <div class="row gd_feature_inner row-flex">
            <div class="col-sm-6">
                <div class="gd_f_img">
                    <img src="img/services/business-2.svg" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="gd_f_text">
                    <h4>Six set of service solutions includes:</h4>
                    <ul>
                        <li>Finance function resourcing and outsourcing</li>    
                        <li>Accounting advisory services</li>    
                        <li>One stop liaison service to support local business start-ups</li>    
                        <li>Specialised services to financial institutions</li>    
                        <li>Global IFRS and offerings services (GIOS)</li>    
                        <li>Real estate advisory services</li>    
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Gadget Feature Area =================-->
@endsection