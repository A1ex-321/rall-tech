@include('tech.layout.header')
<style>
       .img-fluid {
        transition: transform 0.3s ease-in-out; /* Add smooth transition */
    }

    .img-fluid:hover {
        transform: scale(1.2); /* Increase the size on hover */
    }
</style>
<style>#all a {
    color: blue; /* Sets the text color to blue */
    text-decoration: underline; /* Adds underline */
}</style>
        <!--====== Start breadcrumbs section ======-->
        <section class="breadcrumbs-section bg_cover" style="background-image: url('{{ asset('public/tech/assets/images/resources.jpg') }}');">


            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="breadcrumbs-content">
                            <h1>Our Resources</h1>
                            <ul class="link">
                                <li><a href="index.html">Home</a></li>
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
                <div class="row" id="data">
                    <div class="col-lg-8">
                    @if($getRecordone)
    <div class="blog-post-item mb-50">
        <div class="post-thumbnail">
            <img src="{{ asset('public/images/' . $getRecordone->image) }}" style="width:100%;height:350px;object-fit:cover;" alt="">
        </div>
        <div class="entry-content">
            <div class="post-meta d-flex justify-content-between">
                <ul class="meta-link">
                    <li><span><i class="icofont-user-alt-7"></i><a>{{ \Carbon\Carbon::parse($getRecordone->created_at)->format('F j, Y') }}</a></span></li>
                </ul>
            </div>
            <h3 class="title"><a>{{ $getRecordone->title }}</a></h3>
            <p>{{ $getRecordone->description }}</p>
        </div>
        <div class="ckeditor-content" id="all">
    {!! str_replace('<img', '<img style="width: 600px; height: 300px;"', $getRecordone->content) !!}
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
                @foreach($getRecord as $record1)
                    <li class="post-thumbnail-content">
                        <img src="{{ asset('public/images/' . $record1->image) }}" class="img-fluid" alt="">
                        <div class="post-title-date">
                            <h6><a href="{{ url('/singleresource', $record1->id) }}">{{ $record1->title }}</a></h6>
                            <span class="posted-on"><i class="fas fa-calendar-alt"></i>
                                {{ \Carbon\Carbon::parse($record1->created_at)->format('F j, Y') }}
                            </span>
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
                            <div class="cta-content bg_cover text-center" style="background-image: url({{ asset('public/tech/assets/images/blog/cta-bg.jpg') }});">

                                    <h3>Make a call for
                                        any type query.</h3>
                                    <i class="icofont-ui-call"></i>
                                    <h4 class="call"><a href="tel:+91 70940 770 40">+91 70940 770 4.</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Blog-standard-section ======-->
        <!--====== Start Footer ======-->
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            const blogListContainer = document.getElementById('data');

const oembedContainers = blogListContainer.querySelectorAll('oembed');
console.log("fddf",oembedContainers);
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
                            link.addEventListener('click', function (event) {
                                event.preventDefault(); // Prevents the default behavior (opening the link)
                                window.open(link.href, '_blank');
                            });
                        });                
    });



</script>
@include('tech.layout.footer')
