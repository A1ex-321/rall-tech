@include('tech.layout.header')
<!--====== Start breadcrumbs-section ======-->
<section class="breadcrumbs-section bg_cover" style="background-image: url({{ asset('public/tech/assets/images/221.jpg') }});">

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="breadcrumbs-content">
                    <h1>Service</h1>
                    <ul class="link">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Service</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End breadcrumbs-section ======-->
<section class="service-area-v1 bg_cover pt-135 pb-120" style="background-image: url({{ asset('public/tech/assets/images/b1.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title section-white-title text-center mb-100">
                    
                    <h5 style="color: #ebe7e7;font-size:21px;">At Raaltech Solutions, we offer a wide array of services encompassing the full spectrum of
                        <span> Intellectual Property and Research & Development, including:</span>
                    </h5>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($getRecord as $record)
            <div class="col-md-4">
                <div class="service-item text-center mb-55" style="height: 350px;">
                    <div class="-img">
                        <img src="{{ asset('public/images/' . $record->image) }}" alt="" style="height: 100px; width: 100px;  margin-left: -269px; margin-top:-40px;border-radius:3px;  ">
                    </div>
                    <div class="service-content" style="margin-top:44px;">
                        <span class="position" style="font-size: 25px; font-weight: bold;">{{ $record->title }}</span>
                        <h5 class="title"><a>{{ $record->description }}</a></h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


         



        </div>

    </div>

</section><!--====== End Service section ======-->



<!--====== Start About Section ======-->
<section class="about-area-v3 bg_cover pt-115 pb-120" style="background-image: url({{ asset('public/tech/assets/images/bg/about-bg-1.jpg') }});">

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content-box">
                    <div class="section-title section-white-title mb-30">
                        <span class="span">Over view of our service</span>
                        <ul style="list-style-type: square; font-size:18px;">
                            <li>Drafting, filing, and prosecuting Patent applications as per India and other Jurisdictions.</li>
                            <li>Filing of PCT National phase applications and Paris Convention Applications.</li>
                            <li>Filing and Prosecution of Trademark applications at the Indian Trademark registry.</li>
                            <li>Filing Trademarks internationally.</li>
                            <li>Trademark research with opinion.</li>
                            <li>Infringement and validity advice.</li>
                            <li>Filing and Registration.</li>
                        </ul>
                    </div>

                    <div class="counter-wrapper row">
                        <div class="col-lg-4 col-md-4 col-sm-12 counter-column">
                            <div class="counter-box">
                                <h2><span class="counter">350</span> <span class="plus">+</span></h2>
                                <h4>Total Project</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 counter-column">
                            <div class="counter-box">
                                <h2><span class="counter">10</span> <span class="plus">+</span></h2>
                                <h4>Team Members</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 counter-column">
                            <div class="counter-box">
                                <h2><span class="counter">5</span> <span class="plus">+</span></h2>
                                <h4>Win Awards</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!--<div class="about-img">-->
                <!--    <img src="{{ asset('public/tech/assets/images/s2.png') }}" alt="">-->
                <!--</div>-->
            </div>
        </div>
    </div>
</section><!--====== End About Section ======-->
<!--====== Start Pricing Section ======-->
@include('tech.layout.footer')