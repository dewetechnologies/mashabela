<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mashabela Investments - Integrated Mining & Logistics Solutions</title>
    
    <link rel="apple-touch-icon" sizes="180x180" href="https://themazine.com/mr/conalz-html/assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://themazine.com/mr/conalz-html/assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://themazine.com/mr/conalz-html/assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="https://themazine.com/mr/conalz-html/assets/images/favicons/site.webmanifest">
    <meta name="description" content="Mashabela Investments - Integrated Mining and Logistics Services">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css">
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css">
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css">
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css">
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css">
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css">
    <link rel="stylesheet" href="assets/vendors/conalz-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css">
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css">
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css">
    <link rel="stylesheet" href="assets/vendors/polyglot-language-switcher/polyglot-language-switcher.css">
    
    <link rel="stylesheet" href="assets/css/conalz.css">
    <link rel="stylesheet" href="assets/css/conalz-responsive.css">

    <style>
        /* Mashabela Investments - Navy Theme Override */
        :root {
            --conalz-primary: #001f3f; /* Navy */
            --conalz-secondary: #001737; /* Darker navy */
            --conalz-dark-blue: #00122a; /* Deep navy for headings */
            --conalz-light-blue-bg: #f3f6fa; /* Subtle cool background */
        }

        /* Base Theme Elements */
        .thm-btn {
            background-color: var(--conalz-primary);
        }
        .thm-btn:hover {
            background-color: var(--conalz-secondary);
        }
        .main-menu__list > li.current > a, 
        .main-menu__list > li:hover > a {
            color: var(--conalz-primary);
        }
        .main-header__top-address-list .icon span,
        .main-menu__call-icon span {
            color: var(--conalz-primary);
        }
        .section-title__tagline {
            color: var(--conalz-primary);
        }
        .section-title__title {
            color: var(--conalz-dark-blue);
        }

        /* Hero Styles */
        .page-header {
            padding: 220px 0 200px; /* More space for a hero */
        }
        .page-header__inner h2 {
            font-size: 80px;
            color: #ffffff;
            line-height: 1.1em;
            font-weight: 800;
        }
        .page-header__subtitle {
            color: #fff; 
            font-size: 24px; 
            margin-top: 10px;
            font-weight: 400;
        }
        .page-header__slogan {
            color: #e6ecf5;
            font-size: 22px;
            margin-top: 8px;
        }
        .page-header__btn {
            margin-top: 30px;
            padding: 18px 45px;
            font-size: 16px;
        }

        /* New Services Section Styles */
        .services-one-section {
            padding: 120px 0 90px;
        }
        .service-card {
            background-color: #ffffff;
            padding: 40px 30px;
            border-radius: 8px;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0,0,0,0.07);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            border-bottom: 4px solid var(--conalz-primary);
        }
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,95,158,0.15);
        }
        .service-card__icon {
            font-size: 50px;
            color: var(--conalz-primary); /* Use the blue variable */
            margin-bottom: 25px;
            display: inline-block;
        }
        .service-card__title {
            font-size: 22px;
            font-weight: 700;
            color: var(--conalz-dark-blue);
            margin-bottom: 5px;
        }
        .service-card__subtitle {
            font-size: 15px;
            font-style: italic;
            color: #555;
            margin-bottom: 25px;
            display: block;
        }
        .service-card__list {
            list-style: none;
            padding-left: 0;
            text-align: left;
            margin-bottom: 0;
        }
        .service-card__list li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 12px;
            font-size: 15px;
            color: #333;
        }
        .service-card__list li:last-child {
            margin-bottom: 0;
        }
        .service-card__list li i {
            position: absolute;
            left: 0;
            top: 5px;
            color: var(--conalz-primary); /* Blue checkmark */
            font-size: 14px;
        }

        /* Footer text/link color rules */
        .footer-widget__about-content p,
        .footer-widget__post-content p,
        .site-footer__bottom-text p {
            color: #ffffff !important; /* Force paragraph text white */
        }
        
        .footer-widget__title {
            color: #ffffff !important; /* Force widget titles white */
        }
    
        /* Force all footer links to be white */
        .footer-widget__links-list li a,
        .footer-widget__contact-list .text p a,
        .footer-widget__post-content h5 a,
        .site-footer__bottom-text-two li a {
            color: #ffffff !important;
        }
        
        /* Keep the blue hover effect on links */
        .footer-widget__links-list li a:hover,
        .footer-widget__contact-list .text p a:hover,
        .footer-widget__post-content h5 a:hover,
        .site-footer__bottom-text-two li a:hover {
            color: var(--conalz-primary) !important;
        }
        /* Sections spacing */
        .section-pad {
            padding: 120px 0;
        }
        .bg-subtle {
            background: var(--conalz-light-blue-bg);
        }
        
        /* Mobile responsiveness for hero so text isn't cut off */
        @media (max-width: 991.98px) {
            .page-header {
                padding: 160px 0 120px;
            }
            .page-header__inner h2 {
                font-size: 48px;
            }
            .page-header__subtitle,
            .page-header__slogan {
                font-size: 18px;
            }
            .page-header__btn {
                padding: 16px 36px;
                font-size: 15px;
            }
        }
        @media (max-width: 575.98px) {
            .page-header {
                padding: 120px 0 80px;
            }
            .page-header__inner h2 {
                font-size: 36px;
                line-height: 1.15;
            }
            .page-header__subtitle,
            .page-header__slogan {
                font-size: 16px;
            }
            .page-header__btn {
                padding: 12px 28px;
                font-size: 14px;
            }
        }
    </style>
    </head>
<body class="custom-cursor">
    <div class="custom-cursor__cursor" style="transform: translate3d(calc(-50% + 725px), calc(-50% + 76px), 0px);"></div>
    <div class="custom-cursor__cursor-two" style="left: 725px; top: 76px;"></div>
    <div class="preloader" style="display: none;">
        <div class="preloader__image"></div>
    </div>
    <div class="page-wrapper">
        <header class="main-header clearfix">
            <div class="main-header__top">
                <div class="main-header__top-inner clearfix">
                    <div class="main-header__top-left">
                        <ul class="list-unstyled main-header__top-address-list">
                            <li>
                                <div class="icon">
                                    <span class="icon-email-1"></span>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:info@mashabelainvestments.co.za">info@mashabelainvestments.co.za</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-clock"></span>
                                </div>
                                <div class="text">
                                    <p>Mon - Fri 8:00 - 6:30</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="main-header__top-right">
                        <div class="main-header__btn-box">
                            <a href="contact.html" class="thm-btn main-header__btn">Request a Quote</a>
                        </div>
                        <div class="main-header__top-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu clearfix">
                <div class="main-menu__wrapper clearfix">
                    <div class="main-menu__wrapper-inner clearfix">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="index.php"><img src="assets/logo.png" alt="Mashabela Investments Logo"></a>
                            </div>
                            <div class="main-menu__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="dropdown current">
                                        <a href="index.php">Home </a>
                                    </li>
                                    <li>
                                        <a href="/about">About</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="/services">Services</a>
                                        <ul>
                                            <li><a href="#services-mining">Mining-Centric Services</a></li>
                                            <li><a href="#services-logistics">Integrated Logistics</a></li>
                                            <li><a href="#services-value">Value-Added Services</a></li>
                                            <li><a href="#services-support">Support Services</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/project-v-1.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="/contact">Contact</a>
                                    </li>
                                </ul>
                                </div>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__call-search">
                                <div class="main-menu__call">
                                    <div class="main-menu__call-icon">
                                        <span class="icon-phone"></span>
                                    </div>
                                    <div class="main-menu__call-content">
                                        <span>Phone Number</span>
                                        <p><a href="tel:08800115244">(088) 00-11-52-44</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content">
                <div class="main-menu__wrapper clearfix">
                    <div class="main-menu__wrapper-inner clearfix">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="index.php"><img src="assets/logo.png" alt="Mashabela Investments Logo"></a>
                            </div>
                            <div class="main-menu__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="dropdown current">
                                        <a href="index.php">Home </a>
                                    </li>
                                    <li>
                                        <a href="/about">About</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="/
                                        services">Services</a>
                                        <ul>
                                            <li><a href="#services-mining">Mining-Centric Services</a></li>
                                            <li><a href="#services-logistics">Integrated Logistics</a></li>
                                            <li><a href="#services-value">Value-Added Services</a></li>
                                            <li><a href="#services-support">Support Services</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="project-v-1.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url('https://brbgonesomewhereepic.com/wp-content/uploads/2022/08/johannesburg.jpg');"></div>
            <div class="page-header__shape-one float-bob-x-2"></div>
            <div class="page-header__shape-2 float-bob-y">
                <img src="https://themazine.com/mr/conalz-html/assets/images/shapes/page-header-shape-2.png" alt="">
            </div>
            <div class="page-header__shape-3 float-bob-x">
                <img src="https://themazine.com/mr/conalz-html/assets/images/shapes/page-header-shape-3.png" alt="">
            </div>
            <div class="page-header__shape-4 float-bob-y">
                <img src="https://themazine.com/mr/conalz-html/assets/images/shapes/page-header-shape-4.png" alt="">
            </div>
            <div class="container">
                <div class="page-header__inner text-left">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li>Welcome</li>
                    </ul>
                    <h2>Mashabela Investments</h2>
                    <p class="page-header__subtitle">Integrated Mining, Logistics & Supply Chain</p>
                    <p class="page-header__slogan">Integrating industries. Driven by growth.</p>
                    <a href="#services" class="thm-btn page-header__btn">Explore Our Services</a>
                </div>
            </div>
        </section>
        <section class="section-pad" id="sustainability">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Sustainability & ESG</span>
                    <h2 class="section-title__title">Committed to Responsible Growth</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h4 style="color: var(--conalz-dark-blue);">Our ESG Pillars</h4>
                        <ul class="service-card__list">
                            <li><i class="fas fa-check"></i> Environmental stewardship and impact mitigation</li>
                            <li><i class="fas fa-check"></i> Safety-first operations and workforce wellbeing</li>
                            <li><i class="fas fa-check"></i> Community engagement and local development</li>
                            <li><i class="fas fa-check"></i> Governance, compliance, and transparency</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="service-card">
                            <h3 class="service-card__title">Targets & Initiatives</h3>
                            <span class="service-card__subtitle">2025–2027 focus</span>
                            <p>We are investing in fuel-efficient assets, telemetry-driven optimization, and circular
                            waste practices while expanding safety training and audits across our operations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-pad bg-subtle" id="projects">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Projects & Case Studies</span>
                    <h2 class="section-title__title">Proven Delivery Across Sectors</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card">
                            <img class="img-fluid rounded mb-3" src="https://images.unsplash.com/photo-1568104466043-540f2d23127d?q=80&w=1200&auto=format&fit=crop" alt="Open-pit mining">
                            <h3 class="service-card__title">Mine-to-Port Program</h3>
                            <span class="service-card__subtitle">Bulk commodities</span>
                            <p>Coordinated extraction, processing, and transport to port, reducing demurrage and lead times.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card">
                            <img class="img-fluid rounded mb-3" src="https://images.unsplash.com/photo-1542451313056-b7c8e626645f?q=80&w=1200&auto=format&fit=crop" alt="Logistics hub">
                            <h3 class="service-card__title">Integrated Logistics Hub</h3>
                            <span class="service-card__subtitle">Multimodal network</span>
                            <p>Implemented warehousing and rail-road solutions to streamline regional distribution.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card">
                            <img class="img-fluid rounded mb-3" src="https://images.unsplash.com/photo-1502301103665-0b95cc738daf?q=80&w=1200&auto=format&fit=crop" alt="Sustainability">
                            <h3 class="service-card__title">Sustainable Fleet Upgrade</h3>
                            <span class="service-card__subtitle">Efficiency & HSE</span>
                            <p>Upgraded fleet telemetry and safety systems, improving utilization and reducing incidents.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-pad" id="why-us">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Why Choose Us</span>
                    <h2 class="section-title__title">Integrated, Strategic, and Future-Focused</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="service-card text-center">
                            <span class="service-card__icon"><i class="fas fa-project-diagram"></i></span>
                            <h3 class="service-card__title">Integrated Solutions</h3>
                            <span class="service-card__subtitle">End-to-end delivery</span>
                            <p>From the ground to delivery, we align mining with logistics and supply chain for seamless execution.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="service-card text-center">
                            <span class="service-card__icon"><i class="fas fa-handshake"></i></span>
                            <h3 class="service-card__title">Strategic Partnerships</h3>
                            <span class="service-card__subtitle">Long-term value</span>
                            <p>We collaborate with trusted partners to enhance capacity, reliability, and reach.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="service-card text-center">
                            <span class="service-card__icon"><i class="fas fa-cogs"></i></span>
                            <h3 class="service-card__title">Operational Excellence</h3>
                            <span class="service-card__subtitle">Efficiency & safety</span>
                            <p>We prioritize performance with rigorous safety standards and continuous improvement.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="service-card text-center">
                            <span class="service-card__icon"><i class="fas fa-seedling"></i></span>
                            <h3 class="service-card__title">Future-Focused</h3>
                            <span class="service-card__subtitle">Driven by growth</span>
                            <p>Investing in technology and sustainability to build long-term, resilient value chains.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-pad bg-subtle" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <span class="section-title__tagline">About Us</span>
                            <h2 class="section-title__title">Driven by growth.</h2>
                        </div>
                        <p>
                            Mashabela Investments is a diversified investment holding company
                            delivering integrated solutions across mining, logistics, and supply
                            chain management. We connect the source to the market through
                            operational excellence and strategic partnerships.
                        </p>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h5 style="color: var(--conalz-dark-blue);">Our Mission</h5>
                                <p>To deliver integrated, end-to-end industrial solutions that create
                                sustainable value across Africa.</p>
                            </div>
                            <div class="col-md-6">
                                <h5 style="color: var(--conalz-dark-blue);">Our Vision</h5>
                                <p>To build industrial capacity and momentum, connecting value chains
                                from resource to delivery.</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <h5 style="color: var(--conalz-dark-blue);">Core Values</h5>
                                <ul class="service-card__list">
                                    <li><i class="fas fa-check"></i> Integrity & Safety</li>
                                    <li><i class="fas fa-check"></i> Operational Excellence</li>
                                    <li><i class="fas fa-check"></i> Sustainability & Community</li>
                                    <li><i class="fas fa-check"></i> Innovation & Partnership</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <img class="img-fluid rounded shadow" src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?q=80&w=1200&auto=format&fit=crop" alt="Industrial operations">
                    </div>
                </div>
            </div>
        </section>
        <section id="services" class="services-one-section">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">What We Do</span>
                    <h2 class="section-title__title">Our Integrated Services</h2>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="100ms" id="services-mining">
                        <div class="service-card text-center">
                            <span class="service-card__icon"><i class="fas fa-gem"></i></span>
                            <h3 class="service-card__title">Mining-Centric Services</h3>
                            <span class="service-card__subtitle">(The "Source")</span>
                            <ul class="service-card__list">
                                <li><i class="fas fa-check"></i> Exploration and Geological Services</li>
                                <li><i class="fas fa-check"></i> Mine Planning and Development</li>
                                <li><i class="fas fa-check"></i> Mining Operations (Contract Mining)</li>
                                <li><i class="fas fa-check"></i> Mineral Processing and Beneficiation</li>
                                <li><i class="fas fa-check"></i> Feasibility Studies & Resource Estimation</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="200ms" id="services-logistics">
                        <div class="service-card text-center">
                            <span class="service-card__icon"><i class="fas fa-truck-moving"></i></span>
                            <h3 class="service-card__title">Integrated Logistics Services</h3>
                            <span class="service-card__subtitle">(The "Supply Chain")</span>
                            <ul class="service-card__list">
                                <li><i class="fas fa-check"></i> Heavy Haulage & Specialized Transport</li>
                                <li><i class="fas fa-check"></i> Multimodal Transport (Rail, Marine, Road)</li>
                                <li><i class="fas fa-check"></i> Port and Terminal Management</li>
                                <li><i class="fas fa-check"></i> End-to-End Supply Chain Management</li>
                                <li><i class="fas fa-check"></i> Procurement and Inbound Logistics</li>
                                <li><i class="fas fa-check"></i> Customs Clearance & Documentation</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="300ms" id="services-value">
                        <div class="service-card text-center">
                            <span class="service-card__icon"><i class="fas fa-sync-alt"></i></span>
                            <h3 class="service-card__title">Integrated Value-Added Services</h3>
                            <span class="service-card__subtitle">(The "Synergy")</span>
                            <ul class="service-card__list">
                                <li><i class="fas fa-check"></i> Mine-to-Port / Mine-to-Smelter Solutions</li>
                                <li><i class="fas fa-check"></i> Stockpile and Inventory Management</li>
                                <li><i class="fas fa-check"></i> Product Blending Services</li>
                                <li><i class="fas fa-check"></i> Logistics for Mine Closures & Rehabilitation</li>
                                <li><i class="fas fa-check"></i> Integrated Technology & Fleet Management</li>
                                <li><i class="fas fa-check"></i> Dangerous Goods & Hazardous Materials</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="400ms" id="services-support">
                        <div class="service-card text-center">
                            <span class="service-card__icon"><i class="fas fa-tools"></i></span>
                            <h3 class="service-card__title">Support and Ancillary Services</h3>
                            <span class="service-card__subtitle">(Enabling Operations)</span>
                            <ul class="service-card__list">
                                <li><i class="fas fa-check"></i> Equipment Maintenance & Workshops</li>
                                <li><i class="fas fa-check"></i> Skilled Workforce Solutions (FIFO)</li>
                                <li><i class="fas fa-check"></i> Environmental and Compliance Services</li>
                                <li><i class="fas fa-check"></i> Health, Safety, and Environmental (HSE)</li>
                                <li><i class="fas fa-check"></i> Consulting and Supply Chain Audits</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="newsletter-one">
            <div class="container">
                <div class="newsletter-one__inner">
                    <div class="newsletter-one__left">
                        <div class="newsletter-one__title">
                            <h4>Newsletter</h4>
                            <p>Subscribe us & get news, articles to your inbox.</p>
                        </div>
                        <div class="newsletter-one__email-box">
                            <form class="newsletter-one__form">
                                <div class="newsletter-one__form-input-box">
                                    <input type="email" placeholder="Email Address" name="email">
                                    <button type="submit" class="newsletter-one__newsletter-btn"><img src="https://images.icon-icons.com/614/PNG/512/email-envelope-outline-shape-with-rounded-corners_icon-icons.com_56530.png" alt="Send" style="width: 18px; height: 18px; object-fit: contain;"></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="newsletter-one__right">
                        <a href="#services" class="thm-btn newsletter-one__button">More Services</a>
                    </div>
                </div>
            </div>
        </section>
        <footer class="site-footer">
            <div class="site-footer-bg" style="background-image: url(https://themazine.com/mr/conalz-html/assets/images/backgrounds/site-footer-bg.jpg);"></div>
            <div class="site-footer__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__about-logo-box">
                                    <div class="footer-widget__about-logo">
                                        <a href="#">
                                            <img src="assets/logo.png" alt="Mashabela Investments Footer Logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="footer-widget__about-content">
                                    <p>Your trusted partner in integrated <br> mining and logistics solutions, <br> from source to destination.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__links">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Explore</h3>
                                </div>
                                <ul class="footer-widget__links-list list-unstyled">
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="project-v-1.html">Blog</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__contact">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Contact</h3>
                                </div>
                                <ul class="footer-widget__contact-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email-1"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:info@mashabelainvestments.co.za">info@mashabelainvestments.co.za</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-phone"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:08800115244">(088) 00-11-52-44</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__post">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Recent Post</h3>
                                </div>
                                <ul class="footer-widget__post-list list-unstyled">
                                    <li>
                                        <div class="footer-widget__post-img">
                                            <img src="https://themazine.com/mr/conalz-html/assets/images/blog/footer-widget-post-img-1.jpg" alt="">
                                        </div>
                                        <div class="footer-widget__post-content">
                                            <p>20 May, 2022</p>
                                            <h5><a href="blog-details.html">What is digital
                                                    transformation?</a></h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget__post-img">
                                            <img src="https://themazine.com/mr/conalz-html/assets/images/blog/footer-widget-post-img-2.jpg" alt="">
                                        </div>
                                        <div class="footer-widget__post-content">
                                            <p>20 May, 2022</p>
                                            <h5><a href="blog-details.html">What is digital
                                                    transformation?</a></h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <div class="site-footer__bottom-text">
                                    <p>Copyright © 2025 Mashabela Investments. All Rights Reserved.</p>
                                </div>
                                <ul class="site-footer__bottom-text-two list-unstyled">
                                    <li><a href="/about">Terms of Use</a></li>
                                    <li><a href="/about">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        </div>

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="index.php" aria-label="logo image"><img src="assets/logo.png" width="143" alt="Mashabela Investments Logo"></a>
            </div>
            <div class="mobile-nav__container"></div> 
        </div>
    </div>

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label>
                <input type="text" id="search" placeholder="Search Here...">
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-search"></i>
                </button>
            </form>
        </div>
    </div>

    <a href="/" data-target="html" class="scroll-to-target scroll-to-top" style="display: none;"><i class="fa fa-angle-up"></i></a>

    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="assets/vendors/polyglot-language-switcher/jquery.polyglot.language.switcher.js"></script>
    
    <script src="assets/js/conalz.js"></script>
</body>
</html>