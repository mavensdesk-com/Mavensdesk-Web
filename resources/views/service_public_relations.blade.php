@extends('layouts.app')
@section('title', 'Public Relations')

@section('navbar')
@include('components.navbar')
@endsection

@section('content')

<!--================Gadget Banner Area =================-->
<section class="gadget_banner_area" id="home" style="background-color: #f6f7fa;background-image: url(img/banner/pr.svg);">
    <div class="container">
        <div class="gadget_banner_inner">
            <div class="gadget_text">
                <h2>Public Relations</h2>
                <h6>Our Public Relations firm helps startups and growing businesses to get the exposure they need with fully integrated digital PR and communications services.</h6>
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
                    <img src="img/services/pr-1.svg" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <div class="g_right_side">
                    <h5>Public Relations</h5>
                    <h4>How we help</h4>
                    <p>Our public relations firm helps startups and growing businesses get the exposure they need with fully integrated digital PR and communications services.we provide PR specialists who know how to communicate with the media and public. This is a skill honed from many years of journalism and working in the TV/media industry. Knowing how to attract public attention is vital to any business when they need to make a statement. The launch of a new product, the promotion of a new executive are all newsworthy and ideally handled by expert PR personnels. </p>
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
            <h2 data-title="Mavensdesk">What we do in our Public Relations</h2>
        </div>
        <div class="row gd_feature_inner row-flex">
            <div class="col-sm-6">
                <div class="gd_f_img">
                    <img src="img/services/pr-2.svg" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="gd_f_text">
                    <h4>Digital PR</h4>
                    <p>Win media coverage and build your brand</p>
                    <h4>Content marketing</h4>
                    <p>Reach new markets and capture more leads</p>
                    <h4>Social Media</h4>
                    <p>Engage your audience with integrated social media</p>
                    <h4>SEO</h4>
                    <p>Combine SEO and digital PR to grow your business</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Gadget Feature Area =================-->
@endsection