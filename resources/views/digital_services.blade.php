@extends('layouts.app')
@section('title', 'Seo - Digital Marketing')

@section('navbar')
@include('components.navbar')
@endsection

@section('content')

<!--================Gadget Banner Area =================-->
<section class="gadget_banner_area" id="home" style="background-color: #f6f7fa;background-image: url(img/banner/seo.svg);">
    <div class="container">
        <div class="gadget_banner_inner">
            <div class="gadget_text">
                <h2>SEO & Digital Marketing</h2>
                <h6>We investigate the business objectives, marketing technology, and marketing data and
                    support businesses in establishing an effective marketing strategy.</h6>
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
                    <img src="img/services/seo-1.svg" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <div class="g_right_side">
                    <h5>SEO & Digital Marketing</h5>
                    <h4>How we help</h4>
                    <p>Our search engine optimization services are unique to the industry with verifiable results. As we continually keep up with the fluctuating algorithm of Google. We’ve positioned ourselves as the gold standard in search engine optimization. We will help youtube modify your website in such a way that it is more visible on a search engine in its organic search result. We use Goggle adwords, Goggle analytics, etc for analytics.</p>
                    <h3></h3>
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
            <h2 data-title="Mavensdesk">What we do in our SEO & Digital Marketing</h2>
        </div>
        <div class="row gd_feature_inner row-flex">
            <div class="col-sm-6">
                <div class="gd_f_img">
                    <img src="img/services/seo-2.svg" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="gd_f_text">
                    <h4>Search Engine Optimization</h4>
                    <p>We do digital Marketing via Search engine optimization to grow the quality and quantity of your website traffic by increasing the visibility of a website or a web page to users of a web search engine. This will bring up improvement of unpaid results and excludes direct traffic and the purchase of paid placement.</p>
                </div>
            </div>
        </div>
        <div class="row gd_feature_inner right row-flex">
            <div class="col-sm-6">
                <div class="gd_f_text">
                    <h4>Digital Marketing</h4>
                    <p>Our expert team members collaborate across digital marketing specialties to produce powerful results.The revolution that a smartphone has established. So marketing via digital medium is much more reliable and has consistent output compared to other marketing strategies.</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="gd_f_img">
                    <img src="img/services/seo-3.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Gadget Feature Area =================-->
@endsection