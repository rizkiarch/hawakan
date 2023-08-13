<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700"
        rel="stylesheet">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }} " rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }} " rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }} " rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }} " rel="stylesheet">
    <title>Hawakan Barokah</title>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <!-- Uncomment below if you prefer to use an text logo -->
                <!-- <h1><a href="index.html">NewBiz</a></h1> -->
                <a href="index.html"><img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Product</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> --}}
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- #header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="clearfix">
        <div class="container" data-aos="fade-up">

            <div class="hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="assets/img/hero-img.svg" alt="" class="img-fluid">
            </div>

            <div class="hero-info" data-aos="zoom-in" data-aos-delay="100">
                <h2>Seamless Solutions<br><span>Enabling Growth</span><br>Boundless Possibilities</h2>
                <div>
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    <a href="#services" class="btn-services scrollto">Our Services</a>
                </div>
            </div>

        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>About Us</h3>
                    <p>"Empowering Businesses, Connecting Futures"</p>
                </header>

                <div class="row about-extra">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="assets/img/about-extra-1.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-5 pt-lg-0" data-aos="fade-left">
                        <h4>Empowering Logistics: Your Partner in Plastic Goods Delivery, Transportation, and MSME
                            Support.</h4>
                        <p style="text-align: justify;">
                            We are an established company that is enthusiastic about providing services in plastic goods
                            delivery, transportation solutions, and support for Micro, Small, and Medium Enterprises
                            (MSMEs). Committed to delivering reliable and efficient logistic solutions, we are here to
                            meet the transportation and delivery needs of various industries. Our experienced team is
                            ready to provide top-notch services, ensuring the integrity of the transported goods and
                            prioritizing customer satisfaction. We are dedicated to supporting MSME growth by offering
                            affordable and customizable shipping options that cater to their business scale. Through our
                            services, we are determined to be a dependable partner in bridging the journey of goods from
                            sender to recipient while also contributing to local economic development.
                        </p>
                    </div>
                </div>

                <div class="row about-extra">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                        <img src="assets/img/about-extra-2.svg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right">
                        <h4>Innovative Solutions and Personalized Services: Our Commitment to Excellence
                        </h4>
                        <p style="text-align: justify;">
                            Understanding the evolving business landscape, we recognize that logistics and shipment play
                            a pivotal role in maintaining operational fluidity. With a vision to be at the forefront of
                            this industry, we uphold the values of innovation, punctuality, and personalized service. We
                            believe that each shipment holds its distinctiveness; hence, we are prepared to provide
                            solutions tailored to our clients' requirements. Equipped with an extensive distribution
                            network, cutting-edge technology, and a dedicated professional team, we are ready to offer
                            services that bring positive impacts to our clients' businesses. Through hard work,
                            dedication, and close collaboration, we are confident in our ability to drive industry
                            growth and make meaningful contributions to the economy and society as a whole.
                        </p>
                    </div>

                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="section-bg">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>Services</h3>
                    <p>Delivering Excellence, Every Step of the Way"</p>
                </header>

                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/img/svg/umkm.svg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h4 class="title"><a href="">UMKM Support Programs</a></h4>
                                    <p class="description">Specialized programs and pricing structures designed to
                                        support the growth of Micro, Small, and Medium Enterprises, providing them with
                                        accessible and affordable logistics solutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/img/svg/ex-delivery.svg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h4 class="title"><a href="">Express Delivery Services</a></h4>
                                    <p class="description">Expedited delivery options for time-sensitive shipments,
                                        ensuring prompt and reliable transportation to meet urgent deadlines.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/img/svg/transportation-delivery.svg" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="col-md-8">
                                    <h4 class="title"><a href="">Integrated Transportation</a></h4>
                                    <p class="description">Providing transportation services that encompass various
                                        modes, including land, air, and sea, to meet diverse shipping needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/img/svg/customer-support.svg" class="img-fluid">
                                </div>
                                <div class="col-md-8">
                                    <h4 class="title"><a href="">24/7 Customer Support</a></h4>
                                    <p class="description">Around-the-clock customer support to provide assistance
                                        and
                                        answers to inquiries whenever needed.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/img/svg/product.svg" class="img-fluid">
                                </div>
                                <div class="col-md-8">
                                    <h4 class="title"><a href="">Plastic Goods Delivery</a></h4>
                                    <p class="description">Efficient and secure transportation of plastic products
                                        to
                                        their destinations, ensuring the integrity of the goods.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/img/svg/truck.svg" class="img-fluid">
                                </div>
                                <div class="col-md-8">
                                    <h4 class="title"><a href="">Last-Mile Delivery</a></h4>
                                    <p class="description">Precise and efficient delivery to end customers,
                                        enhancing
                                        customer satisfaction and loyalty.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h3>Why choose us?</h3>
                    <p>"Crafted for Your Logistics Needs"</p>
                </header>

                <div class="row row-eq-height justify-content-center">

                    <div class="col-lg-4 mb-4">
                        <div class="card" data-aos="zoom-in" data-aos-delay="100">
                            <i class="bi bi-truck"></i>
                            <div class="card-body">
                                <h5 class="card-title">Trusted Expertise</h5>
                                <p class="card-text">With a solid track record in the industry, we've proven our
                                    ability to navigate logistics challenges successfully, delivering reliable services
                                    backed by years of experience.
                                </p>
                                <a href="#" class="readmore">Read more </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="card" data-aos="zoom-in" data-aos-delay="200">
                            <i class="bi bi-people-fill"></i>
                            <div class="card-body">
                                <h5 class="card-title">Top-Notch Service</h5>
                                <p class="card-text">We take pride in delivering premium service that revolves around
                                    customer satisfaction. Our team is ready to provide the best support and address any
                                    inquiries you have.
                                </p>
                                <a href="#" class="readmore">Read more </a>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="card" data-aos="zoom-in" data-aos-delay="300">
                            <i class="bi bi-shield-shaded"></i>
                            <div class="card-body">
                                <h5 class="card-title">Commitment to Safety</h5>
                                <p class="card-text">Safety is our top priority. We uphold the highest standards to
                                    ensure each shipment arrives securely, maintaining the integrity of your goods.
                                </p>
                                <a href="#" class="readmore">Read more </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row counters" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Clients</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Projects</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="1364" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Hard Workers</p>
                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="clearfix">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3 class="section-title">Our Product</h3>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Plastict</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="card" style="width: 23rem;">
                            <img src="assets/img/portfolio/web3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <a href="#" class="btn mr-2"><i class="fas fa-link"></i> Visit Site</a>
                                <a href="#" class="btn "><i class="fab fa-github"></i> Github</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="card" style="width: 23rem;">
                            <img src="assets/img/portfolio/web3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <a href="#" class="btn mr-2"><i class="fas fa-link"></i> Visit Site</a>
                                <a href="#" class="btn "><i class="fab fa-github"></i> Github</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="card" style="width: 23rem;">
                            <img src="assets/img/portfolio/web3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <a href="#" class="btn mr-2"><i class="fas fa-link"></i> Visit Site</a>
                                <a href="#" class="btn "><i class="fab fa-github"></i> Github</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        {{-- <section id="testimonials" class="section-bg">
            <div class="container" data-aso="zoom-in">

                <header class="section-header">
                    <h3>Testimonials</h3>
                </header>

                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="assets/img/team-1.svg" class="testimonial-img" alt="">
                                        <h3>Saul Goodman</h3>
                                        <h4>Ceo &amp; Founder</h4>
                                        <p>
                                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                            suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                            Maecen aliquam, risus at semper.
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="assets/img/team-1.svg" class="testimonial-img" alt="">
                                        <h3>Sara Wilsson</h3>
                                        <h4>Designer</h4>
                                        <p>
                                            Export tempor illum tamen malis malis eram quae irure esse labore quem
                                            cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua
                                            noster fugiat irure amet legam anim culpa.
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="assets/img/team-1.svg" class="testimonial-img" alt="">
                                        <h3>Jena Karlis</h3>
                                        <h4>Store Owner</h4>
                                        <p>
                                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                            quem veniam duis minim tempor labore quem eram duis noster aute amet eram
                                            fore quis sint minim.
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="assets/img/team-1.svg" class="testimonial-img" alt="">
                                        <h3>Matt Brandon</h3>
                                        <h4>Freelancer</h4>
                                        <p>
                                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export
                                            minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt
                                            elit fore quem dolore labore illum veniam.
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="assets/img/team-1.svg" class="testimonial-img" alt="">
                                        <h3>John Larson</h3>
                                        <h4>Entrepreneur</h4>
                                        <p>
                                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                            noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat
                                            legam esse veniam culpa fore nisi cillum quid.
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                </div>

            </div>
        </section> --}}
        <!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        {{-- <section id="team">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3>Team</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="100">
                        <div class="member">
                            <img src="assets/img/team-1.svg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Walter White</h4>
                                    <span>Chief Executive Officer</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="200">
                        <div class="member">
                            <img src="assets/img/team-1.svg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Product Manager</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="300">
                        <div class="member">
                            <img src="assets/img/team-1.svg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>William Anderson</h4>
                                    <span>CTO</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="400">
                        <div class="member">
                            <img src="assets/img/team-1.svg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Amanda Jepson</h4>
                                    <span>Accountant</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section> --}}
        <!-- End Team Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="section-bg">

            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h3>Blog & News</h3>
                    <p>"Exploring Ideas, Shaping Conversations"</p>
                </div>

                <div class="row g-0 clients-wrap clearfix">

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 mb-4" data-aos="fade-in" data-aos-delay="100">
                            <div class="card text-dark card-has-bg click-col"
                                style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
                                <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street"
                                    alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
                                <div class="card-img-overlay d-flex flex-column">
                                    <div class="card-body">
                                        <small class="card-meta mb-2">Thought Leadership</small>
                                        <h4 class="card-title mt-0 "><a class="text-dark"
                                                herf="https://creativemanner.com">Web Developmet Lorem Ipsum Sit Amet
                                                Consectetur dipisi?</a></h4>
                                        <small><i class="far fa-clock"></i> October 15, 2020</small>
                                    </div>
                                    <div class="card-footer">
                                        <div class="media">
                                            <img class="mr-3 rounded-circle"
                                                src="https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80"
                                                alt="Generic placeholder image" style="max-width:50px">
                                            <div class="media-body">
                                                <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
                                                <small>Director of UI/UX</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 mb-4" data-aos="fade-in" data-aos-delay="100">
                            <div class="card text-dark card-has-bg click-col"
                                style="background-image:url('https://source.unsplash.com/600x900/?tree,nature');">
                                <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tree,nature"
                                    alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
                                <div class="card-img-overlay d-flex flex-column">
                                    <div class="card-body">
                                        <small class="card-meta mb-2">Thought Leadership</small>
                                        <h4 class="card-title mt-0 "><a class="text-dark"
                                                herf="https://creativemanner.com">Creative Manner Lorem Ipsum Sit Amet
                                                Consectetur dipisi?</a></h4>
                                        <small><i class="far fa-clock"></i> October 15, 2020</small>
                                    </div>
                                    <div class="card-footer">
                                        <div class="media">
                                            <img class="mr-3 rounded-circle"
                                                src="https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80"
                                                alt="Generic placeholder image" style="max-width:50px">
                                            <div class="media-body">
                                                <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
                                                <small>Director of UI/UX</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 mb-4" data-aos="fade-in" data-aos-delay="100">
                            <div class="card text-dark card-has-bg click-col"
                                style="background-image:url('https://source.unsplash.com/600x900/?computer,design');">
                                <img class="card-img d-none"
                                    src="https://source.unsplash.com/600x900/?computer,design"
                                    alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
                                <div class="card-img-overlay d-flex flex-column">
                                    <div class="card-body">
                                        <small class="card-meta mb-2">Thought Leadership</small>
                                        <h4 class="card-title mt-0 "><a class="text-dark"
                                                herf="https://creativemanner.com">Design Studio Lorem Ipsum Sit Amet
                                                Consectetur dipisi?</a></h4>
                                        <small><i class="far fa-clock"></i> October 15, 2020</small>
                                    </div>
                                    <div class="card-footer">
                                        <div class="media">
                                            <img class="mr-3 rounded-circle"
                                                src="https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80"
                                                alt="Generic placeholder image" style="max-width:50px">
                                            <div class="media-body">
                                                <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
                                                <small>Director of UI/UX</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- End Clients Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact">
            <div class="container-fluid" data-aos="fade-up">

                <div class="section-header">
                    <h3>Contact Us</h3>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="map mb-4 mb-lg-0">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                                frameborder="0" style="border:0; width: 100%; height: 340px;"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-5 info">
                                <i class="bi bi-geo-alt"></i>
                                <p>A108 Adam Street, NY 535022</p>
                            </div>
                            <div class="col-md-4 info">
                                <i class="bi bi-envelope"></i>
                                <p>info@example.com</p>
                            </div>
                            <div class="col-md-3 info">
                                <i class="bi bi-phone"></i>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div>

                        <div class="form">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="form-group col-lg-6 mt-3 mt-lg-0">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit" title="Send Message">Send
                                        Message</button></div>
                            </form>
                        </div>
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

                    <div class="col-lg-4 col-md-6 footer-info">
                        <h3>NewBiz</h3>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                            valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet
                            proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam
                            illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase
                            seza.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>NewBiz</strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
        -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }} "></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }} "></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.') }} js"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }} "></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }} "></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }} "></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }} "></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
