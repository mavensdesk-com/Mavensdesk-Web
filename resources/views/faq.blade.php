@extends('layouts.app')
@section('title', 'Frequently asked questions')

@section('navbar')
@include('components.navbar')
@endsection

@section('content')

<!--================FAQ Area =================-->
<section class="faq-data">
  <img src="img/faq.jpg">
  <div class="faq">
    <span> Frequently Asked Questions</span><br><br>
    <details>
      <summary class="first">How Long Does It Take To Create A Website?</summary>
      <div class="faq__content">
        <p>The length of time it takes to create a fully functional website is based on several factors. 
          Custom design work can take anywhere from 1 - 4 weeks, depending on the complexity of the design
          and the number of revisions you require. The development phase requires an additional 1 - 6 weeks,
          depending on the number of pages, and the functionality required. Of course, these are general guidelines,
          and we will make every effort to meet the timeframe you have in mind.
        </p>
      </div><br>
    </details>
    <details>
      <summary>What kind of technology do you use for website development?</summary>
      <div class="faq__content">
        <p>We specialize in laravel, vue, react, and HTML5.</p>
      </div><br>
    </details>
    <details>
      <summary>What are the different types of mobile apps you can develop?</summary>
      <div class="faq__content">
        <p>We can develop all types of mobile applications, including Native Apps Development,
          Mobile-web Apps Development, Hybrid Apps Development.
        </p>
      </div><br>
    </details>
    <details>
      <summary>What is the general mobile app development process you follow?</summary>
      <div class="faq__content">
        <p>
          Here is our app development process:-<br>
          1.	Analyzing Requirements<br>
          2.	Wireframing & Designing<br>
          3.	Development <br>
          4.	Testing<br>
          5.	Deployment<br>
          6.	Support and Maintenance<br>
        </p>
      </div><br>
    </details>

    <details>
      <summary>Will your mobile app development team support me after my app gets live on the App Store?</summary>
      <div class="faq__content">
        <p>Our mobile app development team will assist you,
          depending upon the type of change you want in your application.
            The modification in your application will be chargeable.
        </p>
      </div><br>
    </details>

    <details>
      <summary>What does SEO stand for?</summary>
      <div class="faq__content">
        <p>SEO stands for Search Engine Optimization.
          You engage in SEO when you attempt to get a page to rank higher in a search engine’s SERPs 
          (search engine results pages),with the ultimate goal being to increase organic (unpaid) 
          traffic to that page.
        </p>
      </div><br>
    </details>
    <details>
      <summary>What is digital marketing?</summary>
      <div class="faq__content">
        <p>Digital marketing involves marketing to people using Internet-connected electronic devices,
          namely computers, smartphones and tablets. Digital marketing focuses on channels such as search engines, 
          social media, email, websites and apps to connect with prospects and customers.
        </p>
      </div><br>
    </details>
    <details>
      <summary>Would my business benefit from digital marketing?</summary>
      <div class="faq__content">
        <p>Definitely. Though companies in many business categories continue to approach digital marketing with skepticism, 
          avoiding digital marketing denies your business access to the media the majority of consumers turn to first and at all hours of the day.
        </p>
      </div><br>
    </details>
    <details>
      <summary>What are the services we provide in Digital Marketing ?</summary>
      <div class="faq__content">
        <p>We provide a lot of services for various online activities like Search Engine Optimization (SEO), Content Marketing (Blogging & Article Writing), Downloadable Content Offerings, 
          Email Marketing, Social Media Marketing, Pay-Per-Click (PPC) Marketing, Website Design / Micro-site Development, Public Relations (PR).
        </p>
      </div><br>
    </details>
    <br><br>
  </div>
</section>
<!--================End FAQ Area =================-->
@endsection