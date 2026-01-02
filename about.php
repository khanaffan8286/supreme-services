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
                            About Us </h1>
                        <ul class="breadcumb-menu" data-cue="slideInUp" data-delay="300">
                            <li><a href="index.php">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
About Area  
==============================-->
   <div class="overflow-hidden space overflow-hidden" id="about-sec">
    <div class="container">
        <div class="about-wrap1">
            <div class="title-area">
                <div class="row gx-60 justify-content-center align-items-start">
                    <div class="col-auto">
                        <div class="text-center">
                            <span class="sub-title style2 text-anim after-none before-none" data-cue="slideInUp">
                                Who We Are
                            </span>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="text-center">
                            <h2 class="sec-title style2 text-anim2 mb-0" data-cue="slideInUp">
                                About Supreme Service
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gx-60">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="img-box1" data-cue="slideInUp" data-delay="300">
                        <div class="img2 bg-mask" data-mask-src="assets/img/shape/about-thumb1-1-shape.png">
                            <img src="assets/img/hero/hero4.jpg" alt="About">
                        </div>
                        <div class="circle-tag d-none d-xxl-block">
                            <span class="circle-title-anime">** Years of Experience **Years of Experience</span>
                            <h2 class="box-number">
                                <span class="counter-number">12</span><span class="counter-marker">+</span>
                            </h2>
                        </div>

                    </div>
                </div>

                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="about-wrap" data-cue="slideInUp">
                        <div class="title-area mb-40">
                            <p>
                                Supreme Service is a trusted home appliance repair company based in Navi Mumbai.
                                We specialize in professional washing machine, refrigerator, and microwave oven
                                repair services for residential customers. Our skilled technicians provide fast,
                                reliable, and affordable doorstep service across Vashi, Kharghar, Nerul, Belapur,
                                and nearby areas.
                            </p>
                        </div>

                        <div class="checklist style">
                            <ul>
                                <li>
                                    Washing Machine Repair (Top Load & Front Load)
                                </li>
                                <li>
                                    Refrigerator & Fridge Repair (Single & Double Door)
                                </li>
                                <li>
                                    Microwave Oven Repair & Maintenance
                                </li>
                            </ul>
                        </div>

                        <div class="btn-wrap mt-40">
                            <a href="contact.php" class="th-btn">
                                Book a Service
                                <span class="after-bg"></span>
                            </a>

                            <div class="about-grid style2">
                                
                            </div>
                        </div>
                    </div>

                    <div class="img-box2 d-none d-xxl-block d-xl-block">
                        <div class="row">
                            <div class="col-xxl-6 col-md-6" data-cue="slideInUp">
                                <div class="img-box1">
                                    <div class="img1">
                                        <img src="assets/img/normal/about-thumb1-2.jpg" alt="Appliance Repair Service">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-md-6" data-cue="slideInUp">
                                <div class="img-box1">
                                    <div class="img1">
                                        <img src="assets/img/normal/about-thumb1-3.jpg" alt="Expert Technicians">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shape-mockup jump d-none d-xxl-block" style="bottom: 0%; left: 4%;">
                <img src="assets/img/shape/bg-shape2.png" alt="shape">
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>