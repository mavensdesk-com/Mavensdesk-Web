<!-- =====================Contact Section================= -->
{!! NoCaptcha::renderJs() !!}
<section id="contact" class="s-contact">
    <div class="overlay"></div>
    <!-- <div class="contact__line"></div> -->
    <div class="container justify-content-center">
        <div class="section-header">
            <div class="col-full">
                <h3 class="subhead">Contact Us</h3>
                <h1 class="display-2 display-2--light">We’d love to hear from you</h1>
            </div>
        </div>
        <form action="{{ route('contactus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row contact-row contact-content">
                <div class="contact-primary">
                    <h3 class="h6">Send Us A Message</h3>
                    <form name="contactForm" id="contactForm" method="post" action="" novalidate="novalidate">
                        <fieldset>
                            <div class="form-field">
                                <input name="name" type="text" id="contactName" placeholder="Your Name" minlength="2" required="" aria-required="true" class="full-width">
                            </div>
                            <div class="form-field">
                                <input name="email" type="email" id="contactEmail" placeholder="Your Email" required="" aria-required="true" class="full-width">
                            </div>
                            <div class="form-field">
                                <input name="subject" type="text" id="contactSubject" placeholder="Subject" class="full-width">
                            </div>
                            <div class="form-field">
                                <textarea name="message" id="contactMessage" placeholder="Your Message" rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea>
                            </div>
                            <div class="col-12">
                               <div class="g-recaptcha" name="g-recaptcha-response" data-sitekey="6LcBrgAVAAAAAJoI-MSMz-f5JeZpoMPjsAuzAypB"></div>
					       
					            @if($errors->has('g-recaptcha-response'))
					                <span class="invalid-feedback" style="display:block;">
					                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
					                </span>
					            
					            @endif
						
                            </div>
                            <div class="form-field">
                                <button class="full-width btn--primary">Submit</button>
                                <div class="submit-loader">
                                    <div class="text-loader">Sending...</div>
                                    <div class="s-loader">
                                        <div class="bounce1"></div>
                                        <div class="bounce2"></div>
                                        <div class="bounce3"></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                    <div class="message-warning">
                        Something went wrong. Please try again.
                    </div>

                    <div class="message-success">
                        Your message was sent, thank you!<br>
                    </div>
                </div>
                <div class="contact-secondary">
                    <div class="contact-info">
                        <h3 class="h6 hide-on-fullwidth">Contact Info</h3>
                        <div class="cinfo">
                            <h5>Where to Find Us</h5>
                            <p><a target="_blank" href="https://goo.gl/maps/Q243pigUjVSqNCzM8">
                                    #1604, Kalinganagar-3<br>
                                    Odisha, Bhubaneswar-751003</a>
                            </p>
                        </div>
                        <div class="cinfo">
                            <h5>Email Us At</h5>
                            <p>
                                For queries: <a href="mailto: info@mavensdesk.com">info@mavensdesk.com</a><br>
                                For sales: <a href="mailto: salesindia@mavensdesk.com">salesindia@mavensdesk.com</a><br/>
                                 <a href="mailto: salesemea@mavendsdesk.com">salesemea@mavendsdesk.com</a>
                            </p>
                        </div>
                        <ul class="contact-social">

                            <li><a target="_blank" href="https://www.facebook.com/themavensdesk/"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/company/themavensdesk/"><i class="fa fa-linkedin"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/themavensdesk/"><i class="fa fa-instagram"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/themavensdesk"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- =====================End Contact Section================= -->