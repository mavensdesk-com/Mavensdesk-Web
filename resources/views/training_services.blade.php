@extends('layouts.app')
@section('title', 'Training Services')

@section('navbar')
@include('components.navbar')
@endsection

@section('content')

<!--================Gadget Banner Area =================-->
<section class="gadget_banner_area" id="home" style="background-color: #f6f7fa;background-image: url(img/banner/training.svg);">
    <div class="container">
        <div class="gadget_banner_inner">
            <div class="gadget_text">
                <h2>Training Services</h2>
                <h6>Training is crucial for anyone to expertise in a particular field. Skill Development to raise-up teams.</h6>
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
                    <h5>Training Service</h5>
                    <h4>How we help</h4>
                    <p>Skills and knowledge are the driving forces of economic growth and social development of any country. They have become even more important given the increasing pace of globalization and technological changes provide both challenges that are taking place in the world. Countries with higher and better levels of skills adjust more effectively to the challenges and opportunities of globalization. As India moves progressively towards becoming a
                        ‘Knowledge economy’ it becomes increasingly important
                        that the Eleventh Plan should focus on advancement of
                        skills and these skills have to be relevant to the emerging
                        economic environment
                    </p>
                    <a target="_blank" href="https://tutorontech.world"><h3>Start with our training partner TutorOnTech</h3></a>
                    <a class="pre_or_btn" target="_blank"  href="https://tutorontech.world">Click Here</a>
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
            <h2 data-title="Mavensdesk">What we do in our Training Services</h2>
        </div>
        <div class="row gd_feature_inner row-flex">
            <div class="col-sm-6">
                <div class="gd_f_img">
                    <img src="img/services/training-2.svg" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="gd_f_text">
                    <h4>Make you better and accurate</h4>
                    <p>Training is crucial for anyone to expertise in a particular field. Skill Development and Entrepreneurship development efforts across the country have been highly fragmented so far. With the present education and skill levels of those already in the labour force being very low, it would be a major challenge for India to reap its demographic advantage As India moves progressively towards becoming a global knowledge economy, it must meet the rising aspirations of its youth. This can be partially achieved through focus on advancement of skills that are relevant to the emerging economic environment</p>
                </div>
            </div>
        </div>
        <div class="row gd_feature_inner right row-flex">            
            <div class="col-sm-6">
                <div class="gd_f_text">
                    <h4>Make you better and accurate</h4>
                    <ul>
                        <li><a target="_blank" href="https://tutorontech.world/category.php?category=Oracle%20Courses">Oracle Fusion SCM training and Support</a></li>
                        <li><a target="_blank" href="https://tutorontech.world/category.php?category=Oracle%20Courses">Oracle demantra training and support</a></li>
                        <li><a target="_blank" href="https://tutorontech.world/category.php?category=Oracle%20Courses">Oracle logfire training and support </a></li>
                        <li><a target="_blank" href="https://tutorontech.world/category.php?category=Oracle%20Courses">Oracle Process Manufacturing training</a></li>
                    </ul>  
                </div>
            </div>  
            <div class="col-sm-6">
                <div class="gd_f_img">
                    <img src="img/services/training-3.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!--================End Gadget Feature Area =================-->
@include('components.training')
@endsection