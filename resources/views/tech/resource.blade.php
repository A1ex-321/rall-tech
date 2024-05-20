@include('tech.layout.header')
<style>
 

    .img-fluid {
        transition: transform 0.3s ease-in-out;
        /* Add smooth transition */
    }

    .img-fluid:hover {
        transform: scale(1.2);
        /* Increase the size on hover */
    }

    .widget-recent-post .post-thumbnail-content {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .widget-recent-post .post-thumbnail-content img {
        width: 80px;
        height: 80px;
        margin-right: 10px;
    }

    .widget-recent-post .post-title-date h6 {
        margin: 0;
        font-size: 16px;
    }

    .widget-tag-cloud .tag-cloud-links a {
        display: block;
        margin-bottom: 5px;
    }

    .widget-cta .cta-content {
        padding: 20px;
    }

    .widget-cta .call {
        display: inline-block;
        margin-top: 10px;
        font-size: 18px;
        font-weight: bold;
    }
</style>
<!--====== Start breadcrumbs section ======-->
<section class="breadcrumbs-section bg_cover" style="background-image: url('{{ asset('public/tech/assets/images/resources.jpg') }}');padding:5px;">


    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="breadcrumbs-content">
                    <h1>Our Resources</h1>
                    <ul class="link">
                        <li><a>Home</a></li>
                        <li class="active">Our Resources</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End breadcrumbs section ======-->
<!--====== Start Blog-standard-section ======-->
<section class="blog-standard-section pt-120 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">


                @foreach($getRecord as $record)
                <div class="blog-post-item mb-50">
                    <div class="post-thumbnail">
                        <a href="{{ url('/singleresource', $record->id) }}" style="display: block;">
                            <img src="{{ asset('public/images/' . $record->image) }}" style="width:100%;height:350px;object-fit:cover;" alt="">
                        </a>

                    </div>
                    <div class="entry-content">
                        <div class="post-meta d-flex justify-content-between">
                            <ul class="meta-link">
                                <li>
                                    <!-- <span><i class="icofont-user-alt-7"></i><a>{{ \Carbon\Carbon::parse($record->created_at)->format('F j, Y') }}
</a></span> -->
                                </li>
                            </ul>
                        </div>
                        <h3 class="title"><a>{{ $record->title }}</a></h3>
                        <p>{{ $record->description }}</p>
                        <a href="{{ url('/singleresource', $record->id) }}" class="main-btn">Read more</a>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="col-lg-4">
                <div class="sidebar-widget-area">
                    <div class="widget widget-recent-post mb-4">
                        <h4 class="widget-title">Recent Post</h4>
                        <ul class="recent-post-widget">
    @foreach($getRecord as $record1)
    <li class="post-thumbnail-content">
        <a href="{{ url('/singleresource', $record->id) }}">
            <div style="width:100px;height:75px;"> <img src="{{ asset('public/images/' . $record1->image) }}" class="img-fluid" alt="" ></div>
           
        </a>
        <div class="post-title-date" style="margin-left:0px;">
            <h6>
                <a href="{{ url('/singleresource', $record->id) }}">{{ $record1->title }}</a>
            </h6>
        </div>
    </li>
    @endforeach
</ul>

                    </div>

                    <div class="widget widget-tag-cloud mb-40">
                        <h4 class="widget-title">Popular Tags</h4>
                        <a href="{{ url('/team') }}">Our Team</a>
                        <a href="{{ url('/event') }}">Events & Achievements</a>

                    </div>
                    <div class="widget widget-cta mb-40">
                        <div class="cta-content bg_cover text-center" style="">

                            <h3>Make a call for
                                any type query.</h3>
                            <i class="icofont-ui-call"></i>
                            <h4 class="call" style="margin: 0;">
                                <a href="tel:+91 70940 770 40" style="display: inline-block;font-size:27px;">+91 70940 770 40</a>
                            </h4>

                        </div>
                    </div>
                </div>
            </div>
</section><!--====== End Blog-standard-section ======-->
<!--====== Start Footer ======-->
@include('tech.layout.footer')