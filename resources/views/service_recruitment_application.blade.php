@extends('layouts.app')
@section('title', 'Recruitment Process')

@section('navbar')
@include('components.navbar')
@endsection

@section('content')

<!--================Gadget Banner Area =================-->
<section class="gadget_banner_area" id="home" style="background-color: #f6f7fa;background-image: url(img/banner/recruitment.svg);">
    <div class="container">
        <div class="gadget_banner_inner">
            <div class="gadget_text">
                <h2>Recruitment Process</h2>
                <h6>We understand your needs better.</h6>
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
                    <img src="img/services/recruitment-1.svg" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <div class="g_right_side">
                    <h5>Recruitment Process</h5>
                    <h4>How we help</h4>
                    <p>We provides end to end Human Resource Management to organizations and helps them address their critical talent needs by providing comprehensive Workforce Management from Recruitment Process Outsourcing (RPO) to Staffing Solutions, Permanent Recruitment and Leadership Training and Development. Our endeavor is to help our clients and candidates win in the changing world of work.</p>
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
            <h2 data-title="Mavensdesk">What we do in our Recruitment Process</h2>
        </div>
        <div class="row gd_feature_inner row-flex">
            <div class="col-sm-6">
                <div class="gd_f_img">
                    <img src="img/services/recruitment-2.svg" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="gd_f_text">
                    <h4>Innovation</h4>
                    <p>We lead in the world of work. We dare to innovate, to pioneer and to evolve. We never accept the status quo. We constantly challenge the norm to find new and better ways of doing things.
                    </p>
                    <h4>Strategy</h4>
                    <p>With a growing demand for both flexible and skilled workforces we have two distinct approaches to the market. For positions that require general skills, we offer our clients tailored solutions, focusing on industry know-how and cost leadership. This also means ensuring continuity and nurturing long-term relationships with associates. To fill positions requiring specialized professional skills, we have experts who can find the right candidates. Our aim is to provide consecutive assignments, ensuring talent retention and skill enhancement for our associates.
                    </p>
                    <h4>People</h4>
                    <p>We care about people and the role of work in their lives. We respect people as individuals, trusting them, supporting them, enabling them to achieve their aims in work and in life. We help people develop their careers through planning, work, coaching and training.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Gadget Feature Area =================-->
@endsection