@include('tech.layout.header')

<style>.card:hover {
        pointer-events: none;
    }
        .icofont-arrow-left {
    display: none;
}
.icofont-arrow-right
{
    display: none;

}</style>
<!--====== Start Banner section ======-->
<section class="banner-area-v1">
    <div class="hero-slider-one">
        <div class="single-hero bg_cover" style="background-image: url('{{ asset('public/tech/assets/images/banner.jpg') }}');">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero-content" style="text-align: center;">
                            <h2 style="color: aliceblue; white-space: nowrap;">
                                <span>Welcome to</span> RAAL TECH SOLUTIONS
                            </h2>
                            <a href="{{ url('/contact') }}" class="main-btn">GET STARTED</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero bg_cover" style="background-image: url('{{ asset('public/tech/assets/images/h2.jpg') }}');">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero-content" style="text-align: center; ">
                            <h2 style="color: aliceblue;"><span>We Empowering</span>
                                RAAL TECH
                            </h2>

                            <a href="contact.html" class="main-btn">GET STARTED</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero bg_cover" style="background-image: url('{{ asset('public/tech/assets/images/h4.jpg') }}');">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero-content" style="text-align: center; ">
                            <h2 style="color: aliceblue;"><span>Build Your Industry </span>
                                With Us
                            </h2>

                            <a href="contact.html" class="main-btn">GET STARTED</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-arrows"></div>
</section><!--====== End Banner section ======-->
<!--====== Start Features section ======-->

<!--====== Start About section ======-->
<section class="about-area-v1 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-img-box">
                    <img src="{{ asset('public/tech/assets/images/2121.png') }}" alt="" style="margin-bottom: -100px;margin-left:200px;margin-top:100px;">

                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-box">
                    <div class="section-title mb-35">
                        <div class="sub-title">
                            <span class="title" style="margin-top: 50px;">About Us</span>
                            <!-- <div class="icon">
                                        <i class="flaticon-digger"></i>
                                    </div> -->
                        </div>
                        <h2>Introduction <span> to</span> RAALTECH <span class="thin"> Solutions.</span></h2>
                    </div>
                    <p>“

                     Raaltech Solutions, founded in 2021, is your dedicated partner in the dynamic world
                                of
                                Intellectual P
                                roperty. Our journey began with a commitment to provide comprehensive
                                solutions to protect and leverage your innovations.</p>
                        <div class="section-title mb-35">
                            
                             <h2>Welcome <span> to</span> RAALTECH <span class="thin"> Solutions.</span></h2>
                                <p>“

                        We are your trusted partner in the realm of Intellectual
                        Property Rights (IPR) services. With a global footprint and a commitment to excellence, we
                        are
                        dedicated to safeguarding and enhancing the value of your intellectual assets in India and
                        abroad .</p>
                        </div>
                        <a href="{{ url('/about') }}" class="main-btn">View More</a>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End About section ======-->
<!--====== End Service section ======-->
<section class="service-area-v1 bg_cover pt-135 pb-120" style="background-image: url('{{ asset('public/tech/assets/images/b1.jpg') }}');">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title section-white-title text-center mb-100">
                    <div class="sub-title">
                        <span class="title">OUR SERVICES</span>
                        <!-- <div class="icon">
                                    <i class="flaticon-digger"></i>
                                </div> -->
                    </div>
                    <h5 style="color: #ebe7e7;">At Raaltech Solutions, we offer a wide array of services
                        encompassing the full spectrum of
                        <span> Intellectual Property and Research & Development, including:</span>
                    </h5>

                </div>
            </div>
        </div>
        <div class="row service-slider-one">

            @foreach($service as $item)
            <div class="col-lg-4">
                <div class="service-item text-center mb-55" style="height: 350px;">
                    <div class="-img">
                        <img src="{{ asset('public/images/' . $item->image) }}" alt="" style="height: 100px; width: 110px; margin-left: 100px;">
                    </div>
                    <div class="service-content">
                        <span class="position" style="font-size: 25px; font-weight: bold;">{{ $item->title }}</span>
                        <h5 class="title"><a>{{ $item->description }}</a></h5>
                    </div>
                </div>
            </div>
            @endforeach








        </div>

    </div>
    <a href="{{ url('/service') }}" class="main-btn" style="margin-top: 30px; float: right; margin-right: 70px;">View More</a>

</section><!--====== End Service section ======-->
<!--====== Start CTA section ======-->
<!--====== Start Team-area section ======-->
<div class="client1">
    <section class="team-area-v1  pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-60">
                        <div class="sub-title">
                            <span class="title">Our Team</span>

                        </div>
                        <h2>We Always Work With
                            A Great <span>Team.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($team->take(4) as $member)

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-item mb-40">
                        <div class="team-img" style="object-fit: cover; aspect-ratio: 1/1;">
                            <img src="{{ asset('public/images/' . $member->image) }}" alt="{{ $member->name }}" style="height: 200px; width: 200px; object-fit:cover;">
                        </div>
                        <div class="team-info">
                            <div class=""></div>
                            <div class="team-member-info d-flex align-items-center" style="height:10px;">
                                <div class="">
                                    <h4 style="height:10px; font-size:16px;"><a>{{ $member->name }}</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach




            </div>
            <a href="{{ url('/team') }}" class="main-btn" style="margin-top: 0px;margin-left: 200px;">View More</a>
        </div>
    </section><!--====== End Team-area section ======-->
</div>

<div class="team1">
    <section class="project-area-v3 pt-115 pb-12" id="project-filter">
        <div class="container-fluid" style="margin-top: -100px;">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="filter-nav text-center mb-70">
                        <ul class="filter-btn">
                            <li data-filter="*" class="active">Our Clients</li>


                        </ul>
                    </div>
                </div>
            </div>

            @php
            $imageCount = 0;
            @endphp

            @foreach ($image as $client)
            @if ($imageCount % 5 == 0)
            <div class="container" style="display: flex; justify-content: center;">
                @endif

                <div class="card" style="padding: 30px; width: 63%; object-fit: cover; aspect-ratio: 1/1; margin-left: 10px; ">
                    <img src="{{ asset('public/images/' . $client->image) }}" style="display:flex;" alt="">
                </div>

                @php
                $imageCount++;
                @endphp

                @if ($imageCount % 5 == 0 || $loop->last || $imageCount == 10)
            </div>
            @endif

            @if ($imageCount == 10)
            @break
            @endif
            @endforeach



        </div>


        <a href="{{ url('/client') }}" class="main-btn" style="margin-left: 200px;margin-top: 50px;">View More</a>
</div>
</section><!--====== End project-page-section ======-->
</div>
<!--====== Start Counter section ======-->
<!-- --------------------in mobile view------------------ -->
<div class="client">
    <section class="team-area-v1  pb-80">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-60">
                        <div class="sub-title">
                            <span class="title">Our Team</span>

                        </div>
                        <h2>We Always Work With
                            A Great <span>Team.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($team as $teamMember)
                <div class="col-6">
                    <div class="team-item mb-40">
                        <div class="team-img" style=" aspect-ratio: 1/1;">
                            <img src="{{ asset('public/images/' . $teamMember->image) }}" alt="{{ $teamMember->name }}" style="height: 170px; width: 100%; object-fit:cover;">
                        </div>
                        <div class="">
                            <div class=""></div>
                            <div class=" align-items-center">
                                <!-- <div class="">
                        <ul class="social-link">
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                        </ul>
                    </div> -->
                                <div class="">
                                    <h4><a style="font-size:16px;">{{ $teamMember->name }}</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>



        </div>
    </section>
</div>
<!--====== End mobile section ======-->
<!-- ===============================mobile view============== -->
<div class="team">
    <section class="project-area-v3 pt-115 pb-12" id="project-filter">
        <div class="container-fluid" style="margin-top: -100px;">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="filter-nav text-center mb-70">
                        <ul class="filter-btn">
                            <li data-filter="*" class="active">Our Clients</li>


                        </ul>
                    </div>
                </div>
            </div>


            <div class="container" style=" justify-content: center;">
                <div class="row">
                    <div class="row">
                        @foreach ($image as $client)
                        <div class="col-6">
                            <div class="-box">
                                <img src="{{ asset('public/images/' . $client->image) }}" style="width:100%; height:162px;" alt="">
                            </div>
                        </div>
                        @endforeach
                    </div>


                </div>
            </div>

        </div>
    </section><!--====== End project-page-section ======-->
</div>



<!--====== Start Testimonial section ======-->
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="filter-nav text-center mt-30 mb-10">
            <ul class="filter-btn">
                <li data-filter="*" class="active">Our Testimonials</li>


            </ul>
        </div>
    </div>
</div>

<section class="testimonial-area-v2 pt-105 pb-10">
    <div class="container">

        <div class="row testimonial-slider-two" style="margin: auto;">

            @foreach ($test as $testimonial)
            <div class="col-12 alt" style="height: 400px;margin-left: 40px;">
                <div class="-img">

                    <img src="{{ asset('public/images/' . $testimonial->title) }}" alt="" style="height: 70px;  width:90px;margin-left: 100px; ">
                </div>
                <p class="testimonial-text">"{{ $testimonial->description }}"</p>
            </div>
            @endforeach

        </div>
    </div>
</section>







<!--====== Start Blog section ======-->

<div class="galler">
    <section class="blog-grid-v1 pt-120 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center ">
                        <div class="sub-title">
                            <span class="title">Events/Achievements</span>

                        </div>
                        <h2>Learn More From Our
                            Latest <span>Event.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row blog-slider-one">
                @foreach ($event as $post)
                <div class="col-lg-4">
                    <div class="blog-post-item ">
                        <a href="{{ route('singleevent', ['id' => $post->id]) }}" data-id="{{ $post->id }}" class="post-thumbnail">
                            <img src="{{ asset('public/images/' . $post->image) }}" style="width:100%;height:200px;" alt="blog-grid">
                            <span class="date">{{ \Carbon\Carbon::parse($post->created_at)->format('d F, Y') }}</span>
                        </a>

                        <div class="entry-content" style="border-bottom: 1px solid black;">
                            <h3 class="title" style="height:40px;"><a href="{{ url('/event') }}">{{ $post->title }}</a></h3>
                            <a href="{{ route('singleevent', ['id' => $post->id]) }}" data-id="{{ $post->id }}" class="main-btn" style="margin-left:10px; margin-top:10px;">Read more</a>

                        </div>


                    </div>
                </div>
                @endforeach


            </div>


        </div>
    </section><!--====== End Blog section ======-->
</div>

<!--====== Start Project-area section ======-->
<div class="resource">
    <section class="project-area-v1" style="margin-top: -150px; padding-top:20px;">
        <div class="project-main-section">
            

            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center ">
                        <div class="sub-title">
                            <span class="title">Resources</span>

                        </div>
                        <h2>Learn More From Our
                            Latest <span>Resource.</span></h2>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="" style="background-color:#abadb0; padding-top:20px;">
            <div class="container">
                <div class="row project-slide-one">
                    @foreach ($resource as $resource)
                    <div class="col-lg-4">
                        <div class="project-item">
                            <div class="project-img" >
                            <a href="{{ url('/singleresource', $resource->id) }}">
    <img src="{{ asset('public/images/' . $resource->image) }}" alt="" style="height: 186px; width: 286px; border-radius:10px;object-fit:cover;">
</a>

                                <div class="">
                                    <div class="project-content">
                                        <div class="icon">
                                            <a href="{{ asset('public/images/' . $resource->image) }}" style="height:10px;"class="popup-icon img-popup"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-info">
                                <span class="span">Our Resources</span>
                                <h4><a href="{{ url('/singleresource', $resource->id) }}">{{ $resource->title }}</a></h4>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>
            </div>
        </div>
    </section><!--====== End Project-area section ======-->
</div>
<!-- =============mobile view============ -->









</div>


</div>

















<section class="counter-area-v2 mt-60" style="margin-top:10px;">
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




<!-- <section class="new-features-area pt-130 pb-130">
        <div class="container">
            <div class="new-row no-gutters" id="new-features-slider">
                <div class="new-features-column col-lg-4 col-md-6 col-sm-12 animated-feature">
                    <div class="new-features-item text-center">
                        <div class="new-features-icon" style="margin: auto;">
                            <img src="{{ asset('public/tech/assets/images/patend1.png') }}"
                                style="height: 100px; width: 100px; border: 2px solid #ebe7e7; border-radius: 10px; object-fit: cover; "
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="new-features-column col-lg-4 col-md-6 col-sm-12 animated-feature">
                    <div class="new-features-item text-center">
                        <div class="new-features-icon" style="margin: auto;">
                            <img src="{{ asset('public/tech/assets/images/trade4.png') }}"
                                style="height: 100px; width: 100px; border: 2px solid #ebe7e7; border-radius: 10px; object-fit: cover; "
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="new-features-column col-lg-4 col-md-6 col-sm-12 animated-feature">
                    <div class="new-features-item text-center">
                        <div class="new-features-icon" style="margin: auto;">
                            <img src="{{ asset('public/tech/assets/images/cr1.jpg') }}"
                                style=" height: 100px; width: 100px; border: 2px solid #ebe7e7; border-radius: 10px; object-fit: cover; "
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="new-features-column col-lg-4 col-md-6 col-sm-12 animated-feature">
                    <div class="new-features-item text-center">
                        <div class="new-features-icon" style="margin: auto;">
                            <img src="{{ asset('public/tech/assets/images/v5.jpg') }}"
                                style="height: 100px; width: 100px; border: 2px solid #ebe7e7; border-radius: 10px; object-fit: cover; "
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="new-features-column col-lg-4 col-md-6 col-sm-12 animated-feature ">
                    <div class="new-features-item text-center">
                        <div class="new-features-icon " style="margin: auto;">
                            <img src="{{ asset('public/tech/assets/images/iso1.png') }}"
                                style="height: 100px; width: 100px; border: 2px solid #ebe7e7; border-radius: 10px; object-fit: cover; "
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<section class="cta-area-v1      pb-110" style="margin-top:30px;">
    <div class="container">
        <div class="cta-wrapper main-bg">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="section-title section-white-title">
                        <h2>If You Have Any Project.
                            Please, <span>Contact With Us.</span></h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="button-box">
                        <a href="{{ url('/contact') }}" class="main-btn">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End CTA section ======-->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $(document).ready(function() {
        $('#new-features-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            infinite: true, // Set infinite to true for continuous looping
        });
    });
</script>
@include('tech.layout.footer')