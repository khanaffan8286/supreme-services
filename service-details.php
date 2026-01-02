<?php include 'header.php'; ?>


    <!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.php"><img src="assets/img/logo.png" alt="Supreme"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li >
                        <a href="index.php">Home</a>
                       
                    </li>
                    <li><a href="about.php">About Us</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Services</a>
                        <ul class="sub-menu">
                            <li><a href="service.php">Services</a></li>
                            <li><a href="service-details.php">Service Details</a></li>
                        </ul>
                    </li>
                   
                    
                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="color-scheme-wrap active">
        <button class="switchIcon"><i class="fa-solid fa-palette"></i></button>
        <h3 class="color-scheme-wrap-title text-center">Color Switcher</h3>
        <div class="color-switch-btns">
            <button data-color="#FF4F38"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#3282FB"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#6D30FB"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#27AE60"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#FF7E02"><i class="fa-solid fa-droplet"></i></button>
        </div>
    </div>
   
    <!--==============================
    Sidemenu
============================== -->
  
    <!--==============================
	Header Area
==============================-->
    <header class="th-header header-default">
        <div class="header-top">
            <div class="row justify-content-center justify-content-lg-between  align-items-center gy-2">
                <div class="col-auto">
                    <div class="header-links d-none d-xxl-inline-block d-lg-inline-block">
                        <ul>
                            <li class=" d-xxl-inline-block"><i class="fa-regular fa-clock"></i>Working Hours: Mon to Fri - 8:00am - 16:00pm</li>
                            <li><i class="fal fa-envelope"></i><a href="mailto:iqratheservises@gmail.com ">iqratheservises@gmail.com </a></li>
                            <li class=" d-xxl-inline-block"><i class="fal fa-location-dot"></i>bhandup ,Mumbai</li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="top-right">
                        <div class="social-links">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>/* Make images responsive + square edges */
        img:not([draggable]) {
            width: 170px;
            height: auto;
            border-radius: 10px !important; /* sharp corners */
        }

        /* Logo Styling */
        .logo-img {
            height: 60px; /* Desktop height */
            width: auto;
            object-fit: contain;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .logo-img {
                height: 42px; /* smaller height for mobile */
            }
        }

        </style>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container-fulid">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                          <div class="header-logo">
                                <a href="index.php">
                                    <img src="assets/img/logo.png" alt="Supreme" class="logo-img">
                                </a>
                          </div>

                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li >
                                        <a href="index.php">Home</a>
                                       
                                    </li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="service.php">Services</a></li>
                                            <li><a href="service-details.php">Service Details</a></li>
                                        </ul>
                                    </li>
                                   
                                    
                                    <li>
                                        <a href="contact.php">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="header-button d-flex d-lg-none">
                                <button type="button" class="th-menu-toggle icon-btn"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-xl-block d-none">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper bg-mask " data-mask-src="assets/img/shape/breadcumb-shape.png" data-bg-src="assets/img/bg/breadcumb-bg.jpg">

        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title text-anim" data-cue="slideInUp" data-delay="100">
                            Service Details </h1>
                        <ul class="breadcumb-menu" data-cue="slideInUp" data-delay="300">
                            <li><a href="index.php">Home</a></li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Service Area
==============================-->
    <section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row gx-60">
            <div class="col-xl-8 col-lg-7 order-lg-2 order-1">
                <div class="page-single">
                    <div class="page-img gsap-parallax mb-35">
                        <img src="assets/img/service/service-s-1-1.jpg" alt="Washing Machine & Refrigerator Repair Service">
                    </div>

                    <h4 class="mt-n2 mb-20">Washing Machine, Refrigerator & Microwave Repair</h4>

                    <p class="mb-0">
                        We provide professional washing machine, refrigerator, and microwave oven repair services for residential and commercial customers. Whether your washing machine is not spinning, your refrigerator is not cooling, or your microwave is not heating, our experienced technicians diagnose the issue quickly and deliver reliable, long-lasting repairs.
                    </p>

                    <p class="mb-25">
                        Our team handles fully automatic, semi-automatic, top-load, and front-load washing machines, as well as single-door, double-door, and side-by-side refrigerators. Using modern diagnostic tools and genuine spare parts, we ensure minimal downtime, transparent pricing, and dependable performance after every service.
                    </p>

                    <div class="page-img-wrap mt-40">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="page-img radius-20">
                                    <img src="assets/img/service/service-s-1-2.jpg" alt="Appliance Repair Technician at Work">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="page-img radius-20">
                                    <img src="assets/img/service/service-s-1-3.jpg" alt="Refrigerator and Washing Machine Repair">
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="mb-25">
                        From routine maintenance to emergency breakdown repairs, we focus on quality workmanship and customer satisfaction. Our doorstep service ensures convenience, while our skilled technicians deliver clean, safe, and efficient repairs you can trust.
                    </p>

                    <h4 class="mt-n2 mb-20">Our Work Process</h4>

                    <div class="service-page-card-wrap mb-60">
                        <div class="row gy-4">
                            <div class="col-sm-6">
                                <div class="service-page-card">
                                    <div class="box-icon">
                                        <img src="https://placehold.co/600x400" alt="">
                                    </div>
                                    <div class="box-content">
                                        <h4 class="box-title">Problem Diagnosis</h4>
                                        <p class="box-text">
                                            We inspect the appliance thoroughly to identify the exact cause of the issue.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="service-page-card">
                                    <div class="box-icon">
                                        <img src="https://placehold.co/600x400" alt="">
                                    </div>
                                    <div class="box-content">
                                        <h4 class="box-title">Expert Repair</h4>
                                        <p class="box-text">
                                            Our technicians repair or replace faulty parts using genuine components.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="service-page-card">
                                    <div class="box-icon">
                                        <img src="https://placehold.co/600x400" alt="">
                                    </div>
                                    <div class="box-content">
                                        <h4 class="box-title">Testing & Safety Check</h4>
                                        <p class="box-text">
                                            After repair, we test the appliance to ensure optimal performance and safety.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="service-page-card">
                                    <div class="box-icon">
                                        <img src="https://placehold.co/600x400" alt="">
                                    </div>
                                    <div class="box-content">
                                        <h4 class="box-title">Customer Satisfaction</h4>
                                        <p class="box-text">
                                            We ensure clean service completion and complete customer satisfaction.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="box-text">
                        With years of experience in home appliance repair, we are committed to delivering fast response times, honest pricing, and dependable after-service support. Choose us for reliable washing machine, refrigerator, and microwave repair services you can count on.
                    </p>
                </div>
            </div>

            <div class="col-xl-4 col-lg-5 order-lg-1 order-2">
                <aside class="sidebar-area sidebar-sticky rounded-0 p-0 bg-transparent">
                    <div class="widget widget_categories">
                        <h3 class="widget_title">All Services</h3>
                        <ul>
                            <li>
                                <a href="service-details.php">Washing Machine Repair</a>
                            </li>
                            <li>
                                <a href="service-details.php">Refrigerator Repair</a>
                            </li>
                            <li>
                                <a href="service-details.php">Microwave Oven Repair</a>
                            </li>
                            <li>
                                <a href="service-details.php">Appliance Maintenance</a>
                            </li>
                            <li>
                                <a href="service-details.php">Emergency Appliance Repair</a>
                            </li>
                        </ul>
                    </div>

                    <div class="widget widget_download style2">
                        
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

  
<?php include 'footer.php'; ?>