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
                        <a href="/contact">Contact Us</a>
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
                                        <a href="/contact">Contact Us</a>
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
                            Our Services </h1>
                        <ul class="breadcumb-menu" data-cue="slideInUp" data-delay="300">
                            <li><a href="index.php">Home</a></li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Service Area  
==============================-->
    <section class="space" id="service-sec">
    <div class="service-bg-shape1-1 shape-mockup" data-bottom="0" data-left="50%">
        <img src="assets/img/shape/bg-shape3.png" alt="img">
    </div>
    <div class="container">
        <div class="title-area style2 common-style-for-title">
            <div>
                <div>
                    <div class="text-xxl-end text-xl-end text-lg-end text-start">
                        <span class="sub-title style2 after-none before-none" data-cue="slideInUp">OUR SERVICES</span>
                        <h2 class="sec-title style3 style7 mb-0" data-cue="slideInUp">
                            Professional Appliance <br>
                            <span>Repair Services Near You</span>
                        </h2>
                    </div>
                </div>
                <div>
                    <div class="title-area-right text-start" data-cue="slideInUp">
                        <p class="mb-0">
                            We provide fast, reliable, and affordable home appliance repair services in Navi Mumbai.
                            Our expert technicians specialize in washing machine, refrigerator, and microwave oven repairs
                            with same-day doorstep service.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gy-4">
            <!-- Washing Machine Repair -->
            <div class="col-xl-4 col-lg-6" data-cue="slideInUp">
                <div class="service-card style2">
                    <div class="d-flex justify-content-between">
                        <div class="box-icon">
                            <div class="color-masking">
                                <div class="masking-src" data-mask-src="assets/img/service/service_card_1_01.jpg"></div>
                                <img src="https://placehold.co/600x400" alt="icon">
                            </div>
                        </div>
                        <a href="service.php" class="circle-tag">
                            <span class="circle-title-anime">READ MORE . READ MORE .</span>
                            <div class="icon">
                                <img src="assets/img/icon/right-arrow-theme1.svg" alt="">
                            </div>
                        </a>
                    </div>
                    <h3 class="box-title"><a href="service.php">Washing Machine Repair</a></h3>
                    <p class="box-text">
                        Expert repair for front load, top load, semi-automatic and fully automatic washing machines.
                        Motor, drum, drainage and control panel issues fixed.
                    </p>
                    <div class="box-img">
                        <img src="assets/img/service/service_card_1_01.jpg" alt="image">
                    </div>
                </div>
            </div>

            <!-- Refrigerator Repair -->
            <div class="col-xl-4 col-lg-6" data-cue="slideInUp">
                <div class="service-card style2">
                    <div class="d-flex justify-content-between">
                        <div class="box-icon">
                            <div class="color-masking">
                                <div class="masking-src" data-mask-src="assets/img/service/service_card_1_2.jpg"></div>
                                <img src="https://placehold.co/600x400" alt="icon">
                            </div>
                        </div>
                        <a href="service.php" class="circle-tag">
                            <span class="circle-title-anime">READ MORE . READ MORE .</span>
                            <div class="icon">
                                <img src="assets/img/icon/right-arrow-theme1.svg" alt="">
                            </div>
                        </a>
                    </div>
                    <h3 class="box-title"><a href="service.php">Refrigerator Repair</a></h3>
                    <p class="box-text">
                        Single door, double door and side-by-side refrigerator repair including cooling problems,
                        gas refilling, compressor repair and thermostat issues.
                    </p>
                    <div class="box-img">
                        <img src="assets/img/service/service_card_1_2.jpg" alt="image">
                    </div>
                </div>
            </div>

            <!-- Microwave Repair -->
            <div class="col-xl-4 col-lg-6" data-cue="slideInUp">
                <div class="service-card style2">
                    <div class="d-flex justify-content-between">
                        <div class="box-icon">
                            <div class="color-masking">
                                <div class="masking-src" data-mask-src="assets/img/service/service_card_1_3.jpg"></div>
                                <img src="https://placehold.co/600x400" alt="icon">
                            </div>
                        </div>
                        <a href="service.php" class="circle-tag">
                            <span class="circle-title-anime">READ MORE . READ MORE .</span>
                            <div class="icon">
                                <img src="assets/img/icon/right-arrow-theme1.svg" alt="">
                            </div>
                        </a>
                    </div>
                    <h3 class="box-title"><a href="service.php">Microwave Oven Repair</a></h3>
                    <p class="box-text">
                        Repair services for solo, grill and convection microwave ovens.
                        Fixing heating issues, display faults, keypad problems and power failures.
                    </p>
                    <div class="box-img">
                        <img src="assets/img/service/service_card_1_3.jpg" alt="image">
                    </div>
                </div>
            </div>

            <!-- Installation & Uninstallation -->
            <div class="col-xl-4 col-lg-6" data-cue="slideInUp">
                <div class="service-card style2">
                    <div class="d-flex justify-content-between">
                        <div class="box-icon">
                            <div class="color-masking">
                                <div class="masking-src" data-mask-src="assets/img/service/service_card_1_4.jpg"></div>
                                <img src="https://placehold.co/600x400" alt="icon">
                            </div>
                        </div>
                        <a href="service.php" class="circle-tag">
                            <span class="circle-title-anime">READ MORE . READ MORE .</span>
                            <div class="icon">
                                <img src="assets/img/icon/right-arrow-theme1.svg" alt="">
                            </div>
                        </a>
                    </div>
                    <h3 class="box-title"><a href="service.php">Installation & Uninstallation</a></h3>
                    <p class="box-text">
                        Professional installation and uninstallation of washing machines,
                        refrigerators and microwave ovens with proper safety checks.
                    </p>
                    <div class="box-img">
                        <img src="assets/img/service/service_card_1_4.jpg" alt="image">
                    </div>
                </div>
            </div>

            <!-- Annual Maintenance -->
            <div class="col-xl-4 col-lg-6" data-cue="slideInUp">
                <div class="service-card style2">
                    <div class="d-flex justify-content-between">
                        <div class="box-icon">
                            <div class="color-masking">
                                <div class="masking-src" data-mask-src="assets/img/service/service_card_1_5.jpg"></div>
                                <img src="https://placehold.co/600x400" alt="icon">
                            </div>
                        </div>
                        <a href="service.php" class="circle-tag">
                            <span class="circle-title-anime">READ MORE . READ MORE .</span>
                            <div class="icon">
                                <img src="assets/img/icon/right-arrow-theme1.svg" alt="">
                            </div>
                        </a>
                    </div>
                    <h3 class="box-title"><a href="service.php">Annual Maintenance Service</a></h3>
                    <p class="box-text">
                        Prevent breakdowns and extend appliance life with our affordable
                        annual maintenance services for home appliances.
                    </p>
                    <div class="box-img">
                        <img src="assets/img/service/service_card_1_5.jpg" alt="image">
                    </div>
                </div>
            </div>

            <!-- Emergency Repair -->
            <div class="col-xl-4 col-lg-6" data-cue="slideInUp">
                <div class="service-card style2">
                    <div class="d-flex justify-content-between">
                        <div class="box-icon">
                            <div class="color-masking">
                                <div class="masking-src" data-mask-src="assets/img/service/service_card_1_6.jpg"></div>
                                <img src="https://placehold.co/600x400" alt="icon">
                            </div>
                        </div>
                        <a href="service.php" class="circle-tag">
                            <span class="circle-title-anime">READ MORE . READ MORE .</span>
                            <div class="icon">
                                <img src="assets/img/icon/right-arrow-theme1.svg" alt="">
                            </div>
                        </a>
                    </div>
                    <h3 class="box-title"><a href="service.php">Emergency Appliance Repair</a></h3>
                    <p class="box-text">
                        Same-day and emergency appliance repair services available across Navi Mumbai
                        including Vashi, Kharghar, Nerul and nearby areas.
                    </p>
                    <div class="box-img">
                        <img src="assets/img/service/service_card_1_6.jpg" alt="image">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


    <!--==============================
Contact Area   
==============================-->
    <style>
    /* Contact section background fix */
.contact-area-1 {
    background-color: #0f172a; /* deep neutral dark */
    position: relative;
}

/* Overlay for better contrast */
.contact-area-1::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(15, 23, 42, 0.85); /* dark overlay */
    z-index: 0;
}

/* Ensure content stays above overlay */
.contact-area-1 .container,
.contact-area-1 .consulting-wrap1 {
    position: relative;
    z-index: 2;
}

</style>
    <div class="space overflow-hidden contact-area-1 position-relative z-index-common" id="contact-sec">
        <div class="container">
            <div class="consulting-wrap1">
                <div class="row gy-60 align-items-center">
                    <div class="col-xxl-6">
                        <div class="page-img mb-0">
                            <img src="assets/img/shape/hero-thumb1-1-shape.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div class="consulting-form-wrap1">
                            <div class="title-area mb-60 ">
                                <span class="sub-title style2 text-white border-white text-anim after-none before-none" data-cue="slideInLeft">Get In Touch</span>
                                <h2 class="sec-title text-white">Get Your Free <span>Estimate!</span></h2>
                            </div>
                            <!--==============================
Contact Area  
==============================-->
                            <div class="contact-form-v1 ">
                                <form action="mail.php" method="POST" class="contact-form ajax-contact">
                                    <div class="row">
                                        <div class="form-group style-border col-md-6">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                                            <i class="far fa-user"></i>
                                        </div>
                                        <div class="form-group style-border col-md-6">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                        <div class="form-group style-border col-md-6">
                                            <input type="number" class="form-control" name="number" id="number" placeholder="Phone Number">
                                            <i class="far fa-phone"></i>
                                        </div>

                                        <div class="form-group style-border col-md-6">
                                            <select name="subject" id="subject" class="form-select bg-white">
                                                <option value="" disabled selected hidden>Select Service</option>
                                                <option value="Web Development">Web Development</option>
                                                <option value="Brand Marketing">Brand Marketing</option>
                                                <option value="UI/UX Designing">UI/UX Designing</option>
                                                <option value="Digital Marketing">Digital Marketing</option>
                                            </select>
                                        </div>
                                        <div class="form-group style-border col-12">
                                            <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Write Message...."></textarea>
                                            <i class="fa-light fa-pen"></i>
                                        </div>
                                        <div class="form-group col-12">
                                            <div class="custom-checkbox">
                                                <input type="checkbox" id="remembermylogin">
                                                <label for="remembermylogin" class="text-white">I agree with the privacy policy</label>
                                            </div>
                                        </div>
                                        <div class="form-btn col-12">
                                            <button class="th-btn style5 ">
                                                Request A Quote
                                                <span class="after-bg"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <p class="form-messages mb-0 mt-3"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-thumb1-1-shape bg-mask" data-mask-src="assets/img/shape/contact-thumb1-1-shape.jpg">
            <img src="assets/img/shape/bg-shape6.png" alt="">
        </div>
    </div>
   

    <?php include 'footer.php'; ?>