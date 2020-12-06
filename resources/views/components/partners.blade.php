<!--================partners Logo Area =================-->
<section class="partners_logo_area" id="partners">
    <div class="container">
        <div class="main_title">
            <h2>Our <span class="colored">Partners</span></h2>
            <p>We have our most valuable partners in your service.</p>
        </div>

        <div class="partner-titles justify-content-center">
            <div>
                <button class="partner_btn filter" data-filter="all"> All</button>
                <button class="partner_btn filter" data-filter="trainingPartners">Training Partners</button>
            </div>
        </div>

        <div class="partner-list">
            @foreach ($partners['trainingPartners'] as $partner)
                <div class="col-sm-4 all trainingPartners">
                    <img class="img-fluid" src="{{$partner}}"/>
                </div>  
            @endforeach
        </div>  
    </div>

    <!-- <div class="partners_logo_slider owl-carousel">
        <div class="item">
            <img src="img/partners/TutorOnTech.png" alt="TutorOnTech">
        </div>
    </div> -->

</section>
<!--================End partners Logo Area =================-->