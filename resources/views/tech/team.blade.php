@include('tech.layout.header')
<style>
    .client {
        display: none;
    }


    @media only screen and (max-width: 767px) {
        .client1 {
            display: block;
        }
        #tit{
margin-left: 90px;        }
    }

   
</style>

<!--====== Start breadcrumbs section ======-->
<section class="breadcrumbs-section bg_cover" style="background-color: rgb(111, 113, 143);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="breadcrumbs-content">
                    <h1>Our Team</h1>
                    <ul class="link">
                        <li><a href="history.html">Home</a></li>
                        <li class="active">Our Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End breadcrumbs section ======-->
<!--====== Start Features section ======-->
<div class="client1">
    <section class="team-area-v1  pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-60">
                        <div class="sub-title">
                            <span class="title" style="margin-top: 40px;">Our Team</span>

                        </div>
                        <h2>We Always Work With
                            A Great <span>Team.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($getRecord as $record)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-item mb-40">
                        <div class="team-img" style="object-fit: cover; aspect-ratio: 2/1;">
                            <img src="{{ asset('public/images/' . $record->image) }}" alt="{{ $record->name }}" style="height: 200px; width: 200px; object-fit: cover;">
                        </div>
                        <div class="team-info">
                            <div class=""></div>
                            <div class="team-member-info d-flex align-items-center">
                                <div class="">
                                    <h4 id="tit"style="height:50px;"><a>{{ $record->name }}</a></h4>
                                </div>
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
                        <p><b>Our Team</b><br>
                            At RAALTECH Solutions, success is a collaborative effort. We bring
                            together cross
                            -
                            functional teams that seamlessly integrate patent
                            attorneys with technology domain experts to handle our projects. With
                            a holistic understanding of the patent process, from p
                            reparation to
                            hearings, our professionals navigate every aspect.
                        </p>
                        <p>We empower our team to lead, ensuring successful outcomes, strong
                            client relationships, and maximum customer success.</p>
                        <p>W
                            e don't just work; we thrive together, driving innovation, excellence,
                            and lasting client satisfaction.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-item">
                    <!-- <div class="td-thumb bg_cover" style="background-image: url(assets/images/t-thumb-2.jpg);">
                                <i class="icon">“</i>
                            </div> -->
                    <div class="td-content">
                        <p><b>List of Designations:</b><br>
                        </p>
                        <ul>
                            <li>* Managing Director</li>
                            <li>* Technical Lead</li>
                            <li>* Business Development</li>
                            <li>* Patent Litigation Trainee</li>
                            <li>* Design Engineer</li>
                            <li>* Trademark Attorney</li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@include('tech.layout.footer')