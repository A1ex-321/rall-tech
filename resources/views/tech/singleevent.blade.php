@include('tech.layout.header')
<style>#all a {
    color: blue; /* Sets the text color to blue */
    text-decoration: underline; /* Adds underline */
}</style>

<section class="project-area-v3 pt-115 pb-120" id="project-filter">
        <div class="container-fluid" style="margin-top: 10px;">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="filter-nav text-center mb-70">
                        <ul class="filter-btn">
                            <li data-filter="*" class="active"> Innovate. </li>
                            <li data-filter=".cat-1"> Connect. </li>
                            <li data-filter=".cat-2"> Transform.</li>
                            <li data-filter=".cat-3"> Welcome to</li>
                            <li data-filter=".cat-4">Raal Tech Solution 2023! </li>
                           
                        </ul>
                    </div>
                </div>
            </div>
          

<div class="container" id="data2">
   
        <div class="row">
        @if($getRecord)
                <div class="blog-post-item mb-50">
                    <div class="post-thumbnail">
                        <img src="{{ asset('public/images/' . $getRecord->image) }}" style="width:100%;height:350px;object-fit:cover;" alt="">
                    </div>
                    <div class="entry-content">
                        <div class="post-meta d-flex justify-content-between">
                            <ul class="meta-link">
                                <li><span><i class="icofont-user-alt-7"></i><a>{{ \Carbon\Carbon::parse($getRecord->created_at)->format('F j, Y') }}</a></span></li>
                            </ul>
                        </div>
                        <h3 class="title"><a>{{ $getRecord->title }}</a></h3>
                        <p>{{ $getRecord->description }}</p>
                    </div>
                    <div class="ckeditor-content" id="all">
                        {!! str_replace('<img', '<img style="width: 600px; height: 300px;"' , $getRecord->content) !!}
                    </div>

                </div>
                @else
                <p>No record found for the given ID.</p>
                @endif
        </div>
    
</div>


        </div>
    </section><!--====== End project-page-section ======-->

        <!--====== Start breadcrumbs-section ======-->
        <div class="container" id="data" class="ckeditor-content">
    {!! str_replace('<img', '<img style="width: 600px; height: 300px;"', $getRecord->content) !!}
   




</div>
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
