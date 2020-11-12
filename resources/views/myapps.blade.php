@extends('layouts.app')
@section('title', 'Myapps')

@section('navbar')
@include('components.navbar')
@endsection

@section('content')


<!--================Gadget Banner Area =================-->
<section class="gadget_banner_area" id="home" style="background-image: url(img/banner/myapps.svg);">
    <div class="container">
        <div class="gadget_banner_inner">
            <div class="gadget_text">
                <h2 style="color:#000;">Our Products</h2>
                <h6 style="color: #385a64;">We build What you need</h6>
                <a class="order_btn" href="#app">Get Started</a>
            </div>
        </div>
    </div>
</section>
<!--================End Gadget Banner Area =================-->

<!--================Myapps Area =================-->
<section class="myapps-section" id="app">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="block-sm animate-box ">
                    <h3 class="wow fadeInDown myapps-header">Our Apps</h3>
                    <p class="myapps-title">Apps to take your business on next level</p>
                </div>
            </div>
        </div>
        <div class="row row-flex">
            <div class="col-md-3 col-sm-6">
                <div class="c-card">
                    <div class="c-header">
                        <img src="img/icon/home-run.svg" alt="bda-housing-icon">
                        <h1>SOCIETY</h1>
                    </div>
                    <div class="c-body">Manage your building funds with this app and also to regnerate E-receipts.</div>
                    <a href="http://myapps.mavensdesk.com/" class="btn">VIEW APP</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="c-card">
                    <div class="c-header">
                        <img src="img/icon/analytics.svg" alt="bda-housing-icon">
                        <h1>ECOMMERCE</h1>
                    </div>
                    <div class="c-body">Manage your E-Commerce website using this app</div>
                    <a href="#" class="btn">UPCOMING</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="c-card">
                    <div class="c-header">
                        <img src="img/icon/icon.svg" alt="bda-housing-icon">
                        <h1>BOOST TRAFFIC</h1>
                    </div>
                    <div class="c-body">Improve your search ranking and get more visitors with these apps</div>
                    <a href="#" class="btn">UPCOMING</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="c-card">
                    <div class="c-header">
                        <img src="img/icon/get-social.svg" alt="bda-housing-icon">
                        <h1>GET SOCIAL</h1>
                    </div>
                    <div class="c-body">Become a social media machine with these apps</div>
                    <a href="#" class="btn">UPCOMING</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--================End Myapps Area =================-->
@endsection