@extends('layouts.app')
@section('title', 'Our Clients')

@section('navbar')
@include('components.navbar')
@endsection

@section('content')

<!--================Gadget Banner Area =================-->
<section class="gadget_banner_area" id="home" style="background-color: #f6f7fa;background-image: url(img/banner/seo.svg);">
    <div class="container">
        <div class="gadget_banner_inner">
            <div class="gadget_text">
                <h2>Our Clients</h2>
                <h6>We love working with our clients and they are most valuable for us.</h6>
                <a class="order_btn" href="/index.html#contact">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<!--================End Gadget Banner Area =================-->

@include('components.clients')
@endsection