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
                            404(Error Page) </h1>
                        <ul class="breadcumb-menu" data-cue="slideInUp" data-delay="300">
                            <li><a href="index.php">Home</a></li>
                            <li>404</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Error Area 
==============================-->
    <section class="space position-relative overflow-hidden z-index-3">
        <div class="container">
            <div class="error-page-wrap">
                <div class="error-img">
                    <img src="assets/img/normal/error.png" alt="404 image">
                </div>
                <div class="error-content">
                    <h2 class="page-title fw-bold mt-n2 mb-20">Opp’s That Page Can’t be Found</h2>
                    <p class="error-text mb-30">It looks like nothing was found at this location. Maybe try one of
                        the links below or a search?</p>
                    <a href="index.php" class="th-btn">
                        Back To Home
                        <span class="after-bg"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="shape-mockup d-none d-xxl-inline" style="top: 10%; left: 4%;">
            <img src="assets/img/shape/bg-shape1.png" alt="img">
        </div>
        <div class="shape-mockup d-none d-xxl-inline" style="bottom: 0px; right:0%;">
            <img src="assets/img/normal/faq-thumb1-1.png" alt="img">
        </div>
    </section>
    



<?php include 'footer.php'; ?>