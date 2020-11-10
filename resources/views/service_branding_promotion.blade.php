@extends('layouts.app')
@section('title', 'Product branding and Promotion')

@section('navbar')
@include('components.navbar')
@endsection

@section('content')

<!--================Gadget Banner Area =================-->
<section class="gadget_banner_area" id="home" style="background-color: #f6f7fa;background-image: url(img/banner/branding.svg);">
    <div class="container">
        <div class="gadget_banner_inner">
            <div class="gadget_text">
                <h2>Product branding and Promotion</h2>
                <h6>We all know branding makes a memorable impression on customer and that's what we do for you.</h6>
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
                    <img src="img/services/branding-1.svg" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <div class="g_right_side">
                    <h5>Product branding and Promotion</h5>
                    <h4>How we help</h4>
                    <p>Branding is important because not only is it what makes a memorable impression on consumers but it allows your customers and clients to know what to expect from your company. It is a way of distinguishing yourself from the competitors and clarifying what it is you offer that makes you the better choice.

                        With dozens of projects completed in the area of brand consulting and brand management; including corporate identity ensign, brand positioning, brand repositioning, brand architecture, visual identity design, print and digital design, we have proven credentials and rich experience.



                        Branding is absolutely critical to a business because of the overall impact it makes on your company. Branding can change how people perceive your brand, it can drive new business and increase brand awareness.
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
            <h2 data-title="Mavensdesk">Why do you need our branding and Promotion</h2>
        </div>
        <div class="row gd_feature_inner row-flex">
            <div class="col-sm-6">
                <div class="gd_f_img">
                    <img src="img/services/branding-2.svg" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="gd_f_text">
                    <h4>- Improves recognition</h4>
                    <h4>- Creates trust</h4>
                    <h4>- Supports advertising</h4>
                    <h4>- Builds financial value</h4>
                    <h4>- Inspires employees</h4>
                    <h4>- Generates new customers</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Gadget Feature Area =================-->
@endsection