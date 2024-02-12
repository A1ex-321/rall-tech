<!DOCTYPE html>
<html lang="en">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>Raal Tech</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('public/tech/assets/css/bootstrap.min.css')}}">
    <!--====== Flaticon css ======-->
    <link rel="stylesheet" href="{{ asset('public/tech/assets/fonts/flaticon/flaticon.css')}}">
    <!--====== Iconfont css ======-->
    <link rel="stylesheet" href="{{ asset('public/tech/assets/fonts/icofont/icofont.css')}}">
    <!--====== Gilory css ======-->
    <link rel="stylesheet" href="{{ asset('public/tech/assets/fonts/gilory/gilory.css')}}">
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('public/tech/assets/css/magnific-popup.css')}}">
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('public/tech/assets/css/slick.css')}}">
    <!--====== nice-select css ======-->
    <link rel="stylesheet" href="{{ asset('public/tech/assets/css/nice-select.css')}}">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('public/tech/assets/css/default.css')}}">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('public/tech/assets/css/style.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous">

    <style>
        .testimonial-card {
            flex-basis: calc(50% - 20px);
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .testimonial-card img {
            border-radius: 50%;
            max-width: 80px;
            margin-bottom: 15px;
        }

        .testimonial-text {
            font-style: italic;
            color: #555;
            margin-bottom: 15px;
        }

        .testimonial-author {
            font-weight: bold;
            color: #333;
        }

        .testimonial-card.alt {
            background-color: #f8f8f8;
        }

        .testimonial-card.alt .testimonial-author {
            color: #888;
        }



        .card {
            width: 150px;
            height: 150px;
            margin-bottom: 10px;
            overflow: hidden;
            position: relative;
            display: flex;
        }

        .card img {
            width: 100%;
            height: 100%;
            transition: transform 0.3s;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .card:hover::before {
            opacity: 1;
        }

        .card:hover img {
            transform: scale(1.1);
        }

        /* Custom styles for mobile view */
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
                margin-bottom: 20px;
                /* Adjust margin as needed */
            }

            .button-box {
                margin-top: 20px;
                /* Adjust margin as needed */
            }
        }

        @media only screen and (max-width: 767px) {
            /* Other existing styles for mobile view */

            html,
            body {
                overflow-x: hidden;
            }
        }

        /* Custom styles for mobile view */
        /* Custom styles for mobile view */
        @media only screen and (max-width: 767px) {
            .new-features-column {
                flex: 0 0 100px;
                /* Make each column take full width on small screens */
                max-width: 75%;
                /* Ensure images don't exceed the screen width */
                margin-bottom: 20px;
                padding: 20px;
                /* Adjust margin as needed */
            }

            .new-features-icon img {
                height: auto;
                width: 100px;
                /* Make images fill the available width */
                max-width: 90px;
                /* Set a maximum width if needed */
                padding: 10px;
            }
        }

        .single-hero {
            background-size: cover;
            /* Ensure the background image covers the entire container */
            background-position: center;
            /* Center the background image */
            height: 400px;
            /* Set the initial height for desktop view */

        }

        .hero-content {
            margin-bottom: 200px;
            margin-left: 30px;
        }




        /* Media query for screens smaller than 768px (typical mobile devices) */
        @media (max-width: 768px) {
            .single-hero {
                height: 300px;
                /* Adjust the height as needed for mobile view */
            }

            .hero-content {
                margin-top: 50px;
                margin-left: 15px;
            }

            h2 {
                font-size: 20px;
                /* Adjust the font size as needed for mobile view */
            }
        }

        .project-item {
            text-align: center;
            margin-bottom: 20px;
        }

        .project-img img {
            height: auto;
            max-width: 100%;
            margin: 0 auto;
            /* Center the image horizontally */
        }

        @media (max-width: 768px) {
            .project-item {
                text-align: center;
            }
        }

        .team-item {
            text-align: center;
            margin-bottom: 20px;
        }

        .team-img img {
            height: auto;
            max-width: 100%;
            margin: 0 auto;
            /* Center the image horizontally */
            display: block;
            /* Remove extra space below inline images */
        }

        @media (max-width: 768px) {
            .team-img {
                margin-bottom: 10px;
                /* Adjust the margin as needed for mobile view */
            }
        }

        .new-features-item {
            text-align: center;
            margin-bottom: 20px;
            margin-right: 10px;
            /* Adjust the right margin as needed for spacing */
        }

        .new-features-icon img {
            height: auto;

            margin: 0 auto;
            /* Center the image horizontally */
            display: block;
            /* Remove extra space below inline images */
        }

        @media (max-width: 768px) {
            .new-features-item {
                text-align: center;
                margin-right: 20px;
                /* Remove the right margin for mobile view */
            }
        }

        .client {
            display: none;
        }

        .team {
            display: none;
        }

        .resources {
            display: none;
        }

        .gallery {
            display: none;
        }


        @media only screen and (max-width: 767px) {
            .client {
                display: block;
            }
        }

        @media only screen and (max-width: 767px) {
            .client1 {
                display: none;
            }
        }

        @media only screen and (max-width: 767px) {
            .team {
                display: block;
            }
        }

        @media only screen and (max-width: 767px) {
            .team1 {
                display: none;
            }
        }

        @media only screen and (max-width: 767px) {
            .resources {
                display: block;
            }
        }

        @media only screen and (max-width: 767px) {
            .resources1 {
                display: none;
            }
        }

        @media only screen and (max-width: 767px) {
            .gallery {
                display: block;
            }
        }

        @media only screen and (max-width: 767px) {
            .gallery1 {
                display: none;
            }
        }

        .logo-box {
            width: 170px;
            /* Adjust the width of the box as needed */
            height: 175px;
            /* Adjust the height of the box as needed */
            padding: 10px;
            /* Adjust the padding as needed */
            border: 1px solid #ece9e9;
            /* Border style */
            box-sizing: border-box;
            /* Include padding and border in the box dimensions */
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            margin-right: 0px;
            /* Ensure that the logo won't overflow the box */
        }

        .logo-box img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            /* Maintain aspect ratio and fit within the box */
            object-position: center;
            /* Center the image within the box */
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


</head>

<body>
    <!--====== Start Preloader ======-->
    <div class="preloader">
        <div class="lds-ellipsis">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div><!--====== End Preloader ======-->
    <!--====== Start Header ======-->
    <header class="header-area header-area-v1">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="top-left">
                            <ul>
                                <li><span><i class="flaticon-factory"></i> We work with Copyright Registration!</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="top-right">
                            <ul class="social-link">
                                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="https://api.whatsapp.com/send?phone=123456789"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="header-navigation">
            <div class="nav-container">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 logo-col col-6">
                            <div class="site-branding">
                                <div class="brand-logo">
                                    <a href="{{ url('/') }}">
                                    <img id="logo-img1" src="" alt="Logo" style="height: 150px; width: 250px; padding: 15px;">

                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-9 col-6">
                            <div class="nav-menu">
                                <!-- Navbar Close Icon -->
                                <div class="navbar-close">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>
                                <nav class="main-menu">
                                    <ul>
                                        <li class="menu-item "><a href="{{ url('/') }}">Home</a>

                                        </li>
                                        <li class="menu-item "><a href="{{ url('/about') }}">About</a>

                                        </li>

                                        <li class=""><a href="{{ url('/service') }}">Services</a>


                                        <li><a href="{{ url('/team') }}">Team</a></li>
                                        <li class="menu-item "><a href="{{ url('/client') }}">Clients</a>
                                        <li><a href="{{ url('/event') }}">Events & Achivements</a></li>

                                        <!-- <ul class="sub-menu">
                                                <li><a href="patent.html">Patent law</a></li>
                                                <li><a href="industrial.html">Industrial design law</a></li>
                                                <li><a href="tradelaw.html">Trademark law</a></li>
                                                <li><a href="copyRight.html">Copy right India</a></li>
                                               
                                            </ul> -->
                                        </li>


                                        </li>
                                        <!-- <li class="menu-item "><a href="career.html">Careers</a> -->

                                        </li>
                                        <li class="menu-item  "><a href="{{ url('/resource') }}">Resources</a>

                                        </li>



                                        </li>
                                        <li class="menu-item"><a href="{{ url('/contact') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Navbar Toggler -->
                            <div class="navbar-toggler float-right">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!--====== End Header ======-->