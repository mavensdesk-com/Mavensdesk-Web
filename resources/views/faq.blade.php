@extends('layouts.app')
@section('title', 'Frequently asked questions')

@section('navbar')
@include('components.navbar')
@endsection

@section('content')

<!--================FAQ Area =================-->
<!--================End FAQ Area =================-->
<section class="asked_ques_area">
  <div class="container">
    <h2 class="single_title_center">Frequently asked some questions</h2>
    <div class="row asked_ques_inner">
      <div class="col-md-6">
        <div class="asked_item">
          <h4>How Long Does It Take To Create A Website?</h4>
          <p>The length of time it takes to create a fully functional website is based on several factors.
          Custom design work can take anywhere from 1 - 4 weeks, depending on the complexity of the design
          and the number of revisions you require. The development phase requires an additional 1 - 6 weeks,
          depending on the number of pages, and the functionality required. Of course, these are general guidelines,
          and we will make every effort to meet the timeframe you have in mind.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="asked_item">
          <h4>What kind of technology do you use for website development?</h4>
          <p>We specialize in laravel, vue, react, and HTML5.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="asked_item">
          <h4>What are the different types of mobile apps you can develop?</h4>
        <p>We can develop all types of mobile applications, including Native Apps Development,
          Mobile-web Apps Development, Hybrid Apps Development.
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="asked_item">
          <h4>What is the general mobile app development process you follow?</h4>
          <pre>
Here is our app development process:-
1. Analyzing Requirements
2. Wireframing & Designing
3. Development 
4. Testing
5. Deployment
6. Support and Maintenance
        </pre>
        </div>
      </div>
      <div class="col-md-6">
        <div class="asked_item">
          <h4>Will your mobile app development team support me after my app gets live on the App Store?</h4>
          <p>Our mobile app development team will assist you,
          depending upon the type of change you want in your application.
          The modification in your application will be chargeable.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="asked_item">
          <h4>What does SEO stand for?</h4>
          <p>SEO stands for Search Engine Optimization.
          You engage in SEO when you attempt to get a page to rank higher in a search engine’s SERPs
          (search engine results pages),with the ultimate goal being to increase organic (unpaid)
          traffic to that page.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="asked_item">
          <h4>What is digital marketing?</h4>
          <p>Digital marketing involves marketing to people using Internet-connected electronic devices,
          namely computers, smartphones and tablets. Digital marketing focuses on channels such as search engines,
          social media, email, websites and apps to connect with prospects and customers.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="asked_item">
          <h4>Would my business benefit from digital marketing?</h4>
          <p>Definitely. Though companies in many business categories continue to approach digital marketing with skepticism,
          avoiding digital marketing denies your business access to the media the majority of consumers turn to first and at all hours of the day.
        </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="asked_item">
          <h4>What are the services we provide in Digital Marketing ?</h4>
          <p>We provide a lot of services for various online activities like Search Engine Optimization (SEO), Content Marketing (Blogging & Article Writing), Downloadable Content Offerings,
          Email Marketing, Social Media Marketing, Pay-Per-Click (PPC) Marketing, Website Design / Micro-site Development, Public Relations (PR).
</p>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection