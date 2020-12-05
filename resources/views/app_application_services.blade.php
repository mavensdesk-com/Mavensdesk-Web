@extends('layouts.app')
@section('title', 'Mobile Application development')

@section('navbar')
@include('components.navbar')
@endsection

@section('content')

<!--================Gadget Banner Area =================-->
<section class="gadget_banner_area" id="home" style="background-color: #f6f7fa;background-image: url(img/banner/app.svg);">
    <div class="container">
        <div class="gadget_banner_inner">
            <div class="gadget_text">
                <h2>Mobile App Development</h2>
                <h6>Delivering adequate Mobile Experiences at Scale. Innovative mobile apps your users will love.</h6>
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
                    <img src="img/services/app-1.svg" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <div class="g_right_side">
                    <h5>Mobile Application</h5>
                    <h4>How we help</h4>
                    <p>Mavensdesk is a mobile app development consultancy that offers full-cycle development services suited to your business needs. From ideation to publishing — we have you covered all the way.</p>
                    <a class="pre_or_btn" href="/index.html#contact">Reach Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Gadget Headphone Area =================-->
<section class="gadget_feature_area" id="feature">
    <div class="container">
        <div class="gd_title">
            <h2 data-title="Mavensdesk">What we do in our Mobile Application Development</h2>
        </div>
        <div class="row gd_feature_inner row-flex">
            <div class="col-sm-6">
                <div class="gd_f_img">
                    <img src="img/services/app-2.svg" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="gd_f_text">
                    <h4>User Experience Design</h4>
                    <p>Whether you pursue to build emotional connection, a “quiet” design or a “wow effect” user interface, Iflexion got experts on board with the skills required to create the exceptional mobile experience you are looking for.
                    </p>
                    <h4>Cross-Platform Coverage</h4>
                    <p> We deliver across all possible popular mobile platforms. we reduce your development and maintenance costs and accelerate time-to-market by going cross-platform. Our TCO(Total Cost Ownership)-driven approach and a shared iOS and Android code base allows you the fragmentation of OSs and devices effectively without compromising on user appeal.
                    </p>
                    <h4>Accelerated Delivery</h4>
                    <p>Mavensdesk delivery practices for rapid functionality delivery and accelerated product launch while securing first-class solution quality and performance
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Gadget Feature Area =================-->
@endsection