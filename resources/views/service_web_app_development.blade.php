@extends('layouts.app')
@section('title', 'Web & App development')

@section('navbar')
@include('components.navbar')
@endsection

@section('content')

<!--================Gadget Banner Area =================-->
<section class="gadget_banner_area" id="home" style="background-color: #f6f7fa;background-image: url(img/banner/web.svg);">
    <div class="container">
        <div class="gadget_banner_inner">
            <div class="gadget_text">
                <h2>Web & App Development</h2>
                <h6>Build your own brands through web & mobile Apps development, SEO, branding and digital marketing
                    services.</h6>
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
                    <h5>Web & App Development</h5>
                    <h4>How we help</h4>
                    <p>We are a front-to-back one stop shop for all of your web and app design and ecommerce development needs. Our professionals and engineers are experienced and have earned expertise in serving the needs of smaller businesses, helping them to make their mark and grow their online brand, presence, and reputation. We take pride in our skills and in delivering the best web and app development services to our clients.</p>
                    <h3></h3>
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
            <h2 data-title="Mavensdesk">What we do in our Web & App Development</h2>
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
                    <p>Whether you pursue to build emotional connection, a “quiet” design or a “wow effect” user interface, Mavensdesk got experts on board with the skills required to create the exceptional web & app experience you are looking for.
                    </p>
                    <h4>Cross-Platform Coverage</h4>
                    <p> We deliver across all possible popular desktop, mobile platforms. we reduce your development and maintenance costs and accelerate time-to-market by going cross-platform. Our TCO(Total Cost Ownership)-driven approach and a shared iOS and Android code base allows you the fragmentation of OSs and devices effectively without compromising on user appeal in app development.
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
<!-- <section class="gadget_feature_area" id="feature">
        <div class="container">
            <div class="gd_title">
                <h2 data-title="Mavensdesk">What we do in our Web & App Development</h2>
            </div>
            <div class="row gd_feature_inner row-flex">
                <div class="col-sm-6">
                    <div class="gd_f_img">
                        <img src="img/services/Web-design.svg" alt="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="gd_f_text">
                        <h4>Design Elegant Web Pages</h4>
                        <p>We design stylish, graceful web page to make your brand and your business to customer memorable experience.</p>
                        </div>
                </div>
            </div>
            <div class="row gd_feature_inner right row-flex">
                <div class="col-sm-6">
                    <div class="gd_f_text">
                        <h4>Engage new customers</h4>
                        <p>We make people aware of your services and/or products you are offering, understand why your products are relevant and even necessary for them to buy or use, and see which of your company’s qualities set it apart from competitors. Displaying this information with high-quality images and thought-out presentation will have a large influence on customers, and it is important to strive towards making your product as relatable and appealing as possible.</p>
                        </div>
                </div>
                <div class="col-sm-6">
                    <div class="gd_f_img">
                        <img src="img/services/engage_customer.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="row gd_feature_inner row-flex">
                <div class="col-sm-6">
                    <div class="gd_f_img">
                        <img src="img/services/maintenance.svg" alt="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="gd_f_text">
                        <h4>Website maintenance</h4>
                        <p>We also maintain a website by regularly checking your website for issues and mistakes and keeping it updated and relevant. This should be done on a consistent basis in order to keep your website healthy, encourage continued traffic growth, and strengthen your SEO and Google rankings.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!--================End Gadget Feature Area =================-->
@endsection