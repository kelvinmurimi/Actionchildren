<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $title ?? null }} - {{ config('app.name', 'Afcic') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">


    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/blogs/blog-1/assets/css/blog-1.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/facts/fact-1/assets/css/fact-1.css">

    <!-- Favicon -->
    <link href="{{ asset('frontend/ui/img/main.jpg') }}" rel="icon">
    <link rel="stylesheet" href="{{ asset('libcss/aimy/style.css') }}">

    <!-- Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="{{ asset('frontend/ui/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/ui/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/ui/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/ui/css/fontawesome.css') }}">
    <!---->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('frontend/ui/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/ui/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/ui/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/ui/css/style.css') }}" rel="stylesheet">
    <style>
        .white {
            color: #fff;
        }

        .orange {
            color: #ff914d !important;
        }
        .blue{
            color: #3871c1 !important;
        }
        .btn:hover{
            background-color: #ff914d !important;
        }
        .link-dark:hover{
            background-color: #ff914d !important;
        }
    </style>
    <!-- Alternating Cards css  -->
    <style>
        .altcards {
            margin-top: 20px;
        }

        .card {
            border: none;
        }

        .card-img {
            border-radius: 0;
        }

        .vgr-cards .card {
            display: flex;
            flex-flow: wrap;
            flex: 100%;
            margin-bottom: 40px;
        }

        .vgr-cards .card:nth-child(even) .card-img-body {
            order: 2;
        }

        .vgr-cards .card:nth-child(even) .card-body {
            padding-left: 0;
            padding-right: 1.25rem;
        }

        @media (max-width: 576px) {
            .vgr-cards .card {
                display: block;
            }
        }

        .vgr-cards .card-img-body {
            flex: 1;
            overflow: hidden;
            position: relative;
        }

        @media (max-width: 576px) {
            .vgr-cards .card-img-body {
                width: 100%;
                height: 200px;
                margin-bottom: 20px;
            }
        }

        .vgr-cards .card-img {
            width: 100%;
            height: auto;
            position: absolute;
            margin-left: 50%;
            transform: translateX(-50%);
        }

        @media (max-width: 1140px) {
            .vgr-cards .card-img {
                margin: 0;
                transform: none;
                width: 100%;
                height: auto;
            }
        }

        .vgr-cards .card-body {
            flex: 2;
            padding: 0 0 0 1.25rem;
        }

        @media (max-width: 576px) {
            .vgr-cards .card-body {
                padding: 0;
            }
        }
    </style>


</head>

<body>
    <!--- Top Bar Start -->
    <div class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-bar-left">
                        <div class="text">
                            <i class="fa fa-phone"></i>
                            <p>+254 714 038285</p>
                        </div>
                        <div class="text">
                            <i class="fa fa-envelope"></i>
                            <p>infokenya@actionchildren.or.ke</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-bar-right">
                        <div class="social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/ActionChildren"><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">
            <img src="{{ asset('logo.png') }}" alt="Afcic logo" >
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                   
                    <a href="/" class="nav-item nav-link active">Home</a>
                  
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About Us</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('pages.about') }}" class="dropdown-item white">About</a>
                            <a href="{{ route('pages.team') }} "class="dropdown-item white">Our Team</a>
                            <a href="{{ route('pages.team') }}" class="dropdown-item white">Young Friends</a>
                            <a href="https://john-muiruri.maps.arcgis.com/apps/Cascade/index.html?appid=f2a1675950a241a8ac27aa57ed711850"
                                class="dropdown-item white">Our Story</a>
                            <a href="https://oneofusproject.com/kenya-2020" class="dropdown-item white">One Of us</a>
                            <a href="{{ route('partners') }}" class="dropdown-item white">Our Partners </a>
                        </div>
                    </div>
                    <!-- // Donation Causes -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Our Programs</a>
                        <div class="dropdown-menu">

                            <a href="{{ route('projects.index') }}" class="dropdown-item white">Our Projects</a>

                            <a href="{{ route('focusareas') }}" class="dropdown-item white">Our Focus Areas</a>
                            <a href="{{ route('donation.form') }}" class="dropdown-item white">Events</a>

                        </div>
                    </div>
                    <!-- // Careers-->
                    <div class="nav-item dropdown">
                        <a href="{{ route('pages.careers') }}" class="nav-link dropdown-toggle"
                            data-toggle="dropdown">Careers</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('pages.careers') }}" class="dropdown-item white">Jobs</a>

                            <a href="{{ route('partners') }}" class="dropdown-item white">Partner With Us</a>

                            <a href="{{ route('volunteer') }}" class="dropdown-item white">Become A Volunteer</a>
                            <a href="{{ route('donation.form') }}" class="dropdown-item white">Donate Now</a>
                        </div>
                    </div>

                    <!-- // Centers-->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Our Centers</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('centers.wcc') }}" class="dropdown-item white">Working Children
                                Center</a>
                            <a href="{{ route('centers.trc') }}" class="dropdown-item white">Temporary Rescue
                                Center</a>
                            <a href="{{ route('centers.sfp') }}" class="dropdown-item white">School Feeding
                                Programme</a>
                            <a href="{{ route('donation.form') }}" class="dropdown-item white">Donate</a>

                        </div>
                    </div>
                    <!-- // Resources-->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-togg   `le" data-toggle="dropdown">Resources</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('centers.wcc') }}" class="dropdown-item white">Annual Reports</a>
                            <a href="{{ route('centers.trc') }}" class="dropdown-item white">Organisition Profile</a>
                            <a href="{{ route('centers.sfp') }}" class="dropdown-item white">Thought leadership</a>
                            <a href="{{ route('donation.form') }}" class="dropdown-item white">Volunteer Diaries</a>
                            <a href="{{ route('donation.form') }}" class="dropdown-item white">Newsletter</a>
                            <a href="{{ route('donation.form') }}" class="dropdown-item white">Our Blog</a>

                        </div>
                    </div>
                   
                    <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>

                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->

    @yield('content')


    <!-- Footer Start -->
    <div class="footer" style="background-color: #3871c1 !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-contact">
                        <h2>Our Head Office</h2>
                        <p class="white"><i class="fa fa-map-marker-alt"></i>Action for Children in Conflict Section
                            9, Thika, Kenya. P.O. BOX 6439-01000</p> 
                        <p class="white"><i class="fa fa-phone"></i>+254 714 038285,<br>
                            +254 722 753 137</p>
                        <p class="white"><i class="fa fa-envelope"></i>infokenya@actionchildren.or.ke
                            kenyadirector@actionchildren.or.ke</p>
                        <div class="footer-social">
                            <a class="btn btn-custom" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-custom" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-custom" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-custom" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-custom" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-link">
                        <h2>Popular Links</h2>
                        <a href="{{ route('pages.about') }}">About Us</a>
                        <a href="{{ route('contact') }}">Contact Us</a>
                        <a href="{{ route('blog') }}">Popular Causes</a>
                        <a href="{{ route('blog') }}">Upcoming Events</a>
                        <a href="{{ route('blog') }}">Latest Blog</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-link">
                        <h2>Useful Links</h2>
                        <a href="{{ route('partners') }}">Our Partners</a>
                        <a href="{{ route('centers.trc') }}">Our Centere</a>
                        <a href="">Cookies</a>
                        <a href="{{ route('contact') }}">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="donate-form">
                        <h2 class="white">Newsletter</h2>
                        <form>
                            <input class="form-control pb-2" placeholder="Email goes here">
                            <button class="btn btn-custom primary">Submit</button>
                            <label style="color:#fff;">Don't worry, we don't spam!</label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container copyright">
            <div class="row">
                <div class="col-md-6">
                    <p class="text-white">&copy; <a href="#">{{ config('app.name', 'Laravel') }}</a>, All Right
                        Reserved.</p>
                </div>
                <div class="col-md-6">
                    <p>Designed By <a href="">Murimicodes</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to top button -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>

    <!-- JavaScript Libraries -->
    <!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>-->
    <script src="{{ asset('frontend/ui/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/ui/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/ui/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/ui/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/ui/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/ui/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/ui/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/ui/lib/parallax/parallax.min.js') }}"></script>

    <!-- Contact Javascript File
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>-->

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/ui/js/main.js') }} "></script>
</body>

</html>
