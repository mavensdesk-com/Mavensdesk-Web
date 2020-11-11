@extends('layouts.app')
@section('title', 'Oracle ERP Consulting Services')

@section('navbar')
@include('components.navbar')
@endsection

@section('content')
<!--================Gadget Banner Area =================-->
<section class="gadget_banner_area" id="home" style="background-color: #f6f7fa;background-image: url(img/banner/oracle.svg);">
    <div class="container">
        <div class="gadget_banner_inner">
            <div class="gadget_text">
                <h2>Oracle ERP Consulting</h2>
                <h6>We help organizations to conquer business challenges & operate more efficiently. Our core areas of expertise include Oracle E-Business Suite, Oracle Projects and SCM.</h6>
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
                    <img src="img/services/oracle-1.svg" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <div class="g_right_side">
                    <h5>Oracle ERP Consulting Services</h5>
                    <h4>How we help</h4>
                    <p>Mavensdesk has helped organizations implement, upgrade, optimize, and support their EBS systems to meet changing business needs. Through automation, our consulting services help Oracle EBS customers reduce application costs and complexity. We alseo provide Siem services. Tools used in our oracle ERP is Microsoft dynamics.</p>
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
            <h2 data-title="Mavensdesk">What we do in our Oracle ERP Consulting</h2>
        </div>
        <div class="row gd_feature_inner row-flex">
            <div class="col-sm-6">
                <div class="gd_f_img">
                    <img src="img/services/oracle-2.svg" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="gd_f_text">
                    <h4>Our Expertise</h4>
                    <p>Application Maintenance and Support Services<br>
                        Oracle E-Business Suite R12.2 Upgrades<br>
                        Implementing Oracle E-Business Suite<br>
                        Oracle EBS Application Performance Monitoring<br>
                        Extending and Enhancing Oracle AME to Oracle EBS<br>
                        Oracle EBS Platform Migrations and Consolidations<br>
                    </p>
                </div>
            </div>
        </div>
        <div class="row gd_feature_inner row-flex">
            <div class="col-sm-6">
                <div class="gd_f_text">
                    <h4>Cloud Integration</h4>
                    <p>Cloud integration is a system of tools and technologies that connects various applications, systems, repositories, and IT environments for the real-time exchange of data and processes. Once combined, the data and integrated cloud services can then be accessed by multiple devices over a network or via the internet. It is used to scale performance needs, add product functionality, as well as secure data, trading partner (B2B/EDI), and application integration.
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="gd_f_img">
                    <img src="img/services/oracle-3.svg" alt="">
                </div>
            </div>
        </div>
        <div class="row gd_feature_inner row-flex">
            <div class="col-sm-6">
                <div class="gd_f_img">
                    <img src="img/services/oracle-4.svg" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="gd_f_text">
                    <h4>Infrastructure setup</h4>
                    <p>We bring years of experience and in-depth technical expertise in managing IT installments for small, medium and large size enterprises. We help in designing IT strategy for businesses to complement the long term business goals. Our services cover planning, implementing and supporting the IT installations for enterprises.
                    </p>
                </div>
            </div>
        </div>
        <div class="row gd_feature_inner row-flex">
            <div class="col-sm-6">
                <div class="gd_f_text">
                    <h4>Technical support</h4>
                    <p>We provide managed services packages and professional IT support services ranging from 24/7 monitoring of servers and software to secure off-site data storage, help desk support, telecommunications and voice services, managed print, and cloud computing, just to name a few.

Our solutions offers proactive IT support and technology management services at affordable, consistent monthly rates. Our subscription model allows your business to effectively budget for and plan IT expenses, saving you money and time in the long run.
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="gd_f_img">
                    <img src="img/services/oracle-5.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Gadget Feature Area =================-->
@endsection