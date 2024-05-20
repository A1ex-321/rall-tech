@include('tech.layout.header')
@include('tech.layout.message')

<!--====== Start breadcrumbs section ======-->
<!--====== End breadcrumbs section ======-->
<section class="service-area-v1 bg_cover pt-135 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
               
            </div>
        </div>
        <div class="row ">

            @foreach($getRecord as $record)
            <div class="col-lg-4">
                <div class="service-item text-center mb-55" style="height: 300px;">
                    <h3 class="position mb-30">{{$record->title}}</h3>
                    <div class="info-box d-flex align-items-start">
                        <div class="icon">
                            <i class="icofont-location-pin"></i>
                        </div>
                        <div class="info" style="text-align: justify;">
                            <p>{{$record->address}}</p>
                        </div>
                    </div>
                    <div class="info-box d-flex align-items-start ">
                        <div class="icon">
                            <i class="icofont-email"></i>
                        </div>
                        <div class="info">
    @php
    $emails = explode(',', $record->email);
    @endphp
    @foreach($emails as $email)
        <p><a href="mailto:{{ trim($email) }}">{{ trim($email) }}</a></p>
    @endforeach
</div>

                    </div>
                    <div class="info-box d-flex align-items-start">
                        <div class="icon">
                            <i class="icofont-headphone-alt-3"></i>
                        </div>
                        <div class="info">
                            <p><a href="tel:+91{{$record->number}}"> {{$record->number}}</a></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach           
        </div>

</section><!--====== End Service section ======-->
<!--====== Start Contact-page-section ======-->
<section class="contact-page-section pt-120 pb-85">
    <div class="container">
        <div class="row">

            <div class="col-lg-12" style="margin-bottom: 300px;">
                <div class="contact-form-wrapper">
                    <div class="section-title mb-50">
                        <h2>Get In Touch</h2>
                        <div class="title-span-line">
                            <span class="line line-1"></span>
                            <span class="line line-2"></span>
                            <span class="line line-3"></span>
                        </div>
                    </div>
                    <div class="contact-form" id="contact-form" id="contactForm">
                        <form action="{{ route('send.message') }}" method="post">
                            @csrf <!-- CSRF protection for Laravel -->

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form_group" >
                                        <input type="text" style="border:2px solid #f9580e;"class="form_control" placeholder="Name:" name="name" required>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form_group" >
                                        <input type="text"style="border:2px solid #f9580e;" style="margin-top:2px;" class="form_control" placeholder="Phone:" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_group" >
                                        <textarea class="form_control" style="margin-top:10px;border:2px solid #f9580e;"name="msg" placeholder="Message here...."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_group" style="margin-top:10px;">
                                        <button class="main-btn">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Contact-page-section ======-->
<!--====== Start contact_map section ======-->
<div class="col-lg-8">

<section class="contact-map-section">
    <div class="map_box">
        <iframe src="https://www.google.com/maps/d/embed?mid=1FNUq6LcTk8z41dKq4c0SYmH1Dgw&hl=en&ehbc=2E312F" width="640" height="480"></iframe>
    </div>
</section>
</div>

<!--====== End contact_map section ======-->
<!--====== Start Footer ======-->
<!-- Include SweetAlert CSS -->
<!-- Include SweetAlert2 JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- Include SweetAlert JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>





@include('tech.layout.footer')