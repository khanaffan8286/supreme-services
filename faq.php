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
                            Frequently Asked Questions </h1>
                        <ul class="breadcumb-menu" data-cue="slideInUp" data-delay="300">
                            <li><a href="index.php">Home</a></li>
                            <li>FAQs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Faq Area
==============================-->
   <div class="overflow-hidden faq-section space overflow-hidden position-relative z-index-2">
    <div class="container">
        <div class="row gy-40 justify-content-center">
            <div class="col-xxl-5">
                <div class="faq-wrap">
                    <div class="title-area text-left mb-0">
                        <span class="sub-title2 style3 bg-gray-color" data-cue="slideInUp">FAQs</span>
                        <h2 class="sec-title style6 text-anim2" data-cue="slideInUp">
                            Appliance Repair <span>Questions</span><br> Answered
                        </h2>
                        <p class="sec-text2" data-cue="slideInUp">
                            Common questions about washing machine, refrigerator & microwave repair services.
                        </p>
                        <div class="btn-group" data-cue="slideInUp">
                            <a href="contact.php" class="th-btn">
                                Ask More Questions<span class="after-bg"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-7 col-lg-7">
                <div class="faq-wrap1">
                    <div class="accordion" id="faqAccordion">

                        <!-- FAQ 1 -->
                        <div class="accordion-card style4 style5" data-cue="slideInUp">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="true">
                                    Do you provide same-day appliance repair service?
                                </button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Yes, we offer same-day repair services for washing machines, refrigerators, and microwave ovens in Navi Mumbai and nearby areas, subject to availability.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-card style4 style5" data-cue="slideInUp">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2">
                                    Which areas do you serve in Navi Mumbai?
                                </button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        We serve Vashi, Kharghar, Nerul, Belapur, Sanpada, Kopar Khairane, Ghansoli, Airoli, and surrounding Mumbai areas.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-card style4 style5" data-cue="slideInUp">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3">
                                    What brands do you repair?
                                </button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        We repair all major brands including LG, Samsung, Whirlpool, IFB, Bosch, Godrej, Panasonic, Haier, and more.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-card style4 style5" data-cue="slideInUp">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4">
                                    Do you provide warranty on repairs?
                                </button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Yes, we provide a service warranty on repairs and replaced spare parts, depending on the job type.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-card style4 style5" data-cue="slideInUp">
                            <div class="accordion-header" id="collapse-item-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-5">
                                    What are your washing machine repair charges?
                                </button>
                            </div>
                            <div id="collapse-5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Charges depend on the issue and spare parts required. We provide transparent pricing after inspection with no hidden costs.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="accordion-card style4 style5" data-cue="slideInUp">
                            <div class="accordion-header" id="collapse-item-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-6">
                                    Do you repair refrigerators that are not cooling?
                                </button>
                            </div>
                            <div id="collapse-6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Yes, we fix cooling issues, gas leakage, compressor problems, and thermostat faults for single and double-door refrigerators.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 7 -->
                        <div class="accordion-card style4 style5" data-cue="slideInUp">
                            <div class="accordion-header" id="collapse-item-7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-7">
                                    Do you offer doorstep appliance repair?
                                </button>
                            </div>
                            <div id="collapse-7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Yes, all repairs are done at your home. No need to carry heavy appliances anywhere.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 8 -->
                        <div class="accordion-card style4 style5" data-cue="slideInUp">
                            <div class="accordion-header" id="collapse-item-8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-8">
                                    Do you repair microwave ovens that are not heating?
                                </button>
                            </div>
                            <div id="collapse-8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Yes, we repair heating issues, spark problems, turntable faults, and control panel issues in microwave ovens.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 9 -->
                        <div class="accordion-card style4 style5" data-cue="slideInUp">
                            <div class="accordion-header" id="collapse-item-9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-9">
                                    What payment methods do you accept?
                                </button>
                            </div>
                            <div id="collapse-9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        We accept cash, UPI, Google Pay, PhonePe, and bank transfers for customer convenience.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 10 -->
                        <div class="accordion-card style4 style5" data-cue="slideInUp">
                            <div class="accordion-header" id="collapse-item-10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-10">
                                    Are your technicians trained and experienced?
                                </button>
                            </div>
                            <div id="collapse-10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Yes, our technicians are experienced, background-verified, and trained to handle all major appliance brands.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 11 -->
                        <div class="accordion-card style4 style5" data-cue="slideInUp">
                            <div class="accordion-header" id="collapse-item-11">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-11">
                                    How can I book an appliance repair service?
                                </button>
                            </div>
                            <div id="collapse-11" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        You can call us directly, WhatsApp us, or book a service through our contact page for quick assistance.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shape-mockup d-none d-xxl-inline" data-bottom="0" data-left="2%">
        <img src="assets/img/normal/faq-thumb4-1.png" alt="img">
    </div>
</div>

   



<?php include 'footer.php'; ?>