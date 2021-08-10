<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Idea's Incorporators</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Favicons -->
    <link href="{{asset('web_assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('web_assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('web_assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('web_assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('web_assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('web_assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('web_assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('web_assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('web_assets/vendor/aos/aos.css')}}" rel="stylesheet">
@include('sweetalert::alert')
<!-- Template Main CSS File -->
    <link href="{{asset('web_assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: OnePage - v2.2.2
    * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="#">IDEAS INCORPORATORS</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                {{--                <li><a href="#portfolio">Portfolio</a></li>--}}
                <li><a href="#team">Team</a></li>
                {{--                <li><a href="#pricing">Pricing</a></li>--}}
                {{--                <li class="drop-down"><a href="">Drop Down</a>--}}
                {{--                    <ul>--}}
                {{--                        <li><a href="#">Drop Down 1</a></li>--}}
                {{--                        <li class="drop-down"><a href="#">Deep Drop Down</a>--}}
                {{--                            <ul>--}}
                {{--                                <li><a href="#">Deep Drop Down 1</a></li>--}}
                {{--                                <li><a href="#">Deep Drop Down 2</a></li>--}}
                {{--                                <li><a href="#">Deep Drop Down 3</a></li>--}}
                {{--                                <li><a href="#">Deep Drop Down 4</a></li>--}}
                {{--                                <li><a href="#">Deep Drop Down 5</a></li>--}}
                {{--                            </ul>--}}
                {{--                        </li>Sign In To Admin--}}
                {{--                        <li><a href="#">Drop Down 2</a></li>--}}
                {{--                        <li><a href="#">Drop Down 3</a></li>--}}
                {{--                        <li><a href="#">Drop Down 4</a></li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
                <li><a href="#contact">Contact</a></li>

            </ul>
        </nav><!-- .nav-menu -->

        @if (Route::has('login'))
            @auth
                <a href="{{ route('dashboard') }}" class="get-started-btn scrollto">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="get-started-btn scrollto">Login</a>
            @endauth
        @endif

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-11 text-center">
                <h1>Your Business Transformation Begins Here</h1>
                <h2>We are team of talented accountants</h2>
            </div>
        </div>
        <div class="text-center">
            <a href="#contact" class="btn-get-started scrollto">Contact Us</a>
        </div>

        <div class="row icon-boxes">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                 data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="ri-archive-fill"></i></div>
                    <h4 class="title"><a href="">Business Advisory</a></h4>
                    <p class="description">We know your fundamentals and core processes</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                 data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><i class="ri-search-eye-line"></i></div>
                    <h4 class="title"><a href="">Internal Audit</a></h4>
                    <p class="description">An internal audit offers risk management and evaluates the effectiveness</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                 data-aos-delay="400">
                <div class="icon-box">
                    <div class="icon"><i class="ri-booklet-fill"></i></div>
                    <h4 class="title"><a href="">Book keeping</a></h4>
                    <p class="description">Process of recording all financial transactions made by a business</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                 data-aos-delay="500">
                <div class="icon-box">
                    <div class="icon"><i class="ri-fingerprint-line"></i></div>
                    <h4 class="title"><a href="">Taxation</a></h4>
                    <p class="description">Applies to all types of involuntary levies, from income to capital gains to
                        estate taxes</p>
                </div>
            </div>

            {{--            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="600">--}}
            {{--                <div class="icon-box">--}}
            {{--                    <div class="icon"><i class="ri-bank-card-fill"></i></div>--}}
            {{--                    <h4 class="title"><a href="">Payroll</a></h4>--}}
            {{--                    <p class="description">Payroll can refer to the process of actually calculating and distributing wages and taxes</p>--}}
            {{--                </div>--}}
            {{--            </div>--}}

        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About Us</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. </p>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat
                        </li>
                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate
                            velit
                        </li>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <a href="#" class="btn-learn-more">Learn More</a>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
        <div class="container">

            <div class="row justify-content-end">

                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <span data-toggle="counter-up">65</span>
                        <p>Happy Clients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <span data-toggle="counter-up">85</span>
                        <p>Projects</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <span data-toggle="counter-up">12</span>
                        <p>Years of experience</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <span data-toggle="counter-up">15</span>
                        <p>Awards</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= About Video Section ======= -->
{{--    <section id="about-video" class="about-video">--}}
{{--        <div class="container" data-aos="fade-up">--}}

{{--            <div class="row">--}}

{{--                <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">--}}
{{--                    <img src="{{asset('web_assets/img/about-video.jpg')}}" class="img-fluid" alt="">--}}
{{--                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>--}}
{{--                </div>--}}

{{--                <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">--}}
{{--                    <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>--}}
{{--                    <p class="font-italic">--}}
{{--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore--}}
{{--                        magna aliqua.--}}
{{--                    </p>--}}
{{--                    <ul>--}}
{{--                        <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>--}}
{{--                        <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>--}}
{{--                        <li><i class="bx bx-check-double"></i> Voluptate repellendus pariatur reprehenderit corporis sint.</li>--}}
{{--                        <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>--}}
{{--                    </ul>--}}
{{--                    <p>--}}
{{--                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate--}}
{{--                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in--}}
{{--                        culpa qui officia deserunt mollit anim id est laborum--}}
{{--                    </p>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </section><!-- End About Video Section -->--}}

<!-- ======= Clients Section ======= -->
{{--    <section id="clients" class="clients section-bg">--}}
{{--        <div class="container">--}}

{{--            <div class="row">--}}

{{--                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">--}}
{{--                    <img src="{{asset('web_assets/img/clients/client-1.png')}}" class="img-fluid" alt="">--}}
{{--                </div>--}}

{{--                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">--}}
{{--                    <img src="{{asset('web_assets/img/clients/client-2.png')}}" class="img-fluid" alt="">--}}
{{--                </div>--}}

{{--                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">--}}
{{--                    <img src="{{asset('web_assets/img/clients/client-3.png')}}" class="img-fluid" alt="">--}}
{{--                </div>--}}

{{--                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">--}}
{{--                    <img src="{{asset('web_assets/img/clients/client-4.png')}}" class="img-fluid" alt="">--}}
{{--                </div>--}}

{{--                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">--}}
{{--                    <img src="{{asset('web_assets/img/clients/client-5.png')}}" class="img-fluid" alt="">--}}
{{--                </div>--}}

{{--                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">--}}
{{--                    <img src="{{asset('web_assets/img/clients/client-6.png')}}" class="img-fluid" alt="">--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </section><!-- End Clients Section -->--}}

<!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Testimonials</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                        Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="{{asset('web_assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img"
                         alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram
                        malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="{{asset('web_assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img"
                         alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                        minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="{{asset('web_assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img"
                         alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim
                        velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                        veniam.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="{{asset('web_assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img"
                         alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim
                        culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum
                        quid.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="{{asset('web_assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img"
                         alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                </div>

            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Sevices</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                      d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                            </svg>
                            <i class="bx bxl-dribbble"></i>
                        </div>
                        <h4><a href="">Business Advisory</a></h4>
                        <p>Analyse problems and potential risks businesses are facing and help provide advice</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                     data-aos-delay="200">
                    <div class="icon-box iconbox-orange ">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                      d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                            </svg>
                            <i class="bx bx-file"></i>
                        </div>
                        <h4><a href="">Internal Audit</a></h4>
                        <p>Risk management and evaluates the effectiveness of a company's internal controls, and
                            accounting processes</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                     data-aos-delay="300">
                    <div class="icon-box iconbox-pink">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                      d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                            </svg>
                            <i class="bx bx-tachometer"></i>
                        </div>
                        <h4><a href="">Book keeping</a></h4>
                        <p>Process of recording all financial transactions made by a business</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-yellow">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                      d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                            </svg>
                            <i class="bx bx-layer"></i>
                        </div>
                        <h4><a href="">Taxation</a></h4>
                        <p>Applies to all types of involuntary levies, from income to capital gains to estate taxes</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-red">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                      d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                            </svg>
                            <i class="bx bx-slideshow"></i>
                        </div>
                        <h4><a href="">Payroll</a></h4>
                        <p>Payroll can refer to the process of actually calculating and distributing wages and taxes</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-teal">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                      d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                            </svg>
                            <i class="bx bx-arch"></i>
                        </div>
                        <h4><a href="">Best Practices</a></h4>
                        <p>Set of guidelines, ethics, or ideas that represent the most efficient or prudent course of
                            action in a given business situation</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Sevices Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
            <div class="text-center">
                <h3>Call To Action</h3>
                <p> Our services continuum - Business Process Improvement, Enterprise Technology Selection, Solution
                    Implementation Management and Business Value Realization – offers your organization the opportunity
                    to find new efficiencies, improve operational insight and drive step-change improvements to business
                    performance. </p>
                <a class="cta-btn" href="#">Call To Action</a>
            </div>
        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
{{--    <section id="portfolio" class="portfolio">--}}
{{--        <div class="container" data-aos="fade-up">--}}

{{--            <div class="section-title">--}}
{{--                <h2>Portfolio</h2>--}}
{{--                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
{{--            </div>--}}

{{--            <div class="row" data-aos="fade-up" data-aos-delay="150">--}}
{{--                <div class="col-lg-12 d-flex justify-content-center">--}}
{{--                    <ul id="portfolio-flters">--}}
{{--                        <li data-filter="*" class="filter-active">All</li>--}}
{{--                        <li data-filter=".filter-app">App</li>--}}
{{--                        <li data-filter=".filter-card">Card</li>--}}
{{--                        <li data-filter=".filter-web">Web</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="300">--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-app">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="web_assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>App 1</h4>--}}
{{--                            <p>App</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="web_assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-web">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="web_assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>Web 3</h4>--}}
{{--                            <p>Web</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="web_assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-app">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="web_assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>App 2</h4>--}}
{{--                            <p>App</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="web_assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-card">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="web_assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>Card 2</h4>--}}
{{--                            <p>Card</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="web_assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-web">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="web_assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>Web 2</h4>--}}
{{--                            <p>Web</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="web_assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-app">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="web_assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>App 3</h4>--}}
{{--                            <p>App</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="web_assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-card">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="web_assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>Card 1</h4>--}}
{{--                            <p>Card</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="web_assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-card">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="web_assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>Card 3</h4>--}}
{{--                            <p>Card</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="web_assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-web">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="web_assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>Web 3</h4>--}}
{{--                            <p>Web</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="web_assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </section><!-- End Portfolio Section -->--}}

<!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="web_assets/img/team/team-1.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="member-img">
                            <img src="web_assets/img/team/team-2.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="member-img">
                            <img src="web_assets/img/team/team-3.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <div class="member-img">
                            <img src="web_assets/img/team/team-4.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
{{--    <section id="pricing" class="pricing">--}}
{{--        <div class="container" data-aos="fade-up">--}}

{{--            <div class="section-title">--}}
{{--                <h2>Pricing</h2>--}}
{{--                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
{{--            </div>--}}

{{--            <div class="row">--}}

{{--                <div class="col-lg-4 col-md-6" data-aos="zoom-im" data-aos-delay="100">--}}
{{--                    <div class="box">--}}
{{--                        <h3>Free</h3>--}}
{{--                        <h4><sup>$</sup>0<span> / month</span></h4>--}}
{{--                        <ul>--}}
{{--                            <li>Aida dere</li>--}}
{{--                            <li>Nec feugiat nisl</li>--}}
{{--                            <li>Nulla at volutpat dola</li>--}}
{{--                            <li class="na">Pharetra massa</li>--}}
{{--                            <li class="na">Massa ultricies mi</li>--}}
{{--                        </ul>--}}
{{--                        <div class="btn-wrap">--}}
{{--                            <a href="#" class="btn-buy">Buy Now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">--}}
{{--                    <div class="box featured">--}}
{{--                        <h3>Business</h3>--}}
{{--                        <h4><sup>$</sup>19<span> / month</span></h4>--}}
{{--                        <ul>--}}
{{--                            <li>Aida dere</li>--}}
{{--                            <li>Nec feugiat nisl</li>--}}
{{--                            <li>Nulla at volutpat dola</li>--}}
{{--                            <li>Pharetra massa</li>--}}
{{--                            <li class="na">Massa ultricies mi</li>--}}
{{--                        </ul>--}}
{{--                        <div class="btn-wrap">--}}
{{--                            <a href="#" class="btn-buy">Buy Now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="100">--}}
{{--                    <div class="box">--}}
{{--                        <h3>Developer</h3>--}}
{{--                        <h4><sup>$</sup>29<span> / month</span></h4>--}}
{{--                        <ul>--}}
{{--                            <li>Aida dere</li>--}}
{{--                            <li>Nec feugiat nisl</li>--}}
{{--                            <li>Nulla at volutpat dola</li>--}}
{{--                            <li>Pharetra massa</li>--}}
{{--                            <li>Massa ultricies mi</li>--}}
{{--                        </ul>--}}
{{--                        <div class="btn-wrap">--}}
{{--                            <a href="#" class="btn-buy">Buy Now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </section><!-- End Pricing Section -->--}}

<!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse"
                                                                       href="#faq-list-1">Non consectetur a erat nam at
                            lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                            <p>
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                                non.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2"
                                                                       class="collapsed">Feugiat scelerisque varius
                            morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3"
                                                                       class="collapsed">Dolor sit amet consectetur
                            adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                                tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                                molestie at elementum eu facilisis sed odio morbi quis
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4"
                                                                       class="collapsed">Tempus quam pellentesque nec
                            nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                                ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                                adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5"
                                                                       class="collapsed">Tortor vitae purus faucibus
                            ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                                eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 270px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1699.4515269227957!2d74.38040565819799!3d31.58170628029671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39191bc5968a582d%3A0x4e72bc7e3edc4f12!2sTawakl%20saintry!5e0!3m2!1sen!2s!4v1628551183985!5m2!1sen!2s"
                        frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    @if (session('success_message'))
                        <div class="col-sm-12">
                            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                                {{ session('success_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    @endif

                    <form action="{{route('store.requests')}}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                       data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Your Email" data-rule="email"
                                       data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                   data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                      data-msg="Please write something for us" placeholder="Message" ></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            @if ($errors->any())
                                <div class="col-sm-12">
                                    <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                                        @foreach ($errors->all() as $error)
                                            <span><p>{{ $error }}</p></span>
                                        @endforeach
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            @endif

                                @if (session('error'))
                                    <div class="col-sm-12">
                                        <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                                            {{ session('error') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                @endif

{{--                            <div class="sent-message">Your message has been sent. Thank you!</div>--}}
                        </div>
                        <div class="text-center">
                            <button type="submit" class="">Send Message</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>OnePage</h3>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Join Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="mr-md-auto text-center text-md-left">
            <div class="copyright">
                &copy; Copyright <strong><span>OnePage</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('web_assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('web_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('web_assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('web_assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('web_assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('web_assets/vendor/counterup/counterup.min.js')}}"></script>
<script src="{{asset('web_assets/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{asset('web_assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('web_assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('web_assets/vendor/aos/aos.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('web_assets/js/main.js')}}"></script>

</body>

{{--<script>--}}
{{--    function addForm() {--}}
{{--        $.ajaxSetup({--}}
{{--            headers: {--}}
{{--                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--            }--}}
{{--        });--}}
{{--        $.ajax({--}}
{{--            url: "{{url('/')}}",--}}
{{--            type: "POST",--}}
{{--            data: $('#contactUsForm').serialize(),--}}
{{--            success: function (data) {--}}
{{--                    console.log(data);--}}
{{--                    if (data.status === 200){--}}
{{--                        swal("Good job!", "You clicked the button!", "success");--}}
{{--                        document.getElementById("contactUsForm").reset();--}}
{{--                    }--}}
{{--            },--}}
{{--            error: function (reject) {--}}
{{--                if( reject.status === 422 ) {--}}
{{--                    var errors = $.parseJSON(reject.responseText);--}}
{{--                    $.each(errors, function (key, val) {--}}
{{--                        $("#" + key + "_error").text(val[0]);--}}
{{--                    });--}}
{{--                }--}}
{{--            }--}}
{{--        });--}}
{{--    }--}}
{{--</script>--}}
</html>
