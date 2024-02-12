@include('tech.layout.header')
<style>
   .team-img:hover img {
    background-color: lightgray; /* Example hover effect: changing background color to light gray */
    transform: scale(1.1); /* Increase the image size by 10% on hover */

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

    .client {
        display: none;
    }
    #data {
        display: none;
    }

    @media only screen and (max-width: 767px) {
        
    #data2 {
        display: none;
    }
    #data {
        display: block;
    }
        #data .row {
            display: flex;
            flex-wrap: wrap;
        }
        #data .col-lg-6 {
            flex: 0 0 50%; /* Make each column take up 50% of the row width */
            max-width: 50%;
        }
    }

    @media only screen and (max-width: 767px) {
        
    }

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
    <div class="row">
        @foreach($getRecord as $record)
        <div class="col-lg-6 col-md-6 col-sm-12"> <!-- Use col-lg-6 instead of col-lg-3 to display two images per row on larger screens -->
            <div class="team-item mb-40">
                <div class="team-img" style="object-fit: cover; aspect-ratio: 2/1;">
                    <img src="{{ asset('public/images/' . $record->image) }}" alt="{{ $record->name }}" style="height: 150px; width: 100%; object-fit: cover;" class="image-hover">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="container" id="data2">
   
        <div class="row">
            @foreach($getRecord as $record)
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="team-item mb-40">
                    <div class="team-img" style="object-fit: cover; aspect-ratio: 2/1;">
                        <img src="{{ asset('public/images/' . $record->image) }}" alt="{{ $record->name }}" style="height: 150px; width: 100%; object-fit: cover;" class="image-hover">
                    </div>
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
    <div class="col-12 testimonial-card alt" style="height: 400px; margin-left: 40px;">
        <h3 style="margin-left: 50px; margin-bottom: 50px;">{{ $record->title }}</h3>
        <p class="testimonial-text">{{ $record->description }}</p>
    </div>
@endforeach

        </div>
    </div>
</section>




<!-- ====================mobile view============= -->
<div class="client">
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
                    <div class="col-6">
                        <div class="card" style=" width: 100%; object-fit: cover; aspect-ratio: 1/1;">
                            <img src="{{ asset('public/tech/assets/images/appollo.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card" style="  width: 100%; object-fit: cover; aspect-ratio: 1/1; ">
                            <img src="{{ asset('public/tech/assets/images/AR4techg.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">

                        <div class="card" style="width: 100%; object-fit: cover; aspect-ratio: 1/1; ">
                            <img src="{{ asset('public/tech/assets/images/aram1.jpg') }}" alt="">
                        </div>
                    </div>


                    <div class="col-6">

                        <div class="card" style="width: 100%; object-fit: contain; aspect-ratio: 1/1;">
                            <img src="{{ asset('public/tech/assets/images/iit.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">

                        <div class="card" style="width: 100%; object-fit: contain; aspect-ratio: 1/1;">
                            <img src="{{ asset('public/tech/assets/images/near1.jpg') }}" alt="">
                        </div>
                    </div>



                    <div class="col-6">

                        <div class="card" style="width: 100%; object-fit: contain; aspect-ratio: 1/1;">
                            <img src="{{ asset('public/tech/assets/images/jezh.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card" style="width: 100%; object-fit: contain; aspect-ratio: 1/1;">
                            <img src="{{ asset('public/tech/assets/images/logo TM.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card" style="width: 100%; object-fit: contain; aspect-ratio: 1/1;">
                            <img src="{{ asset('public/tech/assets/images/mas-solar-logo.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card" style="width: 100%; object-fit: contain; aspect-ratio: 1/1;">
                            <img src="{{ asset('public/tech/assets/images/saveetha1.jpg') }}" alt="">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card" style="width: 100%; object-fit: contain; aspect-ratio: 1/1;">
                            <img src="{{ asset('public/tech/assets/images/Sema logo.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!--====== End project-page-section ======-->



</div>
@include('tech.layout.footer')