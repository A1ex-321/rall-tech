@include('tech.layout.header')
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    @media only screen and (max-width: 767px) {

        /* Adjust flip card size for smaller devices */
        .flip-card {
            background-color: transparent;
            width: 100%;
            /* Adjust width to fit smaller screens */
            height: auto;
            /* Allow height to adjust automatically based on content */
            perspective: 1000px;
            margin-bottom: 20px;
            /* Add margin for spacing between flip cards */
        }

        /* Adjust flip card front and back size for smaller devices */
        .flip-card-front,
        .flip-card-back {
            width: 100%;
            height: auto;
            padding: 20px;
            /* Add padding for better readability */
        }

        /* Adjust flip card image size for smaller devices */
        .flip-card-front img {
            width: 100%;
            /* Make image responsive */
            height: auto;
            /* Allow height to adjust automatically based on width */
            border-radius: 50%;
            margin-bottom: 10px;
            /* Add margin for spacing between image and name */
        }

        /* Adjust flip card name size for smaller devices */
        .flip-card-front h4 {
            font-size: 18px;
            /* Adjust font size for smaller devices */
            margin-bottom: 20px;
            /* Add margin for spacing between name and details */
        }

        /* Adjust flip card role and details size for smaller devices */
        .advisor-info {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .role {
            font-size: 16px;
            /* Adjust font size for smaller devices */
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .details {
            font-size: 14px;
            /* Adjust font size for smaller devices */
            line-height: 1.6;
            color: #666;
            margin-bottom: 8px;
        }

    }

    .flip-card {
        background-color: transparent;
        width: 360px;
        height: 360px;
        perspective: 1000px;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .flip-card-front {
        background-color: #cb716387;
        color: black;
    }

    .flip-card-back {
        background-color: white;
        color: black;
        transform: rotateY(180deg);
    }

    .advisor-info {
        background-color: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .role {
        font-size: 20px;
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
    }

    .details {
        font-size: 16px;
        line-height: 1.6;
        color: #666;
        margin-bottom: 8px;
    }
</style>

<!--====== Start breadcrumbs section ======-->
<!-- <section class="breadcrumbs-section bg_cover" style="background-color: rgb(111, 113, 143);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="breadcrumbs-content">
                    <h1>Our Team</h1>
                    <ul class="link">
                        <li><a>Home</a></li>
                        <li class="active">Our Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--====== End breadcrumbs section ======-->
<!--====== Start Features section ======-->
<div class="client12">
    <section class="team-area-v1  pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-60">
                        <div class="sub-title">
                            <!-- <span class="title" style="margin-top: 40px;">Our Team</span> -->

                        </div>
                        <h2>We Always Work With
                            A Great <span>Team.</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($getRecord as $index => $record)
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="flip-card" style="margin-top:30px;">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="{{ asset('public/images/' . $record->image) }}" alt="" style="width:250px;height:250px; border-radius: 50%;margin-top:10px;">
                                <h5 style="margin-top: 10px; padding-left: 10px; padding-right: 10px;">{{ $record->name }}</h5>
                                <h5 style="padding-left: 10px; padding-right: 10px;font-size:17px;">{{ $record->design }}</h5>


                            </div>
                            <div class="flip-card-back">
                                <h3 style="margin-top:20px;color: #6060d7;">{{ $record->name }}</h3>
                                <div class="advisor-info">
                                    <p class="role" style="color: #6975af;">{{$record->design}}</p>
                                    <p class="details" style="color: #dd5b33;">{{$record->new}}</p>

                                </div>

                                <!-- <p>{{$record->design}}</p>
                                <p>{{$record->new}}</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>








        </div>
    </section><!--====== End Team-area section ======-->
</div>


<!-- --------------------in mobile view------------------ -->


</div>
</section>
</div>

<!--====== End mobile section ======-->
<section class="testimonial-area-v2 pt-105 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center mb-60">
                    <h2>Join Us in Shaping the Future</h2>
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
                    <!-- <div class="td-thumb bg_cover" style="background-image: url(assets/images/t-thumb-1.jpg);">
                                <i class="icon">“</i>
                            </div> -->
                    <div class="td-content">
                        <p style="text-align:justify;"><b>Our Team</b><br>
                            At RAALTECH Solutions, success is a collaborative effort. We bring
                            together cross
                            -
                            functional teams that seamlessly integrate patent
                            attorneys with technology domain experts to handle our projects. With
                            a holistic understanding of the patent process, from p
                            reparation to
                            hearings, our professionals navigate every aspect.
                        </p>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-item">
                    <!-- <div class="td-thumb bg_cover" style="background-image: url(assets/images/t-thumb-2.jpg);">
                                <i class="icon">“</i>
                            </div> -->
                     <div class="td-content">
                     <p style="text-align:justify;">We empower our team to lead, ensuring successful outcomes, strong
                            client relationships, and maximum customer success.</p>
                        <p style="text-align:justify;">W
                            e don't just work; we thrive together, driving innovation, excellence,
                            and lasting client satisfaction.</p>
                        </ul>

                    </div> 
                </div>
            </div>

        </div>
    </div>
</section>
@include('tech.layout.footer')