@include('tech.layout.header')
<style>
    .team-img:hover img {
        background-color: lightgray;
        /* Example hover effect: changing background color to light gray */
        transform: scale(1.1);
        /* Increase the image size by 10% on hover */
        transition: transform 0.5s ease;
        /* Smooth transition for the scale effect */
    }



    @media only screen and (max-width: 767px) {
        .filter-nav {
            margin-bottom: 30px;
            /* Adjust margin as needed */
        }

        .filter-btn {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }

        .filter-btn li {
            width: 100%;
            text-align: center;
            padding: 10px;
        }

        .container {
            flex-direction: column;
            align-items: center;
        }

        .card {
            width: 100%;
            margin-bottom: 40px;
            /* Adjust margin as needed */
        }

        .button-box {
            margin-top: 40px;
            /* Adjust margin as needed */
        }
    }

    /* .client {
        display: none;
    } */
    #data2 {
            display: none;
        }
 

    @media only screen and (max-width: 767px) {

        #data2 {
            display: block;
        }

        #data {
            display: none;
        }

        #data .row {
            display: flex;
            flex-wrap: wrap;
        }

        #data .col-lg-6 {
            flex: 0 0 50%;
            /* Make each column take up 50% of the row width */
            max-width: 50%;
        }
    }

    @media only screen and (max-width: 767px) {}

    .testimonial-container {
        overflow: hidden;
    }

    .testimonial-cards {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .testimonial-card {
        /* Adjust your existing testimonial card styles here */
        flex: 0 0 100%;
        max-width: 500px;
    }
</style>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="filter-nav text-center mb-70">
                <ul class="filter-btn">
                    <li data-filter="*" class="active"> A testimonial page on a</li>
                    <li data-filter=".cat-1">website serves as a valuable</li>
                    <li data-filter=".cat-2">tool for building credibility</li>
                    <li data-filter=".cat-3"> and</li>
                    <li data-filter=".cat-4">trust with visitors.</li>

                </ul>
            </div>
        </div>
    </div>

</div>
<div class="container" id="data">
    @php
    $counter = 0;
    @endphp
    @foreach($getRecord as $record)
        @if($counter % 5 == 0)
            @if($counter != 0)
            </div> <!-- Close previous container -->
            @endif
            <div class="container" style="display: flex; justify-content: center;">
        @endif
        <div class="card" style="padding: 30px; width: 45%; object-fit: contain; aspect-ratio: 1/1; margin-left: 10px;">
            <img src="{{ asset('public/images/' . $record->image) }}" style="width:100px; margin-left:32px;" alt="">
        </div>
        @php
        $counter++;
        @endphp
    @endforeach
    </div> <!-- Close the last container -->
</div>

<div class="container" id="data2">

    <div class="row">
        @foreach($getRecord as $record)
        <div class="col-6">
                <div class="team-img" style="object-fit: cover; aspect-ratio: 2/1;">
                    <img src="{{ asset('public/images/' . $record->image) }}" alt="{{ $record->name }}" style="height: 150px; width: 100%; object-fit: cover; padding:25px;" class="image-hover">
                </div>
            
        </div>
        @endforeach
    </div>

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

<section class="testimonial-area-v2 pt-105 pb-120">
    <div class="container">

        <div class="row testimonial-slider-two" style="margin: auto;">
            @foreach($getRecord1 as $record)
            <div class="col-12 testimonial-card alt" style=" margin-left: 40px; ">
                <div class="service-img">

                    <img src="{{ asset('public/images/' . $record->title) }}" alt="" style="height: 100px; ; width:100px;margin-left: 130px; ">
                </div>
                <p class="testimonial-text">{{ $record->description }}</p>
            </div>
            @endforeach

        </div>
    </div>
</section>




<!-- ====================mobile view============= -->

@include('tech.layout.footer')