<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Mashabela Investments</title>
    
    <link rel="apple-touch-icon" sizes="180x180" href="https://themazine.com/mr/conalz-html/assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://themazine.com/mr/conalz-html/assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://themazine.com/mr/conalz-html/assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="https://themazine.com/mr/conalz-html/assets/images/favicons/site.webmanifest">
    <meta name="description" content="Contact Mashabela Investments for integrated mining and logistics services.">
    
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
        /* Theme variables and base align with index.php */
        :root { --conalz-primary:#001f3f; --conalz-secondary:#001737; --conalz-dark-blue:#00122a; --conalz-light-blue-bg:#f3f6fa; }
        .thm-btn { background-color: var(--conalz-primary); }
        .thm-btn:hover { background-color: var(--conalz-secondary); }
        .main-menu__list > li.current > a, .main-menu__list > li:hover > a { color: var(--conalz-primary); }
        .main-header__top-address-list .icon span, .main-menu__call-icon span { color: var(--conalz-primary); }
        .section-title__tagline { color: var(--conalz-primary); }
        .section-title__title { color: var(--conalz-dark-blue); }

        /* Hero */
        .page-header { padding: 200px 0 160px; }
        .page-header__inner h2 { font-size: 64px; color: #fff; font-weight: 800; line-height: 1.1; }
        .page-header__subtitle { color: #e6ecf5; font-size: 22px; margin-top: 10px; }

        /* Sections */
        .section-pad { padding: 120px 0; }
        .bg-subtle { background: var(--conalz-light-blue-bg); }

        /* Contact Form & Info */
        .contact-form-wrapper { background: #fff; padding: 50px; border-radius: 8px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); }
        .contact-form-wrapper h2 { color: var(--conalz-dark-blue); font-weight: 700; margin-bottom: 30px; }
        .contact-form .form-control { height: 55px; border: 1px solid #e0e0e0; border-radius: 4px; }
        .contact-form textarea.form-control { height: 150px; }
        .contact-form .thm-btn { width: 100%; padding: 15px; }

        .contact-details-box { background: var(--conalz-dark-blue); color: #fff; padding: 40px; border-radius: 8px; height: 100%; }
        .contact-details-box h3 { color: #fff; font-weight: 700; margin-bottom: 25px; }
        .contact-details-list li { display: flex; align-items: flex-start; margin-bottom: 25px; }
        .contact-details-list li .icon { font-size: 24px; color: var(--conalz-primary); margin-right: 20px; margin-top: 5px; }
        .contact-details-list li .text h5 { font-size: 16px; color: #fff; font-weight: 600; margin-bottom: 2px; text-transform: uppercase; opacity: 0.8; }
        .contact-details-list li .text p, .contact-details-list li .text p a { font-size: 18px; color: #fff; margin: 0; }
        .contact-details-list li .text p a:hover { color: var(--conalz-primary); }

        /* Map */
        .map-section iframe { border:0; width: 100%; height: 450px; }

        /* Footer colors */
        .footer-widget__about-content p,
        .footer-widget__post-content p,
        .site-footer__bottom-text p { color:#ffffff !important; }
        .footer-widget__title { color:#ffffff !important; }
        .footer-widget__links-list li a,
        .footer-widget__contact-list .text p a,
        .footer-widget__post-content h5 a,
        .site-footer__bottom-text-two li a { color:#ffffff !important; }
        .footer-widget__links-list li a:hover,
        .footer-widget__contact-list .text p a:hover,
        .footer-widget__post-content h5 a:hover,
        .site-footer__bottom-text-two li a:hover { color:var(--conalz-primary) !important; }

        /* Mobile hero fit */
        @media (max-width: 991.98px) {
            .page-header { padding:160px 0 120px; }
            .page-header__inner h2 { font-size:48px; }
            .page-header__subtitle { font-size:18px; }
        }
        @media (max-width: 575.98px) {
            .page-header { padding:120px 0 80px; }
            .page-header__inner h2 { font-size:36px; line-height:1.15; }
            .page-header__subtitle { font-size:16px; }
        }
    </style>
    </head>
<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>
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
                                <div class="icon"><span class="icon-email-1"></span></div>
                                <div class="text"><p><a href="mailto:mashabelainvestment13@gmail.com">mashabelainvestment13@gmail.com</a></p></div>
                            </li>
                            <li>
                                <div class="icon"><span class="icon-clock"></span></div>
                                <div class="text"><p>Mon - Fri 8:00 - 6:30</p></div>
                            </li>
                        </ul>
                    </div>
                    <div class="main-header__top-right">
                        <div class="main-header__btn-box">
                            <a href="contact.php" class="thm-btn main-header__btn">Request a Quote</a>
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
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li class="dropdown">
                                        <a href="index.php#services">Services</a>
                                        <ul>
                                            <li><a href="index.php#services-mining">Mining-Centric Services</a></li>
                                            <li><a href="index.php#services-logistics">Integrated Logistics</a></li>
                                            <li><a href="index.php#services-value">Value-Added Services</a></li>
                                            <li><a href="index.php#services-support">Support Services</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li class="current"><a href="contact.php">Contact</a></li>
                                </ul>
                                </div>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__call-search">
                                <div class="main-menu__call">
                                    <div class="main-menu__call-icon"><span class="icon-phone"></span></div>
                                    <div class="main-menu__call-content">
                                        <span>Phone Number</span>
                                        <p><a href="tel:+27613370359">+27 61 337 0359</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url('https://images.unsplash.com/photo-1534536281715-e28d76689b4d?q=80&w=1920&auto=format&fit=crop');"></div>
            <div class="container">
                <div class="page-header__inner text-left">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li>Contact</li>
                    </ul>
                    <h2>Contact Us</h2>
                    <p class="page-header__subtitle">Get in touch with our team</p>
                </div>
            </div>
        </section>

        <section class="section-pad">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="contact-form-wrapper">
                            <div class="section-title">
                                <span class="section-title__tagline">Send a Message</span>
                                <h2 class="section-title__title">We're here to help</h2>
                            </div>
                            <form action="#" class="contact-form">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <textarea name="message" class="form-control" placeholder="Write your message" rows="5" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="thm-btn">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="contact-details-box">
                            <h3>Contact Information</h3>
                            <ul class="list-unstyled contact-details-list">
                                <li>
                                    <div class="icon"><i class="fas fa-phone-alt"></i></div>
                                    <div class="text">
                                        <h5>Phone</h5>
                                        <p><a href="tel:+27613370359">+27 61 337 0359</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-envelope"></i></div>
                                    <div class="text">
                                        <h5>Email</h5>
                                        <p><a href="mailto:mashabelainvestment13@gmail.com">mashabelainvestment13@gmail.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                    <div class="text">
                                        <h5>Address</h5>
                                        <p>Boksburg, Gauteng, South Africa</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-clock"></i></div>
                                    <div class="text">
                                        <h5>Working Hours</h5>
                                        <p>Mon - Fri: 8:00am - 6:30pm</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="map-section">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114588.29210290338!2d28.18684504335937!3d-26.171420500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e951973f5a3981d%3A0xde323348d3d8817a!2sBoksburg!5e0!3m2!1sen!2sza!4v1678886543210!5m2!1sen!2sza" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                        <a href="index.php"><img src="assets/logo.png" alt="Mashabela Investments Footer Logo"></a>
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
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="index.php#services">Services</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="contact.php">Contact</a></li>
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
                                        <div class="icon"><span class="icon-email-1"></span></div>
                                        <div class="text"><p><a href="mailto:mashabelainvestment13@gmail.com">mashabelainvestment13@gmail.com</a></p></div>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="icon-phone"></span></div>
                                        <div class="text"><p><a href="tel:+27613370359">+27 61 337 0359</a></p></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__post">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Recent Post</h3>
                                </div>
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
                                    <li><a href="about.php">Terms of Use</a></li>
                                    <li><a href="about.php">Privacy Policy</a></li>
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

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

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
    <script src="script.js"></script>
</body>
</html>