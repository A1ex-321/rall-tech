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
</style>
<style>
    #all a {
        color: blue;
        /* Sets the text color to blue */
        text-decoration: underline;
        /* Adds underline */
    }
</style>
<!--====== Start breadcrumbs section ======-->
<section class="breadcrumbs-section bg_cover" style="background-image: url('{{ asset('public/tech/assets/images/event.jpg') }}');padding:10px;">


    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="breadcrumbs-content">
                    <h1>Our Events</h1>
                    <ul class="link">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Our Events</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End breadcrumbs section ======-->
<!--====== Start Blog-standard-section ======-->
<section class="blog-standard-section pt-10 pb-80">
    <div class="container">
        <div class="row" id="data">
            <div class="col-lg-8">
                @if($getRecord)
                <div class="blog-post-item mb-50">
                    <div class="post-thumbnail">
                        <img src="{{ asset('public/images/' . $getRecord->image) }}" style="width:100%;height:350px;object-fit:cover;" alt="">
                    </div>
                    <div class="entry-content">
                        <div class="post-meta d-flex justify-content-between">
                            <ul class="meta-link">
                                <li>
                                    <!-- <span><i class="icofont-user-alt-7"></i>{{ \Carbon\Carbon::parse($getRecord->created_at)->format('F j, Y') }}</span> -->
                                </li>
                            </ul>
                        </div>
                        <h3 class="meta-link">{{ $getRecord->title }}</h3>
                        <p>{{ $getRecord->description }}</p>
                    </div>
                    <div class="ckeditor-content" id="all">
                        {!! str_replace('<img', '<img style="width: 100%;max-height: 500px;height:auto;"' , $getRecord->content) !!}
                    </div>

                </div>
                @else
                <p>No record found for the given ID.</p>
                @endif



            </div>

            <div class="col-lg-4">
                <div class="sidebar-widget-area">
                    <div class="widget widget-recent-post mb-40">
                        <h4 class="widget-title">Recent Post</h4>
                        <ul class="recent-post-widget">
                            @foreach($getRecordone as $record1)
                            <li class="post-thumbnail-content">
                                <img style="object-fit:cover;" src="{{ asset('public/images/' . $record1->image) }}" href="{{ url('/singleevent', $record1->id) }}" class="img-fluid" alt="">
                                <div class="post-title-date">
                                    <h6 style="overflow: hidden; height:60px; text-overflow: ellipsis;">
                                        <a href="{{ url('/singleevent', $record1->id) }}">{{ $record1->title }}</a>
                                    </h6>

                                    <!-- <span class="posted-on" style="font-size: small;">
    <i class="fas fa-calendar-alt"></i>
    {{ \Carbon\Carbon::parse($record1->created_at)->format('F j, Y') }}
</span> -->

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
                            <h4 class="call"><a href="tel:+91 70940 770 40" style="display:inline-block;font-size:27px;">+91 70940 770 40.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Blog-standard-section ======-->
<!--====== Start Footer ======-->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const blogListContainer = document.getElementById('data');

        const oembedContainers = blogListContainer.querySelectorAll('oembed');
        console.log("fddf", oembedContainers);
        oembedContainers.forEach(oembed => {
            const outerHtml = oembed.outerHTML;
            const urlMatch = outerHtml.match(/url="(.*?)"/);

            if (urlMatch) {
                const url = urlMatch[1];

                const iframe = document.createElement('iframe');
                iframe.setAttribute('src', url);
                iframe.setAttribute('width', '600'); // Set your desired width
                iframe.setAttribute('height', '400'); // Set your desired height
                iframe.setAttribute('frameborder', '0');
                iframe.setAttribute('allowfullscreen', 'true');

                oembed.replaceWith(iframe);
            }
        });

        const anchorInContainer = blogListContainer.querySelectorAll('a');
        anchorInContainer.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault(); // Prevents the default behavior (opening the link)
                window.open(link.href, '_blank');
            });
            const anchorInContainer1 = blogListContainer.querySelectorAll('p');

            anchorInContainer1.forEach(paragraph => {
                paragraph.style.textAlign = 'justify';
            });

        });
    });
</script>
@include('tech.layout.footer')