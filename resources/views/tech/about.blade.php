@include('tech.layout.header')
<style>
    .custom-container .team-slide-one {
        max-width: 60%; /* Adjust this value to set your desired slider width */
        margin: 0 auto; /* This centers the slider in the container */
        display: block;
    }

    /* Optional: Adjust the image styling if necessary */
    .custom-container .team-slide-one div img {
        max-width: 100%; /* Ensures images are responsive within the slider */
        height: auto; /* Maintains aspect ratio */
        display: block; /* Centers images in their div if not already centered */
        margin: 0 auto; /* Centers images horizontally */
    }
</style>

    <!--====== Start breadcrumbs section ======-->
    <section class="breadcrumbs-section bg_cover" style="background-image: url({{ asset('public/tech/assets/images/ab2.png') }});">

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="breadcrumbs-content">
                        <h1>About Us</h1>
                        <ul class="link">
                            <li><a >Home</a></li>
                            <li class="active">About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End breadcrumbs section ======-->
    <!--====== Start Features section ======-->
    <section class="features-area-v4 pt-130 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="features-box mb-40">
                        <div class="features-content">

                            <p style="text-align: justify;"><b>Welcome to
                                    RAALTECH
                                    Solutions</b>, your trusted partner in the realm of Intellectual
                                Property Rights (IPR) services. With a global footprint and a commitment to excellence,
                                we are
                                dedicated to safeguarding and enhancing the value of your intellectual assets in India
                                and
                                abroad</p>
                            <p style="text-align: justify;">At
                                RAALTECH
                                Solutions, we understand that in today's fast
                                -
                                paced and competitive
                                business environment, protecting your ideas, brands, and creative works is paramount.
                                Our
                                team of seasoned experts is here to guide you through the intricate world of intellect
                                ual
                                property, ensuring your innovations and creative endeavors are fortified against
                                infringement
                                and misappropriation</p>

                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="features-box mb-40 features-video bg_cover"
                        style="">

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="features-box mb-40">
                        <div class="features-content">
                            <h4>Introduction to RAALTECH Solutions</h4>
                            <p style="text-align: justify;">Raaltech Solutions, founded in 2021, is your dedicated partner in the dynamic world of
                                Intellectual P
                                roperty. Our journey began with a commitment to provide comprehensive
                                solutions to protect and leverage your innovations</p>
                            <p style="text-align: justify;">As a pioneering force in intellectual property services, we specialize in providing
                                comprehensive solutions in Patents,
                                Design Registr
                                ation,
                                Trademarks
                                , Copyrights and
                                etc.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Features section ======-->

    <section class="counter-area-v2 pb-120">
        <div class="container">
        <div class="counter-wrapper bg_cover" style="background-image: url({{ asset('public/tech/assets/images/bg/counter-bg-1.jpg') }});">

                <div class="row">
                    <div class="counter-column col-lg-4 col-md-6 col-sm-12">
                        <div class="counter-box">
                            <h2><span class="counter">350</span> <span class="plus">+</span></h2>
                            <h4>Total Project</h4>
                        </div>
                    </div>
                    <!-- <div class="counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="counter-box">
                                <h2><span class="counter">985</span> <span class="plus">+</span></h2>
                                <h4>Cuf Of Tea</h4>
                            </div>
                        </div> -->
                    <div class="counter-column col-lg-4 col-md-6 col-sm-12">
                        <div class="counter-box">
                            <h2><span class="counter">10</span> <span class="plus">+</span></h2>
                            <h4>Team Members</h4>
                        </div>
                    </div>
                    <div class="counter-column col-lg-4 col-md-6 col-sm-12">
                        <div class="counter-box">
                            <h2><span class="counter">5</span> <span class="plus">+</span></h2>
                            <h4>Win Awards</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Counter section ======-->
    <section class="team-area-v3 team-area-v4 bg_cover"
         style="background-image: url({{ asset('public/tech/assets/images/bg/pattern-bg-2.jpg') }}); height: 400px;">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title section-white-title text-center mb-90">
                        <h2 style="margin-top: 50px;">RAALTECH SOLUTIONS in Associated with</h2>
                        <div class="title-span-line text-center">
                            <span class="line line-1"></span>
                            <span class="line line-2"></span>
                            <span class="line line-3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-container">
        <div class="">
        <div class="row team-slide-one" style="margin-top: -50px; overflow: hidden;">
    @foreach($logo as $image)
    <div class="team-slide-item">
        <img src="{{ asset('public/images/' . $image->image) }}" alt="" style="height: 150px; width:80%; margin: auto;">
    </div>
    @endforeach
</div>
        </div>
    </div>
    </section>
    <!--====== Start Testimonial section ======-->
    <section class="testimonial-area-v2 pt-105 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-60">
                        <h2>Why Choose RAALTECH Solutions?</h2>
                        <div class="title-span-line text-center">
                            <span class="line line-1"></span>
                            <span class="line line-2"></span>
                            <span class="line line-3"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row testimonial-slider-two">
                <div class="col-lg-6">
                    <div class="testimonial-item">

                        <div class="td-content">
                            <p style="text-align: justify;"><b>Expertise:</b>
                                Our team comprises experienced legal professionals and intellectual property
                                specialists who possess in
                                -
                                depth knowledge of Indian and international IP laws and regulations.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">

                        <div class="td-content">
                            <p style="text-align: justify;"><b>
                                    Global Reach:</b>
                                With a global network of associates, we offer our services not only in India but
                                also worldwide, making us your go
                                -
                                to partner for international IP protection.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">

                        <div class="td-content">
                            <p style="text-align: justify;"><b>Tailored Solutions:</b>
                                We understand that every client is unique. That's why we provide
                                personalized, cost
                                -
                                effective solutions that cater to your specific intellectual property needs</p>

                        </div>
                    </div>
                </div>
               
                <div class="col-lg-6">
                    <div class="testimonial-item">

                        <div class="td-content">
                            <p style="text-align: justify;"><b>Dedication to Excellence</b>
                                We are committed to upholding the highest standards of ethics,
                                transparency, and professionalism in every aspect of our work.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">

                        <div class="td-content">
                            <p style="text-align: justify;"><b>Client
                                    -
                                    Centric Approach</b>
                                Your success is our success. We prioritize clear communication and
                                client satisfaction, ensuring you stay informed and involved throughout the entire
                                process.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">

                        <div class="td-content">
                            <p style="text-align: justify;"><b>Commitment</b>
                                Our strength lies in our highly qualified and experienced team, dedi
                                cated to managing projects
                                for our clients with precision and excellence.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">

                        <div class="td-content">
                            <p style="text-align: justify;"><b>Partnerships for Excellence</b>
                                We've partnered with reputable societies and knowledge experts to continuously enhance
                                our
                                skills. This commitment to growth directly impacts the quality
                                of the projects we undertake</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">

                        <div class="td-content">
                            <p style="text-align: justify;"><b>Our Track Record</b>
                                To date, we have successfully completed over
                                4
                                50
                                + Patents , Design, Trademarks & Copyrights
                                across various technical domains
                                .</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">

                        <div class="td-content">
                            <p style="text-align: justify;"><b>Our expertise Domains</b>
                                Engineering
                                , Science,
                                Medical/ Healthcare
                                , Food Technology,
                                Agriculture
                                Engineering
                                -
                                Mechanical, Electrical, Electronics, Communication, Civil, Computer science &
                                IT,
                                Electric
                                vehicle, IoT, Artificial Intelligence & etc..
                                .</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">

                        <div class="td-content">
                            <p style="text-align: justify;"><b>Collaborate with Us</b>
                                At Raaltech Solutions, we look forward to joining you o
                                n your journey to successful innovation.Let's work together to protect your ideas, advance your business, and make your inventive
                                dreams a reality
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('tech.layout.footer')
